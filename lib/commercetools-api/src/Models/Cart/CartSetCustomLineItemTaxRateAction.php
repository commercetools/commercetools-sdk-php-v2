<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetCustomLineItemTaxRateAction extends CartUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_EXTERNAL_TAX_RATE = 'externalTaxRate';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return ExternalTaxRateDraft|null
     */
    public function getExternalTaxRate();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setExternalTaxRate(?ExternalTaxRateDraft $externalTaxRate): void;
}