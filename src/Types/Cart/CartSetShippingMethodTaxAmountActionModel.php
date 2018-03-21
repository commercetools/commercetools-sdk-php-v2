<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

use Commercetools\Types\Cart\CartUpdateActionModel;

class CartSetShippingMethodTaxAmountActionModel extends CartUpdateActionModel implements CartSetShippingMethodTaxAmountAction {
    const DISCRIMINATOR_VALUE = 'setShippingMethodTaxAmount';

    /**
     * @var ExternalTaxAmountDraft
     */
    protected $externalTaxAmount;

    /**
     * @return ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount()
    {
        if (is_null($this->externalTaxAmount)) {
            $value = $this->raw(CartSetShippingMethodTaxAmountAction::FIELD_EXTERNAL_TAX_AMOUNT);
            if (is_null($value)) {
                return $this->mapData(ExternalTaxAmountDraft::class, null);
            }
            $value = $this->mapData(ExternalTaxAmountDraft::class, $value);

            $this->externalTaxAmount = $value;
        }
        return $this->externalTaxAmount;
    }

    /**
     * @param ExternalTaxAmountDraft $externalTaxAmount
     * @return $this
     */
    public function setExternalTaxAmount(ExternalTaxAmountDraft $externalTaxAmount)
    {
        $this->externalTaxAmount = $externalTaxAmount;

        return $this;
    }

}
