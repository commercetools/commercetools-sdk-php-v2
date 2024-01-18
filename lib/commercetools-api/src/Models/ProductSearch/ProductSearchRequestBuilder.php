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
 * @implements Builder<ProductSearchRequest>
 */
final class ProductSearchRequestBuilder implements Builder
{
    /**

     * @var null|ProductSearchQuery|ProductSearchQueryBuilder
     */
    private $query;

    /**

     * @var null|ProductSearchQuery|ProductSearchQueryBuilder
     */
    private $postFilter;

    /**

     * @var ?ProductSearchSortingCollection
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
    private $projection;

    /**

     * @var ?ProductSearchFacetExpressionCollection
     */
    private $facets;

    /**
     * <p>The Product search query.</p>
     *

     * @return null|ProductSearchQuery
     */
    public function getQuery()
    {
        return $this->query instanceof ProductSearchQueryBuilder ? $this->query->build() : $this->query;
    }

    /**

     * @return null|ProductSearchQuery
     */
    public function getPostFilter()
    {
        return $this->postFilter instanceof ProductSearchQueryBuilder ? $this->postFilter->build() : $this->postFilter;
    }

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|ProductSearchSortingCollection
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
     * <p>Contains Product Projection query parameters. Used to fetch matching Product Projection data of products matching the search query. If not included, Product Projection integration is not used.</p>
     *

     * @return null|ProductSearchProjectionParams
     */
    public function getProjection()
    {
        return $this->projection instanceof ProductSearchProjectionParamsBuilder ? $this->projection->build() : $this->projection;
    }

    /**

     * @return null|ProductSearchFacetExpressionCollection
     */
    public function getFacets()
    {
        return $this->facets;
    }

    /**
     * @param ?ProductSearchQuery $query
     * @return $this
     */
    public function withQuery(?ProductSearchQuery $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param ?ProductSearchQuery $postFilter
     * @return $this
     */
    public function withPostFilter(?ProductSearchQuery $postFilter)
    {
        $this->postFilter = $postFilter;

        return $this;
    }

    /**
     * @param ?ProductSearchSortingCollection $sort
     * @return $this
     */
    public function withSort(?ProductSearchSortingCollection $sort)
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
     * @param ?ProductSearchProjectionParams $projection
     * @return $this
     */
    public function withProjection(?ProductSearchProjectionParams $projection)
    {
        $this->projection = $projection;

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
    public function withQueryBuilder(?ProductSearchQueryBuilder $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @deprecated use withPostFilter() instead
     * @return $this
     */
    public function withPostFilterBuilder(?ProductSearchQueryBuilder $postFilter)
    {
        $this->postFilter = $postFilter;

        return $this;
    }

    /**
     * @deprecated use withProjection() instead
     * @return $this
     */
    public function withProjectionBuilder(?ProductSearchProjectionParamsBuilder $projection)
    {
        $this->projection = $projection;

        return $this;
    }

    public function build(): ProductSearchRequest
    {
        return new ProductSearchRequestModel(
            $this->query instanceof ProductSearchQueryBuilder ? $this->query->build() : $this->query,
            $this->postFilter instanceof ProductSearchQueryBuilder ? $this->postFilter->build() : $this->postFilter,
            $this->sort,
            $this->limit,
            $this->offset,
            $this->markMatchingVariants,
            $this->projection instanceof ProductSearchProjectionParamsBuilder ? $this->projection->build() : $this->projection,
            $this->facets
        );
    }

    public static function of(): ProductSearchRequestBuilder
    {
        return new self();
    }
}
