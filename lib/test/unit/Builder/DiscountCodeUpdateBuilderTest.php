<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\DiscountCodeUpdateBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\DiscountCode\DiscountCodeChangeCartDiscountsAction;
use Commercetools\Types\DiscountCode\DiscountCodeChangeGroupsAction;
use Commercetools\Types\DiscountCode\DiscountCodeChangeIsActiveAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetCartPredicateAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetDescriptionAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetMaxApplicationsAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetMaxApplicationsPerCustomerAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetNameAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetValidFromAction;
use Commercetools\Types\DiscountCode\DiscountCodeSetValidUntilAction;
use Commercetools\Types\DiscountCode\DiscountCode;
use Commercetools\Types\DiscountCode\DiscountCodeUpdate;
use Commercetools\Request\ByProjectKeyDiscountCodesByIDPost;

use Commercetools\Types\DiscountCode\DiscountCodeChangeCartDiscountsActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeChangeGroupsActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeChangeIsActiveActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeSetCartPredicateActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeSetDescriptionActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeSetMaxApplicationsActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeSetMaxApplicationsPerCustomerActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeSetNameActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeSetValidFromActionModel;
use Commercetools\Types\DiscountCode\DiscountCodeSetValidUntilActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\DiscountCode\DiscountCodeModel;


class DiscountCodeBuilderTest extends TestCase {
    public function testChangeCartDiscountsCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeCartDiscounts(function($action) { static::assertInstanceOf(DiscountCodeChangeCartDiscountsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeChangeCartDiscountsAction::class, $update->getActions()->current());
    }

    public function testChangeCartDiscountsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeCartDiscounts(function($action) { static::assertInstanceOf(DiscountCodeChangeCartDiscountsAction::class, $action); return []; });
    }

    public function testChangeCartDiscountsInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeCartDiscounts(new DiscountCodeChangeCartDiscountsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeChangeCartDiscountsAction::class, $update->getActions()->current());
    }

    public function testChangeCartDiscountsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeCartDiscounts([]);
    }

    public function testChangeGroupsCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeGroups(function($action) { static::assertInstanceOf(DiscountCodeChangeGroupsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeChangeGroupsAction::class, $update->getActions()->current());
    }

    public function testChangeGroupsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeGroups(function($action) { static::assertInstanceOf(DiscountCodeChangeGroupsAction::class, $action); return []; });
    }

    public function testChangeGroupsInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeGroups(new DiscountCodeChangeGroupsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeChangeGroupsAction::class, $update->getActions()->current());
    }

    public function testChangeGroupsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeGroups([]);
    }

    public function testChangeIsActiveCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeIsActive(function($action) { static::assertInstanceOf(DiscountCodeChangeIsActiveAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeChangeIsActiveAction::class, $update->getActions()->current());
    }

    public function testChangeIsActiveInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeIsActive(function($action) { static::assertInstanceOf(DiscountCodeChangeIsActiveAction::class, $action); return []; });
    }

    public function testChangeIsActiveInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeIsActive(new DiscountCodeChangeIsActiveActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeChangeIsActiveAction::class, $update->getActions()->current());
    }

    public function testChangeIsActiveInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeIsActive([]);
    }

    public function testSetCartPredicateCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setCartPredicate(function($action) { static::assertInstanceOf(DiscountCodeSetCartPredicateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetCartPredicateAction::class, $update->getActions()->current());
    }

    public function testSetCartPredicateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setCartPredicate(function($action) { static::assertInstanceOf(DiscountCodeSetCartPredicateAction::class, $action); return []; });
    }

    public function testSetCartPredicateInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setCartPredicate(new DiscountCodeSetCartPredicateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetCartPredicateAction::class, $update->getActions()->current());
    }

    public function testSetCartPredicateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setCartPredicate([]);
    }

    public function testSetDescriptionCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(DiscountCodeSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(DiscountCodeSetDescriptionAction::class, $action); return []; });
    }

    public function testSetDescriptionInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setDescription(new DiscountCodeSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setDescription([]);
    }

    public function testSetMaxApplicationsCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplications(function($action) { static::assertInstanceOf(DiscountCodeSetMaxApplicationsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetMaxApplicationsAction::class, $update->getActions()->current());
    }

    public function testSetMaxApplicationsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplications(function($action) { static::assertInstanceOf(DiscountCodeSetMaxApplicationsAction::class, $action); return []; });
    }

    public function testSetMaxApplicationsInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplications(new DiscountCodeSetMaxApplicationsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetMaxApplicationsAction::class, $update->getActions()->current());
    }

    public function testSetMaxApplicationsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplications([]);
    }

    public function testSetMaxApplicationsPerCustomerCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplicationsPerCustomer(function($action) { static::assertInstanceOf(DiscountCodeSetMaxApplicationsPerCustomerAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetMaxApplicationsPerCustomerAction::class, $update->getActions()->current());
    }

    public function testSetMaxApplicationsPerCustomerInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplicationsPerCustomer(function($action) { static::assertInstanceOf(DiscountCodeSetMaxApplicationsPerCustomerAction::class, $action); return []; });
    }

    public function testSetMaxApplicationsPerCustomerInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplicationsPerCustomer(new DiscountCodeSetMaxApplicationsPerCustomerActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetMaxApplicationsPerCustomerAction::class, $update->getActions()->current());
    }

    public function testSetMaxApplicationsPerCustomerInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setMaxApplicationsPerCustomer([]);
    }

    public function testSetNameCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setName(function($action) { static::assertInstanceOf(DiscountCodeSetNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetNameAction::class, $update->getActions()->current());
    }

    public function testSetNameInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setName(function($action) { static::assertInstanceOf(DiscountCodeSetNameAction::class, $action); return []; });
    }

    public function testSetNameInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setName(new DiscountCodeSetNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetNameAction::class, $update->getActions()->current());
    }

    public function testSetNameInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setName([]);
    }

    public function testSetValidFromCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidFrom(function($action) { static::assertInstanceOf(DiscountCodeSetValidFromAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetValidFromAction::class, $update->getActions()->current());
    }

    public function testSetValidFromInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidFrom(function($action) { static::assertInstanceOf(DiscountCodeSetValidFromAction::class, $action); return []; });
    }

    public function testSetValidFromInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidFrom(new DiscountCodeSetValidFromActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetValidFromAction::class, $update->getActions()->current());
    }

    public function testSetValidFromInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidFrom([]);
    }

    public function testSetValidUntilCallback() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidUntil(function($action) { static::assertInstanceOf(DiscountCodeSetValidUntilAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetValidUntilAction::class, $update->getActions()->current());
    }

    public function testSetValidUntilInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidUntil(function($action) { static::assertInstanceOf(DiscountCodeSetValidUntilAction::class, $action); return []; });
    }

    public function testSetValidUntilInstance() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidUntil(new DiscountCodeSetValidUntilActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeSetValidUntilAction::class, $update->getActions()->current());
    }

    public function testSetValidUntilInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new DiscountCodeUpdateBuilder();
        $builder->setValidUntil([]);
    }


    public function testReset() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->changeCartDiscounts(new DiscountCodeChangeCartDiscountsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertInstanceOf(DiscountCodeChangeCartDiscountsAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new DiscountCodeUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new DiscountCodeModel());
        static::assertInstanceOf(DiscountCode::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new DiscountCodeUpdateBuilder();
        $builder->with(new DiscountCodeModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(DiscountCodeUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
