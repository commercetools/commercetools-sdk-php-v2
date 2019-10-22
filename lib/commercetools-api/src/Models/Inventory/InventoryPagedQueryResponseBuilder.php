<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Inventory;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InventoryPagedQueryResponse>
 */
final class InventoryPagedQueryResponseBuilder implements Builder
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
    private $count;

    /**
     * @var ?int
     */
    private $limit;

    /**
     * @var ?InventoryEntryCollection
     */
    private $results;

    public function __construct()
    {
    }

    /**
     * @return null|int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @return null|int
     */
    public function getOffset()
    {
        return $this->offset;
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
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @return null|InventoryEntryCollection
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * @return $this
     */
    public function withTotal(?int $total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return $this
     */
    public function withOffset(?int $offset)
    {
        $this->offset = $offset;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCount(?int $count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLimit(?int $limit)
    {
        $this->limit = $limit;

        return $this;
    }

    /**
     * @return $this
     */
    public function withResults(?InventoryEntryCollection $results)
    {
        $this->results = $results;

        return $this;
    }

    public function build(): InventoryPagedQueryResponse
    {
        return new InventoryPagedQueryResponseModel(
            $this->total,
            $this->offset,
            $this->count,
            $this->limit,
            $this->results
        );
    }

    public static function of(): InventoryPagedQueryResponseBuilder
    {
        return new self();
    }
}
