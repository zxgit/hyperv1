<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/3
 * Time: 15:25
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 */
class GrpcController extends Controller
{
    public function hello()
    {
        $client = new HiClient('127.0.0.1:9503', [
            'credentials' => null,
        ]);

        $request = new \Grpc\HiUser();
        $request->setName('hyperf');
        $request->setSex(1);

        /**
         * @var \Grpc\HiReply $reply
         */
        list($reply, $status) = $client->sayHello($request);
        print_r($reply);
        $message = $reply->getMessage();
        $user = $reply->getUser();

        $client->close();
        var_dump(memory_get_usage(true));
        return $message;
    }
}