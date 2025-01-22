<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchSortingCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchRequest extends JsonObject
{
    public const FIELD_QUERY = 'query';
    public const FIELD_SORT = 'sort';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_MARK_MATCHING_VARIANTS = 'markMatchingVariants';
    public const FIELD_PRODUCT_PROJECTION_PARAMETERS = 'productProjectionParameters';
    public const FIELD_FACETS = 'facets';
    public const FIELD_POST_FILTER = 'postFilter';

    /**
     * <p>The search query against <a href="/../api/projects/product-search#searchable-product-fields">searchable Product fields</a>.</p>
     *

     * @return null|SearchQuery
     */
    public function getQuery();

    /**
     * <p>Controls how results to your query are <a href="/../api/projects/product-search#sorting">sorted</a>.
     * If not provided, the results are sorted by relevance score in descending order.</p>
     *

     * @return null|SearchSortingCollection
     */
    public function getSort();

    /**
     * <p>The maximum number of search results to be returned in one <a href="/../api/projects/product-search#pagination">page</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The number of search results to be skipped in the response for <a href="/../api/projects/product-search#pagination">pagination</a>.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>If <code>query</code> specifies an expression for a Product Variant field,
     * set this to <code>true</code> to get additional information for each returned Product about which Product Variants match the search query.
     * For details, see <a href="/../api/projects/product-search#matching-variants">matching variants</a>.</p>
     *

     * @return null|bool
     */
    public function getMarkMatchingVariants();

    /**
     * <p>Controls data integration <a href="/../api/projects/product-search#with-product-projection-parameters">with Product Projection parameters</a>.
     * If not set, the result does not include the Product Projection.</p>
     *

     * @return null|ProductSearchProjectionParams
     */
    public function getProductProjectionParameters();

    /**
     * <p>Set this field to request <a href="/../api/projects/product-search#facets">facets</a>.</p>
     *

     * @return null|ProductSearchFacetExpressionCollection
     */
    public function getFacets();

    /**
     * <p>Specify an additional filter on the result of the <code>query</code> after the API calculated <code>facets</code>.
     * This feature assists you in implementing faceted search.</p>
     *

     * @return null|SearchQuery
     */
    public function getPostFilter();

    /**
     * @param ?SearchQuery $query
     */
    public function setQuery(?SearchQuery $query): void;

    /**
     * @param ?SearchSortingCollection $sort
     */
    public function setSort(?SearchSortingCollection $sort): void;

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
     * @param ?ProductSearchProjectionParams $productProjectionParameters
     */
    public function setProductProjectionParameters(?ProductSearchProjectionParams $productProjectionParameters): void;

    /**
     * @param ?ProductSearchFacetExpressionCollection $facets
     */
    public function setFacets(?ProductSearchFacetExpressionCollection $facets): void;

    /**
     * @param ?SearchQuery $postFilter
     */
    public function setPostFilter(?SearchQuery $postFilter): void;
}
