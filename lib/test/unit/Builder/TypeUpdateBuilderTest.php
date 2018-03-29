<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\TypeUpdateBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Type\TypeAddEnumValueAction;
use Commercetools\Types\Type\TypeAddFieldDefinitionAction;
use Commercetools\Types\Type\TypeAddLocalizedEnumValueAction;
use Commercetools\Types\Type\TypeChangeEnumValueOrderAction;
use Commercetools\Types\Type\TypeChangeFieldDefinitionLabelAction;
use Commercetools\Types\Type\TypeChangeFieldDefinitionOrderAction;
use Commercetools\Types\Type\TypeChangeKeyAction;
use Commercetools\Types\Type\TypeChangeLabelAction;
use Commercetools\Types\Type\TypeChangeLocalizedEnumValueOrderAction;
use Commercetools\Types\Type\TypeChangeNameAction;
use Commercetools\Types\Type\TypeRemoveFieldDefinitionAction;
use Commercetools\Types\Type\TypeSetDescriptionAction;
use Commercetools\Types\Type\Type;
use Commercetools\Types\Type\TypeUpdate;
use Commercetools\Request\ByProjectKeyTypesByIDPost;

use Commercetools\Types\Type\TypeAddEnumValueActionModel;
use Commercetools\Types\Type\TypeAddFieldDefinitionActionModel;
use Commercetools\Types\Type\TypeAddLocalizedEnumValueActionModel;
use Commercetools\Types\Type\TypeChangeEnumValueOrderActionModel;
use Commercetools\Types\Type\TypeChangeFieldDefinitionLabelActionModel;
use Commercetools\Types\Type\TypeChangeFieldDefinitionOrderActionModel;
use Commercetools\Types\Type\TypeChangeKeyActionModel;
use Commercetools\Types\Type\TypeChangeLabelActionModel;
use Commercetools\Types\Type\TypeChangeLocalizedEnumValueOrderActionModel;
use Commercetools\Types\Type\TypeChangeNameActionModel;
use Commercetools\Types\Type\TypeRemoveFieldDefinitionActionModel;
use Commercetools\Types\Type\TypeSetDescriptionActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Type\TypeModel;


class TypeBuilderTest extends TestCase {
    public function testAddEnumValueCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->addEnumValue(function($action) { static::assertInstanceOf(TypeAddEnumValueAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeAddEnumValueAction::class, $update->getActions()->current());
    }

    public function testAddEnumValueInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->addEnumValue(function($action) { static::assertInstanceOf(TypeAddEnumValueAction::class, $action); return []; });
    }

