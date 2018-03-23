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
        'setLineItemCustomType' => Types\ShoppingList\ShoppingListSetLineItemCustomTypeAction::class,
        'setTextLineItemDescription' => Types\ShoppingList\ShoppingListSetTextLineItemDescriptionAction::class,
        'removeTextLineItem' => Types\ShoppingList\ShoppingListRemoveTextLineItemAction::class,
        'setTextLineItemCustomField' => Types\ShoppingList\ShoppingListSetTextLineItemCustomFieldAction::class,
        'setDescription' => Types\ShoppingList\ShoppingListSetDescriptionAction::class,
        'changeLineItemsOrder' => Types\ShoppingList\ShoppingListChangeLineItemsOrderAction::class,
        'changeName' => Types\ShoppingList\ShoppingListChangeNameAction::class,
        'setKey' => Types\ShoppingList\ShoppingListSetKeyAction::class,
        'setDeleteDaysAfterLastModification' => Types\ShoppingList\ShoppingListSetDeleteDaysAfterLastModificationAction::class,
        'setCustomField' => Types\ShoppingList\ShoppingListSetCustomFieldAction::class,
        'changeTextLineItemQuantity' => Types\ShoppingList\ShoppingListChangeTextLineItemQuantityAction::class,
        'addTextLineItem' => Types\ShoppingList\ShoppingListAddTextLineItemAction::class,
        'removeLineItem' => Types\ShoppingList\ShoppingListRemoveLineItemAction::class,
        'changeTextLineItemsOrder' => Types\ShoppingList\ShoppingListChangeTextLineItemsOrderAction::class,
        'setLineItemCustomField' => Types\ShoppingList\ShoppingListSetLineItemCustomFieldAction::class,
        'setCustomType' => Types\ShoppingList\ShoppingListSetCustomTypeAction::class,
        'setCustomer' => Types\ShoppingList\ShoppingListSetCustomerAction::class,
        'setSlug' => Types\ShoppingList\ShoppingListSetSlugAction::class,
        'changeLineItemQuantity' => Types\ShoppingList\ShoppingListChangeLineItemQuantityAction::class,
        'changeTextLineItemName' => Types\ShoppingList\ShoppingListChangeTextLineItemNameAction::class,
        'setTextLineItemCustomType' => Types\ShoppingList\ShoppingListSetTextLineItemCustomTypeAction::class,

    ];

}
