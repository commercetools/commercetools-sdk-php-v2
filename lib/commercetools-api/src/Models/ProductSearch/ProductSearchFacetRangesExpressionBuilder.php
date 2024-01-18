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
 * @implements Builder<ProductSearchFacetRangesExpression>
 */
final class ProductSearchFacetRangesExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchFacetRangesValue|ProductSearchFacetRangesValueBuilder
     */
    private $ranges;

    /**
     * <p>Definition of the ranges facet.</p>
     *

     * @return null|ProductSearchFacetRangesValue
     */
    public function getRanges()
    {
        return $this->ranges instanceof ProductSearchFacetRangesValueBuilder ? $this->ranges->build() : $this->ranges;
    }

    /**
     * @param ?ProductSearchFacetRangesValue $ranges
     * @return $this
     */
    public function withRanges(?ProductSearchFacetRangesValue $ranges)
    {
        $this->ranges = $ranges;

        return $this;
    }

    /**
     * @deprecated use withRanges() instead
     * @return $this
     */
    public function withRangesBuilder(?ProductSearchFacetRangesValueBuilder $ranges)
    {
        $this->ranges = $ranges;

        return $this;
    }

    public function build(): ProductSearchFacetRangesExpression
    {
        return new ProductSearchFacetRangesExpressionModel(
            $this->ranges instanceof ProductSearchFacetRangesValueBuilder ? $this->ranges->build() : $this->ranges
        );
    }

    public static function of(): ProductSearchFacetRangesExpressionBuilder
    {
        return new self();
    }
}
