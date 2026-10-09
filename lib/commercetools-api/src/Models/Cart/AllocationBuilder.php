<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<Allocation>
 */
final class AllocationBuilder implements Builder
{
    public function build(): Allocation
    {
        return new AllocationModel(
        );
    }

    public static function of(): AllocationBuilder
    {
        return new self();
    }
}
