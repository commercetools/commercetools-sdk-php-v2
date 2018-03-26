<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ExtensionUpdateBuilder;
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

class ExtensionBuilderTest extends TestCase {
    public function testChangeDestinationCallback() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeDestination(function ($action) { static::assertInstanceOf(ExtensionChangeDestinationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeDestinationAction::class, $update->getActions()->current());
    }

    public function testChangeDestinationInstance() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeDestination(new ExtensionChangeDestinationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeDestinationAction::class, $update->getActions()->current());
    }

    public function testChangeTriggersCallback() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeTriggers(function ($action) { static::assertInstanceOf(ExtensionChangeTriggersAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeTriggersAction::class, $update->getActions()->current());
    }

    public function testChangeTriggersInstance() {
        $builder = new ExtensionUpdateBuilder();
        $builder->changeTriggers(new ExtensionChangeTriggersActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionChangeTriggersAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new ExtensionUpdateBuilder();
        $builder->setKey(function ($action) { static::assertInstanceOf(ExtensionSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new ExtensionUpdateBuilder();
        $builder->setKey(new ExtensionSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ExtensionUpdate::class, $update);
        static::assertInstanceOf(ExtensionSetKeyAction::class, $update->getActions()->current());
    }

}
