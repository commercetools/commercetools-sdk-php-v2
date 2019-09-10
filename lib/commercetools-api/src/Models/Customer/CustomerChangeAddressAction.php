<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Common\Address;

interface CustomerChangeAddressAction extends CustomerUpdateAction
{
    
    const FIELD_ADDRESS_ID = 'addressId';
    const FIELD_ADDRESS = 'address';

    /**
     *
     * @return string|null
     */
    public function getAddressId();
    
    /**
     *
     * @return Address|null
     */
    public function getAddress();
    public function setAddressId(?string $addressId): void;
    
    public function setAddress(?Address $address): void;
}