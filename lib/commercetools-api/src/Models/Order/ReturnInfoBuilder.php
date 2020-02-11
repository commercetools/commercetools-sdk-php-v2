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
use DateTimeImmutable;

/**
 * @implements Builder<ReturnInfo>
 */
final class ReturnInfoBuilder implements Builder
{
    /**
     * @var ?ReturnItemCollection
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
     * @return null|ReturnItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * <p>Identifies, which return tracking ID is connected to this particular return.</p>
     *
     * @return null|string
     */
    public function getReturnTrackingId()
    {
        return $this->returnTrackingId;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @return $this
     */
    public function withItems(?ReturnItemCollection $items)
    {
        $this->items = $items;

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
