# TypeUpdateBuilder

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
```

## addEnumValue

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->addEnumValue(new TypeAddEnumValueAction())->build()
//or
$typeUpdate = $builder->addEnumValue(
    function (TypeAddEnumValueAction $action): TypeAddEnumValueAction {
        // modify action as needed
        return $action;
    })->build();
```
## addFieldDefinition

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->addFieldDefinition(new TypeAddFieldDefinitionAction())->build()
//or
$typeUpdate = $builder->addFieldDefinition(
    function (TypeAddFieldDefinitionAction $action): TypeAddFieldDefinitionAction {
        // modify action as needed
        return $action;
    })->build();
```
## addLocalizedEnumValue

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->addLocalizedEnumValue(new TypeAddLocalizedEnumValueAction())->build()
//or
$typeUpdate = $builder->addLocalizedEnumValue(
    function (TypeAddLocalizedEnumValueAction $action): TypeAddLocalizedEnumValueAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeEnumValueOrder

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->changeEnumValueOrder(new TypeChangeEnumValueOrderAction())->build()
//or
$typeUpdate = $builder->changeEnumValueOrder(
    function (TypeChangeEnumValueOrderAction $action): TypeChangeEnumValueOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeFieldDefinitionLabel

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->changeFieldDefinitionLabel(new TypeChangeFieldDefinitionLabelAction())->build()
//or
$typeUpdate = $builder->changeFieldDefinitionLabel(
    function (TypeChangeFieldDefinitionLabelAction $action): TypeChangeFieldDefinitionLabelAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeFieldDefinitionOrder

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->changeFieldDefinitionOrder(new TypeChangeFieldDefinitionOrderAction())->build()
//or
$typeUpdate = $builder->changeFieldDefinitionOrder(
    function (TypeChangeFieldDefinitionOrderAction $action): TypeChangeFieldDefinitionOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeKey

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->changeKey(new TypeChangeKeyAction())->build()
//or
$typeUpdate = $builder->changeKey(
    function (TypeChangeKeyAction $action): TypeChangeKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeLabel

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->changeLabel(new TypeChangeLabelAction())->build()
//or
$typeUpdate = $builder->changeLabel(
    function (TypeChangeLabelAction $action): TypeChangeLabelAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeLocalizedEnumValueOrder

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->changeLocalizedEnumValueOrder(new TypeChangeLocalizedEnumValueOrderAction())->build()
//or
$typeUpdate = $builder->changeLocalizedEnumValueOrder(
    function (TypeChangeLocalizedEnumValueOrderAction $action): TypeChangeLocalizedEnumValueOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->changeName(new TypeChangeNameAction())->build()
//or
$typeUpdate = $builder->changeName(
    function (TypeChangeNameAction $action): TypeChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeFieldDefinition

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->removeFieldDefinition(new TypeRemoveFieldDefinitionAction())->build()
//or
$typeUpdate = $builder->removeFieldDefinition(
    function (TypeRemoveFieldDefinitionAction $action): TypeRemoveFieldDefinitionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDescription

```php
use Commercetools\Builder\TypeUpdateBuilder;

$builder = new TypeUpdateBuilder();
$typeUpdate = $builder->setDescription(new TypeSetDescriptionAction())->build()
//or
$typeUpdate = $builder->setDescription(
    function (TypeSetDescriptionAction $action): TypeSetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
