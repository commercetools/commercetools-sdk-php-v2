# ZoneUpdateBuilder

```php
use Commercetools\Builder\ZoneUpdateBuilder;

$builder = new ZoneUpdateBuilder();
```

## addLocation

```php
use Commercetools\Builder\ZoneUpdateBuilder;

$builder = new ZoneUpdateBuilder();
$zoneUpdate = $builder->addLocation(new ZoneAddLocationAction())->build()
//or
$zoneUpdate = $builder->addLocation(
    function (ZoneAddLocationAction $action): ZoneAddLocationAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\ZoneUpdateBuilder;

$builder = new ZoneUpdateBuilder();
$zoneUpdate = $builder->changeName(new ZoneChangeNameAction())->build()
//or
$zoneUpdate = $builder->changeName(
    function (ZoneChangeNameAction $action): ZoneChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeLocation

```php
use Commercetools\Builder\ZoneUpdateBuilder;

$builder = new ZoneUpdateBuilder();
$zoneUpdate = $builder->removeLocation(new ZoneRemoveLocationAction())->build()
//or
$zoneUpdate = $builder->removeLocation(
    function (ZoneRemoveLocationAction $action): ZoneRemoveLocationAction {
        // modify action as needed
        return $action;
    })->build();
```
## setDescription

```php
use Commercetools\Builder\ZoneUpdateBuilder;

$builder = new ZoneUpdateBuilder();
$zoneUpdate = $builder->setDescription(new ZoneSetDescriptionAction())->build()
//or
$zoneUpdate = $builder->setDescription(
    function (ZoneSetDescriptionAction $action): ZoneSetDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
