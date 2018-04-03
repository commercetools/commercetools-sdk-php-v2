<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Order;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Order\OrderUpdateActionModel;

use Commercetools\Types\Common\Address;

class OrderAddDeliveryActionModel extends OrderUpdateActionModel implements OrderAddDeliveryAction {
    const DISCRIMINATOR_VALUE = 'addDelivery';

    /**
     * @var DeliveryItemCollection
     */
    protected $items;
    /**
     * @var ParcelCollection
     */
    protected $parcels;
    /**
     * @var Address
     */
    protected $address;

    /**
     * @return DeliveryItemCollection
     */
    public function getItems()
    {
        if (is_null($this->items)) {
            $value = $this->raw(OrderAddDeliveryAction::FIELD_ITEMS);
            if (is_null($value)) {
                return $this->mapData(DeliveryItemCollection::class, null);
            }
            $value = $this->mapData(DeliveryItemCollection::class, $value);
            $this->items = $value;
        }
        return $this->items;
    }
    /**
     * @return ParcelCollection
     */
    public function getParcels()
    {
        if (is_null($this->parcels)) {
            $value = $this->raw(OrderAddDeliveryAction::FIELD_PARCELS);
            if (is_null($value)) {
                return $this->mapData(ParcelCollection::class, null);
            }
            $value = $this->mapData(ParcelCollection::class, $value);
            $this->parcels = $value;
        }
        return $this->parcels;
    }
    /**
     * @return Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            $value = $this->raw(OrderAddDeliveryAction::FIELD_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->address = $value;
        }
        return $this->address;
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
    /**
     * @param ParcelCollection $parcels
     * @return $this
     */
    public function setParcels(ParcelCollection $parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }
    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }

}
