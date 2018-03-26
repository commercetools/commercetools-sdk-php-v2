<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\CartDiscountUpdateBuilder;
use Commercetools\Types\CartDiscount\CartDiscountChangeCartPredicateAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeIsActiveAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeNameAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeSortOrderAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeStackingModeAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeTargetAction;
use Commercetools\Types\CartDiscount\CartDiscountChangeValueAction;
use Commercetools\Types\CartDiscount\CartDiscountSetCustomFieldAction;
use Commercetools\Types\CartDiscount\CartDiscountSetCustomTypeAction;
use Commercetools\Types\CartDiscount\CartDiscountSetDescriptionAction;
use Commercetools\Types\CartDiscount\CartDiscountSetValidFromAction;
use Commercetools\Types\CartDiscount\CartDiscountSetValidUntilAction;
use Commercetools\Types\CartDiscount\CartDiscount;
use Commercetools\Types\CartDiscount\CartDiscountUpdate;
use Commercetools\Request\ByProjectKeyCartDiscountsByIDPost;

use Commercetools\Types\CartDiscount\CartDiscountChangeCartPredicateActionModel;
use Commercetools\Types\CartDiscount\CartDiscountChangeIsActiveActionModel;
use Commercetools\Types\CartDiscount\CartDiscountChangeNameActionModel;
use Commercetools\Types\CartDiscount\CartDiscountChangeRequiresDiscountCodeActionModel;
use Commercetools\Types\CartDiscount\CartDiscountChangeSortOrderActionModel;
use Commercetools\Types\CartDiscount\CartDiscountChangeStackingModeActionModel;
use Commercetools\Types\CartDiscount\CartDiscountChangeTargetActionModel;
use Commercetools\Types\CartDiscount\CartDiscountChangeValueActionModel;
use Commercetools\Types\CartDiscount\CartDiscountSetCustomFieldActionModel;
use Commercetools\Types\CartDiscount\CartDiscountSetCustomTypeActionModel;
use Commercetools\Types\CartDiscount\CartDiscountSetDescriptionActionModel;
use Commercetools\Types\CartDiscount\CartDiscountSetValidFromActionModel;
use Commercetools\Types\CartDiscount\CartDiscountSetValidUntilActionModel;

use PHPUnit\Framework\TestCase;

class CartDiscountBuilderTest extends TestCase {
    public function testChangeCartPredicateCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeCartPredicate(function($action) { static::assertInstanceOf(CartDiscountChangeCartPredicateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeCartPredicateAction::class, $update->getActions()->current());
    }

    public function testChangeCartPredicateInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeCartPredicate(new CartDiscountChangeCartPredicateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeCartPredicateAction::class, $update->getActions()->current());
    }

    public function testChangeIsActiveCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeIsActive(function($action) { static::assertInstanceOf(CartDiscountChangeIsActiveAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeIsActiveAction::class, $update->getActions()->current());
    }

    public function testChangeIsActiveInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeIsActive(new CartDiscountChangeIsActiveActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeIsActiveAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(CartDiscountChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeName(new CartDiscountChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeRequiresDiscountCodeCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeRequiresDiscountCode(function($action) { static::assertInstanceOf(CartDiscountChangeRequiresDiscountCodeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeRequiresDiscountCodeAction::class, $update->getActions()->current());
    }

    public function testChangeRequiresDiscountCodeInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeRequiresDiscountCode(new CartDiscountChangeRequiresDiscountCodeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeRequiresDiscountCodeAction::class, $update->getActions()->current());
    }

    public function testChangeSortOrderCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeSortOrder(function($action) { static::assertInstanceOf(CartDiscountChangeSortOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeSortOrderAction::class, $update->getActions()->current());
    }

    public function testChangeSortOrderInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeSortOrder(new CartDiscountChangeSortOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeSortOrderAction::class, $update->getActions()->current());
    }

    public function testChangeStackingModeCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeStackingMode(function($action) { static::assertInstanceOf(CartDiscountChangeStackingModeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeStackingModeAction::class, $update->getActions()->current());
    }

    public function testChangeStackingModeInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeStackingMode(new CartDiscountChangeStackingModeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeStackingModeAction::class, $update->getActions()->current());
    }

    public function testChangeTargetCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeTarget(function($action) { static::assertInstanceOf(CartDiscountChangeTargetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeTargetAction::class, $update->getActions()->current());
    }

    public function testChangeTargetInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeTarget(new CartDiscountChangeTargetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeTargetAction::class, $update->getActions()->current());
    }

    public function testChangeValueCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeValue(function($action) { static::assertInstanceOf(CartDiscountChangeValueAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeValueAction::class, $update->getActions()->current());
    }

    public function testChangeValueInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->changeValue(new CartDiscountChangeValueActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountChangeValueAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(CartDiscountSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setCustomField(new CartDiscountSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(CartDiscountSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setCustomType(new CartDiscountSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(CartDiscountSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setDescription(new CartDiscountSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetValidFromCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setValidFrom(function($action) { static::assertInstanceOf(CartDiscountSetValidFromAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetValidFromAction::class, $update->getActions()->current());
    }

    public function testSetValidFromInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setValidFrom(new CartDiscountSetValidFromActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetValidFromAction::class, $update->getActions()->current());
    }

    public function testSetValidUntilCallback() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setValidUntil(function($action) { static::assertInstanceOf(CartDiscountSetValidUntilAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetValidUntilAction::class, $update->getActions()->current());
    }

    public function testSetValidUntilInstance() {
        $builder = new CartDiscountUpdateBuilder();
        $builder->setValidUntil(new CartDiscountSetValidUntilActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CartDiscountUpdate::class, $update);
        static::assertInstanceOf(CartDiscountSetValidUntilAction::class, $update->getActions()->current());
    }

}
