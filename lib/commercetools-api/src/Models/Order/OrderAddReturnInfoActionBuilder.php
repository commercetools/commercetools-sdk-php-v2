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
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<OrderAddReturnInfoAction>
 */
final class OrderAddReturnInfoActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $returnTrackingId;

    /**

     * @var ?ReturnItemDraftCollection
     */
    private $items;

    /**

     * @var ?DateTimeImmutable
     */
    private $returnDate;

    /**
     * <p>Value to set.</p>
     *

     * @return null|string
     */
    public function getReturnTrackingId()
    {
        return $this->returnTrackingId;
    }

    /**
     * <p>Items to be returned.
     * Must not be empty.</p>
     *

     * @return null|ReturnItemDraftCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p>Value to set.
     * If not set, it defaults to the current date and time.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getReturnDate()
    {
        return $this->returnDate;
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
     * @param ?ReturnItemDraftCollection $items
     * @return $this
     */
    public function withItems(?ReturnItemDraftCollection $items)
    {
        $this->items = $items;

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


    public function build(): OrderAddReturnInfoAction
    {
        return new OrderAddReturnInfoActionModel(
            $this->returnTrackingId,
            $this->items,
            $this->returnDate
        );
    }

    public static function of(): OrderAddReturnInfoActionBuilder
    {
        return new self();
    }
}
