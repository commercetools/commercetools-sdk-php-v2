<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\JsonObject;

interface PriceFunction extends JsonObject
{
    
    const FIELD_CURRENCY_CODE = 'currencyCode';
    const FIELD_FUNCTION = 'function';

    /**
     * <p>The currency code compliant to <a href="https://en.wikipedia.org/wiki/ISO_4217">ISO 4217</a>.</p>
     * @return string|null
     */
    public function getCurrencyCode();
    
    /**
     *
     * @return string|null
     */
    public function getFunction();
    public function setCurrencyCode(?string $currencyCode): void;
    
    public function setFunction(?string $function): void;
}