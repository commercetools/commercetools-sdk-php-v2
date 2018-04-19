<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartChangeTaxModeAction extends CartUpdateAction
{
    const FIELD_TAX_MODE = 'taxMode';

    /**
     * @return string
     */
    public function getTaxMode();

    /**
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode);

}
