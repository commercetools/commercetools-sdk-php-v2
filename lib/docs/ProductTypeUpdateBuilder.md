# ProductTypeUpdateBuilder

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
```

## addAttributeDefinition

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->addAttributeDefinition(new ProductTypeAddAttributeDefinitionAction())->build()
//or
$productTypeUpdate = $builder->addAttributeDefinition(
    function (ProductTypeAddAttributeDefinitionAction $action): ProductTypeAddAttributeDefinitionAction {
        // modify action as needed
        return $action;
    })->build();
```
## addLocalizedEnumValue

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->addLocalizedEnumValue(new ProductTypeAddLocalizedEnumValueAction())->build()
//or
$productTypeUpdate = $builder->addLocalizedEnumValue(
    function (ProductTypeAddLocalizedEnumValueAction $action): ProductTypeAddLocalizedEnumValueAction {
        // modify action as needed
        return $action;
    })->build();
```
## addPlainEnumValue

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->addPlainEnumValue(new ProductTypeAddPlainEnumValueAction())->build()
//or
$productTypeUpdate = $builder->addPlainEnumValue(
    function (ProductTypeAddPlainEnumValueAction $action): ProductTypeAddPlainEnumValueAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeAttributeConstraint

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeAttributeConstraint(new ProductTypeChangeAttributeConstraintAction())->build()
//or
$productTypeUpdate = $builder->changeAttributeConstraint(
    function (ProductTypeChangeAttributeConstraintAction $action): ProductTypeChangeAttributeConstraintAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeAttributeOrder

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeAttributeOrder(new ProductTypeChangeAttributeOrderAction())->build()
//or
$productTypeUpdate = $builder->changeAttributeOrder(
    function (ProductTypeChangeAttributeOrderAction $action): ProductTypeChangeAttributeOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeDescription

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeDescription(new ProductTypeChangeDescriptionAction())->build()
//or
$productTypeUpdate = $builder->changeDescription(
    function (ProductTypeChangeDescriptionAction $action): ProductTypeChangeDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeInputHint

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeInputHint(new ProductTypeChangeInputHintAction())->build()
//or
$productTypeUpdate = $builder->changeInputHint(
    function (ProductTypeChangeInputHintAction $action): ProductTypeChangeInputHintAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeIsSearchable

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeIsSearchable(new ProductTypeChangeIsSearchableAction())->build()
//or
$productTypeUpdate = $builder->changeIsSearchable(
    function (ProductTypeChangeIsSearchableAction $action): ProductTypeChangeIsSearchableAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeLabel

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeLabel(new ProductTypeChangeLabelAction())->build()
//or
$productTypeUpdate = $builder->changeLabel(
    function (ProductTypeChangeLabelAction $action): ProductTypeChangeLabelAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeLocalizedEnumValueLabel

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeLocalizedEnumValueLabel(new ProductTypeChangeLocalizedEnumValueLabelAction())->build()
//or
$productTypeUpdate = $builder->changeLocalizedEnumValueLabel(
    function (ProductTypeChangeLocalizedEnumValueLabelAction $action): ProductTypeChangeLocalizedEnumValueLabelAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeLocalizedEnumValueOrder

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeLocalizedEnumValueOrder(new ProductTypeChangeLocalizedEnumValueOrderAction())->build()
//or
$productTypeUpdate = $builder->changeLocalizedEnumValueOrder(
    function (ProductTypeChangeLocalizedEnumValueOrderAction $action): ProductTypeChangeLocalizedEnumValueOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changeName(new ProductTypeChangeNameAction())->build()
//or
$productTypeUpdate = $builder->changeName(
    function (ProductTypeChangeNameAction $action): ProductTypeChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## changePlainEnumValueLabel

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changePlainEnumValueLabel(new ProductTypeChangePlainEnumValueLabelAction())->build()
//or
$productTypeUpdate = $builder->changePlainEnumValueLabel(
    function (ProductTypeChangePlainEnumValueLabelAction $action): ProductTypeChangePlainEnumValueLabelAction {
        // modify action as needed
        return $action;
    })->build();
```
## changePlainEnumValueOrder

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->changePlainEnumValueOrder(new ProductTypeChangePlainEnumValueOrderAction())->build()
//or
$productTypeUpdate = $builder->changePlainEnumValueOrder(
    function (ProductTypeChangePlainEnumValueOrderAction $action): ProductTypeChangePlainEnumValueOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeAttributeDefinition

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->removeAttributeDefinition(new ProductTypeRemoveAttributeDefinitionAction())->build()
//or
$productTypeUpdate = $builder->removeAttributeDefinition(
    function (ProductTypeRemoveAttributeDefinitionAction $action): ProductTypeRemoveAttributeDefinitionAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeEnumValues

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->removeEnumValues(new ProductTypeRemoveEnumValuesAction())->build()
//or
$productTypeUpdate = $builder->removeEnumValues(
    function (ProductTypeRemoveEnumValuesAction $action): ProductTypeRemoveEnumValuesAction {
        // modify action as needed
        return $action;
    })->build();
```
## setInputTip

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->setInputTip(new ProductTypeSetInputTipAction())->build()
//or
$productTypeUpdate = $builder->setInputTip(
    function (ProductTypeSetInputTipAction $action): ProductTypeSetInputTipAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\ProductTypeUpdateBuilder;

$builder = new ProductTypeUpdateBuilder();
$productTypeUpdate = $builder->setKey(new ProductTypeSetKeyAction())->build()
//or
$productTypeUpdate = $builder->setKey(
    function (ProductTypeSetKeyAction $action): ProductTypeSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
