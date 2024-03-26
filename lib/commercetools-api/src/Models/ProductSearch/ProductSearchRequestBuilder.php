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
     * <p>The search query against <a href="/../api/projects/product-search#searchable-product-fields">searchable Product fields</a>.</p>
     *

     * @return null|SearchQuery
     */
    public function getQuery()
    {
        return $this->query instanceof SearchQueryBuilder ? $this->query->build() : $this->query;
    }

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|SearchSortingCollection
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * <p>The maximum number of search results to be returned.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The number of search results to be skipped in the response for pagination.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>The search can return Products where not all Product Variants match the search criteria. If <code>true</code>, the response will include a field called <code>matchingVariants</code> that contains the <code>sku</code> of Product Variants that match the search query. If the query does not specify any variant-level criteria, <code>matchingVariants</code> will be null signifying that all Product Variants are a match.</p>
     *

     * @return null|bool
     */
    public function getMarkMatchingVariants()
    {
        return $this->markMatchingVariants;
    }

    /**
     * <p>Set this field to <code>{}</code> to get the <a href="ctp:api:type:ProductProjection">ProductProjection</a> included in the <a href="ctp:api:type:ProductSearchResult">ProductSearchResult</a>.
     * Include query parameters for controlling <a href="/../api/general-concepts#reference-expansion">Reference Expansion</a> or <a href="/../api/projects/productProjections#projection-dimensions">projections</a> according to your needs.
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

    public function build(): ProductSearchRequest
    {
        return new ProductSearchRequestModel(
            $this->query instanceof SearchQueryBuilder ? $this->query->build() : $this->query,
            $this->sort,
            $this->limit,
            $this->offset,
            $this->markMatchingVariants,
            $this->productProjectionParameters instanceof ProductSearchProjectionParamsBuilder ? $this->productProjectionParameters->build() : $this->productProjectionParameters,
            $this->facets
        );
    }

    public static function of(): ProductSearchRequestBuilder
    {
        return new self();
    }
}
