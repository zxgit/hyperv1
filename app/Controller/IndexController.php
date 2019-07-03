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

use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 */
class IndexController extends Controller
{
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello world111.. {$user}.",
            'code' => 0,
            'data'=>[
                'id'=>1,
                'name'=>'测试',
                'message'=>'Hello Hyperf222.'
            ]
        ];
    }

    public function bb()
    {
        return [
        'code' => 0,
        'data'=>[
            'id'=>1,
            'name'=>'测试222',
            'message'=>'Hello Hyperf222333.'
        ]
    ];

    }
}
