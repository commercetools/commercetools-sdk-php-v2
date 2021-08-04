<?php

declare(strict_types=1);

namespace Commercetools\UnitTest;

use Commercetools\Api\Models\Common\BaseResourceCollection;
use PHPUnit\Framework\TestCase;

class CurrentOnEmptyCollectionTest extends TestCase
{
    public function testCurrentOnEmptyCollection(): void
    {
        $collection = new BaseResourceCollection();

        static::assertNull($collection->current());
    }
}
