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
 * @implements Builder<ProductSearchFacetCountExpression>
 */
final class ProductSearchFacetCountExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchFacetCountValue|ProductSearchFacetCountValueBuilder
     */
    private $count;

    /**
     * <p>Definition of the count facet.</p>
     *

     * @return null|ProductSearchFacetCountValue
     */
    public function getCount()
    {
        return $this->count instanceof ProductSearchFacetCountValueBuilder ? $this->count->build() : $this->count;
    }

    /**
     * @param ?ProductSearchFacetCountValue $count
     * @return $this
     */
    public function withCount(?ProductSearchFacetCountValue $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @deprecated use withCount() instead
     * @return $this
     */
    public function withCountBuilder(?ProductSearchFacetCountValueBuilder $count)
    {
        $this->count = $count;

        return $this;
    }

    public function build(): ProductSearchFacetCountExpression
    {
        return new ProductSearchFacetCountExpressionModel(
            $this->count instanceof ProductSearchFacetCountValueBuilder ? $this->count->build() : $this->count
        );
    }

    public static function of(): ProductSearchFacetCountExpressionBuilder
    {
        return new self();
    }
}
