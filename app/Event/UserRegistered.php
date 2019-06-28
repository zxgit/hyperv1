<?php
/**
 * Created by PhpStorm.
 * Date: 2019/6/26
 * Time: 18:23
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */
namespace App\Event;

class UserRegistered
{
    public $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
}