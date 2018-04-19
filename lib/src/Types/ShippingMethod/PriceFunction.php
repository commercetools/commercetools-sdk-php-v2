<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonObject;

interface PriceFunction extends JsonObject
{
    const FIELD_CURRENCY_CODE = 'currencyCode';
    const FIELD_FUNCTION = 'function';

    /**
     * @return string
     */
    public function getCurrencyCode();

    /**
     * @return string
     */
    public function getFunction();

    /**
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode);

    /**
     * @param string $function
     * @return $this
     */
    public function setFunction(string $function);

}
