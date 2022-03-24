<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeHistory;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<RecordPagedQueryResponse>
 */
final class RecordPagedQueryResponseBuilder implements Builder
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
     * @var ?RecordCollection
     */
    private $results;

    /**
     * <p>Maximum number of results requested in the query request.</p>
     *
     * @return null|int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * <p>Actual number of results returned.</p>
     *
     * @return null|int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * <p>Total number of results matching the query.
     * This number is an estimation and not <a href="/general-concepts#strong-consistency">strongly consistent</a>.</p>
     *
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * <p>The number of elements skipped, not a page number. Supplied by the client or the server default.</p>
     *
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * @return null|RecordCollection
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
     * @param ?RecordCollection $results
     * @return $this
     */
    public function withResults(?RecordCollection $results)
    {
        $this->results = $results;

        return $this;
    }


    public function build(): RecordPagedQueryResponse
    {
        return new RecordPagedQueryResponseModel(
            $this->limit,
            $this->count,
            $this->total,
            $this->offset,
            $this->results
        );
    }

    public static function of(): RecordPagedQueryResponseBuilder
    {
        return new self();
    }
}
