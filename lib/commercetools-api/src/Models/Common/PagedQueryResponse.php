<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Product\FacetResults;
use Commercetools\Base\JsonObject;

interface PagedQueryResponse extends JsonObject
{
    const FIELD_COUNT = 'count';
    const FIELD_TOTAL = 'total';
    const FIELD_OFFSET = 'offset';
    const FIELD_RESULTS = 'results';
    const FIELD_FACETS = 'facets';
    const FIELD_META = 'meta';

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
     * @return null|BaseResourceCollection
     */
    public function getResults();

    /**
     * @return null|FacetResults
     */
    public function getFacets();

    /**
     * @return null|JsonObject
     */
    public function getMeta();

    public function setCount(?int $count): void;

    public function setTotal(?int $total): void;

    public function setOffset(?int $offset): void;

    public function setResults(?BaseResourceCollection $results): void;

    public function setFacets(?FacetResults $facets): void;

    public function setMeta(?JsonObject $meta): void;
}
