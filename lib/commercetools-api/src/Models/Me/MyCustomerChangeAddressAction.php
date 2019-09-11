<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Address;

interface MyCustomerChangeAddressAction extends MyCustomerUpdateAction
{
    const FIELD_ADDRESS_ID = 'addressId';
    const FIELD_ADDRESS = 'address';

    /**
     * @return null|string
     */
    public function getAddressId();

    /**
     * @return null|Address
     */
    public function getAddress();

    public function setAddressId(?string $addressId): void;

    public function setAddress(?Address $address): void;
}
