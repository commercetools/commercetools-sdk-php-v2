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

class OrderSetDeliveryAddressActionModel extends OrderUpdateActionModel implements OrderSetDeliveryAddressAction
{
    const DISCRIMINATOR_VALUE = 'setDeliveryAddress';

    /**
     * @var string
     */
    protected $deliveryId;
    /**
     * @var Address
     */
    protected $address;

    /**
     * @return string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            $value = $this->raw(OrderSetDeliveryAddressAction::FIELD_DELIVERY_ID);
            $value = (string)$value;
            $this->deliveryId = $value;
        }
        return $this->deliveryId;
    }
    /**
     * @return Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            $value = $this->raw(OrderSetDeliveryAddressAction::FIELD_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->address = $value;
        }
        return $this->address;
    }

    /**
     * @param string $deliveryId
     * @return $this
     */
    public function setDeliveryId(string $deliveryId)
    {
        $this->deliveryId = (string)$deliveryId;

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
