<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/1
 * Time: 20:04
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\JsonRpc;


use Hyperf\RpcClient\AbstractServiceClient;

class CaculatorService  extends AbstractServiceClient implements CalculatorServiceInterface
{
    /**
     * 定义对应服务提供者的服务名称
     * @var string
     */
    protected $serviceName = 'CaculatorService';

    /**
     * 定义对应服务提供者的服务协议
     * @var string
     */
    protected $protocol = 'jsonrpc-http';

    /**
     * 加法计算
     * @param int $a
     * @param int $b
     * @return int
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/7/1 20:10
     */
    public function caculate(int $a, int $b): int
    {
        return $this->__request(__FUNCTION__, compact('a', 'b'));
    }

    /**
     * 获取用户信息
     * @param int $id
     * @param string $name
     * @return int
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/7/1 20:09
     */
    public function getInfo(int $id, string $name):int
    {
        return $this->__request(__FUNCTION__, compact('id', 'name'));
    }
}