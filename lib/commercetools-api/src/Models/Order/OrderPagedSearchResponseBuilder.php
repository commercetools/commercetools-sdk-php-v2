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
 * @implements Builder<OrderPagedSearchResponse>
 */
final class OrderPagedSearchResponseBuilder implements Builder
{
    /**
     * @var ?int
     */
    private $total;

    /**
     * @var ?int
     */
    private $offset;

    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?HitCollection
     */
    private $hits;

    /**
     * <p>Total number of results matching the query.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Number of results skipped, used for pagination.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * <p>Number of results the response should contain at maximum, used for pagination.</p>
     *
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Actual results.</p>
     *
     * @return null|HitCollection
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * @param ?int $total
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

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
     * @param ?int $limit
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @param ?HitCollection $hits
     * @return $this
     */
    public function withHits(?HitCollection $hits)
    {
        $this->hits = $hits;

        return $this;
    }


    public function build(): OrderPagedSearchResponse
    {
        return new OrderPagedSearchResponseModel(
            $this->total,
            $this->offset,
            $this->limit,
            $this->hits
        );
    }

    public static function of(): OrderPagedSearchResponseBuilder
    {
        return new self();
    }
}
