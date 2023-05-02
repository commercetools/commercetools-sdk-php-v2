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
 * @implements Builder<OrderSearchQueryExpression>
 */
final class OrderSearchQueryExpressionBuilder implements Builder
{
    public function build(): OrderSearchQueryExpression
    {
        return new OrderSearchQueryExpressionModel(
        );
    }

    public static function of(): OrderSearchQueryExpressionBuilder
    {
        return new self();
    }
}
