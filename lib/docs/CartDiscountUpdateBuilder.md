# CartDiscountUpdateBuilder

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
```

## changeCartPredicate

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeCartPredicate(new CartDiscountChangeCartPredicateAction())->build()
//or
$cartDiscountUpdate = $builder->changeCartPredicate(
    function (CartDiscountChangeCartPredicateAction $action): CartDiscountChangeCartPredicateAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeIsActive

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeIsActive(new CartDiscountChangeIsActiveAction())->build()
//or
$cartDiscountUpdate = $builder->changeIsActive(
    function (CartDiscountChangeIsActiveAction $action): CartDiscountChangeIsActiveAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeName(new CartDiscountChangeNameAction())->build()
//or
$cartDiscountUpdate = $builder->changeName(
    function (CartDiscountChangeNameAction $action): CartDiscountChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeRequiresDiscountCode

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeRequiresDiscountCode(new CartDiscountChangeRequiresDiscountCodeAction())->build()
//or
$cartDiscountUpdate = $builder->changeRequiresDiscountCode(
    function (CartDiscountChangeRequiresDiscountCodeAction $action): CartDiscountChangeRequiresDiscountCodeAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeSortOrder

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeSortOrder(new CartDiscountChangeSortOrderAction())->build()
//or
$cartDiscountUpdate = $builder->changeSortOrder(
    function (CartDiscountChangeSortOrderAction $action): CartDiscountChangeSortOrderAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeStackingMode

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeStackingMode(new CartDiscountChangeStackingModeAction())->build()
//or
$cartDiscountUpdate = $builder->changeStackingMode(
    function (CartDiscountChangeStackingModeAction $action): CartDiscountChangeStackingModeAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTarget

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeTarget(new CartDiscountChangeTargetAction())->build()
//or
$cartDiscountUpdate = $builder->changeTarget(
    function (CartDiscountChangeTargetAction $action): CartDiscountChangeTargetAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeValue

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->changeValue(new CartDiscountChangeValueAction())->build()
//or
$cartDiscountUpdate = $builder->changeValue(
    function (CartDiscountChangeValueAction $action): CartDiscountChangeValueAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomField

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->setCustomField(new CartDiscountSetCustomFieldAction())->build()
//or
$cartDiscountUpdate = $builder->setCustomField(
    function (CartDiscountSetCustomFieldAction $action): CartDiscountSetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomType

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->setCustomType(new CartDiscountSetCustomTypeAction())->build()
//or
$cartDiscountUpdate = $builder->setCustomType(
    function (CartDiscountSetCustomTypeAction $action): CartDiscountSetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDescription

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->setDescription(new CartDiscountSetDescriptionAction())->build()
//or
$cartDiscountUpdate = $builder->setDescription(
    function (CartDiscountSetDescriptionAction $action): CartDiscountSetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## setValidFrom

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->setValidFrom(new CartDiscountSetValidFromAction())->build()
//or
$cartDiscountUpdate = $builder->setValidFrom(
    function (CartDiscountSetValidFromAction $action): CartDiscountSetValidFromAction {
        // modify action as needed
        return $action;
    })->build();
```
## setValidUntil

```php
use Commercetools\Builder\CartDiscountUpdateBuilder;

$builder = new CartDiscountUpdateBuilder();
$cartDiscountUpdate = $builder->setValidUntil(new CartDiscountSetValidUntilAction())->build()
//or
$cartDiscountUpdate = $builder->setValidUntil(
    function (CartDiscountSetValidUntilAction $action): CartDiscountSetValidUntilAction {
        // modify action as needed
        return $action;
    })->build();
```
