<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\StateUpdateBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
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

    public function testAddRolesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->addRoles(function($action) { static::assertInstanceOf(StateAddRolesAction::class, $action); return []; });
    }

    public function testAddRolesInstance() {
        $builder = new StateUpdateBuilder();
        $builder->addRoles(new StateAddRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateAddRolesAction::class, $update->getActions()->current());
    }

    public function testAddRolesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->addRoles([]);
    }

    public function testChangeInitialCallback() {
        $builder = new StateUpdateBuilder();
        $builder->changeInitial(function($action) { static::assertInstanceOf(StateChangeInitialAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeInitialAction::class, $update->getActions()->current());
    }

    public function testChangeInitialInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->changeInitial(function($action) { static::assertInstanceOf(StateChangeInitialAction::class, $action); return []; });
    }

    public function testChangeInitialInstance() {
        $builder = new StateUpdateBuilder();
        $builder->changeInitial(new StateChangeInitialActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeInitialAction::class, $update->getActions()->current());
    }

    public function testChangeInitialInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->changeInitial([]);
    }

    public function testChangeKeyCallback() {
        $builder = new StateUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(StateChangeKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(StateChangeKeyAction::class, $action); return []; });
    }

    public function testChangeKeyInstance() {
        $builder = new StateUpdateBuilder();
        $builder->changeKey(new StateChangeKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->changeKey([]);
    }

    public function testChangeTypeCallback() {
        $builder = new StateUpdateBuilder();
        $builder->changeType(function($action) { static::assertInstanceOf(StateChangeTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeTypeAction::class, $update->getActions()->current());
    }

    public function testChangeTypeInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->changeType(function($action) { static::assertInstanceOf(StateChangeTypeAction::class, $action); return []; });
    }

    public function testChangeTypeInstance() {
        $builder = new StateUpdateBuilder();
        $builder->changeType(new StateChangeTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateChangeTypeAction::class, $update->getActions()->current());
    }

    public function testChangeTypeInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->changeType([]);
    }

    public function testRemoveRolesCallback() {
        $builder = new StateUpdateBuilder();
        $builder->removeRoles(function($action) { static::assertInstanceOf(StateRemoveRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->removeRoles(function($action) { static::assertInstanceOf(StateRemoveRolesAction::class, $action); return []; });
    }

    public function testRemoveRolesInstance() {
        $builder = new StateUpdateBuilder();
        $builder->removeRoles(new StateRemoveRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->removeRoles([]);
    }

    public function testSetDescriptionCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(StateSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(StateSetDescriptionAction::class, $action); return []; });
    }

    public function testSetDescriptionInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setDescription(new StateSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setDescription([]);
    }

    public function testSetNameCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setName(function($action) { static::assertInstanceOf(StateSetNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetNameAction::class, $update->getActions()->current());
    }

    public function testSetNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setName(function($action) { static::assertInstanceOf(StateSetNameAction::class, $action); return []; });
    }

    public function testSetNameInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setName(new StateSetNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetNameAction::class, $update->getActions()->current());
    }

    public function testSetNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setName([]);
    }

    public function testSetRolesCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setRoles(function($action) { static::assertInstanceOf(StateSetRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetRolesAction::class, $update->getActions()->current());
    }

    public function testSetRolesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setRoles(function($action) { static::assertInstanceOf(StateSetRolesAction::class, $action); return []; });
    }

    public function testSetRolesInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setRoles(new StateSetRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetRolesAction::class, $update->getActions()->current());
    }

    public function testSetRolesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setRoles([]);
    }

    public function testSetTransitionsCallback() {
        $builder = new StateUpdateBuilder();
        $builder->setTransitions(function($action) { static::assertInstanceOf(StateSetTransitionsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetTransitionsAction::class, $update->getActions()->current());
    }

    public function testSetTransitionsInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setTransitions(function($action) { static::assertInstanceOf(StateSetTransitionsAction::class, $action); return []; });
    }

    public function testSetTransitionsInstance() {
        $builder = new StateUpdateBuilder();
        $builder->setTransitions(new StateSetTransitionsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(StateUpdate::class, $update);
        static::assertInstanceOf(StateSetTransitionsAction::class, $update->getActions()->current());
    }

    public function testSetTransitionsInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new StateUpdateBuilder();
        $builder->setTransitions([]);
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
