<?php

namespace Picqer\Tests;

use PHPUnit\Framework\TestCase;
use Picqer\Financials\Exact\Item;
use Picqer\Financials\Exact\Query\Resultset;
use Picqer\Tests\Support\MocksExactConnection;

class ResultsetTest extends TestCase
{
    use MocksExactConnection;

    public function testCanGetNext(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Resultset(
            $connection,
            'logistics/Items',
            Item::class,
            []
        ))->next();

        $this->assertInstanceOf(Item::class, $response[0]);
        $this->assertCount(2, $response);
    }

    public function testCanGetNextAsGenerator(): void
    {
        $handler = $this->createMockHandlerUsingFixture('items.json');
        $connection = $this->createMockConnection($handler);

        $response = (new Resultset(
            $connection,
            'logistics/Items',
            Item::class,
            []
        ))->nextAsGenerator();

        $this->assertEquals(2, iterator_count($response));
    }
}
