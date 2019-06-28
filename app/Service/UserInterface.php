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

namespace App\Service;

interface UserInterface
{
    public function getInfoById(int $id);
    public function eventTest(int $id,string $name);
    public function eventTestv2(int $id,string $name);
}
