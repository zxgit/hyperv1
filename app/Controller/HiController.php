<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/3
 * Time: 16:38
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\Controller;


use Grpc\HiReply;
use Grpc\HiUser;

class HiController
{
    public function sayHello()
    {

        $hiReply = new HiReply();
        $hiReply->setMessage('你好，你成功了');

        //设置用户信息
        $hiUser = new  HiUser();
        $hiUser->setName('zhangx');
        $hiUser->setSex(1);
        $hiReply->setUser($hiUser);
        return $hiReply;
    }
}