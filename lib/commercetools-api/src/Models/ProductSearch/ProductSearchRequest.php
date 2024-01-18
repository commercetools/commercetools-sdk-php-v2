<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchRequest extends JsonObject
{
    public const FIELD_QUERY = 'query';
    public const FIELD_POST_FILTER = 'postFilter';
    public const FIELD_SORT = 'sort';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_MARK_MATCHING_VARIANTS = 'markMatchingVariants';
    public const FIELD_PROJECTION = 'projection';
    public const FIELD_FACETS = 'facets';

    /**
     * <p>The Product search query.</p>
     *

     * @return null|ProductSearchQuery
     */
    public function getQuery();

    /**

     * @return null|ProductSearchQuery
     */
    public function getPostFilter();

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|ProductSearchSortingCollection
     */
    public function getSort();

    /**
     * <p>The maximum number of search results to be returned.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The number of search results to be skipped in the response for pagination.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>The search can return Products where not all Product Variants match the search criteria. If <code>true</code>, the response will include a field called <code>matchingVariants</code> that contains the <code>sku</code> of Product Variants that match the search query. If the query does not specify any variant-level criteria, <code>matchingVariants</code> will be null signifying that all Product Variants are a match.</p>
     *

     * @return null|bool
     */
    public function getMarkMatchingVariants();

    /**
     * <p>Contains Product Projection query parameters. Used to fetch matching Product Projection data of products matching the search query. If not included, Product Projection integration is not used.</p>
     *

     * @return null|ProductSearchProjectionParams
     */
    public function getProjection();

    /**

     * @return null|ProductSearchFacetExpressionCollection
     */
    public function getFacets();

    /**
     * @param ?ProductSearchQuery $query
     */
    public function setQuery(?ProductSearchQuery $query): void;

    /**
     * @param ?ProductSearchQuery $postFilter
     */
    public function setPostFilter(?ProductSearchQuery $postFilter): void;

    /**
     * @param ?ProductSearchSortingCollection $sort
     */
    public function setSort(?ProductSearchSortingCollection $sort): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?bool $markMatchingVariants
     */
    public function setMarkMatchingVariants(?bool $markMatchingVariants): void;

    /**
     * @param ?ProductSearchProjectionParams $projection
     */
    public function setProjection(?ProductSearchProjectionParams $projection): void;

    /**
     * @param ?ProductSearchFacetExpressionCollection $facets
     */
    public function setFacets(?ProductSearchFacetExpressionCollection $facets): void;
}
