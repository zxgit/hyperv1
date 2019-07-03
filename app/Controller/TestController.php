<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace App\Controller;


use App\JsonRpc\CaculatorService;
use App\JsonRpc\ConsumerService;
use App\Service\UserInterface;
use Guzzle\Http\Message\RequestInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Paginator\Paginator;
use Psr\Container\ContainerInterface;
use Swoole\Http\Request;

/**
 * @AutoController()
 */
class TestController extends Controller
{
    /**
     * @Inject()
     * @var UserInterface
     */
    private  $userService;

    /**
     * @Inject()
     * @var ConsumerService
     */
    private $ConsumerService;

    public function index()
    {
        $user   = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello world.. {$user}.",
        ];
    }

    /**
     * 获取用户信息
     * @return array
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/6/26 16:17
     */
    public function getUser()
    {
        return [
            'user_id'=>$this->userService->getInfoById($this->request->input('user_id','1'))
        ];
    }

    public function eventTest()
    {
       return $this->userService->eventTest($this->request->input('id'),$this->request->input('name','zxzx'));
    }

    public function eventTestv2()
    {
        return $this->userService->eventTestv2($this->request->input('id'),$this->request->input('name','zxzx'));
    }

    /**
     * 分页器-但是这种分页不安逸
     * @return Paginator
     * @author zhangx
     * @email 254673218@qq.com
     * @version 1.5.1.0
     * @datetime 2019/7/2 10:49
     */
    public function pageTest()
    {
        $currentPage = $this->request->input('page', 1);
        $perPage = 2;
        $users = [
            ['id' => 1, 'name' => 'Tom'],
            ['id' => 2, 'name' => 'Sam'],
            ['id' => 3, 'name' => 'Tim'],
            ['id' => 4, 'name' => 'Joe'],
            ['id' => 5, 'name' => 'zhangx'],
        ];
        return new Paginator($users, $perPage, $currentPage);
    }


    public function caculate()
    {
        return $this->ConsumerService->caculate($this->request->input('a'),$this->request->input('b'));
    }

    public function getInfo()
    {
        return $this->ConsumerService->getInfo($this->request->input('id'),$this->request->input('name'));
    }
}
