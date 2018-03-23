# OrderUpdateBuilder

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
```

## addDelivery

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->addDelivery(new OrderAddDeliveryAction())->build()
//or
$orderUpdate = $builder->addDelivery(
    function (OrderAddDeliveryAction $action): OrderAddDeliveryAction {
        // modify action as needed
        return $action;
    })->build();
```
## addParcelToDelivery

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->addParcelToDelivery(new OrderAddParcelToDeliveryAction())->build()
//or
$orderUpdate = $builder->addParcelToDelivery(
    function (OrderAddParcelToDeliveryAction $action): OrderAddParcelToDeliveryAction {
        // modify action as needed
        return $action;
    })->build();
```
## addPayment

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->addPayment(new OrderAddPaymentAction())->build()
//or
$orderUpdate = $builder->addPayment(
    function (OrderAddPaymentAction $action): OrderAddPaymentAction {
        // modify action as needed
        return $action;
    })->build();
```
## addReturnInfo

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->addReturnInfo(new OrderAddReturnInfoAction())->build()
//or
$orderUpdate = $builder->addReturnInfo(
    function (OrderAddReturnInfoAction $action): OrderAddReturnInfoAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeOrderState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->changeOrderState(new OrderChangeOrderStateAction())->build()
//or
$orderUpdate = $builder->changeOrderState(
    function (OrderChangeOrderStateAction $action): OrderChangeOrderStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## changePaymentState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->changePaymentState(new OrderChangePaymentStateAction())->build()
//or
$orderUpdate = $builder->changePaymentState(
    function (OrderChangePaymentStateAction $action): OrderChangePaymentStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeShipmentState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->changeShipmentState(new OrderChangeShipmentStateAction())->build()
//or
$orderUpdate = $builder->changeShipmentState(
    function (OrderChangeShipmentStateAction $action): OrderChangeShipmentStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## importCustomLineItemState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->importCustomLineItemState(new OrderImportCustomLineItemStateAction())->build()
//or
$orderUpdate = $builder->importCustomLineItemState(
    function (OrderImportCustomLineItemStateAction $action): OrderImportCustomLineItemStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## importLineItemState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->importLineItemState(new OrderImportLineItemStateAction())->build()
//or
$orderUpdate = $builder->importLineItemState(
    function (OrderImportLineItemStateAction $action): OrderImportLineItemStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeDelivery

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->removeDelivery(new OrderRemoveDeliveryAction())->build()
//or
$orderUpdate = $builder->removeDelivery(
    function (OrderRemoveDeliveryAction $action): OrderRemoveDeliveryAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeParcelFromDelivery

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->removeParcelFromDelivery(new OrderRemoveParcelFromDeliveryAction())->build()
//or
$orderUpdate = $builder->removeParcelFromDelivery(
    function (OrderRemoveParcelFromDeliveryAction $action): OrderRemoveParcelFromDeliveryAction {
        // modify action as needed
        return $action;
    })->build();
```
## removePayment

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->removePayment(new OrderRemovePaymentAction())->build()
//or
$orderUpdate = $builder->removePayment(
    function (OrderRemovePaymentAction $action): OrderRemovePaymentAction {
        // modify action as needed
        return $action;
    })->build();
```
## setBillingAddress

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setBillingAddress(new OrderSetBillingAddressAction())->build()
//or
$orderUpdate = $builder->setBillingAddress(
    function (OrderSetBillingAddressAction $action): OrderSetBillingAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomField

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setCustomField(new OrderSetCustomFieldAction())->build()
//or
$orderUpdate = $builder->setCustomField(
    function (OrderSetCustomFieldAction $action): OrderSetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomLineItemCustomField

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setCustomLineItemCustomField(new OrderSetCustomLineItemCustomFieldAction())->build()
//or
$orderUpdate = $builder->setCustomLineItemCustomField(
    function (OrderSetCustomLineItemCustomFieldAction $action): OrderSetCustomLineItemCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomLineItemCustomType

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setCustomLineItemCustomType(new OrderSetCustomLineItemCustomTypeAction())->build()
//or
$orderUpdate = $builder->setCustomLineItemCustomType(
    function (OrderSetCustomLineItemCustomTypeAction $action): OrderSetCustomLineItemCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomType

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setCustomType(new OrderSetCustomTypeAction())->build()
//or
$orderUpdate = $builder->setCustomType(
    function (OrderSetCustomTypeAction $action): OrderSetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomerEmail

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setCustomerEmail(new OrderSetCustomerEmailAction())->build()
//or
$orderUpdate = $builder->setCustomerEmail(
    function (OrderSetCustomerEmailAction $action): OrderSetCustomerEmailAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDeliveryAddress

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setDeliveryAddress(new OrderSetDeliveryAddressAction())->build()
//or
$orderUpdate = $builder->setDeliveryAddress(
    function (OrderSetDeliveryAddressAction $action): OrderSetDeliveryAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDeliveryItems

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setDeliveryItems(new OrderSetDeliveryItemsAction())->build()
//or
$orderUpdate = $builder->setDeliveryItems(
    function (OrderSetDeliveryItemsAction $action): OrderSetDeliveryItemsAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemCustomField

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setLineItemCustomField(new OrderSetLineItemCustomFieldAction())->build()
//or
$orderUpdate = $builder->setLineItemCustomField(
    function (OrderSetLineItemCustomFieldAction $action): OrderSetLineItemCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLineItemCustomType

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setLineItemCustomType(new OrderSetLineItemCustomTypeAction())->build()
//or
$orderUpdate = $builder->setLineItemCustomType(
    function (OrderSetLineItemCustomTypeAction $action): OrderSetLineItemCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setLocale

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setLocale(new OrderSetLocaleAction())->build()
//or
$orderUpdate = $builder->setLocale(
    function (OrderSetLocaleAction $action): OrderSetLocaleAction {
        // modify action as needed
        return $action;
    })->build();
```
## setOrderNumber

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setOrderNumber(new OrderSetOrderNumberAction())->build()
//or
$orderUpdate = $builder->setOrderNumber(
    function (OrderSetOrderNumberAction $action): OrderSetOrderNumberAction {
        // modify action as needed
        return $action;
    })->build();
```
## setParcelItems

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setParcelItems(new OrderSetParcelItemsAction())->build()
//or
$orderUpdate = $builder->setParcelItems(
    function (OrderSetParcelItemsAction $action): OrderSetParcelItemsAction {
        // modify action as needed
        return $action;
    })->build();
```
## setParcelMeasurements

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setParcelMeasurements(new OrderSetParcelMeasurementsAction())->build()
//or
$orderUpdate = $builder->setParcelMeasurements(
    function (OrderSetParcelMeasurementsAction $action): OrderSetParcelMeasurementsAction {
        // modify action as needed
        return $action;
    })->build();
```
## setParcelTrackingData

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setParcelTrackingData(new OrderSetParcelTrackingDataAction())->build()
//or
$orderUpdate = $builder->setParcelTrackingData(
    function (OrderSetParcelTrackingDataAction $action): OrderSetParcelTrackingDataAction {
        // modify action as needed
        return $action;
    })->build();
```
## setReturnPaymentState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setReturnPaymentState(new OrderSetReturnPaymentStateAction())->build()
//or
$orderUpdate = $builder->setReturnPaymentState(
    function (OrderSetReturnPaymentStateAction $action): OrderSetReturnPaymentStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## setReturnShipmentState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setReturnShipmentState(new OrderSetReturnShipmentStateAction())->build()
//or
$orderUpdate = $builder->setReturnShipmentState(
    function (OrderSetReturnShipmentStateAction $action): OrderSetReturnShipmentStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## setShippingAddress

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->setShippingAddress(new OrderSetShippingAddressAction())->build()
//or
$orderUpdate = $builder->setShippingAddress(
    function (OrderSetShippingAddressAction $action): OrderSetShippingAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## transitionCustomLineItemState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->transitionCustomLineItemState(new OrderTransitionCustomLineItemStateAction())->build()
//or
$orderUpdate = $builder->transitionCustomLineItemState(
    function (OrderTransitionCustomLineItemStateAction $action): OrderTransitionCustomLineItemStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## transitionLineItemState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->transitionLineItemState(new OrderTransitionLineItemStateAction())->build()
//or
$orderUpdate = $builder->transitionLineItemState(
    function (OrderTransitionLineItemStateAction $action): OrderTransitionLineItemStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## transitionState

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->transitionState(new OrderTransitionStateAction())->build()
//or
$orderUpdate = $builder->transitionState(
    function (OrderTransitionStateAction $action): OrderTransitionStateAction {
        // modify action as needed
        return $action;
    })->build();
```
## updateSyncInfo

```php
use Commercetools\Builder\OrderUpdateBuilder;

$builder = new OrderUpdateBuilder();
$orderUpdate = $builder->updateSyncInfo(new OrderUpdateSyncInfoAction())->build()
//or
$orderUpdate = $builder->updateSyncInfo(
    function (OrderUpdateSyncInfoAction $action): OrderUpdateSyncInfoAction {
        // modify action as needed
        return $action;
    })->build();
```
