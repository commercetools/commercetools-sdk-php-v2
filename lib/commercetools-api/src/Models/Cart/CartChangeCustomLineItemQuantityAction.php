<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\JsonObject;

interface CartChangeCustomLineItemQuantityAction extends CartUpdateAction
{
    
    const FIELD_CUSTOM_LINE_ITEM_ID = 'customLineItemId';
    const FIELD_QUANTITY = 'quantity';

    /**
     *
     * @return string|null
     */
    public function getCustomLineItemId();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    public function setCustomLineItemId(?string $customLineItemId): void;
    
    public function setQuantity(?int $quantity): void;
}