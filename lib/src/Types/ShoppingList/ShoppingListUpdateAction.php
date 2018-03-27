<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShoppingList;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ShoppingListUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addLineItem' => Types\ShoppingList\ShoppingListAddLineItemAction::class,
        'addTextLineItem' => Types\ShoppingList\ShoppingListAddTextLineItemAction::class,
        'changeLineItemQuantity' => Types\ShoppingList\ShoppingListChangeLineItemQuantityAction::class,
        'changeLineItemsOrder' => Types\ShoppingList\ShoppingListChangeLineItemsOrderAction::class,
        'changeName' => Types\ShoppingList\ShoppingListChangeNameAction::class,
        'changeTextLineItemName' => Types\ShoppingList\ShoppingListChangeTextLineItemNameAction::class,
        'changeTextLineItemQuantity' => Types\ShoppingList\ShoppingListChangeTextLineItemQuantityAction::class,
        'changeTextLineItemsOrder' => Types\ShoppingList\ShoppingListChangeTextLineItemsOrderAction::class,
        'removeLineItem' => Types\ShoppingList\ShoppingListRemoveLineItemAction::class,
        'removeTextLineItem' => Types\ShoppingList\ShoppingListRemoveTextLineItemAction::class,
        'setCustomField' => Types\ShoppingList\ShoppingListSetCustomFieldAction::class,
        'setCustomType' => Types\ShoppingList\ShoppingListSetCustomTypeAction::class,
        'setCustomer' => Types\ShoppingList\ShoppingListSetCustomerAction::class,
        'setDeleteDaysAfterLastModification' => Types\ShoppingList\ShoppingListSetDeleteDaysAfterLastModificationAction::class,
        'setDescription' => Types\ShoppingList\ShoppingListSetDescriptionAction::class,
        'setKey' => Types\ShoppingList\ShoppingListSetKeyAction::class,
        'setLineItemCustomField' => Types\ShoppingList\ShoppingListSetLineItemCustomFieldAction::class,
        'setLineItemCustomType' => Types\ShoppingList\ShoppingListSetLineItemCustomTypeAction::class,
        'setSlug' => Types\ShoppingList\ShoppingListSetSlugAction::class,
        'setTextLineItemCustomField' => Types\ShoppingList\ShoppingListSetTextLineItemCustomFieldAction::class,
        'setTextLineItemCustomType' => Types\ShoppingList\ShoppingListSetTextLineItemCustomTypeAction::class,
        'setTextLineItemDescription' => Types\ShoppingList\ShoppingListSetTextLineItemDescriptionAction::class,

    ];

}
