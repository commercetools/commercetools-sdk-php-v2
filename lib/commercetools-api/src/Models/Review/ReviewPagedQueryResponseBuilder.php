<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ReviewPagedQueryResponse>
 */
final class ReviewPagedQueryResponseBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $limit;

    /**

     * @var ?int
     */
    private $count;

    /**

     * @var ?int
     */
    private $total;

    /**

     * @var ?int
     */
    private $offset;

    /**

     * @var ?ReviewCollection
     */
    private $results;

    /**
     * <p>Number of <a href="/../api/general-concepts#limit">results requested</a>.</p>
     *

     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**

     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**

     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>Number of <a href="/../api/general-concepts#offset">elements skipped</a>.</p>
     *

     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**

     * @return null|ReviewCollection
     */
    public function getResults()
    {
        return $this->results;
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
     * @param ?int $count
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
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
     * @param ?ReviewCollection $results
     * @return $this
     */
    public function withResults(?ReviewCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): ReviewPagedQueryResponse
    {
        return new ReviewPagedQueryResponseModel(
            $this->limit,
            $this->count,
            $this->total,
            $this->offset,
            $this->results
        );
    }

    public static function of(): ReviewPagedQueryResponseBuilder
    {
        return new self();
    }
}
