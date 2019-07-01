<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/1
 * Time: 15:52
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\JsonRpc;
use Hyperf\RpcServer\Annotation\RpcService;

class CaculatorService implements CalculatorServiceInterface
{
    /**
     * 实现一个加法方法，这里简单的认为参数都是 int 类型
     * @param int $a
     * @param int $b
     * @return int
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/7/1 15:56
     * @RpcService(name="CaculatorService", protocol="jsonrpc-http", server="jsonrpc-http","publishTo"="consul")
     */
    public function caculate(int $a, int $b):int
    {
        return $a + $b;
    }

    /**
     * 返回请求数据
     * @param int $id
     * @param string $name
     * @return int
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/7/1 15:56
     */
    public function getInfo(int $id, string $name):int
    {
        return ['id'=>$id,'name'=>$name];
    }
}