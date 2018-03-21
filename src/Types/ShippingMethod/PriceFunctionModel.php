<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonObjectModel;

class PriceFunctionModel extends JsonObjectModel implements PriceFunction {
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $function;

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        if (is_null($this->currencyCode)) {
            $value = $this->raw(PriceFunction::FIELD_CURRENCY_CODE);
            $value = (string)$value;
            $this->currencyCode = $value;
        }
        return $this->currencyCode;
    }
    /**
     * @return string
     */
    public function getFunction()
    {
        if (is_null($this->function)) {
            $value = $this->raw(PriceFunction::FIELD_FUNCTION);
            $value = (string)$value;
            $this->function = $value;
        }
        return $this->function;
    }

    /**
     * @param string $currencyCode
     * @return $this
     */
    public function setCurrencyCode(string $currencyCode)
    {
        $this->currencyCode = (string)$currencyCode;

        return $this;
    }
    /**
     * @param string $function
     * @return $this
     */
    public function setFunction(string $function)
    {
        $this->function = (string)$function;

        return $this;
    }

}
