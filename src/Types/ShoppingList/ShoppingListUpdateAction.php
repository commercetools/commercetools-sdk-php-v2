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
        'changeLineItemQuantity' => Types\ShoppingList\ShoppingListChangeLineItemQuantityAction::class,
        'setTextLineItemCustomField' => Types\ShoppingList\ShoppingListSetTextLineItemCustomFieldAction::class,
        'setCustomType' => Types\ShoppingList\ShoppingListSetCustomTypeAction::class,
        'setTextLineItemDescription' => Types\ShoppingList\ShoppingListSetTextLineItemDescriptionAction::class,
        'setLineItemCustomField' => Types\ShoppingList\ShoppingListSetLineItemCustomFieldAction::class,
        'changeTextLineItemName' => Types\ShoppingList\ShoppingListChangeTextLineItemNameAction::class,
        'changeTextLineItemQuantity' => Types\ShoppingList\ShoppingListChangeTextLineItemQuantityAction::class,
        'setLineItemCustomType' => Types\ShoppingList\ShoppingListSetLineItemCustomTypeAction::class,
        'setKey' => Types\ShoppingList\ShoppingListSetKeyAction::class,
        'addTextLineItem' => Types\ShoppingList\ShoppingListAddTextLineItemAction::class,
        'setCustomer' => Types\ShoppingList\ShoppingListSetCustomerAction::class,
        'changeLineItemsOrder' => Types\ShoppingList\ShoppingListChangeLineItemsOrderAction::class,
        'removeLineItem' => Types\ShoppingList\ShoppingListRemoveLineItemAction::class,
        'setCustomField' => Types\ShoppingList\ShoppingListSetCustomFieldAction::class,
        'addLineItem' => Types\ShoppingList\ShoppingListAddLineItemAction::class,
        'removeTextLineItem' => Types\ShoppingList\ShoppingListRemoveTextLineItemAction::class,
        'setSlug' => Types\ShoppingList\ShoppingListSetSlugAction::class,
        'setDeleteDaysAfterLastModification' => Types\ShoppingList\ShoppingListSetDeleteDaysAfterLastModificationAction::class,
        'setDescription' => Types\ShoppingList\ShoppingListSetDescriptionAction::class,
        'setTextLineItemCustomType' => Types\ShoppingList\ShoppingListSetTextLineItemCustomTypeAction::class,
        'changeName' => Types\ShoppingList\ShoppingListChangeNameAction::class,
        'changeTextLineItemsOrder' => Types\ShoppingList\ShoppingListChangeTextLineItemsOrderAction::class,

    ];

}
