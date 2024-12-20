<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnitSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchSortingCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface BusinessUnitSearchRequest extends JsonObject
{
    public const FIELD_QUERY = 'query';
    public const FIELD_SORT = 'sort';
    public const FIELD_LIMIT = 'limit';
    public const FIELD_OFFSET = 'offset';

    /**
     * <p>The Business Unit Search query.</p>
     *

     * @return null|SearchQuery
     */
    public function getQuery();

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|SearchSortingCollection
     */
    public function getSort();

    /**
     * <p>The maximum number of search results to be returned.</p>
     *

     * @return null|int
     */
    public function getLimit();

    /**
     * <p>The number of search results to be skipped in the response for pagination.</p>
     *

     * @return null|int
     */
    public function getOffset();

    /**
     * @param ?SearchQuery $query
     */
    public function setQuery(?SearchQuery $query): void;

    /**
     * @param ?SearchSortingCollection $sort
     */
    public function setSort(?SearchSortingCollection $sort): void;

    /**
     * @param ?int $limit
     */
    public function setLimit(?int $limit): void;

    /**
     * @param ?int $offset
     */
    public function setOffset(?int $offset): void;
}
