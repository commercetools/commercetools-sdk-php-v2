<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

use Commercetools\Types\Common\Address;

interface CustomerChangeAddressAction extends CustomerUpdateAction
{
    const FIELD_ADDRESS_ID = 'addressId';
    const FIELD_ADDRESS = 'address';

    /**
     * @return string
     */
    public function getAddressId();

    /**
     * @return Address
     */
    public function getAddress();

    /**
     * @param string $addressId
     * @return $this
     */
    public function setAddressId(string $addressId);

    /**
     * @param Address $address
     * @return $this
     */
    public function setAddress(Address $address);

}
