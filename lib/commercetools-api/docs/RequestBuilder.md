# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use Commercetools\Api\Client\ApiRequestBuilder;

$root = new ApiRequestBuilder();
```

## `withProjectKey("projectKey")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->get();
```
## `withProjectKey("projectKey")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->post(null);
```
## `withProjectKey("projectKey")->apiClients()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->get();
```
## `withProjectKey("projectKey")->apiClients()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->post(null);
```
## `withProjectKey("projectKey")->apiClients()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->apiClients()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->businessUnits()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->businessUnits()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->businessUnits()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->businessUnits()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->businessUnits()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->businessUnits()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->post(null)`

Creates a [Cart](ctp:api:type:Cart) in the [BusinessUnit](ctp:api:type:BusinessUnit) referenced by `businessUnitKey`. As such, the `businessUnit` field on [CartDraft](ctp:api:type:CartDraft) is ignored for this request.
Creating a Cart can fail with an [InvalidOperation](ctp:api:type:InvalidOperationError) if the referenced [ShippingMethod](ctp:api:type:ShippingMethod) in the [CartDraft](ctp:api:type:CartDraft) has a predicate that does not match the Cart.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withId("ID")->get()`

If the Cart exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withId("ID")->post(null)`

If the Cart exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withId("ID")->delete()`

If the Cart exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withKey("key")->get()`

If the Cart exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withKey("key")->post(null)`

If the Cart exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withKey("key")->delete()`

If the Cart exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->replicate()->post(null)`

Creates a new Cart by replicating an existing Cart or Order. Can be useful in cases where a customer wants to cancel a recent order to make some changes or reorder a previous order.

The replicated Cart preserves Customer information, Line Items and Custom Line Items, Custom Fields, Discount Codes, and other settings of the Cart or Order. If the Line Items become invalid, for example, due to removed Products or Prices, they are removed from the new Cart. If the Customer switches to another Customer Group, the new Cart is updated with the new value. It has up-to-date Tax Rates, Prices, and Line Item product data and is in `Active` [CartState](ctp:api:type:CartState).

The new Cart does not contain Payments or Deliveries. The [State](ctp:api:type:ItemState) of Line Items and Custom Line Items is reset to `initial`.

If the Cart exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->carts()
                ->replicate()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->post(null)`

Creates an Order from a [Cart](ctp:api:type:Cart) in a [BusinessUnit](ctp:api:type:BusinessUnit).
The Cart must have a shipping address set before creating an Order.
Creating an Order fails with an [InvalidOperation](ctp:api:type:InvalidOperationError) if the Cart does not reference the same BusinessUnit as the `businessUnitKey` path parameter.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withId("ID")->get()`

If the Order exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withId("ID")->post(null)`

If the Order exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->orders()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withOrderNumber("orderNumber")->get()`

If the Order exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withOrderNumber("orderNumber")->post(null)`

If the Order exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->orderQuote()->post(null)`

Creates an Order from a [Quote](ctp:api:type:Cart) in a [BusinessUnit](ctp:api:type:BusinessUnit).
Creating an Order fails with an [InvalidOperation](ctp:api:type:InvalidOperationError) if the Quote does not reference the same BusinessUnit as the `businessUnitKey` path parameter.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->orders()
                ->orderQuote()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quoteRequests()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->post(null)`

Creates a QuoteRequest in a [BusinessUnit](ctp:api:type:BusinessUnit). Creating QuoteRequest fails with an [InvalidOperation](ctp:api:type:InvalidOperationError) if the Cart does not reference the same BusinessUnit as the `businessUnitKey` path parameter.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quoteRequests()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->withId("ID")->get()`

If the QuoteRequest exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quoteRequests()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->withId("ID")->post(null)`

If the QuoteRequest exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quoteRequests()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->withKey("key")->get()`

If the QuoteRequest exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quoteRequests()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->withKey("key")->post(null)`

If the QuoteRequest exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quoteRequests()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quotes()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->withId("ID")->get()`

If the Quote exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quotes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->withId("ID")->post(null)`

If the Quote exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quotes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->withKey("key")->get()`

If the Quote exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quotes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->withKey("key")->post(null)`

If the Quote exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->quotes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->associateRoles()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->get();
```
## `withProjectKey("projectKey")->associateRoles()->post(null)`

