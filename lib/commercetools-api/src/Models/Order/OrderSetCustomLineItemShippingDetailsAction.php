<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Order;

use Commercetools\Base\JsonObject;
use Commercetools\Api\Models\Cart\ItemShippingDetailsDraft;

interface OrderSetCustomLineItemShippingDetailsAction extends OrderUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_SHIPPING_DETAILS = 'shippingDetails';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return ItemShippingDetailsDraft|null
     */
    public function getShippingDetails();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setShippingDetails(?ItemShippingDetailsDraft $shippingDetails): void;
}