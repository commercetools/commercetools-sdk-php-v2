<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\ChannelUpdateBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Channel\ChannelAddRolesAction;
use Commercetools\Types\Channel\ChannelChangeDescriptionAction;
use Commercetools\Types\Channel\ChannelChangeKeyAction;
use Commercetools\Types\Channel\ChannelChangeNameAction;
use Commercetools\Types\Channel\ChannelRemoveRolesAction;
use Commercetools\Types\Channel\ChannelSetAddressAction;
use Commercetools\Types\Channel\ChannelSetCustomFieldAction;
use Commercetools\Types\Channel\ChannelSetCustomTypeAction;
use Commercetools\Types\Channel\ChannelSetGeolocationAction;
use Commercetools\Types\Channel\ChannelSetRolesAction;
use Commercetools\Types\Channel\Channel;
use Commercetools\Types\Channel\ChannelUpdate;
use Commercetools\Request\ByProjectKeyChannelsByIDPost;

use Commercetools\Types\Channel\ChannelAddRolesActionModel;
use Commercetools\Types\Channel\ChannelChangeDescriptionActionModel;
use Commercetools\Types\Channel\ChannelChangeKeyActionModel;
use Commercetools\Types\Channel\ChannelChangeNameActionModel;
use Commercetools\Types\Channel\ChannelRemoveRolesActionModel;
use Commercetools\Types\Channel\ChannelSetAddressActionModel;
use Commercetools\Types\Channel\ChannelSetCustomFieldActionModel;
use Commercetools\Types\Channel\ChannelSetCustomTypeActionModel;
use Commercetools\Types\Channel\ChannelSetGeolocationActionModel;
use Commercetools\Types\Channel\ChannelSetRolesActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Channel\ChannelModel;


class ChannelBuilderTest extends TestCase {
    public function testAddRolesCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->addRoles(function($action) { static::assertInstanceOf(ChannelAddRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelAddRolesAction::class, $update->getActions()->current());
    }

    public function testAddRolesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->addRoles(function($action) { static::assertInstanceOf(ChannelAddRolesAction::class, $action); return []; });
    }

    public function testAddRolesInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->addRoles(new ChannelAddRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelAddRolesAction::class, $update->getActions()->current());
    }

    public function testAddRolesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->addRoles([]);
    }

    public function testChangeDescriptionCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeDescription(function($action) { static::assertInstanceOf(ChannelChangeDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeDescriptionAction::class, $update->getActions()->current());
    }

    public function testChangeDescriptionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->changeDescription(function($action) { static::assertInstanceOf(ChannelChangeDescriptionAction::class, $action); return []; });
    }

    public function testChangeDescriptionInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeDescription(new ChannelChangeDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeDescriptionAction::class, $update->getActions()->current());
    }

    public function testChangeDescriptionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->changeDescription([]);
    }

    public function testChangeKeyCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(ChannelChangeKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(ChannelChangeKeyAction::class, $action); return []; });
    }

    public function testChangeKeyInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeKey(new ChannelChangeKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->changeKey([]);
    }

    public function testChangeNameCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ChannelChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ChannelChangeNameAction::class, $action); return []; });
    }

    public function testChangeNameInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeName(new ChannelChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->changeName([]);
    }

    public function testRemoveRolesCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->removeRoles(function($action) { static::assertInstanceOf(ChannelRemoveRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->removeRoles(function($action) { static::assertInstanceOf(ChannelRemoveRolesAction::class, $action); return []; });
    }

    public function testRemoveRolesInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->removeRoles(new ChannelRemoveRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->removeRoles([]);
    }

    public function testSetAddressCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setAddress(function($action) { static::assertInstanceOf(ChannelSetAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetAddressAction::class, $update->getActions()->current());
    }

    public function testSetAddressInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setAddress(function($action) { static::assertInstanceOf(ChannelSetAddressAction::class, $action); return []; });
    }

    public function testSetAddressInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setAddress(new ChannelSetAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetAddressAction::class, $update->getActions()->current());
    }

    public function testSetAddressInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setAddress([]);
    }

    public function testSetCustomFieldCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(ChannelSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(ChannelSetCustomFieldAction::class, $action); return []; });
    }

    public function testSetCustomFieldInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomField(new ChannelSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomField([]);
    }

    public function testSetCustomTypeCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(ChannelSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(ChannelSetCustomTypeAction::class, $action); return []; });
    }

    public function testSetCustomTypeInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomType(new ChannelSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomType([]);
    }

    public function testSetGeoLocationCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setGeoLocation(function($action) { static::assertInstanceOf(ChannelSetGeolocationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetGeolocationAction::class, $update->getActions()->current());
    }

    public function testSetGeoLocationInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setGeoLocation(function($action) { static::assertInstanceOf(ChannelSetGeolocationAction::class, $action); return []; });
    }

    public function testSetGeoLocationInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setGeoLocation(new ChannelSetGeolocationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetGeolocationAction::class, $update->getActions()->current());
    }

    public function testSetGeoLocationInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setGeoLocation([]);
    }

    public function testSetRolesCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setRoles(function($action) { static::assertInstanceOf(ChannelSetRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetRolesAction::class, $update->getActions()->current());
    }

    public function testSetRolesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setRoles(function($action) { static::assertInstanceOf(ChannelSetRolesAction::class, $action); return []; });
    }

    public function testSetRolesInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setRoles(new ChannelSetRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetRolesAction::class, $update->getActions()->current());
    }

    public function testSetRolesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new ChannelUpdateBuilder();
        $builder->setRoles([]);
    }


    public function testReset() {
        $builder = new ChannelUpdateBuilder();
        $builder->addRoles(new ChannelAddRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelAddRolesAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new ChannelUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new ChannelModel());
        static::assertInstanceOf(Channel::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new ChannelUpdateBuilder();
        $builder->with(new ChannelModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
