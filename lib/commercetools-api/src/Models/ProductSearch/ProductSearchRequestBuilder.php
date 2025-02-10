<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchQueryBuilder;
use Commercetools\Api\Models\Search\SearchSortingCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchRequest>
 */
final class ProductSearchRequestBuilder implements Builder
{
    /**

     * @var null|SearchQuery|SearchQueryBuilder
     */
    private $query;

    /**

     * @var ?SearchSortingCollection
     */
    private $sort;

    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $offset;

    /**

     * @var ?bool
     */
    private $markMatchingVariants;

    /**

     * @var null|ProductSearchProjectionParams|ProductSearchProjectionParamsBuilder
     */
    private $productProjectionParameters;

    /**

     * @var ?ProductSearchFacetExpressionCollection
     */
    private $facets;

    /**

     * @var null|SearchQuery|SearchQueryBuilder
     */
    private $postFilter;

    /**
     * <p>The search query against <a href="/../api/projects/product-search#searchable-product-fields">searchable Product fields</a>.</p>
     *

     * @return null|SearchQuery
     */
    public function getQuery()
    {
        return $this->query instanceof SearchQueryBuilder ? $this->query->build() : $this->query;
    }

    /**
     * <p>Controls how results to your query are <a href="/../api/projects/product-search#sorting">sorted</a>.
     * If not provided, the results are sorted by relevance score in descending order.</p>
     *

     * @return null|SearchSortingCollection
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * <p>The maximum number of search results to be returned in one <a href="/../api/projects/product-search#pagination">page</a>.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The number of search results to be skipped in the response for <a href="/../api/projects/product-search#pagination">pagination</a>.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>If <code>query</code> specifies an expression for a Product Variant field,
     * set this to <code>true</code> to get additional information for each returned Product about which Product Variants match the search query.
     * For details, see <a href="/../api/projects/product-search#matching-variants">matching variants</a>.</p>
     *

     * @return null|bool
     */
    public function getMarkMatchingVariants()
    {
        return $this->markMatchingVariants;
    }

    /**
     * <p>Controls data integration <a href="/../api/projects/product-search#with-product-projection-parameters">with Product Projection parameters</a>.
     * If not set, the result does not include the Product Projection.</p>
     *

     * @return null|ProductSearchProjectionParams
     */
    public function getProductProjectionParameters()
    {
        return $this->productProjectionParameters instanceof ProductSearchProjectionParamsBuilder ? $this->productProjectionParameters->build() : $this->productProjectionParameters;
    }

    /**
     * <p>Set this field to request <a href="/../api/projects/product-search#facets">facets</a>.</p>
     *

     * @return null|ProductSearchFacetExpressionCollection
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * <p>Specify an additional filter on the result of the <code>query</code> after the API calculated <code>facets</code>.
     * This feature assists you in implementing faceted search.</p>
     *

     * @return null|SearchQuery
     */
    public function getPostFilter()
    {
        return $this->postFilter instanceof SearchQueryBuilder ? $this->postFilter->build() : $this->postFilter;
    }

    /**
     * @param ?SearchQuery $query
     * @return $this
     */
    public function withQuery(?SearchQuery $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param ?SearchSortingCollection $sort
     * @return $this
     */
    public function withSort(?SearchSortingCollection $sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @param ?bool $markMatchingVariants
     * @return $this
     */
    public function withMarkMatchingVariants(?bool $markMatchingVariants)
    {
        $this->markMatchingVariants = $markMatchingVariants;

        return $this;
    }

    /**
     * @param ?ProductSearchProjectionParams $productProjectionParameters
     * @return $this
     */
    public function withProductProjectionParameters(?ProductSearchProjectionParams $productProjectionParameters)
    {
        $this->productProjectionParameters = $productProjectionParameters;

        return $this;
    }

    /**
     * @param ?ProductSearchFacetExpressionCollection $facets
     * @return $this
     */
    public function withFacets(?ProductSearchFacetExpressionCollection $facets)
    {
        $this->facets = $facets;

        return $this;
    }

    /**
     * @param ?SearchQuery $postFilter
     * @return $this
     */
    public function withPostFilter(?SearchQuery $postFilter)
    {
        $this->postFilter = $postFilter;

        return $this;
    }

    /**
     * @deprecated use withQuery() instead
     * @return $this
     */
    public function withQueryBuilder(?SearchQueryBuilder $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @deprecated use withProductProjectionParameters() instead
     * @return $this
     */
    public function withProductProjectionParametersBuilder(?ProductSearchProjectionParamsBuilder $productProjectionParameters)
    {
        $this->productProjectionParameters = $productProjectionParameters;

        return $this;
    }

    /**
     * @deprecated use withPostFilter() instead
     * @return $this
     */
    public function withPostFilterBuilder(?SearchQueryBuilder $postFilter)
    {
        $this->postFilter = $postFilter;

        return $this;
    }

    public function build(): ProductSearchRequest
    {
        return new ProductSearchRequestModel(
            $this->query instanceof SearchQueryBuilder ? $this->query->build() : $this->query,
            $this->sort,
            $this->limit,
            $this->offset,
            $this->markMatchingVariants,
            $this->productProjectionParameters instanceof ProductSearchProjectionParamsBuilder ? $this->productProjectionParameters->build() : $this->productProjectionParameters,
            $this->facets,
            $this->postFilter instanceof SearchQueryBuilder ? $this->postFilter->build() : $this->postFilter
        );
    }

    public static function of(): ProductSearchRequestBuilder
    {
        return new self();
    }
}
