<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductPagedSearchResponse extends JsonObject
{
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_FACETS = 'facets';
    public const FIELD_HITS = 'hits';

    /**
     * <p>Total number of results matching the query.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Results of faceting.</p>
     *

     * @return null|ProductSearchFacetResult
     */
    public function getFacets();

    /**
     * <p>Actual results.</p>
     *

     * @return null|ProductSearchHitCollection
     */
    public function getHits();

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?ProductSearchFacetResult $facets
     */
    public function setFacets(?ProductSearchFacetResult $facets): void;

    /**
     * @param ?ProductSearchHitCollection $hits
     */
    public function setHits(?ProductSearchHitCollection $hits): void;
}
