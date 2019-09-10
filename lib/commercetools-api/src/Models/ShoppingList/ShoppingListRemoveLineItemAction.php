<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;

interface ShoppingListRemoveLineItemAction extends ShoppingListUpdateAction
{
    
    const FIELD_LINE_ITEM_ID = 'lineItemId';
    const FIELD_QUANTITY = 'quantity';

    /**
     *
     * @return string|null
     */
    public function getLineItemId();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    public function setLineItemId(?string $lineItemId): void;
    
    public function setQuantity(?int $quantity): void;
}