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

namespace HyperfTest\Elasticsearch;

use Elasticsearch\ClientBuilder;
use Hyperf\Elasticsearch\ClientBuilderFactory;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class ClientFactoryTest extends TestCase
{
    public function testClientBuilderFactoryCreate()
    {
        $clientFactory = new ClientBuilderFactory();

        $client = $clientFactory->create();

        $this->assertInstanceOf(ClientBuilder::class, $client);
    }
}
