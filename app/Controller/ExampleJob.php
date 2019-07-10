<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/10
 * Time: 14:23
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\Controller;


use Hyperf\AsyncQueue\Job;

class ExampleJob extends Job
{
    public function handle()
    {
        var_dump('hello world');
    }
}