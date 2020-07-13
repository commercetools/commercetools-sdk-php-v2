<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Product\FacetResults;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

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
     * @return null|mixed
     */
    public function getMeta();

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $count
     */
    public function setCount(?int $count): void;

    /**
     * @param ?int $total
     */
    public function setTotal(?int $total): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;

    /**
     * @param ?BaseResourceCollection $results
     */
    public function setResults(?BaseResourceCollection $results): void;

    /**
     * @param ?FacetResults $facets
     */
    public function setFacets(?FacetResults $facets): void;

    /**
     * @param ?JsonObject $meta
     */
    public function setMeta(?JsonObject $meta): void;
}
