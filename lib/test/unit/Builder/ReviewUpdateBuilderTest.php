<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\ReviewUpdateBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Review\ReviewSetAuthorNameAction;
use Commercetools\Types\Review\ReviewSetCustomFieldAction;
use Commercetools\Types\Review\ReviewSetCustomTypeAction;
use Commercetools\Types\Review\ReviewSetCustomerAction;
use Commercetools\Types\Review\ReviewSetKeyAction;
use Commercetools\Types\Review\ReviewSetLocaleAction;
use Commercetools\Types\Review\ReviewSetRatingAction;
use Commercetools\Types\Review\ReviewSetTargetAction;
use Commercetools\Types\Review\ReviewSetTextAction;
use Commercetools\Types\Review\ReviewSetTitleAction;
use Commercetools\Types\Review\ReviewTransitionStateAction;
use Commercetools\Types\Review\Review;
use Commercetools\Types\Review\ReviewUpdate;
use Commercetools\Request\ByProjectKeyReviewsByIDPost;

use Commercetools\Types\Review\ReviewSetAuthorNameActionModel;
use Commercetools\Types\Review\ReviewSetCustomFieldActionModel;
use Commercetools\Types\Review\ReviewSetCustomTypeActionModel;
use Commercetools\Types\Review\ReviewSetCustomerActionModel;
use Commercetools\Types\Review\ReviewSetKeyActionModel;
use Commercetools\Types\Review\ReviewSetLocaleActionModel;
use Commercetools\Types\Review\ReviewSetRatingActionModel;
use Commercetools\Types\Review\ReviewSetTargetActionModel;
use Commercetools\Types\Review\ReviewSetTextActionModel;
use Commercetools\Types\Review\ReviewSetTitleActionModel;
use Commercetools\Types\Review\ReviewTransitionStateActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Review\ReviewModel;


class ReviewBuilderTest extends TestCase {
    public function testSetAuthorNameCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setAuthorName(function($action) { static::assertInstanceOf(ReviewSetAuthorNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetAuthorNameAction::class, $update->getActions()->current());
    }

    public function testSetAuthorNameInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setAuthorName(function($action) { static::assertInstanceOf(ReviewSetAuthorNameAction::class, $action); return []; });
    }

    public function testSetAuthorNameInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setAuthorName(new ReviewSetAuthorNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetAuthorNameAction::class, $update->getActions()->current());
    }

    public function testSetAuthorNameInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setAuthorName([]);
    }

    public function testSetCustomFieldCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(ReviewSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(ReviewSetCustomFieldAction::class, $action); return []; });
    }

    public function testSetCustomFieldInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomField(new ReviewSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomField([]);
    }

    public function testSetCustomTypeCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(ReviewSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(ReviewSetCustomTypeAction::class, $action); return []; });
    }

    public function testSetCustomTypeInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomType(new ReviewSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomType([]);
    }

    public function testSetCustomerCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomer(function($action) { static::assertInstanceOf(ReviewSetCustomerAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetCustomerInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomer(function($action) { static::assertInstanceOf(ReviewSetCustomerAction::class, $action); return []; });
    }

    public function testSetCustomerInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomer(new ReviewSetCustomerActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetCustomerInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomer([]);
    }

    public function testSetKeyCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ReviewSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ReviewSetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setKey(new ReviewSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setKey([]);
    }

    public function testSetLocaleCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setLocale(function($action) { static::assertInstanceOf(ReviewSetLocaleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setLocale(function($action) { static::assertInstanceOf(ReviewSetLocaleAction::class, $action); return []; });
    }

    public function testSetLocaleInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setLocale(new ReviewSetLocaleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setLocale([]);
    }

    public function testSetRatingCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setRating(function($action) { static::assertInstanceOf(ReviewSetRatingAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetRatingAction::class, $update->getActions()->current());
    }

    public function testSetRatingInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setRating(function($action) { static::assertInstanceOf(ReviewSetRatingAction::class, $action); return []; });
    }

    public function testSetRatingInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setRating(new ReviewSetRatingActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetRatingAction::class, $update->getActions()->current());
    }

    public function testSetRatingInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setRating([]);
    }

    public function testSetTargetCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTarget(function($action) { static::assertInstanceOf(ReviewSetTargetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTargetAction::class, $update->getActions()->current());
    }

    public function testSetTargetInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setTarget(function($action) { static::assertInstanceOf(ReviewSetTargetAction::class, $action); return []; });
    }

    public function testSetTargetInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTarget(new ReviewSetTargetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTargetAction::class, $update->getActions()->current());
    }

    public function testSetTargetInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setTarget([]);
    }

    public function testSetTextCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setText(function($action) { static::assertInstanceOf(ReviewSetTextAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTextAction::class, $update->getActions()->current());
    }

    public function testSetTextInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setText(function($action) { static::assertInstanceOf(ReviewSetTextAction::class, $action); return []; });
    }

    public function testSetTextInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setText(new ReviewSetTextActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTextAction::class, $update->getActions()->current());
    }

    public function testSetTextInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setText([]);
    }

    public function testSetTitleCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTitle(function($action) { static::assertInstanceOf(ReviewSetTitleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTitleAction::class, $update->getActions()->current());
    }

    public function testSetTitleInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setTitle(function($action) { static::assertInstanceOf(ReviewSetTitleAction::class, $action); return []; });
    }

    public function testSetTitleInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTitle(new ReviewSetTitleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTitleAction::class, $update->getActions()->current());
    }

    public function testSetTitleInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->setTitle([]);
    }

    public function testTransitionStateCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(ReviewTransitionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(ReviewTransitionStateAction::class, $action); return []; });
    }

    public function testTransitionStateInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->transitionState(new ReviewTransitionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ReviewUpdateBuilder();
        $builder->transitionState([]);
    }


    public function testReset() {
        $builder = new ReviewUpdateBuilder();
        $builder->setAuthorName(new ReviewSetAuthorNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetAuthorNameAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new ReviewUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new ReviewModel());
        static::assertInstanceOf(Review::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new ReviewUpdateBuilder();
        $builder->with(new ReviewModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
