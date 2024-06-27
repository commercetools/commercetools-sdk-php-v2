<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CustomerSearch;

use Commercetools\Api\Models\Search\SearchQuery;
use Commercetools\Api\Models\Search\SearchQueryBuilder;
use Commercetools\Api\Models\Search\SearchSortingCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CustomerSearchRequest>
 */
final class CustomerSearchRequestBuilder implements Builder
{
    /**

     * @var null|SearchQuery|SearchQueryBuilder
     */
    private $query;

    /**

     * @var ?SearchSortingCollection
     */
    private $sort;

    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $offset;

    /**
     * <p>The Customer search query.</p>
     *

     * @return null|SearchQuery
     */
    public function getQuery()
    {
        return $this->query instanceof SearchQueryBuilder ? $this->query->build() : $this->query;
    }

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|SearchSortingCollection
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * <p>The maximum number of search results to be returned.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>The number of search results to be skipped in the response for pagination.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @param ?SearchQuery $query
     * @return $this
     */
    public function withQuery(?SearchQuery $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param ?SearchSortingCollection $sort
     * @return $this
     */
    public function withSort(?SearchSortingCollection $sort)
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?int $offset
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @deprecated use withQuery() instead
     * @return $this
     */
    public function withQueryBuilder(?SearchQueryBuilder $query)
    {
        $this->query = $query;

        return $this;
    }

    public function build(): CustomerSearchRequest
    {
        return new CustomerSearchRequestModel(
            $this->query instanceof SearchQueryBuilder ? $this->query->build() : $this->query,
            $this->sort,
            $this->limit,
            $this->offset
        );
    }

    public static function of(): CustomerSearchRequestBuilder
    {
        return new self();
    }
}
