# ProjectUpdateBuilder

```php
use Commercetools\Builder\ProjectUpdateBuilder;

$builder = new ProjectUpdateBuilder();
```

## changeCountries

```php
use Commercetools\Builder\ProjectUpdateBuilder;

$builder = new ProjectUpdateBuilder();
$projectUpdate = $builder->changeCountries(new ProjectChangeCountriesAction())->build()
//or
$projectUpdate = $builder->changeCountries(
    function (ProjectChangeCountriesAction $action): ProjectChangeCountriesAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeCurrencies

```php
use Commercetools\Builder\ProjectUpdateBuilder;

$builder = new ProjectUpdateBuilder();
$projectUpdate = $builder->changeCurrencies(new ProjectChangeCurrenciesAction())->build()
//or
$projectUpdate = $builder->changeCurrencies(
    function (ProjectChangeCurrenciesAction $action): ProjectChangeCurrenciesAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeLanguages

```php
use Commercetools\Builder\ProjectUpdateBuilder;

$builder = new ProjectUpdateBuilder();
$projectUpdate = $builder->changeLanguages(new ProjectChangeLanguagesAction())->build()
//or
$projectUpdate = $builder->changeLanguages(
    function (ProjectChangeLanguagesAction $action): ProjectChangeLanguagesAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeMessagesEnabled

```php
use Commercetools\Builder\ProjectUpdateBuilder;

$builder = new ProjectUpdateBuilder();
$projectUpdate = $builder->changeMessagesEnabled(new ProjectChangeMessagesEnabledAction())->build()
//or
$projectUpdate = $builder->changeMessagesEnabled(
    function (ProjectChangeMessagesEnabledAction $action): ProjectChangeMessagesEnabledAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\ProjectUpdateBuilder;

$builder = new ProjectUpdateBuilder();
$projectUpdate = $builder->changeName(new ProjectChangeNameAction())->build()
//or
$projectUpdate = $builder->changeName(
    function (ProjectChangeNameAction $action): ProjectChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## setShippingRateInputType

```php
use Commercetools\Builder\ProjectUpdateBuilder;

$builder = new ProjectUpdateBuilder();
$projectUpdate = $builder->setShippingRateInputType(new ProjectSetShippingRateInputTypeAction())->build()
//or
$projectUpdate = $builder->setShippingRateInputType(
    function (ProjectSetShippingRateInputTypeAction $action): ProjectSetShippingRateInputTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
