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
 * @implements Builder<ProductSearchTimeRangeExpression>
 */
final class ProductSearchTimeRangeExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchTimeRangeValue|ProductSearchTimeRangeValueBuilder
     */
    private $range;

    /**

     * @return null|ProductSearchTimeRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof ProductSearchTimeRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?ProductSearchTimeRangeValue $range
     * @return $this
     */
    public function withRange(?ProductSearchTimeRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?ProductSearchTimeRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): ProductSearchTimeRangeExpression
    {
        return new ProductSearchTimeRangeExpressionModel(
            $this->range instanceof ProductSearchTimeRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): ProductSearchTimeRangeExpressionBuilder
    {
        return new self();
    }
}
