<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ChannelUpdateBuilder;
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

    public function testAddRolesInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->addRoles(new ChannelAddRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelAddRolesAction::class, $update->getActions()->current());
    }

    public function testChangeDescriptionCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeDescription(function($action) { static::assertInstanceOf(ChannelChangeDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeDescriptionAction::class, $update->getActions()->current());
    }

    public function testChangeDescriptionInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeDescription(new ChannelChangeDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeDescriptionAction::class, $update->getActions()->current());
    }

    public function testChangeKeyCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(ChannelChangeKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeKey(new ChannelChangeKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ChannelChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->changeName(new ChannelChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelChangeNameAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->removeRoles(function($action) { static::assertInstanceOf(ChannelRemoveRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testRemoveRolesInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->removeRoles(new ChannelRemoveRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelRemoveRolesAction::class, $update->getActions()->current());
    }

    public function testSetAddressCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setAddress(function($action) { static::assertInstanceOf(ChannelSetAddressAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetAddressAction::class, $update->getActions()->current());
    }

    public function testSetAddressInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setAddress(new ChannelSetAddressActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetAddressAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(ChannelSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomField(new ChannelSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(ChannelSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setCustomType(new ChannelSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetGeoLocationCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setGeoLocation(function($action) { static::assertInstanceOf(ChannelSetGeolocationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetGeolocationAction::class, $update->getActions()->current());
    }

    public function testSetGeoLocationInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setGeoLocation(new ChannelSetGeolocationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetGeolocationAction::class, $update->getActions()->current());
    }

    public function testSetRolesCallback() {
        $builder = new ChannelUpdateBuilder();
        $builder->setRoles(function($action) { static::assertInstanceOf(ChannelSetRolesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetRolesAction::class, $update->getActions()->current());
    }

    public function testSetRolesInstance() {
        $builder = new ChannelUpdateBuilder();
        $builder->setRoles(new ChannelSetRolesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ChannelUpdate::class, $update);
        static::assertInstanceOf(ChannelSetRolesAction::class, $update->getActions()->current());
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
