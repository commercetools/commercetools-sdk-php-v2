<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ShoppingListUpdateBuilder;
use Commercetools\Types\ShoppingList\ShoppingListAddLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListAddTextLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeLineItemQuantityAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeLineItemsOrderAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeNameAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemNameAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemQuantityAction;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemsOrderAction;
use Commercetools\Types\ShoppingList\ShoppingListRemoveLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListRemoveTextLineItemAction;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomFieldAction;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomTypeAction;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomerAction;
use Commercetools\Types\ShoppingList\ShoppingListSetDeleteDaysAfterLastModificationAction;
use Commercetools\Types\ShoppingList\ShoppingListSetDescriptionAction;
use Commercetools\Types\ShoppingList\ShoppingListSetKeyAction;
use Commercetools\Types\ShoppingList\ShoppingListSetLineItemCustomFieldAction;
use Commercetools\Types\ShoppingList\ShoppingListSetLineItemCustomTypeAction;
use Commercetools\Types\ShoppingList\ShoppingListSetSlugAction;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemCustomFieldAction;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemCustomTypeAction;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemDescriptionAction;
use Commercetools\Types\ShoppingList\ShoppingList;
use Commercetools\Types\ShoppingList\ShoppingListUpdate;
use Commercetools\Request\ByProjectKeyShoppingListsByIDPost;

use Commercetools\Types\ShoppingList\ShoppingListAddLineItemActionModel;
use Commercetools\Types\ShoppingList\ShoppingListAddTextLineItemActionModel;
use Commercetools\Types\ShoppingList\ShoppingListChangeLineItemQuantityActionModel;
use Commercetools\Types\ShoppingList\ShoppingListChangeLineItemsOrderActionModel;
use Commercetools\Types\ShoppingList\ShoppingListChangeNameActionModel;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemNameActionModel;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemQuantityActionModel;
use Commercetools\Types\ShoppingList\ShoppingListChangeTextLineItemsOrderActionModel;
use Commercetools\Types\ShoppingList\ShoppingListRemoveLineItemActionModel;
use Commercetools\Types\ShoppingList\ShoppingListRemoveTextLineItemActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomFieldActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomTypeActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetCustomerActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetDeleteDaysAfterLastModificationActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetDescriptionActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetKeyActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetLineItemCustomFieldActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetLineItemCustomTypeActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetSlugActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemCustomFieldActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemCustomTypeActionModel;
use Commercetools\Types\ShoppingList\ShoppingListSetTextLineItemDescriptionActionModel;

use PHPUnit\Framework\TestCase;

class ShoppingListBuilderTest extends TestCase {
    public function testAddLineItemCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->addLineItem(function($action) { static::assertInstanceOf(ShoppingListAddLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListAddLineItemAction::class, $update->getActions()->current());
    }

    public function testAddLineItemInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->addLineItem(new ShoppingListAddLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListAddLineItemAction::class, $update->getActions()->current());
    }

    public function testAddTextLineItemCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->addTextLineItem(function($action) { static::assertInstanceOf(ShoppingListAddTextLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListAddTextLineItemAction::class, $update->getActions()->current());
    }

    public function testAddTextLineItemInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->addTextLineItem(new ShoppingListAddTextLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListAddTextLineItemAction::class, $update->getActions()->current());
    }

    public function testChangeLineItemQuantityCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeLineItemQuantity(function($action) { static::assertInstanceOf(ShoppingListChangeLineItemQuantityAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeLineItemQuantityInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeLineItemQuantity(new ShoppingListChangeLineItemQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeLineItemsOrderCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeLineItemsOrder(function($action) { static::assertInstanceOf(ShoppingListChangeLineItemsOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeLineItemsOrderAction::class, $update->getActions()->current());
    }

    public function testChangeLineItemsOrderInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeLineItemsOrder(new ShoppingListChangeLineItemsOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeLineItemsOrderAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ShoppingListChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeName(new ShoppingListChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeTextLineItemNameCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeTextLineItemName(function($action) { static::assertInstanceOf(ShoppingListChangeTextLineItemNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeTextLineItemNameAction::class, $update->getActions()->current());
    }

    public function testChangeTextLineItemNameInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeTextLineItemName(new ShoppingListChangeTextLineItemNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeTextLineItemNameAction::class, $update->getActions()->current());
    }

    public function testChangeTextLineItemQuantityCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeTextLineItemQuantity(function($action) { static::assertInstanceOf(ShoppingListChangeTextLineItemQuantityAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeTextLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeTextLineItemQuantityInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeTextLineItemQuantity(new ShoppingListChangeTextLineItemQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeTextLineItemQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeTextLineItemsOrderCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeTextLineItemsOrder(function($action) { static::assertInstanceOf(ShoppingListChangeTextLineItemsOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeTextLineItemsOrderAction::class, $update->getActions()->current());
    }

    public function testChangeTextLineItemsOrderInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->changeTextLineItemsOrder(new ShoppingListChangeTextLineItemsOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListChangeTextLineItemsOrderAction::class, $update->getActions()->current());
    }

    public function testRemoveLineItemCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->removeLineItem(function($action) { static::assertInstanceOf(ShoppingListRemoveLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListRemoveLineItemAction::class, $update->getActions()->current());
    }

    public function testRemoveLineItemInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->removeLineItem(new ShoppingListRemoveLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListRemoveLineItemAction::class, $update->getActions()->current());
    }

    public function testRemoveTextLineItemCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->removeTextLineItem(function($action) { static::assertInstanceOf(ShoppingListRemoveTextLineItemAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListRemoveTextLineItemAction::class, $update->getActions()->current());
    }

    public function testRemoveTextLineItemInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->removeTextLineItem(new ShoppingListRemoveTextLineItemActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListRemoveTextLineItemAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(ShoppingListSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setCustomField(new ShoppingListSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(ShoppingListSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setCustomType(new ShoppingListSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomerCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setCustomer(function($action) { static::assertInstanceOf(ShoppingListSetCustomerAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetCustomerInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setCustomer(new ShoppingListSetCustomerActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetDeleteDaysAfterLastModificationCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setDeleteDaysAfterLastModification(function($action) { static::assertInstanceOf(ShoppingListSetDeleteDaysAfterLastModificationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetDeleteDaysAfterLastModificationAction::class, $update->getActions()->current());
    }

    public function testSetDeleteDaysAfterLastModificationInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setDeleteDaysAfterLastModification(new ShoppingListSetDeleteDaysAfterLastModificationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetDeleteDaysAfterLastModificationAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ShoppingListSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setDescription(new ShoppingListSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ShoppingListSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setKey(new ShoppingListSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setLineItemCustomField(function($action) { static::assertInstanceOf(ShoppingListSetLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomFieldInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setLineItemCustomField(new ShoppingListSetLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setLineItemCustomType(function($action) { static::assertInstanceOf(ShoppingListSetLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetLineItemCustomTypeInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setLineItemCustomType(new ShoppingListSetLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetSlugCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setSlug(function($action) { static::assertInstanceOf(ShoppingListSetSlugAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetSlugAction::class, $update->getActions()->current());
    }

    public function testSetSlugInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setSlug(new ShoppingListSetSlugActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetSlugAction::class, $update->getActions()->current());
    }

    public function testSetTextLineItemCustomFieldCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setTextLineItemCustomField(function($action) { static::assertInstanceOf(ShoppingListSetTextLineItemCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetTextLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetTextLineItemCustomFieldInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setTextLineItemCustomField(new ShoppingListSetTextLineItemCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetTextLineItemCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetTextLineItemCustomTypeCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setTextLineItemCustomType(function($action) { static::assertInstanceOf(ShoppingListSetTextLineItemCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetTextLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetTextLineItemCustomTypeInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setTextLineItemCustomType(new ShoppingListSetTextLineItemCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetTextLineItemCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetTextLineItemDescriptionCallback() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setTextLineItemDescription(function($action) { static::assertInstanceOf(ShoppingListSetTextLineItemDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetTextLineItemDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetTextLineItemDescriptionInstance() {
        $builder = new ShoppingListUpdateBuilder();
        $builder->setTextLineItemDescription(new ShoppingListSetTextLineItemDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShoppingListUpdate::class, $update);
        static::assertInstanceOf(ShoppingListSetTextLineItemDescriptionAction::class, $update->getActions()->current());
    }

}
