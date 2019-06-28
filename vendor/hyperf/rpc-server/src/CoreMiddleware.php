<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\RpcServer;

use Closure;
use Hyperf\HttpMessage\Stream\SwooleStream;
use Hyperf\RpcServer\Router\DispatcherFactory;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * {@inheritdoc}
 */
class CoreMiddleware extends \Hyperf\HttpServer\CoreMiddleware
{
    public function __construct(ContainerInterface $container, string $serverName)
    {
        $this->container = $container;
        $factory = $container->get(DispatcherFactory::class);
        $this->dispatcher = $factory->getDispatcher($serverName);
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return parent::process($request, $handler);
    }

    protected function handleFound(array $routes, ServerRequestInterface $request)
    {
        if ($routes[1] instanceof Closure) {
            $response = call($routes[1]);
        } else {
            [$controller, $action] = $this->prepareHandler($routes[1]);
            $controllerInstance = $this->container->get($controller);
            if (! method_exists($controller, $action)) {
                // Route found, but the handler does not exist.
                return $this->response()->withStatus(500)->withBody(new SwooleStream('Method of class does not exist.'));
            }
            $parameters = $this->parseParameters($controller, $action, $request->getParsedBody());
            $response = $controllerInstance->{$action}(...$parameters);
        }
        return $response;
    }
}
