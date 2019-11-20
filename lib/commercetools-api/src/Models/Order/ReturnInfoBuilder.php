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
 * @implements Builder<ReturnInfo>
 */
final class ReturnInfoBuilder implements Builder
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
     * @var ?ReturnItemCollection
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
     * @return null|ReturnItemCollection
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
    public function withItems(?ReturnItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    public function build(): ReturnInfo
    {
        return new ReturnInfoModel(
            $this->returnDate,
            $this->returnTrackingId,
            $this->items
        );
    }

    public static function of(): ReturnInfoBuilder
    {
        return new self();
    }
}
