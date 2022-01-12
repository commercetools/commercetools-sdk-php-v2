<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderPagedSearchResponse extends JsonObject
{
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_HITS = 'hits';

    /**
     * <p>Total number of results matching the query.</p>
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of results skipped, used for pagination.</p>
     *
     * @return null|int
     */
    public function getOffset();

    /**
     * <p>Number of results the response should contain at maximum, used for pagination.</p>
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Actual results.</p>
     *
     * @return null|HitCollection
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
     * @param ?HitCollection $hits
     */
    public function setHits(?HitCollection $hits): void;
}
