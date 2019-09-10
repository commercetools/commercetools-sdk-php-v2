<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ExternalLineItemTotalPrice;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetLineItemTotalPriceAction extends StagedOrderUpdateAction
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_EXTERNAL_TOTAL_PRICE = 'externalTotalPrice';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return ExternalLineItemTotalPrice|null
     */
    public function getExternalTotalPrice();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setExternalTotalPrice(?ExternalLineItemTotalPrice $externalTotalPrice): void;
}