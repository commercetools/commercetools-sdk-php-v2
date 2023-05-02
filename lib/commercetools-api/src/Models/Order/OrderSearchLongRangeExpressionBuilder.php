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
 * @implements Builder<OrderSearchLongRangeExpression>
 */
final class OrderSearchLongRangeExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchLongRangeValue|OrderSearchLongRangeValueBuilder
     */
    private $range;

    /**

     * @return null|OrderSearchLongRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof OrderSearchLongRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?OrderSearchLongRangeValue $range
     * @return $this
     */
    public function withRange(?OrderSearchLongRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?OrderSearchLongRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): OrderSearchLongRangeExpression
    {
        return new OrderSearchLongRangeExpressionModel(
            $this->range instanceof OrderSearchLongRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): OrderSearchLongRangeExpressionBuilder
    {
        return new self();
    }
}
