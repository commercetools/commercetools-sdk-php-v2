# InventoryEntryUpdateBuilder

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
```

## addQuantity

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->addQuantity(new InventoryAddQuantityAction())->build()
//or
$inventoryEntryUpdate = $builder->addQuantity(
    function (InventoryAddQuantityAction $action): InventoryAddQuantityAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeQuantity

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->changeQuantity(new InventoryChangeQuantityAction())->build()
//or
$inventoryEntryUpdate = $builder->changeQuantity(
    function (InventoryChangeQuantityAction $action): InventoryChangeQuantityAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeQuantity

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->removeQuantity(new InventoryRemoveQuantityAction())->build()
//or
$inventoryEntryUpdate = $builder->removeQuantity(
    function (InventoryRemoveQuantityAction $action): InventoryRemoveQuantityAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomField

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->setCustomField(new InventorySetCustomFieldAction())->build()
//or
$inventoryEntryUpdate = $builder->setCustomField(
    function (InventorySetCustomFieldAction $action): InventorySetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomType

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->setCustomType(new InventorySetCustomTypeAction())->build()
//or
$inventoryEntryUpdate = $builder->setCustomType(
    function (InventorySetCustomTypeAction $action): InventorySetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setExpectedDelivery

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->setExpectedDelivery(new InventorySetExpectedDeliveryAction())->build()
//or
$inventoryEntryUpdate = $builder->setExpectedDelivery(
    function (InventorySetExpectedDeliveryAction $action): InventorySetExpectedDeliveryAction {
        // modify action as needed
        return $action;
    })->build();
```
## setRestockableInDays

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->setRestockableInDays(new InventorySetRestockableInDaysAction())->build()
//or
$inventoryEntryUpdate = $builder->setRestockableInDays(
    function (InventorySetRestockableInDaysAction $action): InventorySetRestockableInDaysAction {
        // modify action as needed
        return $action;
    })->build();
```
## setSupplyChannel

```php
use Commercetools\Builder\InventoryEntryUpdateBuilder;

$builder = new InventoryEntryUpdateBuilder();
$inventoryEntryUpdate = $builder->setSupplyChannel(new InventorySetSupplyChannelAction())->build()
//or
$inventoryEntryUpdate = $builder->setSupplyChannel(
    function (InventorySetSupplyChannelAction $action): InventorySetSupplyChannelAction {
        // modify action as needed
        return $action;
    })->build();
```
