# SubscriptionUpdateBuilder

```php
use Commercetools\Builder\SubscriptionUpdateBuilder;

$builder = new SubscriptionUpdateBuilder();
```

## setChanges

```php
use Commercetools\Builder\SubscriptionUpdateBuilder;

$builder = new SubscriptionUpdateBuilder();
$subscriptionUpdate = $builder->setChanges(new SubscriptionSetChangesAction())->build()
//or
$subscriptionUpdate = $builder->setChanges(
    function (SubscriptionSetChangesAction $action): SubscriptionSetChangesAction {
        // modify action as needed
        return $action;
    })->build();
```
## setKey

```php
use Commercetools\Builder\SubscriptionUpdateBuilder;

$builder = new SubscriptionUpdateBuilder();
$subscriptionUpdate = $builder->setKey(new SubscriptionSetKeyAction())->build()
//or
$subscriptionUpdate = $builder->setKey(
    function (SubscriptionSetKeyAction $action): SubscriptionSetKeyAction {
        // modify action as needed
        return $action;
    })->build();
```
## setMessages

```php
use Commercetools\Builder\SubscriptionUpdateBuilder;

$builder = new SubscriptionUpdateBuilder();
$subscriptionUpdate = $builder->setMessages(new SubscriptionSetMessagesAction())->build()
//or
$subscriptionUpdate = $builder->setMessages(
    function (SubscriptionSetMessagesAction $action): SubscriptionSetMessagesAction {
        // modify action as needed
        return $action;
    })->build();
```
