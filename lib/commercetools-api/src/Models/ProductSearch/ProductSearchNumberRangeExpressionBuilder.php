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
 * @implements Builder<ProductSearchNumberRangeExpression>
 */
final class ProductSearchNumberRangeExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchNumberRangeValue|ProductSearchNumberRangeValueBuilder
     */
    private $range;

    /**

     * @return null|ProductSearchNumberRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof ProductSearchNumberRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?ProductSearchNumberRangeValue $range
     * @return $this
     */
    public function withRange(?ProductSearchNumberRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?ProductSearchNumberRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): ProductSearchNumberRangeExpression
    {
        return new ProductSearchNumberRangeExpressionModel(
            $this->range instanceof ProductSearchNumberRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): ProductSearchNumberRangeExpressionBuilder
    {
        return new self();
    }
}
