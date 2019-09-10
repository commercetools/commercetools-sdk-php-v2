<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetCustomLineItemTaxAmountAction extends CartUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return ExternalTaxAmountDraft|null
     */
    public function getExternalTaxAmount();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}