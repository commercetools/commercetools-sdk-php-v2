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
        'changeLineItemsOrder' => Types\ShoppingList\ShoppingListChangeLineItemsOrderAction::class,
        'setTextLineItemCustomType' => Types\ShoppingList\ShoppingListSetTextLineItemCustomTypeAction::class,
        'setCustomer' => Types\ShoppingList\ShoppingListSetCustomerAction::class,
        'setLineItemCustomType' => Types\ShoppingList\ShoppingListSetLineItemCustomTypeAction::class,
        'changeTextLineItemQuantity' => Types\ShoppingList\ShoppingListChangeTextLineItemQuantityAction::class,
        'changeTextLineItemsOrder' => Types\ShoppingList\ShoppingListChangeTextLineItemsOrderAction::class,
        'setSlug' => Types\ShoppingList\ShoppingListSetSlugAction::class,
        'removeLineItem' => Types\ShoppingList\ShoppingListRemoveLineItemAction::class,
        'setLineItemCustomField' => Types\ShoppingList\ShoppingListSetLineItemCustomFieldAction::class,
        'changeLineItemQuantity' => Types\ShoppingList\ShoppingListChangeLineItemQuantityAction::class,
        'setDeleteDaysAfterLastModification' => Types\ShoppingList\ShoppingListSetDeleteDaysAfterLastModificationAction::class,
        'changeName' => Types\ShoppingList\ShoppingListChangeNameAction::class,
        'removeTextLineItem' => Types\ShoppingList\ShoppingListRemoveTextLineItemAction::class,
        'setCustomType' => Types\ShoppingList\ShoppingListSetCustomTypeAction::class,
        'addTextLineItem' => Types\ShoppingList\ShoppingListAddTextLineItemAction::class,
        'setCustomField' => Types\ShoppingList\ShoppingListSetCustomFieldAction::class,
        'setTextLineItemCustomField' => Types\ShoppingList\ShoppingListSetTextLineItemCustomFieldAction::class,
        'setDescription' => Types\ShoppingList\ShoppingListSetDescriptionAction::class,
        'setKey' => Types\ShoppingList\ShoppingListSetKeyAction::class,
        'setTextLineItemDescription' => Types\ShoppingList\ShoppingListSetTextLineItemDescriptionAction::class,
        'changeTextLineItemName' => Types\ShoppingList\ShoppingListChangeTextLineItemNameAction::class,
        'addLineItem' => Types\ShoppingList\ShoppingListAddLineItemAction::class,

    ];

}
