<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/3
 * Time: 15:27
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\Controller;


use Grpc\HiReply;
use Grpc\HiUser;
use Hyperf\GrpcClient\BaseClient;

class HiClient extends BaseClient
{
    public function sayHello(HiUser $argument)
    {
        return $this->simpleRequest(
            '/grpc.hi/sayHello',
            $argument,
            [HiReply::class, 'decode']
        );
    }

}