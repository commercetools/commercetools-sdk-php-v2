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
 * @implements Builder<OrderSearchDateRangeExpression>
 */
final class OrderSearchDateRangeExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchDateRangeValue|OrderSearchDateRangeValueBuilder
     */
    private $range;

    /**

     * @return null|OrderSearchDateRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof OrderSearchDateRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?OrderSearchDateRangeValue $range
     * @return $this
     */
    public function withRange(?OrderSearchDateRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?OrderSearchDateRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): OrderSearchDateRangeExpression
    {
        return new OrderSearchDateRangeExpressionModel(
            $this->range instanceof OrderSearchDateRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): OrderSearchDateRangeExpressionBuilder
    {
        return new self();
    }
}
