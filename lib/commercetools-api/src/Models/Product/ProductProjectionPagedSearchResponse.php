<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductProjectionPagedSearchResponse extends JsonObject
{

    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RESULTS = 'results';
    public const FIELD_FACETS = 'facets';

    /**
     * @return null|int
     */
    public function getCount();

    /**
     * @return null|int
     */
    public function getTotal();

    /**
     * @return null|int
     */
    public function getOffset();

    /**
     * @return null|ProductProjectionCollection
     */
    public function getResults();

    /**
     * @return null|FacetResults
     */
    public function getFacets();

    public function setCount(?int $count): void;

    public function setTotal(?int $total): void;

    public function setOffset(?int $offset): void;

    public function setResults(?ProductProjectionCollection $results): void;

    public function setFacets(?FacetResults $facets): void;
}
