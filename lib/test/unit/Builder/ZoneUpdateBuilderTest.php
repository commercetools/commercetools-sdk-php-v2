<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\ZoneUpdateBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Zone\ZoneAddLocationAction;
use Commercetools\Types\Zone\ZoneChangeNameAction;
use Commercetools\Types\Zone\ZoneRemoveLocationAction;
use Commercetools\Types\Zone\ZoneSetDescriptionAction;
use Commercetools\Types\Zone\Zone;
use Commercetools\Types\Zone\ZoneUpdate;
use Commercetools\Request\ByProjectKeyZonesByIDPost;

use Commercetools\Types\Zone\ZoneAddLocationActionModel;
use Commercetools\Types\Zone\ZoneChangeNameActionModel;
use Commercetools\Types\Zone\ZoneRemoveLocationActionModel;
use Commercetools\Types\Zone\ZoneSetDescriptionActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Zone\ZoneModel;


class ZoneBuilderTest extends TestCase {
    public function testAddLocationCallback() {
        $builder = new ZoneUpdateBuilder();
        $builder->addLocation(function($action) { static::assertInstanceOf(ZoneAddLocationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneAddLocationAction::class, $update->getActions()->current());
    }

    public function testAddLocationInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->addLocation(function($action) { static::assertInstanceOf(ZoneAddLocationAction::class, $action); return []; });
    }

    public function testAddLocationInstance() {
        $builder = new ZoneUpdateBuilder();
        $builder->addLocation(new ZoneAddLocationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneAddLocationAction::class, $update->getActions()->current());
    }

    public function testAddLocationInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->addLocation([]);
    }

    public function testChangeNameCallback() {
        $builder = new ZoneUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ZoneChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ZoneChangeNameAction::class, $action); return []; });
    }

    public function testChangeNameInstance() {
        $builder = new ZoneUpdateBuilder();
        $builder->changeName(new ZoneChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->changeName([]);
    }

    public function testRemoveLocationCallback() {
        $builder = new ZoneUpdateBuilder();
        $builder->removeLocation(function($action) { static::assertInstanceOf(ZoneRemoveLocationAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneRemoveLocationAction::class, $update->getActions()->current());
    }

    public function testRemoveLocationInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->removeLocation(function($action) { static::assertInstanceOf(ZoneRemoveLocationAction::class, $action); return []; });
    }

    public function testRemoveLocationInstance() {
        $builder = new ZoneUpdateBuilder();
        $builder->removeLocation(new ZoneRemoveLocationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneRemoveLocationAction::class, $update->getActions()->current());
    }

    public function testRemoveLocationInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->removeLocation([]);
    }

    public function testSetDescriptionCallback() {
        $builder = new ZoneUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ZoneSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ZoneSetDescriptionAction::class, $action); return []; });
    }

    public function testSetDescriptionInstance() {
        $builder = new ZoneUpdateBuilder();
        $builder->setDescription(new ZoneSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ZoneUpdateBuilder();
        $builder->setDescription([]);
    }


    public function testReset() {
        $builder = new ZoneUpdateBuilder();
        $builder->addLocation(new ZoneAddLocationActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertInstanceOf(ZoneAddLocationAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new ZoneUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new ZoneModel());
        static::assertInstanceOf(Zone::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new ZoneUpdateBuilder();
        $builder->with(new ZoneModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(ZoneUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
