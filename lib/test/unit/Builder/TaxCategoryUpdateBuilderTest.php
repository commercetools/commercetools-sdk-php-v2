<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\TaxCategoryUpdateBuilder;
use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\TaxCategory\TaxCategoryAddTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategoryChangeNameAction;
use Commercetools\Types\TaxCategory\TaxCategoryRemoveTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategoryReplaceTaxRateAction;
use Commercetools\Types\TaxCategory\TaxCategorySetDescriptionAction;
use Commercetools\Types\TaxCategory\TaxCategorySetKeyAction;
use Commercetools\Types\TaxCategory\TaxCategory;
use Commercetools\Types\TaxCategory\TaxCategoryUpdate;
use Commercetools\Request\ByProjectKeyTaxCategoriesByIDPost;

use Commercetools\Types\TaxCategory\TaxCategoryAddTaxRateActionModel;
use Commercetools\Types\TaxCategory\TaxCategoryChangeNameActionModel;
use Commercetools\Types\TaxCategory\TaxCategoryRemoveTaxRateActionModel;
use Commercetools\Types\TaxCategory\TaxCategoryReplaceTaxRateActionModel;
use Commercetools\Types\TaxCategory\TaxCategorySetDescriptionActionModel;
use Commercetools\Types\TaxCategory\TaxCategorySetKeyActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\TaxCategory\TaxCategoryModel;


class TaxCategoryBuilderTest extends TestCase {
    public function testAddTaxRateCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->addTaxRate(function($action) { static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $update->getActions()->current());
    }

    public function testAddTaxRateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->addTaxRate(function($action) { static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $action); return []; });
    }

    public function testAddTaxRateInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->addTaxRate(new TaxCategoryAddTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $update->getActions()->current());
    }

    public function testAddTaxRateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->addTaxRate([]);
    }

    public function testChangeNameCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(TaxCategoryChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(TaxCategoryChangeNameAction::class, $action); return []; });
    }

    public function testChangeNameInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->changeName(new TaxCategoryChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->changeName([]);
    }

    public function testRemoveTaxRateCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->removeTaxRate(function($action) { static::assertInstanceOf(TaxCategoryRemoveTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryRemoveTaxRateAction::class, $update->getActions()->current());
    }

    public function testRemoveTaxRateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->removeTaxRate(function($action) { static::assertInstanceOf(TaxCategoryRemoveTaxRateAction::class, $action); return []; });
    }

    public function testRemoveTaxRateInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->removeTaxRate(new TaxCategoryRemoveTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryRemoveTaxRateAction::class, $update->getActions()->current());
    }

    public function testRemoveTaxRateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->removeTaxRate([]);
    }

    public function testReplaceTaxRateCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->replaceTaxRate(function($action) { static::assertInstanceOf(TaxCategoryReplaceTaxRateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryReplaceTaxRateAction::class, $update->getActions()->current());
    }

    public function testReplaceTaxRateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->replaceTaxRate(function($action) { static::assertInstanceOf(TaxCategoryReplaceTaxRateAction::class, $action); return []; });
    }

    public function testReplaceTaxRateInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->replaceTaxRate(new TaxCategoryReplaceTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryReplaceTaxRateAction::class, $update->getActions()->current());
    }

    public function testReplaceTaxRateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->replaceTaxRate([]);
    }

    public function testSetDescriptionCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(TaxCategorySetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(TaxCategorySetDescriptionAction::class, $action); return []; });
    }

    public function testSetDescriptionInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setDescription(new TaxCategorySetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setDescription([]);
    }

    public function testSetKeyCallback() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(TaxCategorySetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(TaxCategorySetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setKey(new TaxCategorySetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategorySetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new TaxCategoryUpdateBuilder();
        $builder->setKey([]);
    }


    public function testReset() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->addTaxRate(new TaxCategoryAddTaxRateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertInstanceOf(TaxCategoryAddTaxRateAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new TaxCategoryUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new TaxCategoryModel());
        static::assertInstanceOf(TaxCategory::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new TaxCategoryUpdateBuilder();
        $builder->with(new TaxCategoryModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(TaxCategoryUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
