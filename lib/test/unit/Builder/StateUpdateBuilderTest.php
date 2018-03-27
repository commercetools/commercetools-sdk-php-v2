<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\StateUpdateBuilder;
use Commercetools\Types\State\StateAddRolesAction;
use Commercetools\Types\State\StateChangeInitialAction;
use Commercetools\Types\State\StateChangeKeyAction;
use Commercetools\Types\State\StateChangeTypeAction;
use Commercetools\Types\State\StateRemoveRolesAction;
use Commercetools\Types\State\StateSetDescriptionAction;
use Commercetools\Types\State\StateSetNameAction;
use Commercetools\Types\State\StateSetRolesAction;
use Commercetools\Types\State\StateSetTransitionsAction;
use Commercetools\Types\State\State;
use Commercetools\Types\State\StateUpdate;
use Commercetools\Request\ByProjectKeyStatesByIDPost;

use Commercetools\Types\State\StateAddRolesActionModel;
use Commercetools\Types\State\StateChangeInitialActionModel;
use Commercetools\Types\State\StateChangeKeyActionModel;
use Commercetools\Types\State\StateChangeTypeActionModel;
use Commercetools\Types\State\StateRemoveRolesActionModel;
use Commercetools\Types\State\StateSetDescriptionActionModel;
use Commercetools\Types\State\StateSetNameActionModel;
use Commercetools\Types\State\StateSetRolesActionModel;
use Commercetools\Types\State\StateSetTransitionsActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\State\StateModel;


class StateBuilderTest extends TestCase {
    public function testAddRolesCallback() {
        $builder = new StateUpdateBuilder();
        $builder->addRoles(function($action) { static::assertInstanceOf(StateAddRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateAddRolesAction::class, $update->getActions()->current());
    }

    public function testAddRolesInstance() {
        $builder = new StateUpdateBuilder();
        $builder->addRoles(new StateAddRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateAddRolesAction::class, $update->getActions()->current());
    }

    public function testChangeInitialCallback() {
        $builder = new StateUpdateBuilder();
        $builder->changeInitial(function($action) { static::assertInstanceOf(StateChangeInitialAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeInitialAction::class, $update->getActions()->current());
    }

    public function testChangeInitialInstance() {
        $builder = new StateUpdateBuilder();
        $builder->changeInitial(new StateChangeInitialActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeInitialAction::class, $update->getActions()->current());
    }

    public function testChangeKeyCallback() {
        $builder = new StateUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(StateChangeKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInstance() {
        $builder = new StateUpdateBuilder();
        $builder->changeKey(new StateChangeKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeTypeCallback() {
        $builder = new StateUpdateBuilder();
        $builder->changeType(function($action) { static::assertInstanceOf(StateChangeTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeTypeAction::class, $update->getActions()->current());
    }

    public function testChangeTypeInstance() {
        $builder = new StateUpdateBuilder();
        $builder->changeType(new StateChangeTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeTypeAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesCallback() {
        $builder = new StateUpdateBuilder();
        $builder->removeRoles(function($action) { static::assertInstanceOf(StateRemoveRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesInstance() {
        $builder = new StateUpdateBuilder();
        $builder->removeRoles(new StateRemoveRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(StateSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setDescription(new StateSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetNameCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setName(function($action) { static::assertInstanceOf(StateSetNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetNameAction::class, $update->getActions()->current());
    }

    public function testSetNameInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setName(new StateSetNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetNameAction::class, $update->getActions()->current());
    }

    public function testSetRolesCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setRoles(function($action) { static::assertInstanceOf(StateSetRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetRolesAction::class, $update->getActions()->current());
    }

    public function testSetRolesInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setRoles(new StateSetRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetRolesAction::class, $update->getActions()->current());
    }

    public function testSetTransitionsCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setTransitions(function($action) { static::assertInstanceOf(StateSetTransitionsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetTransitionsAction::class, $update->getActions()->current());
    }

    public function testSetTransitionsInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setTransitions(new StateSetTransitionsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetTransitionsAction::class, $update->getActions()->current());
    }


    public function testReset() {
        $builder = new StateUpdateBuilder();
        $builder->addRoles(new StateAddRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateAddRolesAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new StateUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new StateModel());
        static::assertInstanceOf(State::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new StateUpdateBuilder();
        $builder->with(new StateModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
