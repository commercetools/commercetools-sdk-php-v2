<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Api\Models\Product\FacetResults;

interface PagedQueryResponse extends JsonObject
{

    public const FIELD_LIMIT = 'limit';
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RESULTS = 'results';
    public const FIELD_FACETS = 'facets';
    public const FIELD_META = 'meta';

    /**
     * @return null|int
     */
    public function getLimit();

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

    public function setLimit(?int $limit): void;

    public function setCount(?int $count): void;

    public function setTotal(?int $total): void;

    public function setOffset(?int $offset): void;

    public function setResults(?BaseResourceCollection $results): void;

    public function setFacets(?FacetResults $facets): void;

    public function setMeta(?JsonObject $meta): void;
}
