# ExtensionUpdateBuilder

```php
use Commercetools\Builder\ExtensionUpdateBuilder;

$builder = new ExtensionUpdateBuilder();
```

## changeDestination

```php
use Commercetools\Builder\ExtensionUpdateBuilder;

$builder = new ExtensionUpdateBuilder();
$extensionUpdate = $builder->changeDestination(new ExtensionChangeDestinationAction())->build()
//or
$extensionUpdate = $builder->changeDestination(
    function (ExtensionChangeDestinationAction $action): ExtensionChangeDestinationAction {
        // modify action as needed
        return $action;
    })->build();
```
## changeTriggers

```php
use Commercetools\Builder\ExtensionUpdateBuilder;

$builder = new ExtensionUpdateBuilder();
$extensionUpdate = $builder->changeTriggers(new ExtensionChangeTriggersAction())->build()
//or
$extensionUpdate = $builder->changeTriggers(
    function (ExtensionChangeTriggersAction $action): ExtensionChangeTriggersAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\ExtensionUpdateBuilder;

$builder = new ExtensionUpdateBuilder();
$extensionUpdate = $builder->setKey(new ExtensionSetKeyAction())->build()
//or
$extensionUpdate = $builder->setKey(
    function (ExtensionSetKeyAction $action): ExtensionSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
