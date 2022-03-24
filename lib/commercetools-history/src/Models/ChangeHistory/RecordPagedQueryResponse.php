<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface RecordPagedQueryResponse extends JsonObject
{

    public const FIELD_LIMIT = 'limit';
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>Maximum number of results requested in the query request.</p>
     *
     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Actual number of results returned.</p>
     *
     * @return null|int
     */
    public function getCount();

    /**
     * <p>Total number of results matching the query.
     * This number is an estimation and not <a href="/general-concepts#strong-consistency">strongly consistent</a>.</p>
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p>The number of elements skipped, not a page number. Supplied by the client or the server default.</p>
     *
     * @return null|int
     */
    public function getOffset();

    /**
     * @return null|RecordCollection
     */
    public function getResults();

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
     * @param ?RecordCollection $results
     */
    public function setResults(?RecordCollection $results): void;
}
