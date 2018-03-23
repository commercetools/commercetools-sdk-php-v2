# TaxCategoryUpdateBuilder

```php
use Commercetools\Builder\TaxCategoryUpdateBuilder;

$builder = new TaxCategoryUpdateBuilder();
```

## addTaxRate

```php
use Commercetools\Builder\TaxCategoryUpdateBuilder;

$builder = new TaxCategoryUpdateBuilder();
$taxCategoryUpdate = $builder->addTaxRate(new TaxCategoryAddTaxRateAction())->build()
//or
$taxCategoryUpdate = $builder->addTaxRate(
    function (TaxCategoryAddTaxRateAction $action): TaxCategoryAddTaxRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\TaxCategoryUpdateBuilder;

$builder = new TaxCategoryUpdateBuilder();
$taxCategoryUpdate = $builder->changeName(new TaxCategoryChangeNameAction())->build()
//or
$taxCategoryUpdate = $builder->changeName(
    function (TaxCategoryChangeNameAction $action): TaxCategoryChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeTaxRate

```php
use Commercetools\Builder\TaxCategoryUpdateBuilder;

$builder = new TaxCategoryUpdateBuilder();
$taxCategoryUpdate = $builder->removeTaxRate(new TaxCategoryRemoveTaxRateAction())->build()
//or
$taxCategoryUpdate = $builder->removeTaxRate(
    function (TaxCategoryRemoveTaxRateAction $action): TaxCategoryRemoveTaxRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## replaceTaxRate

```php
use Commercetools\Builder\TaxCategoryUpdateBuilder;

$builder = new TaxCategoryUpdateBuilder();
$taxCategoryUpdate = $builder->replaceTaxRate(new TaxCategoryReplaceTaxRateAction())->build()
//or
$taxCategoryUpdate = $builder->replaceTaxRate(
    function (TaxCategoryReplaceTaxRateAction $action): TaxCategoryReplaceTaxRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDescription

```php
use Commercetools\Builder\TaxCategoryUpdateBuilder;

$builder = new TaxCategoryUpdateBuilder();
$taxCategoryUpdate = $builder->setDescription(new TaxCategorySetDescriptionAction())->build()
//or
$taxCategoryUpdate = $builder->setDescription(
    function (TaxCategorySetDescriptionAction $action): TaxCategorySetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\TaxCategoryUpdateBuilder;

$builder = new TaxCategoryUpdateBuilder();
$taxCategoryUpdate = $builder->setKey(new TaxCategorySetKeyAction())->build()
//or
$taxCategoryUpdate = $builder->setKey(
    function (TaxCategorySetKeyAction $action): TaxCategorySetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
