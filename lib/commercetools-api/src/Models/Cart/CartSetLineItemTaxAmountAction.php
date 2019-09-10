<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartSetLineItemTaxAmountAction extends CartUpdateAction
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_EXTERNAL_TAX_AMOUNT = 'externalTaxAmount';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return ExternalTaxAmountDraft|null
     */
    public function getExternalTaxAmount();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setExternalTaxAmount(?ExternalTaxAmountDraft $externalTaxAmount): void;
}