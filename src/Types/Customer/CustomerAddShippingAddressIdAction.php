<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Customer;

interface CustomerAddShippingAddressIdAction extends CustomerUpdateAction {
    const FIELD_ADDRESS_ID = 'addressId';

    /**
     * @return string
     */
    public function getAddressId();

    /**
     * @param string $addressId
     * @return $this
     */
    public function setAddressId(string $addressId);

}
