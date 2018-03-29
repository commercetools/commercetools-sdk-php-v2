<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\SubscriptionUpdateBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Subscription\SubscriptionSetChangesAction;
use Commercetools\Types\Subscription\SubscriptionSetKeyAction;
use Commercetools\Types\Subscription\SubscriptionSetMessagesAction;
use Commercetools\Types\Subscription\Subscription;
use Commercetools\Types\Subscription\SubscriptionUpdate;
use Commercetools\Request\ByProjectKeySubscriptionsByIDPost;

use Commercetools\Types\Subscription\SubscriptionSetChangesActionModel;
use Commercetools\Types\Subscription\SubscriptionSetKeyActionModel;
use Commercetools\Types\Subscription\SubscriptionSetMessagesActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Subscription\SubscriptionModel;


class SubscriptionBuilderTest extends TestCase {
    public function testSetChangesCallback() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setChanges(function($action) { static::assertInstanceOf(SubscriptionSetChangesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertInstanceOf(SubscriptionSetChangesAction::class, $update->getActions()->current());
    }

    public function testSetChangesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new SubscriptionUpdateBuilder();
        $builder->setChanges(function($action) { static::assertInstanceOf(SubscriptionSetChangesAction::class, $action); return []; });
    }

    public function testSetChangesInstance() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setChanges(new SubscriptionSetChangesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertInstanceOf(SubscriptionSetChangesAction::class, $update->getActions()->current());
    }

    public function testSetChangesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new SubscriptionUpdateBuilder();
        $builder->setChanges([]);
    }

    public function testSetKeyCallback() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(SubscriptionSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertInstanceOf(SubscriptionSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new SubscriptionUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(SubscriptionSetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setKey(new SubscriptionSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertInstanceOf(SubscriptionSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new SubscriptionUpdateBuilder();
        $builder->setKey([]);
    }

    public function testSetMessagesCallback() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setMessages(function($action) { static::assertInstanceOf(SubscriptionSetMessagesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertInstanceOf(SubscriptionSetMessagesAction::class, $update->getActions()->current());
    }

    public function testSetMessagesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new SubscriptionUpdateBuilder();
        $builder->setMessages(function($action) { static::assertInstanceOf(SubscriptionSetMessagesAction::class, $action); return []; });
    }

    public function testSetMessagesInstance() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setMessages(new SubscriptionSetMessagesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertInstanceOf(SubscriptionSetMessagesAction::class, $update->getActions()->current());
    }

    public function testSetMessagesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new SubscriptionUpdateBuilder();
        $builder->setMessages([]);
    }


    public function testReset() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->setChanges(new SubscriptionSetChangesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertInstanceOf(SubscriptionSetChangesAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new SubscriptionUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new SubscriptionModel());
        static::assertInstanceOf(Subscription::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new SubscriptionUpdateBuilder();
        $builder->with(new SubscriptionModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(SubscriptionUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
