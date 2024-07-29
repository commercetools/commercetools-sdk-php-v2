<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface OrderSearchRequest extends JsonObject
{
    public const FIELD_QUERY = 'query';
    public const FIELD_SORT = 'sort';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';

    /**
     * <p>The Order search query.</p>
     *

     * @return null|OrderSearchQuery
     */
    public function getQuery();

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|OrderSearchSortingCollection
     */
    public function getSort();

    /**
     * <p>The maximum number of search results to be returned on one <a href="#pagination">page</a>.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The number of search results to be skipped in the response for <a href="#pagination">pagination</a>.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * @param ?OrderSearchQuery $query
     */
    public function setQuery(?OrderSearchQuery $query): void;

    /**
     * @param ?OrderSearchSortingCollection $sort
     */
    public function setSort(?OrderSearchSortingCollection $sort): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;
}
