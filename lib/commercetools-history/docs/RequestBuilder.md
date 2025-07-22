# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use Commercetools\History\Client\HistoryRequestBuilder;

$root = new HistoryRequestBuilder();
```

## `withProjectKeyValue("projectKey")->get()`

The `view_audit_log:{projectKey}` scope is required, and depending on the [resource type](ctp:history:type:ChangeHistoryResourceType) queried, their respective scopes must be granted.

If the request exceeds the rate limit, a [TooManyRequests](ctp:history:type:TooManyRequestsError) error is returned.


### Example
```php
use Commercetools\History\Client\HistoryRequestBuilder;

$builder =  new HistoryRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->get();
```
## `withProjectKeyValue("projectKey")->withResourceTypeValue("resourceType")->get()`

The `view_audit_log:{projectKey}` scope is required, and depending on the [resource type](ctp:history:type:ChangeHistoryResourceType) queried, their respective scopes must be granted.

If the request exceeds the rate limit, a [TooManyRequests](ctp:history:type:TooManyRequestsError) error is returned.


### Example
```php
use Commercetools\History\Client\HistoryRequestBuilder;

$builder =  new HistoryRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->withResourceTypeValue("resourceType")
                ->get();
```
## `withProjectKeyValue("projectKey")->withResourceTypeValue("resourceType")->withIDValue("ID")->get()`

The `view_audit_log:{projectKey}` scope is required, and depending on the [resource type](ctp:history:type:ChangeHistoryResourceType) queried, their respective scopes must be granted.

If the request exceeds the rate limit, a [TooManyRequests](ctp:history:type:TooManyRequestsError) error is returned.


### Example
```php
use Commercetools\History\Client\HistoryRequestBuilder;

$builder =  new HistoryRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->withResourceTypeValue("resourceType")
                ->withIDValue("ID")
                ->get();
```
## `withProjectKeyValue("projectKey")->graphql()->post(null)`

Execute a GraphQL request.

### Example
```php
use Commercetools\History\Client\HistoryRequestBuilder;

$builder =  new HistoryRequestBuilder();
$request = $builder
                ->withProjectKeyValue("projectKey")
                ->graphql()
                ->post(null);
```
