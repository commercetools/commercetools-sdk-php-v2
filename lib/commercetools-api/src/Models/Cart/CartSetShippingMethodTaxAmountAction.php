<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartSetShippingMethodTaxAmountAction extends CartUpdateAction
{
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     * @return null|ExternalTaxAmountDraft
     */
    public function getExternalTaxAmount();

    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}
