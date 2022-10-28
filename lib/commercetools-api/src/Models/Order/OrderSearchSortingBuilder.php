<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSearchSorting>
 */
final class OrderSearchSortingBuilder implements Builder
{
    public function build(): OrderSearchSorting
    {
        return new OrderSearchSortingModel(
        );
    }

    public static function of(): OrderSearchSortingBuilder
    {
        return new self();
    }
}
