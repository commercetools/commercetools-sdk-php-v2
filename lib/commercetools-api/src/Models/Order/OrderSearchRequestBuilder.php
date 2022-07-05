<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderSearchRequest>
 */
final class OrderSearchRequestBuilder implements Builder
{
    /**

     * @var null|OrderSearchQuery|OrderSearchQueryBuilder
     */
    private $query;

    /**

     * @var ?string
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
     * <p>The Order search query.</p>
     *

     * @return null|OrderSearchQuery
     */
    public function getQuery()
    {
        return $this->query instanceof OrderSearchQueryBuilder ? $this->query->build() : $this->query;
    }

    /**
     * <p>Controls how results to your query are sorted. If not provided, the results are sorted by relevance in descending order.</p>
     *

     * @return null|string
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
     * @param ?OrderSearchQuery $query
     * @return $this
     */
    public function withQuery(?OrderSearchQuery $query)
    {
        $this->query = $query;

        return $this;
    }

    /**
     * @param ?string $sort
     * @return $this
     */
    public function withSort(?string $sort)
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
    public function withQueryBuilder(?OrderSearchQueryBuilder $query)
    {
        $this->query = $query;

        return $this;
    }

    public function build(): OrderSearchRequest
    {
        return new OrderSearchRequestModel(
            $this->query instanceof OrderSearchQueryBuilder ? $this->query->build() : $this->query,
            $this->sort,
            $this->limit,
            $this->offset
        );
    }

    public static function of(): OrderSearchRequestBuilder
    {
        return new self();
    }
}
