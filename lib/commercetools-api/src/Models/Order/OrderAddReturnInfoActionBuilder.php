<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<OrderAddReturnInfoAction>
 */
final class OrderAddReturnInfoActionBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $returnDate;

    /**
     * @var ?string
     */
    private $returnTrackingId;

    /**
     * @var ?ReturnItemDraftCollection
     */
    private $items;

    /**
     * @return null|DateTimeImmutable
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @return null|string
     */
    public function getReturnTrackingId()
    {
        return $this->returnTrackingId;
    }

    /**
     * @return null|ReturnItemDraftCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return $this
     */
    public function withReturnDate(?DateTimeImmutable $returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * @return $this
     */
    public function withReturnTrackingId(?string $returnTrackingId)
    {
        $this->returnTrackingId = $returnTrackingId;

        return $this;
    }

    /**
     * @return $this
     */
    public function withItems(?ReturnItemDraftCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    public function build(): OrderAddReturnInfoAction
    {
        return new OrderAddReturnInfoActionModel(
            $this->returnDate,
            $this->returnTrackingId,
            $this->items
        );
    }

    public static function of(): OrderAddReturnInfoActionBuilder
    {
        return new self();
    }
}
