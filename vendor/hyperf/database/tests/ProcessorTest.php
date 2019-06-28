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

namespace HyperfTest\Database;

use Hyperf\Database\ConnectionInterface;
use Hyperf\Database\Query\Builder;
use Hyperf\Database\Query\Processors\Processor;
use Mockery;
use PDO;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ProcessorTest extends TestCase
{
    public function tearDown()
    {
        Mockery::close();
    }

    public function testInsertGetIdProcessing()
    {
        $pdo = $this->createMock(ProcessorTestPDOStub::class);
        $pdo->expects($this->once())->method('lastInsertId')->with($this->equalTo('id'))->will($this->returnValue('1'));
        $connection = Mockery::mock(ConnectionInterface::class);
        $connection->shouldReceive('insert')->once()->with('sql', ['foo']);
        $connection->shouldReceive('getPdo')->once()->andReturn($pdo);
        $builder = Mockery::mock(Builder::class);
        $builder->shouldReceive('getConnection')->andReturn($connection);
        $processor = new Processor();
        $result = $processor->processInsertGetId($builder, 'sql', ['foo'], 'id');
        $this->assertSame(1, $result);
    }
}

class ProcessorTestPDOStub extends PDO
{
    public function __construct()
    {
    }

    public function lastInsertId($sequence = null)
    {
    }
}
