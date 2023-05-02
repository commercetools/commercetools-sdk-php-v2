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
 * @implements Builder<OrderSearchNumberRangeExpression>
 */
final class OrderSearchNumberRangeExpressionBuilder implements Builder
{
    /**

     * @var null|OrderSearchNumberRangeValue|OrderSearchNumberRangeValueBuilder
     */
    private $range;

    /**

     * @return null|OrderSearchNumberRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof OrderSearchNumberRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?OrderSearchNumberRangeValue $range
     * @return $this
     */
    public function withRange(?OrderSearchNumberRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?OrderSearchNumberRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): OrderSearchNumberRangeExpression
    {
        return new OrderSearchNumberRangeExpressionModel(
            $this->range instanceof OrderSearchNumberRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): OrderSearchNumberRangeExpressionBuilder
    {
        return new self();
    }
}
