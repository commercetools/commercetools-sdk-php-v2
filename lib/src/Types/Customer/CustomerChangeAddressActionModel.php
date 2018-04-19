<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Customer\CustomerUpdateActionModel;

use Commercetools\Types\Common\Address;

class CustomerChangeAddressActionModel extends CustomerUpdateActionModel implements CustomerChangeAddressAction
{
    const DISCRIMINATOR_VALUE = 'changeAddress';

    /**
     * @var string
     */
    protected $addressId;
    /**
     * @var Address
     */
    protected $address;

    /**
     * @return string
     */
    public function getAddressId()
    {
        if (is_null($this->addressId)) {
            $value = $this->raw(CustomerChangeAddressAction::FIELD_ADDRESS_ID);
            $value = (string)$value;
            $this->addressId = $value;
        }
        return $this->addressId;
    }
    /**
     * @return Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            $value = $this->raw(CustomerChangeAddressAction::FIELD_ADDRESS);
            if (is_null($value)) {
                return $this->mapData(Address::class, null);
            }
            $value = $this->mapData(Address::class, $value);

            $this->address = $value;
        }
        return $this->address;
    }

    /**
     * @param string $addressId
     * @return $this
     */
    public function setAddressId(string $addressId)
    {
        $this->addressId = (string)$addressId;

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
