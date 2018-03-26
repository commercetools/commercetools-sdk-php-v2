<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ReviewUpdateBuilder;
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

class ReviewBuilderTest extends TestCase {
    public function testSetAuthorNameCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setAuthorName(function ($action) { static::assertInstanceOf(ReviewSetAuthorNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetAuthorNameAction::class, $update->getActions()->current());
    }

    public function testSetAuthorNameInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setAuthorName(new ReviewSetAuthorNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetAuthorNameAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomField(function ($action) { static::assertInstanceOf(ReviewSetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomField(new ReviewSetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomType(function ($action) { static::assertInstanceOf(ReviewSetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomType(new ReviewSetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomerCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomer(function ($action) { static::assertInstanceOf(ReviewSetCustomerAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetCustomerInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setCustomer(new ReviewSetCustomerActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetCustomerAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setKey(function ($action) { static::assertInstanceOf(ReviewSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setKey(new ReviewSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetLocaleCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setLocale(function ($action) { static::assertInstanceOf(ReviewSetLocaleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetLocaleInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setLocale(new ReviewSetLocaleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetLocaleAction::class, $update->getActions()->current());
    }

    public function testSetRatingCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setRating(function ($action) { static::assertInstanceOf(ReviewSetRatingAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetRatingAction::class, $update->getActions()->current());
    }

    public function testSetRatingInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setRating(new ReviewSetRatingActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetRatingAction::class, $update->getActions()->current());
    }

    public function testSetTargetCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTarget(function ($action) { static::assertInstanceOf(ReviewSetTargetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTargetAction::class, $update->getActions()->current());
    }

    public function testSetTargetInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTarget(new ReviewSetTargetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTargetAction::class, $update->getActions()->current());
    }

    public function testSetTextCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setText(function ($action) { static::assertInstanceOf(ReviewSetTextAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTextAction::class, $update->getActions()->current());
    }

    public function testSetTextInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setText(new ReviewSetTextActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTextAction::class, $update->getActions()->current());
    }

    public function testSetTitleCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTitle(function ($action) { static::assertInstanceOf(ReviewSetTitleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTitleAction::class, $update->getActions()->current());
    }

    public function testSetTitleInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->setTitle(new ReviewSetTitleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewSetTitleAction::class, $update->getActions()->current());
    }

    public function testTransitionStateCallback() {
        $builder = new ReviewUpdateBuilder();
        $builder->transitionState(function ($action) { static::assertInstanceOf(ReviewTransitionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInstance() {
        $builder = new ReviewUpdateBuilder();
        $builder->transitionState(new ReviewTransitionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ReviewUpdate::class, $update);
        static::assertInstanceOf(ReviewTransitionStateAction::class, $update->getActions()->current());
    }

}
