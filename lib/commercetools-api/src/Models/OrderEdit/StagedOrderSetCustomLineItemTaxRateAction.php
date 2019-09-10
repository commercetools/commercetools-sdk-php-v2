<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ExternalTaxRateDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetCustomLineItemTaxRateAction extends StagedOrderUpdateAction
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