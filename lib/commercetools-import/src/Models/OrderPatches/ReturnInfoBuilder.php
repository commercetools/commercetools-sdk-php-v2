<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\OrderPatches;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ReturnInfo>
 */
final class ReturnInfoBuilder implements Builder
{
    /**
     * @var ?ReturnItemDraftCollection
     */
    private $items;

    /**
     * @var ?string
     */
    private $returnTrackingId;

    /**
     * @var ?DateTimeImmutable
     */
    private $returnDate;

    /**
     * @return null|ReturnItemDraftCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p>Maps to <code>ReturnInfo.returnTrackingId</code></p>
     *
     * @return null|string
     */
    public function getReturnTrackingId()
    {
        return $this->returnTrackingId;
    }

    /**
     * <p>Maps to <code>ReturnInfo.returnDate</code></p>
     *
     * @return null|DateTimeImmutable
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @param ?ReturnItemDraftCollection $items
     * @return $this
     */
    public function withItems(?ReturnItemDraftCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param ?string $returnTrackingId
     * @return $this
     */
    public function withReturnTrackingId(?string $returnTrackingId)
    {
        $this->returnTrackingId = $returnTrackingId;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $returnDate
     * @return $this
     */
    public function withReturnDate(?DateTimeImmutable $returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }


    public function build(): ReturnInfo
    {
        return new ReturnInfoModel(
            $this->items,
            $this->returnTrackingId,
            $this->returnDate
        );
    }

    public static function of(): ReturnInfoBuilder
    {
        return new self();
    }
}
