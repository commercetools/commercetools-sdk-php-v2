<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartChangeTaxRoundingModeAction extends CartUpdateAction
{
    const FIELD_TAX_ROUNDING_MODE = 'taxRoundingMode';

    /**
     * @return string
     */
    public function getTaxRoundingMode();

    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode);

}
