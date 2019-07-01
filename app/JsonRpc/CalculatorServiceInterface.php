<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/1
 * Time: 15:53
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\JsonRpc;


interface CalculatorServiceInterface
{
    // 实现一个加法方法，这里简单的认为参数都是 int 类型
    public function caculate(int $a, int $b):int;
    public function getInfo(int $id, string $name):int;
}