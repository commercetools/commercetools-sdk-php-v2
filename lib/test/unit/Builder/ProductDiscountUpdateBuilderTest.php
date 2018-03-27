<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ProductDiscountUpdateBuilder;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeIsActiveAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeNameAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangePredicateAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeSortOrderAction;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeValueAction;
use Commercetools\Types\ProductDiscount\ProductDiscountSetDescriptionAction;
use Commercetools\Types\ProductDiscount\ProductDiscountSetValidFromAction;
use Commercetools\Types\ProductDiscount\ProductDiscountSetValidUntilAction;
use Commercetools\Types\ProductDiscount\ProductDiscount;
use Commercetools\Types\ProductDiscount\ProductDiscountUpdate;
use Commercetools\Request\ByProjectKeyProductDiscountsByIDPost;

use Commercetools\Types\ProductDiscount\ProductDiscountChangeIsActiveActionModel;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeNameActionModel;
use Commercetools\Types\ProductDiscount\ProductDiscountChangePredicateActionModel;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeSortOrderActionModel;
use Commercetools\Types\ProductDiscount\ProductDiscountChangeValueActionModel;
use Commercetools\Types\ProductDiscount\ProductDiscountSetDescriptionActionModel;
use Commercetools\Types\ProductDiscount\ProductDiscountSetValidFromActionModel;
use Commercetools\Types\ProductDiscount\ProductDiscountSetValidUntilActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\ProductDiscount\ProductDiscountModel;


class ProductDiscountBuilderTest extends TestCase {
    public function testChangeIsActiveCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeIsActive(function($action) { static::assertInstanceOf(ProductDiscountChangeIsActiveAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeIsActiveAction::class, $update->getActions()->current());
    }

    public function testChangeIsActiveInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeIsActive(new ProductDiscountChangeIsActiveActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeIsActiveAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ProductDiscountChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeName(new ProductDiscountChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangePredicateCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changePredicate(function($action) { static::assertInstanceOf(ProductDiscountChangePredicateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangePredicateAction::class, $update->getActions()->current());
    }

    public function testChangePredicateInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changePredicate(new ProductDiscountChangePredicateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangePredicateAction::class, $update->getActions()->current());
    }

    public function testChangeSortOrderCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeSortOrder(function($action) { static::assertInstanceOf(ProductDiscountChangeSortOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeSortOrderAction::class, $update->getActions()->current());
    }

    public function testChangeSortOrderInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeSortOrder(new ProductDiscountChangeSortOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeSortOrderAction::class, $update->getActions()->current());
    }

    public function testChangeValueCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeValue(function($action) { static::assertInstanceOf(ProductDiscountChangeValueAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeValueAction::class, $update->getActions()->current());
    }

    public function testChangeValueInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeValue(new ProductDiscountChangeValueActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeValueAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ProductDiscountSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->setDescription(new ProductDiscountSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetValidFromCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->setValidFrom(function($action) { static::assertInstanceOf(ProductDiscountSetValidFromAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountSetValidFromAction::class, $update->getActions()->current());
    }

    public function testSetValidFromInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->setValidFrom(new ProductDiscountSetValidFromActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountSetValidFromAction::class, $update->getActions()->current());
    }

    public function testSetValidUntilCallback() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->setValidUntil(function($action) { static::assertInstanceOf(ProductDiscountSetValidUntilAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountSetValidUntilAction::class, $update->getActions()->current());
    }

    public function testSetValidUntilInstance() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->setValidUntil(new ProductDiscountSetValidUntilActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountSetValidUntilAction::class, $update->getActions()->current());
    }


    public function testReset() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->changeIsActive(new ProductDiscountChangeIsActiveActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertInstanceOf(ProductDiscountChangeIsActiveAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new ProductDiscountUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new ProductDiscountModel());
        static::assertInstanceOf(ProductDiscount::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new ProductDiscountUpdateBuilder();
        $builder->with(new ProductDiscountModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(ProductDiscountUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
