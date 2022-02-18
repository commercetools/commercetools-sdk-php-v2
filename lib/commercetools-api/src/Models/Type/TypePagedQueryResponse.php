<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface TypePagedQueryResponse extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>Number of results requested in the query request.</p>
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Offset supplied by the client or server default. It is the number of elements skipped, not a page number.</p>
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
     * <p>Total number of results matching the query.
     * This number is an estimation that is not <a href="/../api/general-concepts#strong-consistency">strongly consistent</a>.
     * This field is returned by default.
     * For improved performance, calculating this field can be deactivated by using the query parameter <code>withTotal=false</code>.
     * When the results are filtered with a <a href="ctp:api:type:QueryPredicate">Query Predicate</a>, <code>total</code> is subject to a <a href="/../api/limits#queries">limit</a>.</p>
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p><a href="ctp:api:type:Type">Types</a> matching the query.</p>
     *
     * @return null|TypeCollection
     */
    public function getResults();

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
     * @param ?TypeCollection $results
     */
    public function setResults(?TypeCollection $results): void;
}
