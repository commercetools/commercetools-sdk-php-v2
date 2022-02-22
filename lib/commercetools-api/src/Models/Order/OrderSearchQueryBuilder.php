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
 * @implements Builder<OrderSearchQuery>
 */
final class OrderSearchQueryBuilder implements Builder
{
    public function build(): OrderSearchQuery
    {
        return new OrderSearchQueryModel(
        );
    }

    public static function of(): OrderSearchQueryBuilder
    {
        return new self();
    }
}
