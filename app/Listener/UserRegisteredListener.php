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

namespace App\Listener;

use App\Event\UserRegistered;
use Hyperf\Event\Annotation\Listener;
use Hyperf\Event\Contract\ListenerInterface;

/**
 * @Listener
 */
class UserRegisteredListener implements ListenerInterface
{

    public function listen(): array
    {
        return [
            UserRegistered::class,
        ];
    }

    public function process(object $event)
    {
        print_r($event);
        print_r($event->user->getId());
        print_r($event->user->getName());
    }
}
