# CustomerGroupUpdateBuilder

```php
use Commercetools\Builder\CustomerGroupUpdateBuilder;

$builder = new CustomerGroupUpdateBuilder();
```

## changeName

```php
use Commercetools\Builder\CustomerGroupUpdateBuilder;

$builder = new CustomerGroupUpdateBuilder();
$customerGroupUpdate = $builder->changeName(new CustomerGroupChangeNameAction())->build()
//or
$customerGroupUpdate = $builder->changeName(
    function (CustomerGroupChangeNameAction $action): CustomerGroupChangeNameAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\CustomerGroupUpdateBuilder;

$builder = new CustomerGroupUpdateBuilder();
$customerGroupUpdate = $builder->setKey(new CustomerGroupSetKeyAction())->build()
//or
$customerGroupUpdate = $builder->setKey(
    function (CustomerGroupSetKeyAction $action): CustomerGroupSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
