# PaymentUpdateBuilder

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
```

## addInterfaceInteraction

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->addInterfaceInteraction(new PaymentAddInterfaceInteractionAction())->build()
//or
$paymentUpdate = $builder->addInterfaceInteraction(
    function (PaymentAddInterfaceInteractionAction $action): PaymentAddInterfaceInteractionAction {
        // modify action as needed
        return $action;
    })->build();
```
## addTransaction

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->addTransaction(new PaymentAddTransactionAction())->build()
//or
$paymentUpdate = $builder->addTransaction(
    function (PaymentAddTransactionAction $action): PaymentAddTransactionAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeAmountPlanned

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->changeAmountPlanned(new PaymentChangeAmountPlannedAction())->build()
//or
$paymentUpdate = $builder->changeAmountPlanned(
    function (PaymentChangeAmountPlannedAction $action): PaymentChangeAmountPlannedAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTransactionInteractionId

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->changeTransactionInteractionId(new PaymentChangeTransactionInteractionIdAction())->build()
//or
$paymentUpdate = $builder->changeTransactionInteractionId(
    function (PaymentChangeTransactionInteractionIdAction $action): PaymentChangeTransactionInteractionIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTransactionState

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->changeTransactionState(new PaymentChangeTransactionStateAction())->build()
//or
$paymentUpdate = $builder->changeTransactionState(
    function (PaymentChangeTransactionStateAction $action): PaymentChangeTransactionStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTransactionTimestamp

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->changeTransactionTimestamp(new PaymentChangeTransactionTimestampAction())->build()
//or
$paymentUpdate = $builder->changeTransactionTimestamp(
    function (PaymentChangeTransactionTimestampAction $action): PaymentChangeTransactionTimestampAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAmountPaid

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setAmountPaid(new PaymentSetAmountPaidAction())->build()
//or
$paymentUpdate = $builder->setAmountPaid(
    function (PaymentSetAmountPaidAction $action): PaymentSetAmountPaidAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAmountRefunded

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setAmountRefunded(new PaymentSetAmountRefundedAction())->build()
//or
$paymentUpdate = $builder->setAmountRefunded(
    function (PaymentSetAmountRefundedAction $action): PaymentSetAmountRefundedAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAuthorization

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setAuthorization(new PaymentSetAuthorizationAction())->build()
//or
$paymentUpdate = $builder->setAuthorization(
    function (PaymentSetAuthorizationAction $action): PaymentSetAuthorizationAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomField

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setCustomField(new PaymentSetCustomFieldAction())->build()
//or
$paymentUpdate = $builder->setCustomField(
    function (PaymentSetCustomFieldAction $action): PaymentSetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomType

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setCustomType(new PaymentSetCustomTypeAction())->build()
//or
$paymentUpdate = $builder->setCustomType(
    function (PaymentSetCustomTypeAction $action): PaymentSetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomer

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setCustomer(new PaymentSetCustomerAction())->build()
//or
$paymentUpdate = $builder->setCustomer(
    function (PaymentSetCustomerAction $action): PaymentSetCustomerAction {
        // modify action as needed
        return $action;
    })->build();
```
## setExternalId

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setExternalId(new PaymentSetExternalIdAction())->build()
//or
$paymentUpdate = $builder->setExternalId(
    function (PaymentSetExternalIdAction $action): PaymentSetExternalIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## setInterfaceId

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setInterfaceId(new PaymentSetInterfaceIdAction())->build()
//or
$paymentUpdate = $builder->setInterfaceId(
    function (PaymentSetInterfaceIdAction $action): PaymentSetInterfaceIdAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setKey(new PaymentSetKeyAction())->build()
//or
$paymentUpdate = $builder->setKey(
    function (PaymentSetKeyAction $action): PaymentSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMethodInfoInterface

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setMethodInfoInterface(new PaymentSetMethodInfoInterfaceAction())->build()
//or
$paymentUpdate = $builder->setMethodInfoInterface(
    function (PaymentSetMethodInfoInterfaceAction $action): PaymentSetMethodInfoInterfaceAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMethodInfoMethod

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setMethodInfoMethod(new PaymentSetMethodInfoMethodAction())->build()
//or
$paymentUpdate = $builder->setMethodInfoMethod(
    function (PaymentSetMethodInfoMethodAction $action): PaymentSetMethodInfoMethodAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMethodInfoName

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setMethodInfoName(new PaymentSetMethodInfoNameAction())->build()
//or
$paymentUpdate = $builder->setMethodInfoName(
    function (PaymentSetMethodInfoNameAction $action): PaymentSetMethodInfoNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## setStatusInterfaceCode

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setStatusInterfaceCode(new PaymentSetStatusInterfaceCodeAction())->build()
//or
$paymentUpdate = $builder->setStatusInterfaceCode(
    function (PaymentSetStatusInterfaceCodeAction $action): PaymentSetStatusInterfaceCodeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setStatusInterfaceText

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->setStatusInterfaceText(new PaymentSetStatusInterfaceTextAction())->build()
//or
$paymentUpdate = $builder->setStatusInterfaceText(
    function (PaymentSetStatusInterfaceTextAction $action): PaymentSetStatusInterfaceTextAction {
        // modify action as needed
        return $action;
    })->build();
```
## transitionState

```php
use Commercetools\Builder\PaymentUpdateBuilder;

$builder = new PaymentUpdateBuilder();
$paymentUpdate = $builder->transitionState(new PaymentTransitionStateAction())->build()
//or
$paymentUpdate = $builder->transitionState(
    function (PaymentTransitionStateAction $action): PaymentTransitionStateAction {
        // modify action as needed
        return $action;
    })->build();
```
