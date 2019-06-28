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

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Rpc\ProtocolManager;
use Hyperf\RpcServer\RequestDispatcher;
use Psr\Container\ContainerInterface;

class TcpServerFactory
{
    protected $coreMiddleware = CoreMiddleware::class;

    public function __invoke(ContainerInterface $container): TcpServer
    {
        $dispatcher = $container->get(RequestDispatcher::class);
        $logger = $container->get(StdoutLoggerInterface::class);
        $protocolManager = $container->get(ProtocolManager::class);
        return new TcpServer('jsonrpc', $this->coreMiddleware, $container, $dispatcher, $logger, $protocolManager);
    }
}
