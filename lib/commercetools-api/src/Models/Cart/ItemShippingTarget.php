<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface ItemShippingTarget extends JsonObject
{
    
    const FIELD_ADDRESS_KEY = 'addressKey';
    const FIELD_QUANTITY = 'quantity';

    /**
     *
     * @return string|null
     */
    public function getAddressKey();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    public function setAddressKey(?string $addressKey): void;
    
    public function setQuantity(?int $quantity): void;
}