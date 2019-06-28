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

namespace Hyperf\JsonRpc;

use Hyperf\Rpc\ProtocolManager;
use Hyperf\RpcServer\RequestDispatcher;
use Psr\Container\ContainerInterface;

class HttpServerFactory
{
    protected $coreMiddleware = HttpCoreMiddleware::class;

    public function __invoke(ContainerInterface $container): HttpServer
    {
        $dispatcher = $container->get(RequestDispatcher::class);
        $protocolManager = $container->get(ProtocolManager::class);
        return new HttpServer('jsonrpc-http', $this->coreMiddleware, $container, $dispatcher, $protocolManager);
    }
}
