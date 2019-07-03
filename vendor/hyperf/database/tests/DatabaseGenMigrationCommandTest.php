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

use Hyperf\Database\Commands\Migrations\GenMigrateCommand;
use Hyperf\Database\Migrations\MigrationCreator;
use Mockery;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\NullOutput;

/**
 * @internal
 * @coversNothing
 */
class DatabaseGenMigrationCommandTest extends TestCase
{
    use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    protected function setUp()
    {
        parent::setUp();
        ! defined('BASE_PATH') && define('BASE_PATH', __DIR__);
    }

    protected function tearDown(): void
    {
        Mockery::close();
    }

    public function testBasicCreateGivesCreatorProperArguments()
    {
        $command = new GenMigrateCommand(
            $creator = Mockery::mock(MigrationCreator::class)
        );
        $creator->shouldReceive('create')->once()->with('create_foo', BASE_PATH . DIRECTORY_SEPARATOR . 'migrations', 'foo', true)->andReturn('');

        $this->runCommand($command, ['name' => 'create_foo']);
    }

    public function testBasicCreateGivesCreatorProperArgumentsWhenNameIsStudlyCase()
    {
        $command = new GenMigrateCommand(
            $creator = Mockery::mock(MigrationCreator::class)
        );
        $creator->shouldReceive('create')->once()->with('create_foo', BASE_PATH . DIRECTORY_SEPARATOR . 'migrations', 'foo', true)->andReturn('');

        $this->runCommand($command, ['name' => 'CreateFoo']);
    }

    public function testBasicCreateGivesCreatorProperArgumentsWhenTableIsSet()
    {
        $command = new GenMigrateCommand(
            $creator = Mockery::mock(MigrationCreator::class)
        );
        $creator->shouldReceive('create')->once()->with('create_foo', BASE_PATH . DIRECTORY_SEPARATOR . 'migrations', 'users', true)->andReturn('');

        $this->runCommand($command, ['name' => 'create_foo', '--create' => 'users']);
    }

    public function testBasicCreateGivesCreatorProperArgumentsWhenCreateTablePatternIsFound()
    {
        $command = new GenMigrateCommand(
            $creator = Mockery::mock(MigrationCreator::class)
        );
        $creator->shouldReceive('create')->once()->with('create_users_table', BASE_PATH . DIRECTORY_SEPARATOR . 'migrations', 'users', true)->andReturn('');

        $this->runCommand($command, ['name' => 'create_users_table']);
    }

    public function testCanSpecifyPathToCreateMigrationsIn()
    {
        $command = new GenMigrateCommand(
            $creator = Mockery::mock(MigrationCreator::class)
        );
        $creator->shouldReceive('create')->once()->with('create_foo', BASE_PATH . '/vendor/hyperf/migrations', 'users', true)->andReturn('');
        $this->runCommand($command, ['name' => 'create_foo', '--path' => 'vendor/hyperf/migrations', '--create' => 'users']);
    }

    protected function runCommand($command, $input = [])
    {
        return $command->run(new ArrayInput($input), new NullOutput());
    }
}
