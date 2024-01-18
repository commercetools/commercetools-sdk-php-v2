<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchLongRangeExpression>
 */
final class ProductSearchLongRangeExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchLongRangeValue|ProductSearchLongRangeValueBuilder
     */
    private $range;

    /**

     * @return null|ProductSearchLongRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof ProductSearchLongRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?ProductSearchLongRangeValue $range
     * @return $this
     */
    public function withRange(?ProductSearchLongRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?ProductSearchLongRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): ProductSearchLongRangeExpression
    {
        return new ProductSearchLongRangeExpressionModel(
            $this->range instanceof ProductSearchLongRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): ProductSearchLongRangeExpressionBuilder
    {
        return new self();
    }
}
