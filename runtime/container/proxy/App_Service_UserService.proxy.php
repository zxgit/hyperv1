<?php

declare (strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */
namespace App\Service;

use App\Event\UserRegistered;
use App\Model\User;
use Hyperf\Cache\Annotation\Cacheable;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Utils\Coroutine;
use phpDocumentor\Reflection\Types\Object_;
use Psr\EventDispatcher\EventDispatcherInterface;
use Swoole\Swoole;
class UserService_03a1873dc7b8c997de96aa0c8b2e6566 extends UserService implements UserInterface
{
    use \Hyperf\Di\Aop\ProxyTrait;
    public function getInfoById($id)
    {
        $__function__ = __FUNCTION__;
        $__method__ = __METHOD__;
        return self::__proxyCall(UserService::class, __FUNCTION__, self::getParamsMap(UserService::class, __FUNCTION__, func_get_args()), function ($id) use($__function__, $__method__) {
            //设置最大协程数
            /*\Swoole\Coroutine::set([
                  'max_coroutine' => 10,
              ]);*/
            /*co(function () {
                  $channel = new \Swoole\Coroutine\Channel();
                  co(function () use ($channel) {
                      sleep(1);
                      $channel->push(['当前协程id:'=>Coroutine::id()]);
                  });
                  $data = $channel->pop();
                  var_dump($data);
              });*/
            //协程嵌套执行
            /*co(function (){
                        var_dump(Coroutine::id());
                        co(function (){
                            sleep(1);
                            var_dump(Coroutine::id());
                        });
                    });
                    co(function (){
                        var_dump(Coroutine::id());
                    });
            */
            return ['user_id' => $id, 'user_name' => "你最🐂🐮🐂！"];
        });
    }
    /**
     * @Inject()
     * @var EventDispatcherInterface
     */
    private $eventDispatcher;
    /**
     * @param int $id
     * @param string $name
     * @return bool
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/6/27 16:22
     * @Cacheable(prefix="user",ttl=60,value="_#{id}")
     */
    public function eventTest($id, $name)
    {
        $__function__ = __FUNCTION__;
        $__method__ = __METHOD__;
        return self::__proxyCall(UserService::class, __FUNCTION__, self::getParamsMap(UserService::class, __FUNCTION__, func_get_args()), function ($id, $name) use($__function__, $__method__) {
            $user = new User();
            $user->setId($id);
            $user->setName($name);
            return ['user_id' => $id, 'user_name' => "你最🐂🐮🐂！{$name}"];
            return $user->toArray();
            //调度器触发事件
            //$this->eventDispatcher->dispatch(new UserRegistered($user));
        });
    }
    /**
     * @param int $id
     * @param string $name
     * @return bool
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/6/27 16:22
     * @Cacheable(prefix="user2",ttl=60,value="_#{id}")
     */
    public function eventTestv2($id, $name)
    {
        $__function__ = __FUNCTION__;
        $__method__ = __METHOD__;
        return self::__proxyCall(UserService::class, __FUNCTION__, self::getParamsMap(UserService::class, __FUNCTION__, func_get_args()), function ($id, $name) use($__function__, $__method__) {
            $user = new User();
            $user->setId($id);
            $user->setName($name);
            return ['user_id' => $id, 'user_name' => "你最🐂🐮🐂！{$name}"];
            return $user->toArray();
            //调度器触发事件
            //$this->eventDispatcher->dispatch(new UserRegistered($user));
        });
    }
}