<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

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
     * @var ?string
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
     * @return null|string
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * @param ?ReturnItemCollection $items
     * @return $this
     */
    public function withItems(?ReturnItemCollection $items)
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
     * @param ?string $returnDate
     * @return $this
     */
    public function withReturnDate(?string $returnDate)
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
