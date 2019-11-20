<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\Builder;

/**
 * @implements Builder<OrderSetParcelItemsAction>
 */
final class OrderSetParcelItemsActionBuilder implements Builder
{
    /**
     * @var ?DeliveryItemCollection
     */
    private $items;

    /**
     * @var ?string
     */
    private $parcelId;

    /**
     * @return null|DeliveryItemCollection
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @return null|string
     */
    public function getParcelId()
    {
        return $this->parcelId;
    }

    /**
     * @return $this
     */
    public function withItems(?DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @return $this
     */
    public function withParcelId(?string $parcelId)
    {
        $this->parcelId = $parcelId;

        return $this;
    }

    public function build(): OrderSetParcelItemsAction
    {
        return new OrderSetParcelItemsActionModel(
            $this->items,
            $this->parcelId
        );
    }

    public static function of(): OrderSetParcelItemsActionBuilder
    {
        return new self();
    }
}
