<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

class OrderSetParcelItemsActionModel extends OrderUpdateActionModel implements OrderSetParcelItemsAction {
    const DISCRIMINATOR_VALUE = 'setParcelItems';

    /**
     * @var string
     */
    protected $parcelId;
    /**
     * @var DeliveryItemCollection
     */
    protected $items;

    /**
     * @return string
     */
    public function getParcelId()
    {
        if (is_null($this->parcelId)) {
            $value = $this->raw(OrderSetParcelItemsAction::FIELD_PARCEL_ID);
            $value = (string)$value;
            $this->parcelId = $value;
        }
        return $this->parcelId;
    }
    /**
     * @return DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(OrderSetParcelItemsAction::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(DeliveryItemCollection::class, null);
            }
            $value = $this->mapData(DeliveryItemCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
    }

    /**
     * @param string $parcelId
     * @return $this
     */
    public function setParcelId(string $parcelId)
    {
        $this->parcelId = (string)$parcelId;

        return $this;
    }
    /**
     * @param DeliveryItemCollection $items
     * @return $this
     */
    public function setItems(DeliveryItemCollection $items)
    {
        $this->items = $items;

        return $this;
    }

}
