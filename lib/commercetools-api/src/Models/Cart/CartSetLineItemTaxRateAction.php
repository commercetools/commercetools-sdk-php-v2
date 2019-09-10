<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartSetLineItemTaxRateAction extends CartUpdateAction
{
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return null|string
     */
    public function getLineItemId();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    public function setLineItemId(?string $lineItemId): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
