<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

interface CartSetCustomLineItemTaxRateAction extends CartUpdateAction
{
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     * @return null|string
     */
    public function getCustomLineItemId();

    /**
     * @return null|ExternalTaxRateDraft
     */
    public function getExternalTaxRate();

    public function setCustomLineItemId(?string $customLineItemId): void;

    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}
