<?php
/**
 * Created by PhpStorm.
 * Date: 2019/7/4
 * Time: 16:20
 * User: zhangx
 * Email:254673218@qq.com
 * Version:1.5.1.0
 */

namespace App\Controller;


use Hyperf\Contract\OnCloseInterface;
use Hyperf\Contract\OnMessageInterface;
use Hyperf\Contract\OnOpenInterface;
use Swoole\Http\Request;
use Swoole\Server;
use Swoole\WebSocket\Frame;

class WebSocketController implements OnMessageInterface, OnOpenInterface, OnCloseInterface
{
    public function onMessage(Server $server, Frame $frame): void
    {
        $request = json_decode($frame->data);
        if($request->sendUserId == 2) {
            $server->push($frame->fd, json_encode(['content'=>"钉钉松"]));
        } else {
            $server->push($frame->fd, json_encode(['content'=>"松松丁"]));
        }
    }

    public function onClose(Server $server, int $fd, int $reactorId): void
    {
        var_dump('closed');
    }

    public function onOpen(Server $server, Request $request): void
    {
        $server->push($request->fd, $request->post);
    }
}