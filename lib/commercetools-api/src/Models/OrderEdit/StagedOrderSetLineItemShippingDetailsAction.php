<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;
use Commercetools\Api\Models\Order\StagedOrderUpdateAction;

interface StagedOrderSetLineItemShippingDetailsAction extends StagedOrderUpdateAction
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    public function getShippingDetails();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}