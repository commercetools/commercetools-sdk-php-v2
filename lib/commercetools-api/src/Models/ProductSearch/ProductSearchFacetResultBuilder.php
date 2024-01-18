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
 * @implements Builder<ProductSearchFacetResult>
 */
final class ProductSearchFacetResultBuilder implements Builder
{
    /**

     * @var ?ProductSearchFacetResultExpressionCollection
     */
    private $results;

    /**
     * <p>Results of the facets.</p>
     *

     * @return null|ProductSearchFacetResultExpressionCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @param ?ProductSearchFacetResultExpressionCollection $results
     * @return $this
     */
    public function withResults(?ProductSearchFacetResultExpressionCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): ProductSearchFacetResult
    {
        return new ProductSearchFacetResultModel(
            $this->results
        );
    }

    public static function of(): ProductSearchFacetResultBuilder
    {
        return new self();
    }
}
