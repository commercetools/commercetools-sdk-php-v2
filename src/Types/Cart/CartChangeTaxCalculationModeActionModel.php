<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

class CartChangeTaxCalculationModeActionModel extends CartUpdateActionModel implements CartChangeTaxCalculationModeAction {
    const DISCRIMINATOR_VALUE = 'changeTaxCalculationMode';

    /**
     * @var string
     */
    protected $taxCalculationMode;

    /**
     * @return string
     */
    public function getTaxCalculationMode()
    {
        if (is_null($this->taxCalculationMode)) {
            $value = $this->raw(CartChangeTaxCalculationModeAction::FIELD_TAX_CALCULATION_MODE);
            $value = (string)$value;
            $this->taxCalculationMode = $value;
        }
        return $this->taxCalculationMode;
    }

    /**
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode)
    {
        $this->taxCalculationMode = (string)$taxCalculationMode;

        return $this;
    }

}
