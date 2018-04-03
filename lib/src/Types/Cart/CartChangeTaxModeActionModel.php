<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartChangeTaxModeActionModel extends CartUpdateActionModel implements CartChangeTaxModeAction {
    const DISCRIMINATOR_VALUE = 'changeTaxMode';

    /**
     * @var string
     */
    protected $taxMode;

    /**
     * @return string
     */
    public function getTaxMode()
    {
        if (is_null($this->taxMode)) {
            $value = $this->raw(CartChangeTaxModeAction::FIELD_TAX_MODE);
            $value = (string)$value;
            $this->taxMode = $value;
        }
        return $this->taxMode;
    }

    /**
     * @param string $taxMode
     * @return $this
     */
    public function setTaxMode(string $taxMode)
    {
        $this->taxMode = (string)$taxMode;

        return $this;
    }

}
