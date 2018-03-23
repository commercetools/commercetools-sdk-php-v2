# ChannelUpdateBuilder

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
```

## addRoles

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->addRoles(new ChannelAddRolesAction())->build()
//or
$channelUpdate = $builder->addRoles(
    function (ChannelAddRolesAction $action): ChannelAddRolesAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeDescription

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->changeDescription(new ChannelChangeDescriptionAction())->build()
//or
$channelUpdate = $builder->changeDescription(
    function (ChannelChangeDescriptionAction $action): ChannelChangeDescriptionAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeKey

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->changeKey(new ChannelChangeKeyAction())->build()
//or
$channelUpdate = $builder->changeKey(
    function (ChannelChangeKeyAction $action): ChannelChangeKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeName

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->changeName(new ChannelChangeNameAction())->build()
//or
$channelUpdate = $builder->changeName(
    function (ChannelChangeNameAction $action): ChannelChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## removeRoles

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->removeRoles(new ChannelRemoveRolesAction())->build()
//or
$channelUpdate = $builder->removeRoles(
    function (ChannelRemoveRolesAction $action): ChannelRemoveRolesAction {
        // modify action as needed
        return $action;
    })->build();
```
## setAddress

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->setAddress(new ChannelSetAddressAction())->build()
//or
$channelUpdate = $builder->setAddress(
    function (ChannelSetAddressAction $action): ChannelSetAddressAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomField

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->setCustomField(new ChannelSetCustomFieldAction())->build()
//or
$channelUpdate = $builder->setCustomField(
    function (ChannelSetCustomFieldAction $action): ChannelSetCustomFieldAction {
        // modify action as needed
        return $action;
    })->build();
```
## setCustomType

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->setCustomType(new ChannelSetCustomTypeAction())->build()
//or
$channelUpdate = $builder->setCustomType(
    function (ChannelSetCustomTypeAction $action): ChannelSetCustomTypeAction {
        // modify action as needed
        return $action;
    })->build();
```
## setGeoLocation

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->setGeoLocation(new ChannelSetGeolocationAction())->build()
//or
$channelUpdate = $builder->setGeoLocation(
    function (ChannelSetGeolocationAction $action): ChannelSetGeolocationAction {
        // modify action as needed
        return $action;
    })->build();
```
## setRoles

```php
use Commercetools\Builder\ChannelUpdateBuilder;

$builder = new ChannelUpdateBuilder();
$channelUpdate = $builder->setRoles(new ChannelSetRolesAction())->build()
//or
$channelUpdate = $builder->setRoles(
    function (ChannelSetRolesAction $action): ChannelSetRolesAction {
        // modify action as needed
        return $action;
    })->build();
```
