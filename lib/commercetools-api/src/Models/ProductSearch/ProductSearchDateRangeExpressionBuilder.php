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
 * @implements Builder<ProductSearchDateRangeExpression>
 */
final class ProductSearchDateRangeExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchDateRangeValue|ProductSearchDateRangeValueBuilder
     */
    private $range;

    /**

     * @return null|ProductSearchDateRangeValue
     */
    public function getRange()
    {
        return $this->range instanceof ProductSearchDateRangeValueBuilder ? $this->range->build() : $this->range;
    }

    /**
     * @param ?ProductSearchDateRangeValue $range
     * @return $this
     */
    public function withRange(?ProductSearchDateRangeValue $range)
    {
        $this->range = $range;

        return $this;
    }

    /**
     * @deprecated use withRange() instead
     * @return $this
     */
    public function withRangeBuilder(?ProductSearchDateRangeValueBuilder $range)
    {
        $this->range = $range;

        return $this;
    }

    public function build(): ProductSearchDateRangeExpression
    {
        return new ProductSearchDateRangeExpressionModel(
            $this->range instanceof ProductSearchDateRangeValueBuilder ? $this->range->build() : $this->range
        );
    }

    public static function of(): ProductSearchDateRangeExpressionBuilder
    {
        return new self();
    }
}
