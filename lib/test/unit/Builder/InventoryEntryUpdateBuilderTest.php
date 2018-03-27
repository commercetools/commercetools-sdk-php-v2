<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\InventoryEntryUpdateBuilder;
use Commercetools\Types\Inventory\InventoryAddQuantityAction;
use Commercetools\Types\Inventory\InventoryChangeQuantityAction;
use Commercetools\Types\Inventory\InventoryRemoveQuantityAction;
use Commercetools\Types\Inventory\InventorySetCustomFieldAction;
use Commercetools\Types\Inventory\InventorySetCustomTypeAction;
use Commercetools\Types\Inventory\InventorySetExpectedDeliveryAction;
use Commercetools\Types\Inventory\InventorySetRestockableInDaysAction;
use Commercetools\Types\Inventory\InventorySetSupplyChannelAction;
use Commercetools\Types\Inventory\InventoryEntry;
use Commercetools\Types\Inventory\InventoryEntryUpdate;
use Commercetools\Request\ByProjectKeyInventoryByIDPost;

use Commercetools\Types\Inventory\InventoryAddQuantityActionModel;
use Commercetools\Types\Inventory\InventoryChangeQuantityActionModel;
use Commercetools\Types\Inventory\InventoryRemoveQuantityActionModel;
use Commercetools\Types\Inventory\InventorySetCustomFieldActionModel;
use Commercetools\Types\Inventory\InventorySetCustomTypeActionModel;
use Commercetools\Types\Inventory\InventorySetExpectedDeliveryActionModel;
use Commercetools\Types\Inventory\InventorySetRestockableInDaysActionModel;
use Commercetools\Types\Inventory\InventorySetSupplyChannelActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Inventory\InventoryEntryModel;


class InventoryEntryBuilderTest extends TestCase {
    public function testAddQuantityCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->addQuantity(function($action) { static::assertInstanceOf(InventoryAddQuantityAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventoryAddQuantityAction::class, $update->getActions()->current());
    }

    public function testAddQuantityInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->addQuantity(new InventoryAddQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventoryAddQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeQuantityCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->changeQuantity(function($action) { static::assertInstanceOf(InventoryChangeQuantityAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventoryChangeQuantityAction::class, $update->getActions()->current());
    }

    public function testChangeQuantityInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->changeQuantity(new InventoryChangeQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventoryChangeQuantityAction::class, $update->getActions()->current());
    }

    public function testRemoveQuantityCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->removeQuantity(function($action) { static::assertInstanceOf(InventoryRemoveQuantityAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventoryRemoveQuantityAction::class, $update->getActions()->current());
    }

    public function testRemoveQuantityInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->removeQuantity(new InventoryRemoveQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventoryRemoveQuantityAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(InventorySetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setCustomField(new InventorySetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(InventorySetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setCustomType(new InventorySetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetExpectedDeliveryCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setExpectedDelivery(function($action) { static::assertInstanceOf(InventorySetExpectedDeliveryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetExpectedDeliveryAction::class, $update->getActions()->current());
    }

    public function testSetExpectedDeliveryInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setExpectedDelivery(new InventorySetExpectedDeliveryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetExpectedDeliveryAction::class, $update->getActions()->current());
    }

    public function testSetRestockableInDaysCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setRestockableInDays(function($action) { static::assertInstanceOf(InventorySetRestockableInDaysAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetRestockableInDaysAction::class, $update->getActions()->current());
    }

    public function testSetRestockableInDaysInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setRestockableInDays(new InventorySetRestockableInDaysActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetRestockableInDaysAction::class, $update->getActions()->current());
    }

    public function testSetSupplyChannelCallback() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setSupplyChannel(function($action) { static::assertInstanceOf(InventorySetSupplyChannelAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetSupplyChannelAction::class, $update->getActions()->current());
    }

    public function testSetSupplyChannelInstance() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->setSupplyChannel(new InventorySetSupplyChannelActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventorySetSupplyChannelAction::class, $update->getActions()->current());
    }


    public function testReset() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->addQuantity(new InventoryAddQuantityActionModel());
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertInstanceOf(InventoryAddQuantityAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new InventoryEntryUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new InventoryEntryModel());
        static::assertInstanceOf(InventoryEntry::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new InventoryEntryUpdateBuilder();
        $builder->with(new InventoryEntryModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(InventoryEntryUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