Creating a Associate Role generates the [AssociateRoleCreated](ctp:api:type:AssociateRoleCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->post(null);
```
## `withProjectKey("projectKey")->associateRoles()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->associateRoles()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->associateRoles()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->associateRoles()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->associateRoles()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->associateRoles()->withKey("key")->delete()`

Deleting an AssociateRole generates the [AssociateRoleDeleted](ctp:api:type:AssociateRoleDeletedMessage) Message. An AssociateRole can only be deleted if it is not assigned to any [Associates](ctp:api:type:Associate).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->attributeGroups()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->get();
```
## `withProjectKey("projectKey")->attributeGroups()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->post(null);
```
## `withProjectKey("projectKey")->attributeGroups()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->attributeGroups()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->attributeGroups()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->attributeGroups()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->attributeGroups()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->attributeGroups()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->businessUnits()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->get();
```
## `withProjectKey("projectKey")->businessUnits()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->post(null);
```
## `withProjectKey("projectKey")->businessUnits()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->businessUnits()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->businessUnits()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->businessUnits()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->businessUnits()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->businessUnits()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->cartDiscounts()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->get();
```
## `withProjectKey("projectKey")->cartDiscounts()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->post(null);
```
## `withProjectKey("projectKey")->cartDiscounts()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->cartDiscounts()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->cartDiscounts()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->cartDiscounts()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->cartDiscounts()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->cartDiscounts()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->carts()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->carts()->post(null)`

Creating a Cart fails with an [InvalidOperation](ctp:api:type:InvalidOperationError) error if the
[ShippingMethod](ctp:api:type:ShippingMethod) referenced in the CartDraft
has a `predicate` that does not match the Cart.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->carts()->withId("ID")->get()`

To ensure the Cart is up-to-date with current values (such as Prices and Discounts), use the [Recalculate](ctp:api:type:CartRecalculateAction) update action.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->carts()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->carts()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->carts()->withCustomerId("customerId")->get()`

Retrieves the recently modified active Cart of a Customer with [CartOrigin](ctp:api:type:CartOrigin) `Customer`. If no active Cart exists, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

To ensure the Cart is up-to-date with current values (such as Prices and Discounts), use the [Recalculate](ctp:api:type:CartRecalculateAction) update action.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withCustomerId("customerId")
                ->get();
```
## `withProjectKey("projectKey")->carts()->withKey("key")->get()`

To ensure the Cart is up-to-date with current values (such as Prices and Discounts), use the [Recalculate](ctp:api:type:CartRecalculateAction) update action.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->carts()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->carts()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->carts()->replicate()->post(null)`

Creates a new Cart by replicating an existing Cart or Order. Can be useful in cases where a customer wants to cancel a recent order to make some changes or reorder a previous order.

The replicated Cart preserves Customer information, Line Items and Custom Line Items, Custom Fields, Discount Codes, and other settings of the Cart or Order. If the Line Items become invalid, for example, due to removed Products or Prices, they are removed from the new Cart. If the Customer switches to another Customer Group, the new Cart is updated with the new value. It has up-to-date Tax Rates, Prices, and Line Item product data and is in `Active` [CartState](ctp:api:type:CartState).

The new Cart does not contain Payments or Deliveries. The [State](ctp:api:type:ItemState) of Line Items and Custom Line Items is reset to `initial`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->replicate()
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->get()`

Either the [scope](/../api/scopes) `view_products:{projectKey}` or `view_categories:{projectKey}` is required.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->get();
```
## `withProjectKey("projectKey")->categories()->post(null)`

Either the [scope](/../api/scopes) `manage_products:{projectKey}` or `manage_categories:{projectKey}` is required.

Creating a Category produces the [CategoryCreated](ctp:api:type:CategoryCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->withId("ID")->get()`

Either the [scope](/../api/scopes) `view_products:{projectKey}` or `view_categories:{projectKey}` is required.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->categories()->withId("ID")->post(null)`

Either the [scope](/../api/scopes) `manage_products:{projectKey}` or `manage_categories:{projectKey}` is required.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->withId("ID")->delete()`

Either the [scope](/../api/scopes) `manage_products:{projectKey}` or `manage_categories:{projectKey}` is required.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->categories()->withKey("key")->get()`

Either the [scope](/../api/scopes) `view_products:{projectKey}` or `view_categories:{projectKey}` is required.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->categories()->withKey("key")->post(null)`

Either the [scope](/../api/scopes) `manage_products:{projectKey}` or `manage_categories:{projectKey}` is required.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->withKey("key")->delete()`

Either the [scope](/../api/scopes) `manage_products:{projectKey}` or `manage_categories:{projectKey}` is required.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->channels()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->get();
```
## `withProjectKey("projectKey")->channels()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->post(null);
```
## `withProjectKey("projectKey")->channels()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->channels()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->channels()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->customObjects()->get()`

For performance reasons, it is highly advisable to query for Custom Objects in a container by using the `container` field in the `where` predicate.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->get();
```
## `withProjectKey("projectKey")->customObjects()->post(null)`

If an object with the given container/key exists, the object will be replaced with the new value and the version is incremented.
If the request contains a version and an object with the given container/key, then the version must match the version of the existing object. Concurrent updates to the same Custom Object returns a [ConcurrentModification](ctp:api:type:ConcurrentModificationError) error even if the version is not provided.

Fields with `null` values will **not be saved**.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->post(null);
```
## `withProjectKey("projectKey")->customObjects()->withContainer("container")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->withContainer("container")
                ->get();
```
## `withProjectKey("projectKey")->customObjects()->withContainerAndKey("container", "key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->withContainerAndKey("container", "key")
                ->get();
```
## `withProjectKey("projectKey")->customObjects()->withContainerAndKey("container", "key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->withContainerAndKey("container", "key")
                ->delete();
```
## `withProjectKey("projectKey")->customerGroups()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->get();
```
## `withProjectKey("projectKey")->customerGroups()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->post(null);
```
## `withProjectKey("projectKey")->customerGroups()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->customerGroups()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->customerGroups()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->customerGroups()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->customerGroups()->withKey("key")->post(null)`



### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->customerGroups()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->customers()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->get();
```
## `withProjectKey("projectKey")->customers()->post(null)`

If the `anonymousCart` field is set on the [CustomerDraft](ctp:api:type:CustomerDraft), then the newly created Customer will be assigned to that [Cart](ctp:api:type:Cart).
Similarly, if the `anonymousId` field is set, the Customer will be set on all [Carts](ctp:api:type:Cart), [Orders](ctp:api:type:Order), [ShoppingLists](ctp:api:type:ShoppingList) and [Payments](ctp:api:type:Payment) with the same `anonymousId`.
Creating a Customer produces the [CustomerCreated](ctp:api:type:CustomerCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->customers()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withId("ID")->delete()`

Deleting a Customer produces the [CustomerDeleted](ctp:api:type:CustomerDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->customers()->emailConfirm()->post(null)`

Verifying the email of the Customer produces the [CustomerEmailVerified](ctp:api:type:CustomerEmailVerifiedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->emailConfirm()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->emailToken()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->emailToken()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withEmailToken("emailToken")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withEmailToken("emailToken")
                ->get();
```
## `withProjectKey("projectKey")->customers()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->customers()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withKey("key")->delete()`

Deleting a Customer produces the [CustomerDeleted](ctp:api:type:CustomerDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->customers()->password()->post(null)`

Changing the password produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=false`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->password()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->passwordReset()->post(null)`

Resetting the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=true`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->passwordReset()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->passwordToken()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->passwordToken()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withPasswordToken("passwordToken")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withPasswordToken("passwordToken")
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->get()`

Deprecated scope: `view_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->post(null)`

Deprecated scope: `manage_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->post(null);
```
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->get()`

Deprecated scope: `view_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->post(null)`

Deprecated scope: `manage_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->delete()`

Deprecated scope: `manage_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->extensions()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->get();
```
## `withProjectKey("projectKey")->extensions()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->post(null);
```
## `withProjectKey("projectKey")->extensions()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->extensions()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->extensions()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->extensions()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->extensions()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->extensions()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->graphql()->post(null)`

Execute a GraphQL query

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->graphql()
                ->post(null);
```
## `withProjectKey("projectKey")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->me()->customers()->post(null)`

The My Business Unit endpoint does not support assigning existing Customers to a Business Unit.
Associates with the `UpdateAssociates` [Permission](ctp:api:type:Permission) can use this endpoint to create a new Customer and associate it with the Business Unit.
If the required [Permission](/projects/associate-roles#permission) is missing, an [AssociateMissingPermission](/errors#associatemissingpermission) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->me()
                ->customers()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->post(null)`

When using the endpoint, the Store specified in the path and the Stores specified in the payload's `stores` field are added to the CartDiscount.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withId("ID")->get()`



### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withId("ID")->post(null)`

To update a CartDiscount, you must have permissions for all Stores the CartDiscount is associated with, except when [removing a Store](ctp:api:type:CartDiscountRemoveStoreAction).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withId("ID")->delete()`

To delete a CartDiscount, specify the `manage_cart_discounts:{projectKey}:{storeKey}` scope for all Stores associated with the CartDiscount.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withKey("key")->post(null)`

To update a CartDiscount, you must have permissions for all Stores the CartDiscount is associated with, except when [removing a Store](ctp:api:type:CartDiscountRemoveStoreAction).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withKey("key")->delete()`

To delete a CartDiscount, specify the `manage_cart_discounts:{projectKey}:{storeKey}` scope for all Stores associated with the CartDiscount.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->get()`

Queries carts in a specific [Store](ctp:api:type:Store).

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->post(null)`

Creates a [Cart](ctp:api:type:Cart) in the [Store](ctp:api:type:Store) specified by `storeKey`.
When using this endpoint the Cart's `store` field is always set to the [Store](ctp:api:type:Store) specified in the path parameter.
If the referenced [ShippingMethod](ctp:api:type:ShippingMethod) in the [CartDraft](ctp:api:type:CartDraft) has a predicate that does not match, an [InvalidOperation](ctp:api:type:InvalidOperationError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->get()`

If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

To ensure the Cart is up-to-date with current values (such as Prices and Discounts), use the [Recalculate](ctp:api:type:CartRecalculateAction) update action.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->post(null)`

Updates a [Cart](ctp:api:type:Cart) in the [Store](ctp:api:type:Store) specified by `storeKey`.
If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->delete()`

If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withCustomerId("customerId")->get()`

Retrieves the recently modified active Cart of a Customer with [CartOrigin](ctp:api:type:CartOrigin) `Customer`. If no active Cart exists, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

To ensure the Cart is up-to-date with current values (such as Prices and Discounts), use the [Recalculate](ctp:api:type:CartRecalculateAction) update action.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withCustomerId("customerId")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withKey("key")->get()`

If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

To ensure the Cart is up-to-date with current values (such as Prices and Discounts), use the [Recalculate](ctp:api:type:CartRecalculateAction) update action.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withKey("key")->post(null)`

If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withKey("key")->delete()`

If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->replicate()->post(null)`

Creates a new Cart by replicating an existing Cart or Order. Can be useful in cases where a customer wants to cancel a recent order to make some changes or reorder a previous order.

The replicated Cart preserves Customer information, Line Items and Custom Line Items, Custom Fields, Discount Codes, and other settings of the Cart or Order. If the Line Items become invalid, for example, due to removed Products or Prices, they are removed from the new Cart. If the Customer switches to another Customer Group, the new Cart is updated with the new value. It has up-to-date Tax Rates, Prices, and Line Item product data and is in `Active` [CartState](ctp:api:type:CartState).

The new Cart does not contain payments or deliveries. The [State](ctp:api:type:ItemState) of Line Items and Custom Line Items is reset to `initial`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->replicate()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->post(null)`

When using this endpoint, if omitted, the Customer `stores` field is set to the [Store](ctp:api:type:Store) specified in the path parameter.

If the `anonymousCart` field is set on the [CustomerDraft](ctp:api:type:CustomerDraft), then the newly created Customer will be assigned to that [Cart](ctp:api:type:Cart).
Similarly, if the `anonymousId` field is set, the Customer will be set on all [Carts](ctp:api:type:Cart), [Orders](ctp:api:type:Order), [ShoppingLists](ctp:api:type:ShoppingList) and [Payments](ctp:api:type:Payment) with the same `anonymousId`.
If a Cart with a `store` field specified, the `store` field must reference the same [Store](ctp:api:type:Store) specified in the `{storeKey}` path parameter.
Creating a Customer produces the [CustomerCreated](ctp:api:type:CustomerCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->get()`

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->post(null)`

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->delete()`

Deleting a Customer produces the [CustomerDeleted](ctp:api:type:CustomerDeletedMessage) Message.

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->emailConfirm()->post(null)`

The customer verifies the email using the token value.
Verifying the email of the Customer produces the [CustomerEmailVerified](ctp:api:type:CustomerEmailVerifiedMessage) Message.

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->emailConfirm()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->emailToken()->post(null)`

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->emailToken()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withEmailToken("emailToken")->get()`

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withEmailToken("emailToken")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->get()`

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->post(null)`

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->delete()`

Deleting a Customer produces the [CustomerDeleted](ctp:api:type:CustomerDeletedMessage) Message.

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->password()->post(null)`

Changing the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=false`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->password()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->passwordReset()->post(null)`

Resetting the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=true`.

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->passwordReset()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->passwordToken()->post(null)`

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->passwordToken()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withPasswordToken("passwordToken")->get()`

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withPasswordToken("passwordToken")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->login()->post(null)`

Authenticates a Customer associated with a [Store](ctp:api:type:Store). For more information, see [Global versus Store-specific Customers](/../api/customers-overview#global-versus-store-specific-customers).

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns an [InvalidCredentials](ctp:api:type:InvalidCredentialsError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->login()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->activeCart()->get()`

Retrieves the Customer's most recently modified active Cart in the Store specified by the `storeKey` path parameter.

Carts with `Merchant` or `Quote` [CartOrigin](ctp:api:type:CartOrigin) are ignored.

If no active Cart exists, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->activeCart()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->post(null)`

The `store` field in the created [Cart](ctp:api:type:Cart) is set to the Store specified by the `storeKey` path parameter.

Specific Error Codes: [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->post(null)`

If the Cart exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->emailConfirm()->post(null)`

This is the last step in the [email verification process of a Customer](/../api/projects/customers#email-verification-of-customer-in-store).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->emailConfirm()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->login()->post(null)`

Retrieves the authenticated Customer (that matches the given email/password pair) if they are part of a specific [Store](ctp:api:type:Store).

- If the Customer does not have a Cart, the most recently modified anonymous cart becomes the Customer's Cart.
- If the Customer already has a Cart, the most recently modified anonymous cart is handled according to [AnonymousCartSignInMode](ctp:api:type:AnonymousCartSignInMode).

If a Cart is returned as part of [CustomerSignInResult](ctp:api:type:CustomerSignInResult), it has been [recalculated](ctp:api:type:MyCartRecalculateAction) with up-to-date prices, taxes, discounts, and invalid line items removed.

If an account with the given credentials is not found, an [InvalidCredentials](ctp:api:type:InvalidCredentialsError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->login()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->post(null)`

The Cart must have a [shipping address set](ctp:api:type:CartSetShippingAddressAction) for taxes to be calculated. When creating [B2B Orders](/associates-overview#b2b-resources), the Customer must have the `CreateMyOrdersFromMyCarts` [Permission](ctp:api:type:Permission).

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)
- [AssociateMissingPermission](ctp:api:type:AssociateMissingPermissionError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->withId("ID")->get()`

If the Order exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->password()->post(null)`

Changing the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=false`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->password()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->password()->reset()->post(null)`

This is the last step in the [password reset process of the authenticated Customer](/../api/projects/customers#password-reset-of-customer-in-store).

Resetting a password produces the of the Customer [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=true`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->password()
                ->reset()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->post(null)`

When using this endpoint, the `store` field of a ShoppingList is always set to the [Store](ctp:api:type:Store) specified in the path parameter.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withId("ID")->get()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withId("ID")->post(null)`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withId("ID")->delete()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withKey("key")->get()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store), the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withKey("key")->post(null)`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withKey("key")->delete()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->signup()->post(null)`

If omitted in the request body, the [Customer](ctp:api:type:Customer) `stores` field is set to the [Store](ctp:api:type:Store) specified in the path parameter.

Creating a Customer produces the [CustomerCreated](ctp:api:type:CustomerCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->signup()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->post(null)`

Before you create an Order, the Cart must have a [shipping address set](ctp:api:type:CartSetShippingAddressAction).
The shipping address is used for tax calculation for a Cart with `Platform` [TaxMode](ctp:api:type:TaxMode).

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [ShippingMethodDoesNotMatchCart](ctp:api:type:ShippingMethodDoesNotMatchCartError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)
- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->get()`

If the Order exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->post(null)`

If the Order exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->delete()`

If the Order exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

Deleting an Order produces the [OrderDeleted](ctp:api:type:OrderDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->get()`

If the Order exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->post(null)`

If the Order exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->delete()`

If the Order exists in the Project but does not have the `store` field, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

Deleting an Order produces the [OrderDeleted](ctp:api:type:OrderDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->withId("ID")->get()`

Gets the current or staged representation of a [Product](ctp:api:type:Product) by its ID from the specified [Store](ctp:api:type:Store).
If the Store has defined some languages, countries, distribution or supply Channels,
they are used for projections based on [locale](ctp:api:type:ProductProjectionLocales), [price](ctp:api:type:ProductProjectionPrices)
and [inventory](ctp:api:type:ProductProjectionInventoryEntries).

When used with an API Client that has the `view_published_products:{projectKey}` scope, this endpoint only returns published (current) Product Projections.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productProjections()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->withKey("key")->get()`

Gets the current or staged representation of a [Product](ctp:api:type:Product) by its key from the specified [Store](ctp:api:type:Store).
If the Store has defined some languages, countries, distribution or supply Channels,
they are used for projections based on [locale](ctp:api:type:ProductProjectionLocales), [price](ctp:api:type:ProductProjectionPrices)
and [inventory](ctp:api:type:ProductProjectionInventoryEntries).

When used with an API Client that has the `view_published_products:{projectKey}` scope, this endpoint only returns published (current) Product Projections.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productProjections()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productSelectionAssignments()->get()`

Queries Product Selection assignments in a specific [Store](ctp:api:type:Store).

The response will include duplicate Products whenever more than one active Product Selection of the Store
includes a Product. To make clear through which Product Selection a Product is available in the Store
the response contains assignments including both the Product and the Product Selection.
Only Products of Product Selections that are activated in the Store will be returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productSelectionAssignments()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shippingMethods()->matchingCart()->get()`

Retrieves all the ShippingMethods that can ship to the shipping address of the given Cart in a given [Store](ctp:api:type:Store).
Each ShippingMethod contains exactly one ShippingRate with the flag `isMatching` set to `true`.
This ShippingRate is used when the ShippingMethod is [added to the Cart](ctp:api:type:CartSetShippingMethodAction).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shippingMethods()
                ->matchingCart()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->post(null)`

When using this endpoint, the `store` field of a ShoppingList is always set to the [Store](ctp:api:type:Store) specified in the path parameter.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withId("ID")->get()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withId("ID")->post(null)`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withId("ID")->delete()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withKey("key")->get()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withKey("key")->post(null)`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withKey("key")->delete()`

If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different [Store](ctp:api:type:Store),
the [ResourceNotFound](/errors#404-not-found-1) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inventory()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->get();
```
## `withProjectKey("projectKey")->inventory()->post(null)`

Produces the [InventoryEntryCreated](ctp:api:type:InventoryEntryCreatedMessage) Message.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->post(null);
```
## `withProjectKey("projectKey")->inventory()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inventory()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inventory()->withId("ID")->delete()`

Produces the [InventoryEntryDeleted](ctp:api:type:InventoryEntryDeletedMessage) Message.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inventory()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inventory()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inventory()->withKey("key")->delete()`

Produces the [InventoryEntryDeleted](ctp:api:type:InventoryEntryDeletedMessage) Message.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->login()->post(null)`

Authenticates a global Customer not associated with a Store.
For more information, see [Global versus Store-specific Customers](/../api/customers-overview#global-versus-store-specific-customers).
If the Customer is registered in a Store, use the [Authenticate (sign in) Customer in Store](/../api/projects/customers#authenticate-sign-in-customer-in-store) method.

If an account with the given credentials is not found, an [InvalidCredentials](ctp:api:type:InvalidCredentialsError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->login()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->get();
```
## `withProjectKey("projectKey")->me()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->delete();
```
## `withProjectKey("projectKey")->me()->activeCart()->get()`

Retrieves the Customer's most recently modified active Cart.
Carts with `Merchant` or `Quote` [CartOrigin](ctp:api:type:CartOrigin) are ignored.

If no active Cart exists, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->activeCart()
                ->get();
```
## `withProjectKey("projectKey")->me()->businessUnits()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->get();
```
## `withProjectKey("projectKey")->me()->businessUnits()->post(null)`

Automatically assigns the Associate to the Business Unit in the default [Associate Role](ctp:api:type:AssociateRole) defined in [BusinessUnitConfiguration](ctp:api:type:BusinessUnitConfiguration). If there is no default Associate Role configured, this request fails with an [InvalidOperation](ctp:api:type:InvalidOperationError) error. When creating a Division, the Associate must have the `AddChildUnits` [Permission](ctp:api:type:Permission) in the parent unit. If the required [Permission](/projects/associate-roles#permission) is missing, an [AssociateMissingPermission](/errors#associatemissingpermission) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->businessUnits()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->businessUnits()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->businessUnits()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->businessUnits()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->me()->businessUnits()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->businessUnits()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->me()->carts()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->me()->carts()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->carts()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->me()->carts()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->carts()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->me()->carts()->replicate()->post(null)`

Creates a new Cart by replicating an existing Cart or Order of the authenticated Customer.
This can be useful in cases where a customer wants to cancel a recent order to make some changes or reorder a previous order.

The replicated Cart preserves Customer information, Line Items and Custom Line Items, Custom Fields, Discount Codes, and other settings of the Cart or Order.
If the Line Items become invalid, for example, due to removed Products or Prices, they are removed from the new Cart.
If the Customer switches to another Customer Group, the new Cart is updated with the new value.
It has up-to-date Tax Rates, Prices, and Line Item product data and is in `Active` [CartState](ctp:api:type:CartState).

The new Cart does not contain Payments or Deliveries. The [State](ctp:api:type:ItemState) of Line Items and Custom Line Items is reset to `initial`.

In case the Cart or Order to be replicated does not belong to the authenticaed Customer, the API returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->replicate()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->emailConfirm()->post(null)`

This is the last step in the [email verification process of a Customer](/../api/projects/customers#email-verification-of-customer).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->emailConfirm()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->login()->post(null)`

Retrieves the authenticated customer (that matches the given email/password pair).

If used with [an access token for an anonymous session](ctp:api:type:AnonymousSession), all Orders and Carts that belong to the `anonymousId` are assigned to the newly logged-in Customer.

- If the Customer does not have a Cart yet, the most recently modified anonymous cart becomes the Customer's Cart.
- If the Customer already has a Cart, the most recently modified anonymous cart is handled in accordance with [AnonymousCartSignInMode](ctp:api:type:AnonymousCartSignInMode).

A Cart returned as part of the [CustomerSignInResult](ctp:api:type:CustomerSignInResult) is [recalculated](ctp:api:type:MyCartRecalculateAction) with up-to-date prices, taxes, discounts, and invalid line items removed.

If an account with the given credentials is not found, an [InvalidCredentials](ctp:api:type:InvalidCredentialsError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->login()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->orders()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->me()->orders()->post(null)`

The Cart must have a [shipping address set](ctp:api:type:CartSetShippingAddressAction) for taxes to be calculated. When creating [B2B Orders](/associates-overview#b2b-resources), the Customer must have the `CreateMyOrdersFromMyCarts` [Permission](ctp:api:type:Permission).

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [AssociateMissingPermission](ctp:api:type:AssociateMissingPermissionError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->orders()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->orders()->orderQuote()->post(null)`

When creating [B2B Orders](/associates-overview#b2b-resources), the Customer must have the `CreateMyOrdersFromMyQuotes` [Permission](ctp:api:type:Permission).

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)
- [AssociateMissingPermission](ctp:api:type:AssociateMissingPermissionError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->orderQuote()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->password()->post(null)`

Changing the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=false`.

If the current password does not match, an [InvalidCurrentPassword](ctp:api:type:InvalidCurrentPasswordError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->password()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->password()->reset()->post(null)`

This is the last step in the [password reset process of a Customer](/../api/projects/customers#password-reset-of-customer).

Resetting a password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=true`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->password()
                ->reset()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->get();
```
## `withProjectKey("projectKey")->me()->payments()->post(null)`

Creating a Payment produces the [PaymentCreated](ctp:api:type:PaymentCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->post(null)`

This endpoint can only update a Payment when it has no [Transactions](ctp:api:type:Transaction).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->delete()`

This endpoint can only delete a Payment when it has no [Transactions](ctp:api:type:Transaction).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->quoteRequests()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->get();
```
## `withProjectKey("projectKey")->me()->quoteRequests()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->quoteRequests()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->quoteRequests()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->quoteRequests()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->quoteRequests()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->me()->quoteRequests()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->quoteRequests()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->me()->quotes()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->get();
```
## `withProjectKey("projectKey")->me()->quotes()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->quotes()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->quotes()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->me()->quotes()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->shoppingLists()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->me()->signup()->post(null)`

If used with an [access token for an anonymous session](ctp:api:type:AnonymousSession), all Orders and Carts that belong to the `anonymousId` are assigned to the newly created Customer.

Creating a Customer produces the [CustomerCreated](ctp:api:type:CustomerCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->signup()
                ->post(null);
```
## `withProjectKey("projectKey")->messages()->get()`

Deprecated scope: `view_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->messages()
                ->get();
```
## `withProjectKey("projectKey")->messages()->withId("ID")->get()`

Deprecated scope: `view_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->messages()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->orders()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->orders()->post(null)`

Before you create an Order, the Cart must have a [shipping address set](ctp:api:type:CartSetShippingAddressAction).
The shipping address is used for tax calculation for a Cart with `Platform` [TaxMode](ctp:api:type:TaxMode).

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [ShippingMethodDoesNotMatchCart](ctp:api:type:ShippingMethodDoesNotMatchCartError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->orders()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withId("ID")->delete()`

Deleting an Order produces the [OrderDeleted](ctp:api:type:OrderDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->orders()->edits()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->get();
```
## `withProjectKey("projectKey")->orders()->edits()->post(null)`

You can either create multiple Order Edits for an Order and apply them sequentially to an Order, or create multiple Order Edits parallelly (as alternatives to each other) and apply one of them to the Order.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->apply()->post(null)`

Applying an OrderEdit produces the [OrderEditApplied](ctp:api:type:OrderEditAppliedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->apply()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->orders()->importOrder()->post(null)`

Importing an Order produces the [Order Imported](ctp:api:type:OrderImportedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->importOrder()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->get();
```
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->delete()`

Deleting an Order produces the [OrderDeleted](ctp:api:type:OrderDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->delete();
```
## `withProjectKey("projectKey")->orders()->orderQuote()->post(null)`

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [InvalidOperation](ctp:api:type:InvalidOperationError)
- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->orderQuote()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->search()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->search()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->search()->head()`

Checks whether a search index for the Project's Orders exists.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->search()
                ->head();
```
## `withProjectKey("projectKey")->payments()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->get();
```
## `withProjectKey("projectKey")->payments()->post(null)`

Creating a Payment produces the [PaymentCreated](ctp:api:type:PaymentCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->post(null);
```
## `withProjectKey("projectKey")->payments()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->payments()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->payments()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->payments()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->payments()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->payments()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->productDiscounts()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->get();
```
## `withProjectKey("projectKey")->productDiscounts()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->post(null);
```
## `withProjectKey("projectKey")->productDiscounts()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productDiscounts()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->productDiscounts()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->productDiscounts()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productDiscounts()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->productDiscounts()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->productDiscounts()->matching()->post(null)`

This endpoint can be used to simulate which Product Discounts would be applied if a specified Product Variant had a specified Price.
Given Product and Product Variant IDs and a Price, this endpoint will return the [ProductDiscount](ctp:api:type:ProductDiscount) that would have been applied to that Price.

If a Product Discount could not be found that could be applied to the Price of a Product Variant, a [NoMatchingProductDiscountFound](ctp:api:type:NoMatchingProductDiscountFoundError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->matching()
                ->post(null);
```
## `withProjectKey("projectKey")->productProjections()->get()`

Use the Product Projections query endpoint to get the current or staged representations of Products.
When used with an API Client that has the `view_published_products:{projectKey}` scope,
this endpoint only returns published (current) Product Projections.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->get();
```
## `withProjectKey("projectKey")->productProjections()->withId("ID")->get()`

Gets the current or staged representation of a [Product](ctp:api:type:Product) by its ID. When used with an API Client that has the `view_published_products:{projectKey}` scope, this endpoint only returns published (current) Product Projections.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productProjections()->withKey("key")->get()`

Gets the current or staged representation of a [Product](ctp:api:type:Product) found by Key.
When used with an API Client that has the `view_published_products:{projectKey}` scope,
this endpoint only returns published (current) Product Projections.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productProjections()->search()->post(null)`

Product Projection Search

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->search()
                ->post(null);
```
## `withProjectKey("projectKey")->productProjections()->search()->get()`

Product Projection Search

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->search()
                ->get();
```
## `withProjectKey("projectKey")->productProjections()->suggest()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->suggest()
                ->get();
```
## `withProjectKey("projectKey")->productSelections()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->get();
```
## `withProjectKey("projectKey")->productSelections()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->post(null);
```
## `withProjectKey("projectKey")->productSelections()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productSelections()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->productSelections()->withId("ID")->delete()`

Deletion will only succeed if the Product Selection is not assigned to any [Store](/../api/projects/stores#store).

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->productSelections()->withId("ID")->products()->get()`



### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withId("ID")
                ->products()
                ->get();
```
## `withProjectKey("projectKey")->productSelections()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productSelections()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->productSelections()->withKey("key")->delete()`

Deletion will only succeed if the Product Selection is not assigned to any [Store](/../api/projects/stores#store).

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->productSelections()->withKey("key")->products()->get()`



### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withKey("key")
                ->products()
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->head()`

Check if Product Types exist. Responds with a `200 OK` status if any Product Types match the Query Predicate, or `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->head();
```
## `withProjectKey("projectKey")->productTypes()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->post(null);
```
## `withProjectKey("projectKey")->productTypes()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->withId("ID")->head()`

Checks if a Product Type with given `id` exists. Responds with a `200 OK` status if the `Product Type` exists or `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->productTypes()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->productTypes()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->productTypes()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->withKey("key")->head()`

Checks if a Product Type with given `key` exists. Responds with a `200 OK` status if the `Product Type` exists or `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->productTypes()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->productTypes()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->products()->get()`

If [Price selection](ctp:api:type:ProductPriceSelection) query parameters are provided, the selected Prices are added to the response.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->get();
```
## `withProjectKey("projectKey")->products()->head()`

Check if Products exist. Responds with a `200 OK` status if any Products match the Query Predicate, or `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->head();
```
## `withProjectKey("projectKey")->products()->post(null)`

To create a new Product, send a representation that is going to become the initial _staged_ representation of the new Product in the master catalog.
If [Price Selection](ctp:api:type:ProductPriceSelection) query parameters are provided, selected Prices will be added to the response.
Produces the [ProductCreated](/projects/messages#product-created) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withId("ID")->get()`

If [Price selection](ctp:api:type:ProductPriceSelection) query parameters are provided, the selected Prices are added to the response.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->products()->withId("ID")->head()`

Check if a Product exists with a specified `id`. Responds with a `200 OK` status if the Product exists or `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->products()->withId("ID")->post(null)`

If [Price selection](ctp:api:type:ProductPriceSelection) query parameters are provided, the selected Prices are added to the response.

A failed response can return a [DuplicatePriceScope](ctp:api:type:DuplicatePriceScopeError), [DuplicateVariantValues](ctp:api:type:DuplicateVariantValuesError), [DuplicateAttributeValue](ctp:api:type:DuplicateAttributeValueError), or [DuplicateAttributeValues](ctp:api:type:DuplicateAttributeValuesError) error.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withId("ID")->delete()`

If [Price selection](ctp:api:type:ProductPriceSelection) query parameters are provided, the selected Prices are added to the response.
Produces the [ProductDeleted](/projects/messages#product-deleted) Message.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->products()->withId("ID")->images()->post(null)`

Upload a JPEG, PNG and GIF file to a [ProductVariant](ctp:api:type:ProductVariant). The maximum file size of the image is 10MB. `variant` or `sku` is required to update a specific ProductVariant. The image is uploaded to the Master Variant if `variant` or `sku` are not included. Produces the [ProductImageAdded](/projects/messages#product-image-added) Message when the `Small` version of the image has been uploaded to the CDN.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->images()
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withId("ID")->productSelections()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->productSelections()
                ->get();
```
## `withProjectKey("projectKey")->products()->withKey("key")->get()`

If [Price selection](ctp:api:type:ProductPriceSelection) query parameters are provided, the selected Prices are added to the response.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->products()->withKey("key")->head()`

Check if a Product exists with a specified `key`. Responds with a `200 OK` status if the Product exists or `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->products()->withKey("key")->post(null)`

A failed response can return a [DuplicatePriceScope](ctp:api:type:DuplicatePriceScopeError), [DuplicateVariantValues](ctp:api:type:DuplicateVariantValuesError), [DuplicateAttributeValue](ctp:api:type:DuplicateAttributeValueError), or [DuplicateAttributeValues](ctp:api:type:DuplicateAttributeValuesError) error.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withKey("key")->delete()`

If [Price selection](ctp:api:type:ProductPriceSelection) query parameters are provided, the selected Prices are added to the response.
Produces the [ProductDeleted](/projects/messages#product-deleted) Message.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->products()->withKey("key")->productSelections()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->productSelections()
                ->get();
```
## `withProjectKey("projectKey")->quoteRequests()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->get();
```
## `withProjectKey("projectKey")->quoteRequests()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->post(null);
```
## `withProjectKey("projectKey")->quoteRequests()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->quoteRequests()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->quoteRequests()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->quoteRequests()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->quoteRequests()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->quoteRequests()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->quotes()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->get();
```
## `withProjectKey("projectKey")->quotes()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->post(null);
```
## `withProjectKey("projectKey")->quotes()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->quotes()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->quotes()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->quotes()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->quotes()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->quotes()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->reviews()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->get();
```
## `withProjectKey("projectKey")->reviews()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->post(null);
```
## `withProjectKey("projectKey")->reviews()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->reviews()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->reviews()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->reviews()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->reviews()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->reviews()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->shippingMethods()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->post(null);
```
## `withProjectKey("projectKey")->shippingMethods()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->shippingMethods()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->shippingMethods()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->shippingMethods()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->shippingMethods()->matchingCart()->get()`

Retrieves all the ShippingMethods that can ship to the shipping address of the given Cart.
Each ShippingMethod contains exactly one ShippingRate with the flag `isMatching` set to `true`.
This ShippingRate is used when the ShippingMethod is [added to the Cart](ctp:api:type:CartSetShippingMethodAction).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingCart()
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->matchingCartLocation()->get()`

Retrieves all the ShippingMethods that can ship to the given [Location](/projects/zones#location)
with a `predicate` that matches the given Cart.
Each ShippingMethod contains exactly one ShippingRate with the flag `isMatching` set to `true`.
This ShippingRate is used when the ShippingMethod is [added to the Cart](ctp:api:type:CartSetShippingMethodAction).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingCartLocation()
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->matchingLocation()->get()`

Retrieves all the ShippingMethods that can ship to the given [Location](/projects/zones#location).
ShippingMethods that have a `predicate` defined are automatically disqualified.
If the `currency` parameter is given, then the ShippingMethods must also have a rate defined in the specified currency.
Each ShippingMethod contains at least one ShippingRate with the flag `isMatching` set to `true`.
If the `currency` parameter is given, exactly one ShippingRate will contain it.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingLocation()
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->matchingOrderedit()->get()`

Retrieves all the ShippingMethods that can ship to the given [Location](/../api/projects/zones#location) for an [OrderEdit](/../api/projects/order-edits).

If the OrderEdit preview cannot be generated, an [EditPreviewFailed](ctp:api:type:EditPreviewFailedError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingOrderedit()
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->post(null);
```
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->stagedQuotes()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->get();
```
## `withProjectKey("projectKey")->stagedQuotes()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->post(null);
```
## `withProjectKey("projectKey")->stagedQuotes()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->stagedQuotes()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->stagedQuotes()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->stagedQuotes()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->stagedQuotes()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->stagedQuotes()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->standalonePrices()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->get();
```
## `withProjectKey("projectKey")->standalonePrices()->post(null)`

Produces the [StandalonePriceCreated](ctp:api:type:StandalonePriceCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->post(null);
```
## `withProjectKey("projectKey")->standalonePrices()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->standalonePrices()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->standalonePrices()->withId("ID")->delete()`

Produces the [StandalonePriceDeleted](ctp:api:type:StandalonePriceDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->standalonePrices()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->standalonePrices()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->standalonePrices()->withKey("key")->delete()`

Produces the [StandalonePriceDeleted](ctp:api:type:StandalonePriceDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->states()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->get();
```
## `withProjectKey("projectKey")->states()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->post(null);
```
## `withProjectKey("projectKey")->states()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->states()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->states()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->states()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->states()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->states()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->stores()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->get();
```
## `withProjectKey("projectKey")->stores()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->post(null);
```
## `withProjectKey("projectKey")->stores()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->stores()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->stores()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->stores()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->stores()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->stores()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->subscriptions()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->get();
```
## `withProjectKey("projectKey")->subscriptions()->post(null)`

A test message is sent to ensure the correct configuration of the Destination. If the message cannot be delivered, the Subscription will not be created. The payload of the test message is a notification of type [ResourceCreated](/../api/projects/subscriptions#resourcecreateddeliverypayload) for the `resourceTypeId` `subscription`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->post(null);
```
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->withIdHealth()->get()`

This endpoint can be polled by a monitoring or alerting system that checks the health of your Subscriptions. To ease integration with such systems this endpoint does not require [Authorization](/../api/authorization).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->withIdHealth()
                ->get();
```
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->taxCategories()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->get();
```
## `withProjectKey("projectKey")->taxCategories()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->post(null);
```
## `withProjectKey("projectKey")->taxCategories()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->taxCategories()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->taxCategories()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->taxCategories()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->taxCategories()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->taxCategories()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->types()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->get();
```
## `withProjectKey("projectKey")->types()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->post(null);
```
## `withProjectKey("projectKey")->types()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->types()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->types()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->types()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->types()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->types()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->zones()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->get();
```
## `withProjectKey("projectKey")->zones()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->post(null);
```
## `withProjectKey("projectKey")->zones()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->zones()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->zones()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->zones()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->zones()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->zones()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withKey("key")
                ->delete();
```
