<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\CustomerGroupUpdateBuilder;
use Commercetools\Types\CustomerGroup\CustomerGroupChangeNameAction;
use Commercetools\Types\CustomerGroup\CustomerGroupSetKeyAction;
use Commercetools\Types\CustomerGroup\CustomerGroup;
use Commercetools\Types\CustomerGroup\CustomerGroupUpdate;
use Commercetools\Request\ByProjectKeyCustomerGroupsByIDPost;

use Commercetools\Types\CustomerGroup\CustomerGroupChangeNameActionModel;
use Commercetools\Types\CustomerGroup\CustomerGroupSetKeyActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\CustomerGroup\CustomerGroupModel;


class CustomerGroupBuilderTest extends TestCase {
    public function testChangeNameCallback() {
        $builder = new CustomerGroupUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(CustomerGroupChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerGroupUpdate::class, $update);
        static::assertInstanceOf(CustomerGroupChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new CustomerGroupUpdateBuilder();
        $builder->changeName(new CustomerGroupChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerGroupUpdate::class, $update);
        static::assertInstanceOf(CustomerGroupChangeNameAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new CustomerGroupUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(CustomerGroupSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CustomerGroupUpdate::class, $update);
        static::assertInstanceOf(CustomerGroupSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new CustomerGroupUpdateBuilder();
        $builder->setKey(new CustomerGroupSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerGroupUpdate::class, $update);
        static::assertInstanceOf(CustomerGroupSetKeyAction::class, $update->getActions()->current());
    }


    public function testReset() {
        $builder = new CustomerGroupUpdateBuilder();
        $builder->changeName(new CustomerGroupChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CustomerGroupUpdate::class, $update);
        static::assertInstanceOf(CustomerGroupChangeNameAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(CustomerGroupUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new CustomerGroupUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new CustomerGroupModel());
        static::assertInstanceOf(CustomerGroup::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new CustomerGroupUpdateBuilder();
        $builder->with(new CustomerGroupModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(CustomerGroupUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
