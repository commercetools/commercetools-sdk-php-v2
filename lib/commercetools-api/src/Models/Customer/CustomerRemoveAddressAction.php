<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\JsonObject;

interface CustomerRemoveAddressAction extends CustomerUpdateAction
{
    
    const FIELD_ADDRESS_ID = 'addressId';

    /**
     *
     * @return string|null
     */
    public function getAddressId();
    public function setAddressId(?string $addressId): void;
}