    public function testAddEnumValueInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->addEnumValue(new TypeAddEnumValueActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeAddEnumValueAction::class, $update->getActions()->current());
    }

    public function testAddEnumValueInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->addEnumValue([]);
    }

    public function testAddFieldDefinitionCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->addFieldDefinition(function($action) { static::assertInstanceOf(TypeAddFieldDefinitionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeAddFieldDefinitionAction::class, $update->getActions()->current());
    }

    public function testAddFieldDefinitionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->addFieldDefinition(function($action) { static::assertInstanceOf(TypeAddFieldDefinitionAction::class, $action); return []; });
    }

    public function testAddFieldDefinitionInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->addFieldDefinition(new TypeAddFieldDefinitionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeAddFieldDefinitionAction::class, $update->getActions()->current());
    }

    public function testAddFieldDefinitionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->addFieldDefinition([]);
    }

    public function testAddLocalizedEnumValueCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->addLocalizedEnumValue(function($action) { static::assertInstanceOf(TypeAddLocalizedEnumValueAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeAddLocalizedEnumValueAction::class, $update->getActions()->current());
    }

    public function testAddLocalizedEnumValueInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->addLocalizedEnumValue(function($action) { static::assertInstanceOf(TypeAddLocalizedEnumValueAction::class, $action); return []; });
    }

    public function testAddLocalizedEnumValueInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->addLocalizedEnumValue(new TypeAddLocalizedEnumValueActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeAddLocalizedEnumValueAction::class, $update->getActions()->current());
    }

    public function testAddLocalizedEnumValueInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->addLocalizedEnumValue([]);
    }

    public function testChangeEnumValueOrderCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->changeEnumValueOrder(function($action) { static::assertInstanceOf(TypeChangeEnumValueOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testChangeEnumValueOrderInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeEnumValueOrder(function($action) { static::assertInstanceOf(TypeChangeEnumValueOrderAction::class, $action); return []; });
    }

    public function testChangeEnumValueOrderInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->changeEnumValueOrder(new TypeChangeEnumValueOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testChangeEnumValueOrderInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeEnumValueOrder([]);
    }

    public function testChangeFieldDefinitionLabelCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionLabel(function($action) { static::assertInstanceOf(TypeChangeFieldDefinitionLabelAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeFieldDefinitionLabelAction::class, $update->getActions()->current());
    }

    public function testChangeFieldDefinitionLabelInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionLabel(function($action) { static::assertInstanceOf(TypeChangeFieldDefinitionLabelAction::class, $action); return []; });
    }

    public function testChangeFieldDefinitionLabelInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionLabel(new TypeChangeFieldDefinitionLabelActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeFieldDefinitionLabelAction::class, $update->getActions()->current());
    }

    public function testChangeFieldDefinitionLabelInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionLabel([]);
    }

    public function testChangeFieldDefinitionOrderCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionOrder(function($action) { static::assertInstanceOf(TypeChangeFieldDefinitionOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeFieldDefinitionOrderAction::class, $update->getActions()->current());
    }

    public function testChangeFieldDefinitionOrderInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionOrder(function($action) { static::assertInstanceOf(TypeChangeFieldDefinitionOrderAction::class, $action); return []; });
    }

    public function testChangeFieldDefinitionOrderInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionOrder(new TypeChangeFieldDefinitionOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeFieldDefinitionOrderAction::class, $update->getActions()->current());
    }

    public function testChangeFieldDefinitionOrderInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeFieldDefinitionOrder([]);
    }

    public function testChangeKeyCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(TypeChangeKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeKey(function($action) { static::assertInstanceOf(TypeChangeKeyAction::class, $action); return []; });
    }

    public function testChangeKeyInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->changeKey(new TypeChangeKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeKeyAction::class, $update->getActions()->current());
    }

    public function testChangeKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeKey([]);
    }

    public function testChangeLabelCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->changeLabel(function($action) { static::assertInstanceOf(TypeChangeLabelAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeLabelAction::class, $update->getActions()->current());
    }

    public function testChangeLabelInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeLabel(function($action) { static::assertInstanceOf(TypeChangeLabelAction::class, $action); return []; });
    }

    public function testChangeLabelInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->changeLabel(new TypeChangeLabelActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeLabelAction::class, $update->getActions()->current());
    }

    public function testChangeLabelInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeLabel([]);
    }

    public function testChangeLocalizedEnumValueOrderCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->changeLocalizedEnumValueOrder(function($action) { static::assertInstanceOf(TypeChangeLocalizedEnumValueOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeLocalizedEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testChangeLocalizedEnumValueOrderInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeLocalizedEnumValueOrder(function($action) { static::assertInstanceOf(TypeChangeLocalizedEnumValueOrderAction::class, $action); return []; });
    }

    public function testChangeLocalizedEnumValueOrderInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->changeLocalizedEnumValueOrder(new TypeChangeLocalizedEnumValueOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeLocalizedEnumValueOrderAction::class, $update->getActions()->current());
    }

    public function testChangeLocalizedEnumValueOrderInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeLocalizedEnumValueOrder([]);
    }

    public function testChangeNameCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(TypeChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(TypeChangeNameAction::class, $action); return []; });
    }

    public function testChangeNameInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->changeName(new TypeChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->changeName([]);
    }

    public function testRemoveFieldDefinitionCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->removeFieldDefinition(function($action) { static::assertInstanceOf(TypeRemoveFieldDefinitionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeRemoveFieldDefinitionAction::class, $update->getActions()->current());
    }

    public function testRemoveFieldDefinitionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->removeFieldDefinition(function($action) { static::assertInstanceOf(TypeRemoveFieldDefinitionAction::class, $action); return []; });
    }

    public function testRemoveFieldDefinitionInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->removeFieldDefinition(new TypeRemoveFieldDefinitionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeRemoveFieldDefinitionAction::class, $update->getActions()->current());
    }

    public function testRemoveFieldDefinitionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->removeFieldDefinition([]);
    }

    public function testSetDescriptionCallback() {
        $builder = new TypeUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(TypeSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(TypeSetDescriptionAction::class, $action); return []; });
    }

    public function testSetDescriptionInstance() {
        $builder = new TypeUpdateBuilder();
        $builder->setDescription(new TypeSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new TypeUpdateBuilder();
        $builder->setDescription([]);
    }


    public function testReset() {
        $builder = new TypeUpdateBuilder();
        $builder->addEnumValue(new TypeAddEnumValueActionModel());
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertInstanceOf(TypeAddEnumValueAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new TypeUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new TypeModel());
        static::assertInstanceOf(Type::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new TypeUpdateBuilder();
        $builder->with(new TypeModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(TypeUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
