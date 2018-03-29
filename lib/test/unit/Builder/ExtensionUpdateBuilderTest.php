<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\ExtensionUpdateBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Extension\ExtensionChangeDestinationAction;
use Commercetools\Types\Extension\ExtensionChangeTriggersAction;
use Commercetools\Types\Extension\ExtensionSetKeyAction;
use Commercetools\Types\Extension\Extension;
use Commercetools\Types\Extension\ExtensionUpdate;
use Commercetools\Request\ByProjectKeyExtensionsByIDPost;

use Commercetools\Types\Extension\ExtensionChangeDestinationActionModel;
use Commercetools\Types\Extension\ExtensionChangeTriggersActionModel;
use Commercetools\Types\Extension\ExtensionSetKeyActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Extension\ExtensionModel;


class ExtensionBuilderTest extends TestCase {
    public function testChangeDestinationCallback() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeDestination(function($action) { static::assertInstanceOf(ExtensionChangeDestinationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeDestinationAction::class, $update->getActions()->current());
    }

    public function testChangeDestinationInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ExtensionUpdateBuilder();
        $builder->changeDestination(function($action) { static::assertInstanceOf(ExtensionChangeDestinationAction::class, $action); return []; });
    }

    public function testChangeDestinationInstance() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeDestination(new ExtensionChangeDestinationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeDestinationAction::class, $update->getActions()->current());
    }

    public function testChangeDestinationInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ExtensionUpdateBuilder();
        $builder->changeDestination([]);
    }

    public function testChangeTriggersCallback() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeTriggers(function($action) { static::assertInstanceOf(ExtensionChangeTriggersAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeTriggersAction::class, $update->getActions()->current());
    }

    public function testChangeTriggersInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ExtensionUpdateBuilder();
        $builder->changeTriggers(function($action) { static::assertInstanceOf(ExtensionChangeTriggersAction::class, $action); return []; });
    }

    public function testChangeTriggersInstance() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeTriggers(new ExtensionChangeTriggersActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeTriggersAction::class, $update->getActions()->current());
    }

    public function testChangeTriggersInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ExtensionUpdateBuilder();
        $builder->changeTriggers([]);
    }

    public function testSetKeyCallback() {
        $builder = new ExtensionUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ExtensionSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ExtensionUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ExtensionSetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new ExtensionUpdateBuilder();
        $builder->setKey(new ExtensionSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ExtensionUpdateBuilder();
        $builder->setKey([]);
    }


    public function testReset() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeDestination(new ExtensionChangeDestinationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeDestinationAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new ExtensionUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new ExtensionModel());
        static::assertInstanceOf(Extension::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new ExtensionUpdateBuilder();
        $builder->with(new ExtensionModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
