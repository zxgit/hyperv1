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

namespace HyperfTest\Utils;

use HyperfTest\Utils\Exception\RetryException;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class FunctionTest extends TestCase
{
    public function testCall()
    {
        $result = call(function ($i) {
            return ++$i;
        }, [1]);

        $this->assertSame(2, $result);
    }

    public function testDataGet()
    {
        $data = ['id' => 1];
        $result = data_get($data, 'id');
        $this->assertSame(1, $result);
        $result = data_get($data, 'id2', 2);
        $this->assertSame(2, $result);

        $obj = new \stdClass();
        $obj->name = 'hyperf';
        $data = ['id' => 2, 'obj' => $obj];
        $result = data_get($data, 'obj');
        $this->assertSame($obj, $result);
        $result = data_get($data, 'obj.name');
        $this->assertSame('hyperf', $result);
    }

    /**
     * @expectedException \HyperfTest\Utils\Exception\RetryException
     */
    public function testRetry()
    {
        $result = 0;
        try {
            retry(2, function () use (&$result) {
                ++$result;
                throw new RetryException('Retry Test');
            });
        } finally {
            $this->assertSame(2, $result);
        }
    }

    /**
     * @expectedException \HyperfTest\Utils\Exception\RetryException
     */
    public function testRetryErrorTimes()
    {
        $result = 0;
        try {
            retry(0, function () use (&$result) {
                ++$result;
                throw new RetryException('Retry Test');
            });
        } finally {
            $this->assertSame(1, $result);
        }
    }
}
