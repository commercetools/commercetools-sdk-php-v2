<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ProjectUpdateBuilder;
use Commercetools\Types\Project\ProjectChangeCountriesAction;
use Commercetools\Types\Project\ProjectChangeCurrenciesAction;
use Commercetools\Types\Project\ProjectChangeLanguagesAction;
use Commercetools\Types\Project\ProjectChangeMessagesEnabledAction;
use Commercetools\Types\Project\ProjectChangeNameAction;
use Commercetools\Types\Project\ProjectSetShippingRateInputTypeAction;
use Commercetools\Types\Project\Project;
use Commercetools\Types\Project\ProjectUpdate;
use Commercetools\Request\ByProjectKeyPost;

use Commercetools\Types\Project\ProjectChangeCountriesActionModel;
use Commercetools\Types\Project\ProjectChangeCurrenciesActionModel;
use Commercetools\Types\Project\ProjectChangeLanguagesActionModel;
use Commercetools\Types\Project\ProjectChangeMessagesEnabledActionModel;
use Commercetools\Types\Project\ProjectChangeNameActionModel;
use Commercetools\Types\Project\ProjectSetShippingRateInputTypeActionModel;

use PHPUnit\Framework\TestCase;

class ProjectBuilderTest extends TestCase {
    public function testChangeCountriesCallback() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeCountries(function ($action) { static::assertInstanceOf(ProjectChangeCountriesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeCountriesAction::class, $update->getActions()->current());
    }

    public function testChangeCountriesInstance() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeCountries(new ProjectChangeCountriesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeCountriesAction::class, $update->getActions()->current());
    }

    public function testChangeCurrenciesCallback() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeCurrencies(function ($action) { static::assertInstanceOf(ProjectChangeCurrenciesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeCurrenciesAction::class, $update->getActions()->current());
    }

    public function testChangeCurrenciesInstance() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeCurrencies(new ProjectChangeCurrenciesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeCurrenciesAction::class, $update->getActions()->current());
    }

    public function testChangeLanguagesCallback() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeLanguages(function ($action) { static::assertInstanceOf(ProjectChangeLanguagesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeLanguagesAction::class, $update->getActions()->current());
    }

    public function testChangeLanguagesInstance() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeLanguages(new ProjectChangeLanguagesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeLanguagesAction::class, $update->getActions()->current());
    }

    public function testChangeMessagesEnabledCallback() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeMessagesEnabled(function ($action) { static::assertInstanceOf(ProjectChangeMessagesEnabledAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeMessagesEnabledAction::class, $update->getActions()->current());
    }

    public function testChangeMessagesEnabledInstance() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeMessagesEnabled(new ProjectChangeMessagesEnabledActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeMessagesEnabledAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeName(function ($action) { static::assertInstanceOf(ProjectChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new ProjectUpdateBuilder();
        $builder->changeName(new ProjectChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectChangeNameAction::class, $update->getActions()->current());
    }

    public function testSetShippingRateInputTypeCallback() {
        $builder = new ProjectUpdateBuilder();
        $builder->setShippingRateInputType(function ($action) { static::assertInstanceOf(ProjectSetShippingRateInputTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectSetShippingRateInputTypeAction::class, $update->getActions()->current());
    }

    public function testSetShippingRateInputTypeInstance() {
        $builder = new ProjectUpdateBuilder();
        $builder->setShippingRateInputType(new ProjectSetShippingRateInputTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProjectUpdate::class, $update);
        static::assertInstanceOf(ProjectSetShippingRateInputTypeAction::class, $update->getActions()->current());
    }

}
