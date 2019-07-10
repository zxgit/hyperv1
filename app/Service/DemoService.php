<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/10
 * Time: 14:24
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\Service;


use App\Controller\ExampleJob;
use Hyperf\AsyncQueue\Driver\DriverFactory;

class DemoService
{
    /**
     * @var DriverInterface
     */
    protected $driver;

    public function __construct(DriverFactory $driverFactory)
    {
        $this->driver = $driverFactory->get('default');
    }

    public function publish()
    {
        // 发布消息
        // 这里的 ExampleJob 是直接实例化出来的，所以不能在 Job 内使用 @Inject @Value 等注解及注解所对应功能的其它使用方式
        return $this->driver->push(new ExampleJob());
    }

    public function delay()
    {
        // 发布延迟消息
        // 第二个参数 $delay 即为延迟的秒数
        return $this->driver->delay(new ExampleJob(), 60);
    }
}