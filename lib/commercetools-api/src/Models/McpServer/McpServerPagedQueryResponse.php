<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface McpServerPagedQueryResponse extends JsonObject
{
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';
    public const FIELD_COUNT = 'count';
    public const FIELD_TOTAL = 'total';
    public const FIELD_RESULTS = 'results';

    /**
     * <p>Number of <a href="/api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>Number of <a href="/api/general-concepts#offset">elements skipped</a>.</p>
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
     * This field is returned by default.
     * For improved performance, calculating this field can be deactivated by using the query parameter <code>withTotal=false</code>.</p>
     *

     * @return null|int
     */
    public function getTotal();

    /**
     * <p>MCP Servers matching the query.</p>
     *

     * @return null|McpServerCollection
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
     * @param ?McpServerCollection $results
     */
    public function setResults(?McpServerCollection $results): void;
}
