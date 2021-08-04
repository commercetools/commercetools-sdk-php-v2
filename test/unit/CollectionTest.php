<?php

declare(strict_types=1);

namespace Commercetools\UnitTest;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use PHPUnit\Framework\TestCase;

class CollectionTest extends TestCase
{
    public function testCurrentOnEmptyCollection(): void
    {
        $collection = new BaseResourceCollection();

        static::assertNull($collection->current());
    }

    public function testEnd()
    {
        $data = '[{"id": "1"}, {"id": "1"}, {"id": "3"}]';
        $collection = new BaseResourceCollection(json_decode($data));

        static::assertSame("3", $collection->end()->getId());
    }
}
