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

class OrderSetShippingAddressActionModel extends OrderUpdateActionModel implements OrderSetShippingAddressAction
{
    const DISCRIMINATOR_VALUE = 'setShippingAddress';

    /**
     * @var Address
     */
    protected $address;

    /**
     * @return Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            $value = $this->raw(OrderSetShippingAddressAction::FIELD_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->address = $value;
        }
        return $this->address;
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
