<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObject;

interface ShoppingListChangeLineItemsOrderAction extends ShoppingListUpdateAction
{
    
    const FIELD_LINE_ITEM_ORDER = 'lineItemOrder';

    /**
     *
     * @return array|null
     */
    public function getLineItemOrder();
    public function setLineItemOrder(?array $lineItemOrder): void;
}