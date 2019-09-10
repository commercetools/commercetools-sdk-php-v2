<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;

interface ShoppingListChangeTextLineItemQuantityAction extends ShoppingListUpdateAction
{
    
    const FIELD_TEXT_LINE_ITEM_ID = 'textLineItemId';
    const FIELD_QUANTITY = 'quantity';

    /**
     *
     * @return string|null
     */
    public function getTextLineItemId();
    
    /**
     *
     * @return int|null
     */
    public function getQuantity();
    public function setTextLineItemId(?string $textLineItemId): void;
    
    public function setQuantity(?int $quantity): void;
}