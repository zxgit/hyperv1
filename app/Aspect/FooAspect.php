<?php
/**
 * Created by PhpStorm.
 * Date: 2019/6/27
 * Time: 14:38
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */
namespace App\Aspect;

use App\Service\UserService;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

/**
 * @Aspect()
 * @package App\Aspect
 */
class FooAspect extends \Hyperf\Di\Aop\AbstractAspect
{
    // 要切入的类，可以多个，亦可通过 :: 标识到具体的某个方法，通过 * 可以模糊匹配
    public $classes = [
        'App\Service\UserService::getInfoById'
    ];

    // 要切入的注解，具体切入的还是使用了这些注解的类，仅可切入类注解和类方法注解
    public $annotations = [
        UserService::class,
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        // 切面切入后，执行对应的方法会由此来负责
        // $proceedingJoinPoint 为连接点，通过该类的 process() 方法调用原方法并获得结果
        // 在调用前进行某些处理
        $result = $proceedingJoinPoint->process();
        // 在调用后进行某些处理
        return $result;
    }
}