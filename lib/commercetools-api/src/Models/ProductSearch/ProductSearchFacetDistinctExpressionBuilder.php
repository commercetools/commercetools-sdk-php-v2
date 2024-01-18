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
 * @implements Builder<ProductSearchFacetDistinctExpression>
 */
final class ProductSearchFacetDistinctExpressionBuilder implements Builder
{
    /**

     * @var null|ProductSearchFacetDistinctValue|ProductSearchFacetDistinctValueBuilder
     */
    private $distinct;

    /**
     * <p>Definition of the distinct facet.</p>
     *

     * @return null|ProductSearchFacetDistinctValue
     */
    public function getDistinct()
    {
        return $this->distinct instanceof ProductSearchFacetDistinctValueBuilder ? $this->distinct->build() : $this->distinct;
    }

    /**
     * @param ?ProductSearchFacetDistinctValue $distinct
     * @return $this
     */
    public function withDistinct(?ProductSearchFacetDistinctValue $distinct)
    {
        $this->distinct = $distinct;

        return $this;
    }

    /**
     * @deprecated use withDistinct() instead
     * @return $this
     */
    public function withDistinctBuilder(?ProductSearchFacetDistinctValueBuilder $distinct)
    {
        $this->distinct = $distinct;

        return $this;
    }

    public function build(): ProductSearchFacetDistinctExpression
    {
        return new ProductSearchFacetDistinctExpressionModel(
            $this->distinct instanceof ProductSearchFacetDistinctValueBuilder ? $this->distinct->build() : $this->distinct
        );
    }

    public static function of(): ProductSearchFacetDistinctExpressionBuilder
    {
        return new self();
    }
}
