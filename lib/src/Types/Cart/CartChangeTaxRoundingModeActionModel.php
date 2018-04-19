<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Cart\CartUpdateActionModel;

class CartChangeTaxRoundingModeActionModel extends CartUpdateActionModel implements CartChangeTaxRoundingModeAction
{
    const DISCRIMINATOR_VALUE = 'changeTaxRoundingMode';

    /**
     * @var string
     */
    protected $taxRoundingMode;

    /**
     * @return string
     */
    public function getTaxRoundingMode()
    {
        if (is_null($this->taxRoundingMode)) {
            $value = $this->raw(CartChangeTaxRoundingModeAction::FIELD_TAX_ROUNDING_MODE);
            $value = (string)$value;
            $this->taxRoundingMode = $value;
        }
        return $this->taxRoundingMode;
    }

    /**
     * @param string $taxRoundingMode
     * @return $this
     */
    public function setTaxRoundingMode(string $taxRoundingMode)
    {
        $this->taxRoundingMode = (string)$taxRoundingMode;

        return $this;
    }

}
