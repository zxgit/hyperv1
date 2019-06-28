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

namespace HyperfTest\LoadBalancer;

use Hyperf\LoadBalancer\Node;
use Hyperf\LoadBalancer\RoundRobin;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class RoundRobinTest extends TestCase
{
    public function testRandom()
    {
        $nodes = [
            $node1 = new Node('127.0.0.1', 80),
            $node2 = new Node('127.0.0.2', 81),
            $node3 = new Node('127.0.0.3', 82),
        ];
        $roundRobin = new RoundRobin($nodes);
        $this->assertSame($roundRobin->select(), $node1);
        $this->assertSame($roundRobin->select(), $node2);
        $this->assertSame($roundRobin->select(), $node3);
        $this->assertSame($roundRobin->select(), $node1);
    }
}
