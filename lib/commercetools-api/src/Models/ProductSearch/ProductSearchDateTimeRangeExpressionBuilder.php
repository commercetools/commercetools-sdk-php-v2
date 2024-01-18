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
 * @implements Builder<ProductSearchDateTimeRangeExpression>
 */
final class ProductSearchDateTimeRangeExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchDateTimeRangeValue|ProductSearchDateTimeRangeValueBuilder
     */
    private $range;

    /**

     * @return null|ProductSearchDateTimeRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof ProductSearchDateTimeRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?ProductSearchDateTimeRangeValue $range
     * @return $this
     */
    public function withRange(?ProductSearchDateTimeRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?ProductSearchDateTimeRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): ProductSearchDateTimeRangeExpression
    {
        return new ProductSearchDateTimeRangeExpressionModel(
            $this->range instanceof ProductSearchDateTimeRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): ProductSearchDateTimeRangeExpressionBuilder
    {
        return new self();
    }
}
