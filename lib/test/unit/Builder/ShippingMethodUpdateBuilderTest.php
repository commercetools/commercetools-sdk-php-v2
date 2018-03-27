<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ShippingMethodUpdateBuilder;
use Commercetools\Types\ShippingMethod\ShippingMethodAddShippingRateAction;
use Commercetools\Types\ShippingMethod\ShippingMethodAddZoneAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeIsDefaultAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeNameAction;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeTaxCategoryAction;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveShippingRateAction;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveZoneAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetDescriptionAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetKeyAction;
use Commercetools\Types\ShippingMethod\ShippingMethodSetPredicateAction;
use Commercetools\Types\ShippingMethod\ShippingMethod;
use Commercetools\Types\ShippingMethod\ShippingMethodUpdate;
use Commercetools\Request\ByProjectKeyShippingMethodsByIDPost;

use Commercetools\Types\ShippingMethod\ShippingMethodAddShippingRateActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodAddZoneActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeIsDefaultActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeNameActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodChangeTaxCategoryActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveShippingRateActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodRemoveZoneActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodSetDescriptionActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodSetKeyActionModel;
use Commercetools\Types\ShippingMethod\ShippingMethodSetPredicateActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\ShippingMethod\ShippingMethodModel;


class ShippingMethodBuilderTest extends TestCase {
    public function testAddShippingRateCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->addShippingRate(function($action) { static::assertInstanceOf(ShippingMethodAddShippingRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodAddShippingRateAction::class, $update->getActions()->current());
    }

    public function testAddShippingRateInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->addShippingRate(new ShippingMethodAddShippingRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodAddShippingRateAction::class, $update->getActions()->current());
    }

    public function testAddZoneCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->addZone(function($action) { static::assertInstanceOf(ShippingMethodAddZoneAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodAddZoneAction::class, $update->getActions()->current());
    }

    public function testAddZoneInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->addZone(new ShippingMethodAddZoneActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodAddZoneAction::class, $update->getActions()->current());
    }

    public function testChangeIsDefaultCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->changeIsDefault(function($action) { static::assertInstanceOf(ShippingMethodChangeIsDefaultAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodChangeIsDefaultAction::class, $update->getActions()->current());
    }

    public function testChangeIsDefaultInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->changeIsDefault(new ShippingMethodChangeIsDefaultActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodChangeIsDefaultAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ShippingMethodChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->changeName(new ShippingMethodChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeTaxCategoryCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->changeTaxCategory(function($action) { static::assertInstanceOf(ShippingMethodChangeTaxCategoryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodChangeTaxCategoryAction::class, $update->getActions()->current());
    }

    public function testChangeTaxCategoryInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->changeTaxCategory(new ShippingMethodChangeTaxCategoryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodChangeTaxCategoryAction::class, $update->getActions()->current());
    }

    public function testRemoveShippingRateCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->removeShippingRate(function($action) { static::assertInstanceOf(ShippingMethodRemoveShippingRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodRemoveShippingRateAction::class, $update->getActions()->current());
    }

    public function testRemoveShippingRateInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->removeShippingRate(new ShippingMethodRemoveShippingRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodRemoveShippingRateAction::class, $update->getActions()->current());
    }

    public function testRemoveZoneCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->removeZone(function($action) { static::assertInstanceOf(ShippingMethodRemoveZoneAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodRemoveZoneAction::class, $update->getActions()->current());
    }

    public function testRemoveZoneInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->removeZone(new ShippingMethodRemoveZoneActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodRemoveZoneAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ShippingMethodSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->setDescription(new ShippingMethodSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ShippingMethodSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->setKey(new ShippingMethodSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetPredicateCallback() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->setPredicate(function($action) { static::assertInstanceOf(ShippingMethodSetPredicateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodSetPredicateAction::class, $update->getActions()->current());
    }

    public function testSetPredicateInstance() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->setPredicate(new ShippingMethodSetPredicateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodSetPredicateAction::class, $update->getActions()->current());
    }


    public function testReset() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->addShippingRate(new ShippingMethodAddShippingRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertInstanceOf(ShippingMethodAddShippingRateAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new ShippingMethodUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new ShippingMethodModel());
        static::assertInstanceOf(ShippingMethod::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new ShippingMethodUpdateBuilder();
        $builder->with(new ShippingMethodModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(ShippingMethodUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
