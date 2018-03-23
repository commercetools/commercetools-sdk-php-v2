# ShippingMethodUpdateBuilder

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
```

## addShippingRate

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->addShippingRate(new ShippingMethodAddShippingRateAction())->build()
//or
$shippingMethodUpdate = $builder->addShippingRate(
    function (ShippingMethodAddShippingRateAction $action): ShippingMethodAddShippingRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## addZone

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->addZone(new ShippingMethodAddZoneAction())->build()
//or
$shippingMethodUpdate = $builder->addZone(
    function (ShippingMethodAddZoneAction $action): ShippingMethodAddZoneAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeIsDefault

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->changeIsDefault(new ShippingMethodChangeIsDefaultAction())->build()
//or
$shippingMethodUpdate = $builder->changeIsDefault(
    function (ShippingMethodChangeIsDefaultAction $action): ShippingMethodChangeIsDefaultAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->changeName(new ShippingMethodChangeNameAction())->build()
//or
$shippingMethodUpdate = $builder->changeName(
    function (ShippingMethodChangeNameAction $action): ShippingMethodChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTaxCategory

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->changeTaxCategory(new ShippingMethodChangeTaxCategoryAction())->build()
//or
$shippingMethodUpdate = $builder->changeTaxCategory(
    function (ShippingMethodChangeTaxCategoryAction $action): ShippingMethodChangeTaxCategoryAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeShippingRate

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->removeShippingRate(new ShippingMethodRemoveShippingRateAction())->build()
//or
$shippingMethodUpdate = $builder->removeShippingRate(
    function (ShippingMethodRemoveShippingRateAction $action): ShippingMethodRemoveShippingRateAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeZone

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->removeZone(new ShippingMethodRemoveZoneAction())->build()
//or
$shippingMethodUpdate = $builder->removeZone(
    function (ShippingMethodRemoveZoneAction $action): ShippingMethodRemoveZoneAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDescription

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->setDescription(new ShippingMethodSetDescriptionAction())->build()
//or
$shippingMethodUpdate = $builder->setDescription(
    function (ShippingMethodSetDescriptionAction $action): ShippingMethodSetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->setKey(new ShippingMethodSetKeyAction())->build()
//or
$shippingMethodUpdate = $builder->setKey(
    function (ShippingMethodSetKeyAction $action): ShippingMethodSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## setPredicate

```php
use Commercetools\Builder\ShippingMethodUpdateBuilder;

$builder = new ShippingMethodUpdateBuilder();
$shippingMethodUpdate = $builder->setPredicate(new ShippingMethodSetPredicateAction())->build()
//or
$shippingMethodUpdate = $builder->setPredicate(
    function (ShippingMethodSetPredicateAction $action): ShippingMethodSetPredicateAction {
        // modify action as needed
        return $action;
    })->build();
```
