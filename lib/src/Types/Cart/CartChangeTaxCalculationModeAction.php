<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartChangeTaxCalculationModeAction extends CartUpdateAction
{
    const FIELD_TAX_CALCULATION_MODE = 'taxCalculationMode';

    /**
     * @return string
     */
    public function getTaxCalculationMode();

    /**
     * @param string $taxCalculationMode
     * @return $this
     */
    public function setTaxCalculationMode(string $taxCalculationMode);

}
