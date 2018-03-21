<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Cart;

interface CartSetShippingMethodTaxAmountAction extends CartUpdateAction {
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     * @return ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    /**
     * @param ExternalTaxAmountDraft $externalTaxAmount
     * @return $this
     */
    public function setExternalTaxAmount(ExternalTaxAmountDraft $externalTaxAmount);

}
