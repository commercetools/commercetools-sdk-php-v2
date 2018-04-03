<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

use Commercetools\Types\Common\Address;

class DeliveryAddressSetMessageModel extends MessageModel implements DeliveryAddressSetMessage {
    const DISCRIMINATOR_VALUE = 'DeliveryAddressSet';

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
            $value = $this->raw(DeliveryAddressSetMessage::FIELD_DELIVERY_ID);
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
            $value = $this->raw(DeliveryAddressSetMessage::FIELD_ADDRESS);
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
