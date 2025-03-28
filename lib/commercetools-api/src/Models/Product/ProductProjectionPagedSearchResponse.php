<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductProjectionPagedSearchResponse extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_RESULTS = 'results';
    public const FIELD_FACETS = 'facets';

    /**
     * <p>The maximum number of results returned on a <a href="/../api/projects/products-search#pagination">page</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The starting point for the retrieved <a href="/../api/projects/products-search#pagination">paginated</a> result.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>Actual number of results returned.</p>
     *

     * @return null|int
     */
    public function getCount();

    /**
     * <p>Total number of results matching the query.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * <p><a href="ctp:api:type:ProductProjection">ProductProjections</a> where at least one <a href="ctp:api:type:ProductVariant">ProductVariant</a> matches the search query, provided with the <code>text.{language}</code> and/or <code>filter.query</code> or <code>filter</code> query parameter.
     * If the query parameter <code>markMatchingVariants=true</code> was provided with the request, the <a href="/../api/projects/products-search#matching-variants">matching variants</a> are marked as such.</p>
     *

     * @return null|ProductProjectionCollection
     */
    public function getResults();

    /**
     * <p>Facet results for each <a href="/../api/projects/products-search#facets">facet expression</a> specified in the search request.</p>
     * <p>Only present if at least one <code>facet</code> parameter was provided with the search request.</p>
     *

     * @return null|FacetResults
     */
    public function getFacets();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?ProductProjectionCollection $results
     */
    public function setResults(?ProductProjectionCollection $results): void;

    /**
     * @param ?FacetResults $facets
     */
    public function setFacets(?FacetResults $facets): void;
}
