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
## `withProjectKey("projectKey")->head()`

Checks if a Project exists for a given `projectKey`. Returns a `200 OK` status if the Project exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->head();
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
## `withProjectKey("projectKey")->apiClients()->head()`

Checks if an API Client exists for the provided query predicate. Returns a `200 OK` status if any API Clients match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->head();
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
## `withProjectKey("projectKey")->apiClients()->withId("ID")->head()`

Checks if an API Client exists with the provided `id`. Returns a `200 OK` status if the API Client exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->head()`

Checks if one or more BusinessUnits exist for the provided query predicate. Returns a `200 OK` status if any BusinessUnits match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->businessUnits()
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->withId("ID")->head()`

Checks if a BusinessUnit exists with the provided `id`. Returns a `200 OK` status if the BusinessUnit exists or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->businessUnits()->withKey("key")->head()`

Checks if a BusinessUnit exists with the provided `key`. Returns a `200 OK` status if the BusinessUnit exists or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalFlows()->get()`

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
                ->approvalFlows()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalFlows()->withId("ID")->get()`

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
                ->approvalFlows()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalFlows()->withId("ID")->post(null)`

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
                ->approvalFlows()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalRules()->get()`

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
                ->approvalRules()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalRules()->post(null)`

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
                ->approvalRules()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalRules()->withId("ID")->get()`

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
                ->approvalRules()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalRules()->withId("ID")->post(null)`

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
                ->approvalRules()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalRules()->withKey("key")->get()`

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
                ->approvalRules()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->approvalRules()->withKey("key")->post(null)`

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
                ->approvalRules()
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->head()`

Checks if one or more Carts exist for the provided query predicate. Returns a `200 OK` status if any Carts match the query predicate, or a `404 Not Found` otherwise.

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
                ->head();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->post(null)`

Creates a Cart in the [BusinessUnit](ctp:api:type:BusinessUnit) referenced by `businessUnitKey`. As such, the `businessUnit` field on [CartDraft](ctp:api:type:CartDraft) is ignored for this request.
Creating a Cart can fail with an [InvalidOperation](ctp:api:type:InvalidOperationError) if the referenced [ShippingMethod](ctp:api:type:ShippingMethod) in the [CartDraft](ctp:api:type:CartDraft) has a predicate that does not match the Cart.

Specific Error Codes:

- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withId("ID")->head()`

Checks if a Cart exists with the provided `id`. Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->carts()->withKey("key")->head()`

Checks if a Cart exists with the provided `key`. Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

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
                ->head();
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

Specific Error Codes:

- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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

Retrieves Orders in a [BusinessUnit](ctp:api:type:BusinessUnit).

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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->head()`

Checks if one or more Orders exist with provided query predicate in a [BusinessUnit](ctp:api:type:BusinessUnit). Returns a `200 OK` status if any Orders match the query predicate, or a `404 Not Found` otherwise.

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
                ->head();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->post(null)`

Creates an Order from a [Cart](ctp:api:type:Cart) in a [BusinessUnit](ctp:api:type:BusinessUnit).

The Cart must have a shipping address and an active Shipping Method set.

If the Cart does not reference the same BusinessUnit as the `businessUnitKey` path parameter, an [InvalidOperation](ctp:api:type:InvalidOperationError) is returned.

Specific Error Codes:

- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [ShippingMethodDoesNotMatchCart](ctp:api:type:ShippingMethodDoesNotMatchCartError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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

Retrieves an Order with the provided `id` in a [BusinessUnit](ctp:api:type:BusinessUnit).
If the Order exists in the [Project](ctp:api:type:Project) but does not reference the requested Business Unit, this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withId("ID")->head()`

Checks if an Order exists with the provided `id` in a [BusinessUnit](ctp:api:type:BusinessUnit). Returns a `200 OK` status if the Order exists or a `404 Not Found` otherwise.

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
                ->head();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withId("ID")->post(null)`

Updates an Order in a [BusinessUnit](ctp:api:type:BusinessUnit) using one or more [update actions](/../api/projects/orders#update-actions).
If the Order exists in the [Project](ctp:api:type:Project) but does not reference the requested Business Unit, this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


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

Retrieves an Order with the provided `orderNumber` in a [BusinessUnit](ctp:api:type:BusinessUnit).
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withOrderNumber("orderNumber")->head()`

Checks if an Order exists with the provided `orderNumber` in a [BusinessUnit](ctp:api:type:BusinessUnit). Returns a `200 OK` status if the Order exists or a `404 Not Found` otherwise.

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
                ->head();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->orders()->withOrderNumber("orderNumber")->post(null)`

Updates an Order in a [BusinessUnit](ctp:api:type:BusinessUnit) using one or more [update actions](/../api/projects/orders#update-actions).
If the Order exists in the [Project](ctp:api:type:Project) but does not reference the requested Business Unit, this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


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


Creates an Order from a [Quote](ctp:api:type:Quote) in a [BusinessUnit](ctp:api:type:BusinessUnit).

The Quote must reference the same Business Unit as the `businessUnitKey` path parameter, must have the `Pending` [state](ctp:api:type:QuoteState), and must be valid (not past the `validTo` date). If these criteria are not met, an [InvalidOperation](ctp:api:type:InvalidOperationError) error is returned.

Specific Error Codes:

- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [OutOfStock](ctp:api:type:OutOfStockError)


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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->head()`

Checks if one or more QuoteRequests exist for the provided query predicate. Returns a `200 OK` status if any QuoteRequests match the query predicate, or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->withId("ID")->head()`

Checks if a QuoteRequest exists with the provided `id`. Returns a `200 OK` status if the QuoteRequest exists or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quoteRequests()->withKey("key")->head()`

Checks if a QuoteRequest exists with the provided `key`. Returns a `200 OK` status if the QuoteRequest exists or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->head()`

Checks if one or more Quotes exist for the provided query predicate. Returns a `200 OK` status if any Quotes match the query predicate, or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->withId("ID")->head()`

Checks if a Quote exists with the provided `id`. Returns a `200 OK` status if the Quote exists or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->quotes()->withKey("key")->head()`

Checks if a Quote exists with the provided `key`. Returns a `200 OK` status if the Quote exists or a `404 Not Found` otherwise.

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
                ->head();
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
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->get()`

Retrieves ShoppingLists in a [BusinessUnit](ctp:api:type:BusinessUnit).

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->head()`

Checks if one or more ShoppingLists exist for the provided query predicate in a [BusinessUnit](ctp:api:type:BusinessUnit). Returns a `200 OK` if any ShoppingLists match the query predicate; otherwise, returns [Not Found](/../api/errors#404-not-found).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->head();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->post(null)`

Creates a ShoppingList in the [BusinessUnit](ctp:api:type:BusinessUnit) referenced by `businessUnitKey`. As such, the `businessUnit` field on [ShoppingListDraft](ctp:api:type:ShoppingListDraft) is ignored for this request.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withId("ID")->get()`

Retrieves a ShoppingList with the provided `key` in a [BusinessUnit](ctp:api:type:BusinessUnit).

If the ShoppingList exists in the Project but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withId("ID")->head()`

Checks if a ShoppingList exists with the provided `id` in a [BusinessUnit](ctp:api:type:BusinessUnit). Returns a `200 OK` if the ShoppingList exists; otherwise, returns [Not Found](/../api/errors#404-not-found).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withId("ID")->post(null)`

Updates a ShoppingList in a [BusinessUnit](ctp:api:type:BusinessUnit) using one or more [update actions](/../api/projects/shoppingLists#update-actions).
If the ShoppingList exists in the Project but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withId("ID")->delete()`

Deletes a ShoppingList in a [BusinessUnit](ctp:api:type:BusinessUnit).

If the ShoppingList exists in the Project but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withKey("key")->get()`

Retrieves a ShoppingList with the provided `key` in a [BusinessUnit](ctp:api:type:BusinessUnit).
If the ShoppingList exists in the Project but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withKey("key")->head()`

Checks if a ShoppingList exists with the provided `key` in a [BusinessUnit](ctp:api:type:BusinessUnit). Returns a `200 OK` if the ShoppingList exists; otherwise, returns [Not Found](/../api/errors#404-not-found).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withKey("key")->post(null)`

Updates a ShoppingList in a [BusinessUnit](ctp:api:type:BusinessUnit) using one or more [update actions](/../api/projects/shoppingLists#update-actions).
If the ShoppingList exists in the [Project](ctp:api:type:Project) but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->asAssociate()->withAssociateIdValue("associateId")->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")->shoppingLists()->withKey("key")->delete()`

Deletes a ShoppingList in a [BusinessUnit](ctp:api:type:BusinessUnit).

If the ShoppingList exists in the Project but does not reference the requested [BusinessUnit](ctp:api:type:BusinessUnit), this method returns an [InvalidOperation](ctp:api:type:InvalidOperationError) error.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->asAssociate()
                ->withAssociateIdValue("associateId")
                ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                ->shoppingLists()
                ->withKey("key")
                ->delete();
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
## `withProjectKey("projectKey")->associateRoles()->head()`

Checks if one or more AssociateRoles exist for the provided query predicate. Returns a `200 OK` status if any AssociateRole match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->head();
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
## `withProjectKey("projectKey")->associateRoles()->withId("ID")->head()`

Checks if an AssociateRole exists with the provided `id`. Returns a `200 OK` status if the AssociateRole exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->associateRoles()->withKey("key")->head()`

Checks if an AssociateRole exists with the provided `key`. Returns a `200 OK` status if the AssociateRole exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->associateRoles()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->attributeGroups()->head()`

Checks if one or more AttributeGroups exist for the provided query predicate. Returns `200 OK` status if any AttributeGroups match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->head();
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
## `withProjectKey("projectKey")->attributeGroups()->withId("ID")->head()`

Checks if an AttributeGroup exists with the provided `id`. Returns a `200 OK` status if the AttributeGroup exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->attributeGroups()->withKey("key")->head()`

Checks if an AttributeGroup exists with the provided `key`. Returns `200 OK` status if the AttributeGroup exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->attributeGroups()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->businessUnits()->head()`

Checks if one or more BusinessUnits exist for the provided query predicate. Returns a `200 OK` status if any BusinessUnits match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->head();
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
## `withProjectKey("projectKey")->businessUnits()->withBusinessUnitIdValueAssociatesWithAssociateIdValue("businessUnitId", "associateId")->get()`

Retrieves roles and permissions of an Associate in a Business Unit.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withBusinessUnitIdValueAssociatesWithAssociateIdValue("businessUnitId", "associateId")
                ->get();
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
## `withProjectKey("projectKey")->businessUnits()->withId("ID")->head()`

Checks if a BusinessUnit exists with the provided `id`. Returns a `200 OK` status if the BusinessUnit exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->businessUnits()->withKey("key")->head()`

Checks if a BusinessUnit exists with the provided `key`. Returns a `200 OK` status if the BusinessUnit exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->businessUnits()->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")->get()`

Retrieves roles and permissions of an Associate in a Business Unit.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                ->get();
```
## `withProjectKey("projectKey")->businessUnits()->search()->post(null)`

If the initial indexing is in progress or the feature is inactive, A [SearchNotReady](ctp:api:type:SearchNotReadyError) error is returned. If inactive, you can [reactivate](/../api/projects/business-unit-search#reactivate) it.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->search()
                ->post(null);
```
## `withProjectKey("projectKey")->businessUnits()->search()->head()`

Checks whether a search index of Business Units exists for a Project.
Returns a `200 OK` if an index exists; otherwise, returns a `409 Conflict`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->search()
                ->head();
```
## `withProjectKey("projectKey")->businessUnits()->searchIndexingStatus()->get()`

Returns the indexing status of the Business Unit Search for a Project.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->businessUnits()
                ->searchIndexingStatus()
                ->get();
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
## `withProjectKey("projectKey")->cartDiscounts()->head()`

Checks if one or more CartDiscounts exist for the provided query predicate. Returns a `200 OK` status if any CartDiscounts match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->head();
```
## `withProjectKey("projectKey")->cartDiscounts()->post(null)`

Creating a Cart Discount produces the [CartDiscountCreated](ctp:api:type:CartDiscountCreatedMessage) Message.

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
## `withProjectKey("projectKey")->cartDiscounts()->withId("ID")->head()`

Checks if a CartDiscount exists with the provided `id`. Returns a `200 OK` status if the CartDiscount exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withId("ID")
                ->head();
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

Deleting a Cart Discount produces the [CartDiscountDeleted](ctp:api:type:CartDiscountDeletedMessage) Message.

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
## `withProjectKey("projectKey")->cartDiscounts()->withKey("key")->head()`

Checks if a CartDiscount exists with the provided `key`. Returns a `200 OK` status if the CartDiscount exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withKey("key")
                ->head();
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

Deleting a Cart Discount produces the [CartDiscountDeleted](ctp:api:type:CartDiscountDeletedMessage) Message.

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

Retrieves Carts in the Project.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->carts()->head()`

Checks if one or more Carts exist for the provided query predicate. Returns a `200 OK` status if any Carts match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->head();
```
## `withProjectKey("projectKey")->carts()->post(null)`


Creates a Cart in the Project.

If the referenced [ShippingMethod](ctp:api:type:ShippingMethod) in the [CartDraft](ctp:api:type:CartDraft) has a predicate that does not match, or if the Shipping Method is not active, an [InvalidOperation](ctp:api:type:InvalidOperationError) error is returned.

Specific Error Codes:

- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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

Retrieves a Cart with the provided `id`.
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
## `withProjectKey("projectKey")->carts()->withId("ID")->head()`

Checks if a Cart exists for the provided `id`. Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->carts()->withId("ID")->post(null)`

Updates a Cart in the Project using one or more [update actions](/../api/projects/carts#update-actions).

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

Deletes a Cart in the Project.

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

Retrieves the most recently modified active Cart of a Customer with [CartOrigin](ctp:api:type:CartOrigin) `Customer`. If no active Cart exists, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

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
## `withProjectKey("projectKey")->carts()->withCustomerId("customerId")->head()`

Checks if a Cart exists for a Customer. Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withCustomerId("customerId")
                ->head();
```
## `withProjectKey("projectKey")->carts()->withKey("key")->get()`

Retrieves a Cart with the provided `key`.
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
## `withProjectKey("projectKey")->carts()->withKey("key")->head()`

Checks if a Cart exists with the provided `key`. Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->carts()->withKey("key")->post(null)`

Updates a Cart in the Project using one or more [update actions](/../api/projects/carts#update-actions).

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

Deletes a Cart in the Project.

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

Creates a new Cart by replicating an existing Cart or Order.

The following applies to the new Cart:

- It contains the same Customer information, Line Items and Custom Line Items, Custom Fields, Discount Codes, and other settings of the originating Cart or Order.
- If a Line Item becomes invalid, it is removed from the new Cart. A common reason for this is removed Products or Prices.
- Line items and Custom Line Items are reset to their initial [state](/projects/carts#itemstate).
- It contains no payments or delivery information.
- It contains up-to-date Tax Rates, Prices, and Line Item product data.
- The [CartState](/projects/carts#cartstate) is `Active`.
- If using the `customerGroup` field (for a single Customer Group) and the referenced Customer switched to another Customer Group, the new Cart is automatically updated to reflect the new group and corresponding prices.
- If using the `customerGroupAssignments` field (for multiple Customer Groups), the Cart no longer keeps a direct reference to a Customer Group. If a Customer’s group assignments change, the Cart and its Line Item prices are not updated automatically. Prices are only updated when the Cart is changed via a [direct update action](/projects/carts#update-actions).

Specific Error Codes:

- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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
## `withProjectKey("projectKey")->categories()->head()`

Checks if one or more Categories exist for the provided query predicate. Returns a `200 OK` status if any Categories match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->head();
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
## `withProjectKey("projectKey")->categories()->withId("ID")->head()`

Checks if a Category exists with the provided `id`. Returns a `200 OK` status if the Category exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->categories()->withKey("key")->head()`

Checks if a Category exists with the provided `key`. Returns a `200 OK` status if the Category exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->channels()->head()`

Checks if one or more Channels exist for the provided query predicate. Returns a `200 OK` status if any Channels match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->head();
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
## `withProjectKey("projectKey")->channels()->withId("ID")->head()`

Checks if a Channel exists with the provided `id`. Returns a `200 OK` status if the Channel exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withId("ID")
                ->head();
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

Returns a [ReferenceExists](ctp:api:type:ReferenceExistsError) error if other resources reference the Channel to be deleted.


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
## `withProjectKey("projectKey")->channels()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->channels()->withKey("key")->head()`

Checks if a Channel exists with the provided `key`. Returns a `200 OK` status if the Channel exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->channels()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->channels()->withKey("key")->delete()`

Returns a [ReferenceExists](ctp:api:type:ReferenceExistsError) error if other resources reference the Channel to be deleted.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withKey("key")
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
## `withProjectKey("projectKey")->customObjects()->head()`

Checks if one or more CustomObjects exist for the provided query predicate. Returns a `200 OK` status if any CustomObjects match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->head();
```
## `withProjectKey("projectKey")->customObjects()->post(null)`

If an object with the given container/key exists, the object will be replaced with the new value and the version is incremented.
If the request contains a version and an object with the given container/key, then the version must match the version of the existing object. Concurrent updates to the same Custom Object returns a [ConcurrentModification](ctp:api:type:ConcurrentModificationError) error even if the version is not provided.

Fields within `value` that have `null` values **are not saved**.


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
## `withProjectKey("projectKey")->customerGroups()->head()`

Checks if one or more CustomerGroups exist for the provided query predicate. Returns a `200 OK` status if any CustomerGroup match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->head();
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
## `withProjectKey("projectKey")->customerGroups()->withId("ID")->head()`

Checks if a CustomerGroup exists with the provided `id`. Returns a `200 OK` status if the CustomerGroup exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->customerGroups()->withKey("key")->head()`

Checks if a CustomerGroup exists with the provided `key`. Returns a `200 OK` status if the CustomerGroup exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->customers()->head()`

Checks if one or more Customers exist for the provided query predicate. Returns a `200 OK` status if any Customers match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->head();
```
## `withProjectKey("projectKey")->customers()->post(null)`

If the `anonymousCart` field is set on the [CustomerDraft](ctp:api:type:CustomerDraft), then the newly created Customer will be assigned to that [Cart](ctp:api:type:Cart).
Similarly, if the `anonymousId` field is set, the Customer will be set on all [Carts](ctp:api:type:Cart), [Orders](ctp:api:type:Order), [ShoppingLists](ctp:api:type:ShoppingList) and [Payments](ctp:api:type:Payment) with the same `anonymousId`.

Creating a Customer produces the [CustomerCreated](ctp:api:type:CustomerCreatedMessage) Message. Simultaneously creating two Customers with the same email address can return a [LockedField](ctp:api:type:LockedFieldError) error.


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
## `withProjectKey("projectKey")->customers()->withId("ID")->head()`

Checks if a Customer exists with the provided `id`. Returns a `200 OK` status if the Customer exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->customers()->withId("ID")->post(null)`

Simultaneously updating two Customers with the same email address can return a [LockedField](ctp:api:type:LockedFieldError) error.

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

Use this method to verify a global Customer's email during their [email verification process](/../api/customers-overview#customer-email-verification).

Verifying the email of the Customer produces the [CustomerEmailVerified](ctp:api:type:CustomerEmailVerifiedMessage) Message.

After the email is verified, all email tokens issued previously through the [email verification flow](/../api/projects/customers#email-verification-of-customer) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).


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

Use this method to create an email token for a global Customer during their [email verification process](/../api/customers-overview#customer-email-verification).

Creating an email token for the Customer produces the [CustomerEmailTokenCreated](ctp:api:type:CustomerEmailTokenCreatedMessage) Message.
The Message will include the token's value, if the token's validity is 60 minutes or less.


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

Use this method to retrieve a global Customer's details by using the email token during their [email verification process](/../api/customers-overview#customer-email-verification).


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
## `withProjectKey("projectKey")->customers()->withKey("key")->head()`

Checks if a Customer exists with the provided `key`. Returns a `200 OK` status if the Customer exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->customers()->withKey("key")->post(null)`

Simultaneously updating two Customers with the same email address can return a [LockedField](ctp:api:type:LockedFieldError) error.

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

Use this method to reset a global Customer's password during their [password reset process](/../api/customers-overview#customer-password-reset).

Resetting the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=true`.

After the password is reset, all password tokens issued previously through the [password reset flow](/../api/projects/customers#password-reset-of-customer) are invalidated. In addition, any access and refresh tokens issued previously through the [password flow](/../api/authorization#password-flow) and [refresh token flow](/../api/authorization#refresh-token-flow) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).


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

Use this method to create a password reset token for a global Customer during their [password reset process](/../api/customers-overview#customer-password-reset).

Creating a password reset token for the Customer produces the [CustomerPasswordTokenCreated](ctp:api:type:CustomerPasswordTokenCreatedMessage) Message.
The Message will include the token's value, if the token's validity is 60 minutes or less.


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

Use this method to retrieve the details of a global Customer by using the password token during their [password reset process](/../api/customers-overview#customer-password-reset).


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
## `withProjectKey("projectKey")->customers()->search()->post(null)`

If the initial indexing is in progress or the feature is inactive, a [SearchNotReady](ctp:api:type:SearchNotReadyError) error is returned.
If inactive, you can [reactivate](/../api/projects/customer-search#reactivate) it.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->search()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->search()->head()`

Checks whether a search index of Customers exists for a Project.
Returns a `200 OK` if an index exists; otherwise, returns a `409 Conflict`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->search()
                ->head();
```
## `withProjectKey("projectKey")->customers()->searchIndexingStatus()->get()`

Returns the indexing status of the Customer Search for a Project.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->searchIndexingStatus()
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->get()`

Deprecated OAuth 2.0 Scope: `view_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->head()`

Checks if one or more DiscountCodes exist for the provided query predicate. Returns a `200 OK` status if any DiscountCodes match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->head();
```
## `withProjectKey("projectKey")->discountCodes()->post(null)`

Creating a Discount Code produces the [DiscountCodeCreated](ctp:api:type:DiscountCodeCreatedMessage) Message.

Deprecated OAuth 2.0 Scope: `manage_orders:{projectKey}`


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

Deprecated OAuth 2.0 Scope: `view_orders:{projectKey}`

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
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->head()`

Checks if a DiscountCode exists with the provided `id`. Returns a `200 OK` status if the DiscountCode exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->post(null)`

Deprecated OAuth 2.0 Scope: `manage_orders:{projectKey}`

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

Deleting a Discount Code produces the [DiscountCodeDeleted](ctp:api:type:DiscountCodeDeletedMessage) Message.

Deprecated OAuth 2.0 Scope: `manage_orders:{projectKey}`


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
## `withProjectKey("projectKey")->discountCodes()->withKey("key")->get()`

Deprecated OAuth 2.0 Scope: `view_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->withKey("key")->head()`

Checks if a DiscountCode exists with the provided `key`. Returns a `200 OK` status if the DiscountCode exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->discountCodes()->withKey("key")->post(null)`

Deprecated OAuth 2.0 Scope: `manage_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->discountCodes()->withKey("key")->delete()`

Deleting a Discount Code produces the [DiscountCodeDeleted](ctp:api:type:DiscountCodeDeletedMessage) Message.

Deprecated OAuth 2.0 Scope: `manage_orders:{projectKey}`


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->discountGroups()->get()`

Retrieves all DiscountGroups in the Project.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->get();
```
## `withProjectKey("projectKey")->discountGroups()->head()`

Checks if one or more DiscountGroups exist for the provided query predicate.
Returns a `200 OK` status if any DiscountGroups match the query predicate; otherwise, returns a [Not Found](/../api/errors#404-not-found).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->head();
```
## `withProjectKey("projectKey")->discountGroups()->post(null)`

Creates a DiscountGroup in the Project.
This request generates the [DiscountGroupCreated](ctp:api:type:DiscountGroupCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->post(null);
```
## `withProjectKey("projectKey")->discountGroups()->withId("ID")->get()`

Retrieves a DiscountGroup with the provided `id`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->discountGroups()->withId("ID")->head()`

Checks if a DiscountGroup exists with the provided `id`.
Returns a `200 OK` status if a DiscountGroup exists; otherwise, returns a [Not Found](/../api/errors#404-not-found).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->discountGroups()->withId("ID")->post(null)`

Updates a DiscountGroup in the Project using one or more [update actions](/../api/projects/discount-groups#update-actions).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->discountGroups()->withId("ID")->delete()`

Deletes a DiscountGroup in the Project.
This request generates the [DiscountGroupDeleted](ctp:api:type:DiscountGroupDeletedMessage) Message.

If the DiscountGroup is referenced by a CartDiscount, a [ReferenceExists](ctp:api:type:ReferenceExistsError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->discountGroups()->withKey("key")->get()`

Retrieves a DiscountGroup with the provided `key`.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->discountGroups()->withKey("key")->head()`

Checks if a DiscountGroup exists with the provided `key`.
Returns a `200 OK` status if a DiscountGroup exists; otherwise, returns a [Not Found](/../api/errors#404-not-found).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->discountGroups()->withKey("key")->post(null)`

Updates a DiscountGroup in the Project using one or more [update actions](/../api/projects/discount-groups#update-actions).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->discountGroups()->withKey("key")->delete()`

Deletes a DiscountGroup in the Project.
This request generates the [DiscountGroupDeleted](ctp:api:type:DiscountGroupDeletedMessage) Message.

If the DiscountGroup is referenced by a CartDiscount, a [ReferenceExists](ctp:api:type:ReferenceExistsError) error is returned.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountGroups()
                ->withKey("key")
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
## `withProjectKey("projectKey")->extensions()->head()`

Checks if one or more Extensions exist for the provided query predicate. Returns a `200 OK` status if any Extensions match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->head();
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
## `withProjectKey("projectKey")->extensions()->withId("ID")->head()`

Checks if an Extension exists with the provided `id`. Returns a `200 OK` status if the Extension exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->extensions()->withKey("key")->head()`

Checks if an Extension exists with the provided `key`. Returns a `200 OK` status if the Extension exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withKey("key")
                ->head();
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

Execute a GraphQL request.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->head()`

Checks if one or more BusinessUnits exist for the provided query predicate. Returns a `200 OK` status if any BusinessUnits match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withBusinessUnitIdValueAssociatesWithAssociateIdValue("businessUnitId", "associateId")->get()`

Retrieves roles and permissions of an Associate in a Business Unit in a Store.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withBusinessUnitIdValueAssociatesWithAssociateIdValue("businessUnitId", "associateId")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withId("ID")->head()`

Checks if a BusinessUnit exists with the provided `id`. Returns a `200 OK` status if the BusinessUnit exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withKey("key")->head()`

Checks if a BusinessUnit exists with the provided `key`. Returns a `200 OK` status if the BusinessUnit exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->businessUnits()->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")->get()`

Retrieves roles and permissions of an Associate in a Business Unit in a Store.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->businessUnits()
                ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                ->get();
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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->head()`

Checks if one or more CartDiscounts exist for the provided query predicate. Returns a `200 OK` status if any CartDiscounts match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->post(null)`

When using the endpoint, the Store specified in the path and the Stores specified in the payload's `stores` field are added to the CartDiscount.

Creating a Cart Discount produces the [CartDiscountCreated](ctp:api:type:CartDiscountCreatedMessage) Message.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withId("ID")->head()`

Checks if a CartDiscount exists with the provided `id`. Returns a `200 OK` status if the CartDiscount exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withId("ID")
                ->head();
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

Deleting a Cart Discount produces the [CartDiscountDeleted](ctp:api:type:CartDiscountDeletedMessage) Message.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->cartDiscounts()->withKey("key")->head()`

Checks if a CartDiscount exists with the provided `key`. Returns a `200 OK` status if the CartDiscount exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->cartDiscounts()
                ->withKey("key")
                ->head();
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

Deleting a Cart Discount produces the [CartDiscountDeleted](ctp:api:type:CartDiscountDeletedMessage) Message.


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

Retrieves Carts in a [Store](ctp:api:type:Store).

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->head()`

Checks if one or more Carts exist for the provided query predicate in a [Store](ctp:api:type:Store). Returns a `200 OK` status if any Carts match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->post(null)`

Creates a Cart in a [Store](ctp:api:type:Store).

If the referenced [ShippingMethod](ctp:api:type:ShippingMethod) in the [CartDraft](ctp:api:type:CartDraft) has a predicate that does not match, or if the Shipping Method is not active, an [InvalidOperation](ctp:api:type:InvalidOperationError) error is returned.

Specific Error Codes:

- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
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
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->get()`

Retrieves a Cart with the provided `id` in a [Store](ctp:api:type:Store).

If the Cart exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->head()`

Checks if a Cart exists with the provided `id` in a Store. Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->post(null)`

Updates a Cart in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/carts#update-actions).

If the Cart exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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

Deletes a Cart in a [Store](ctp:api:type:Store).

If the Cart exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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

Retrieves the most recently modified [active Cart](ctp:api:type:CartState) of a Customer with [CartOrigin](ctp:api:type:CartOrigin) `Customer`. If no active Cart exists, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

If the Cart exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withCustomerId("customerId")->head()`

Checks if one or more Carts exist for a Customer in a [Store](ctp:api:type:Store). Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withCustomerId("customerId")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withKey("key")->get()`


Retrieves a Cart with the provided `key` in a [Store](ctp:api:type:Store).

If the Cart exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withKey("key")->head()`

Checks if a Cart exists with the provided `key` in a [Store](ctp:api:type:Store). Returns a `200 OK` status if the Cart exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withKey("key")->post(null)`

Updates a Cart in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/carts#update-actions).

If the Cart exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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

Deletes a Cart in a [Store](ctp:api:type:Store).

If the Cart exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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

Creates a new Cart in a [Store](ctp:api:type:Store) by replicating an existing Cart or Order.

The following applies to the new Cart:

- It contains the same Customer information, Line Items and Custom Line Items, Custom Fields, Discount Codes, and other settings of the originating Cart or Order.
- If a Line Item becomes invalid, it is removed from the new Cart. A common reason for this is removed Products or Prices.
- Line items and Custom Line Items are reset to their initial [state](/projects/carts#itemstate).
- It contains no payments or delivery information.
- It contains up-to-date Tax Rates, Prices, and Line Item product data.
- The [CartState](/projects/carts#cartstate) is `Active`.
- If using the `customerGroup` field (for a single Customer Group) and the referenced Customer switched to another Customer Group, the new Cart is automatically updated to reflect the new group and corresponding prices.
- If using the `customerGroupAssignments` field (for multiple Customer Groups), the Cart no longer keeps a direct reference to a Customer Group. If a Customer’s group assignments change, the Cart and its Line Item prices are not updated automatically. Prices are only updated when the Cart is changed via a [direct update action](/projects/carts#update-actions).

Specific Error Codes:

- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->head()`

Checks if one or more Customers exist for the provided query predicate. Returns a `200 OK` status if any Customers match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->post(null)`

When using this endpoint, if omitted, the Customer `stores` field is set to the [Store](ctp:api:type:Store) specified in the path parameter.

If the `anonymousCart` field is set on the [CustomerDraft](ctp:api:type:CustomerDraft), then the newly created Customer will be assigned to that [Cart](ctp:api:type:Cart).
Similarly, if the `anonymousId` field is set, the Customer will be set on all [Carts](ctp:api:type:Cart), [Orders](ctp:api:type:Order), [ShoppingLists](ctp:api:type:ShoppingList) and [Payments](ctp:api:type:Payment) with the same `anonymousId`.
If a Cart with a `store` field specified, the `store` field must reference the same [Store](ctp:api:type:Store) specified in the `{storeKey}` path parameter.

Creating a Customer produces the [CustomerCreated](ctp:api:type:CustomerCreatedMessage) Message. Simultaneously creating two Customers with the same email address can return a [LockedField](ctp:api:type:LockedFieldError) error.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->head()`

Checks if a Customer exists with the provided `id`. Returns a `200 OK` status if the Customer exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->post(null)`

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

Simultaneously updating two Customers with the same email address can return a [LockedField](ctp:api:type:LockedFieldError) error.


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

Use this method to verify a Store-specific Customer's email during their [email verification process](/../api/customers-overview#customer-email-verification).

Verifying the email of the Customer produces the [CustomerEmailVerified](ctp:api:type:CustomerEmailVerifiedMessage) Message.

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

After the email is verified, all email tokens issued previously through the [email verification flow](/../api/projects/customers#email-verification-of-customer) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).


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

Use this method to create an email token for a Store-specific Customer during their [email verification process](/../api/customers-overview#customer-email-verification).

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

Creating an email token for the Customer produces the [CustomerEmailTokenCreated](ctp:api:type:CustomerEmailTokenCreatedMessage) Message.
The Message will include the token's value, if the token's validity is 60 minutes or less.


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

Use this method to retrieve a Store-specific Customer's details by using the email token during their [email verification process](/../api/customers-overview#customer-email-verification).

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->head()`

Checks if a Customer exists with the provided `key`. Returns a `200 OK` status if the Customer exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->post(null)`

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

Simultaneously updating two Customers with the same email address can return a [LockedField](ctp:api:type:LockedFieldError) error.


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

Use this method to reset a Store-specific Customer's password during their [password reset process](/../api/customers-overview#customer-password-reset).

Resetting the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=true`.

After the password is reset, all password tokens issued previously through the [password reset flow](/../api/projects/customers#password-reset-of-customer) are invalidated. In addition, any access and refresh tokens issued previously through the [password flow](/../api/authorization#password-flow) and [refresh token flow](/../api/authorization#refresh-token-flow) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).

If the Customer exists in the Project but the `stores` field references a different [Store](ctp:api:type:Store), then this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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

Use this method to create a password reset token for a Store-specific Customer during their [password reset process](/../api/customers-overview#customer-password-reset).

If the Customer exists in the Project but the `stores` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

Creating a password reset token for the Customer produces the [CustomerPasswordTokenCreated](ctp:api:type:CustomerPasswordTokenCreatedMessage) Message.
The Message will include the token's value, if the token's validity is 60 minutes or less.


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

Use this method to retrieve a Store-specific Customer's details by using the password reset token during their [password reset process](/../api/customers-overview#customer-password-reset).

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

A Cart returned in the [CustomerSignInResult](ctp:api:type:CustomerSignInResult) has any invalid Line Items removed and is [updated](/api/carts-orders-overview#update-a-cart) with the latest prices, taxes, and discounts. During these updates, the following errors can be returned: [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError) and [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError).

Triggers [Cart merge during sign-in](/../api/customers-overview#cart-merge-during-sign-in).

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

Returns a Customer for a given Query Predicate in a [Store](ctp:api:type:Store). Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Customer exists in the Store for the given Query Predicate.
- If a Customer exists in the Store for the given Query Predicate, but does not have an `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.
- If a Customer exists for the given Query Predicate but is associated with a different Store than what is specified in the `manage_my_profile:{projectKey}:{storeKey}` scope.


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

Updates the Customer in a [Store](ctp:api:type:Store). Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Customer exists with the `id` specified in the [customer:{id}](/scopes#composable-commerce-oauth) scope.
- If the Customer exists but is associated with a different Store than what is specified in the `manage_my_profile:{projectKey}:{storeKey}` scope.


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

Deletes the Customer in a [Store](ctp:api:type:Store). Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Customer exists with the `id` specified in the [customer:{id}](/scopes#composable-commerce-oauth) scope.
- If the Customer exists but is associated with a different Store than what is specified in the `manage_my_profile:{projectKey}:{storeKey}` scope.


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

Retrieves the Customer's most recently modified [active Cart](ctp:api:type:CartState) in a Store. Returns a `200 OK` status if successful.

Carts with `Merchant` or `Quote` [CartOrigin](ctp:api:type:CartOrigin) are ignored.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no active Cart exists.
- If an active Cart exists but does not have a `store` specified, or the `store` field references a different Store.
- If an active Cart exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->activeCart()->head()`

Checks if an active Cart exists in a Store. Returns `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no active Cart exists in a Store.
- If an active Cart exists but does not have a `store` specified, or the `store` field references a different Store.
- If an active Cart exists but does not contain a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->activeCart()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->get()`

Retrieves Carts for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store).


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->head()`

Checks if a Cart exists for a Store that matches the given Query Predicate, and contains a matching `customerId` or `anonymousId`. Returns a `200 OK` status if any Carts match these conditions, or [Not Found](/../api/errors#404-not-found) otherwise.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->post(null)`


Creates a Cart in a Store for the Customer or anonymous user. The `customerId` or `anonymousId` field on the Cart is automatically set based on the [customer:{id}](/scopes#composable-commerce-oauth) or [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.

The `store` field in the created [Cart](ctp:api:type:Cart) is set to the Store specified by the `storeKey` path parameter.

Specific Error Codes:

- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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

Returns a Cart for a given `id` in a Store. Returns a `200 OK` status if the Cart exists.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Cart exists in the Store for the given `id`.
- If the Cart exists but does not belong to a Store, or the Cart's `store` field references a different Store.
- If the Cart exists but does not have either a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->head()`

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
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->post(null)`

Updates the Cart for a given `id` in a Store. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Cart exists in the Store for the given `id`.
- If the Cart exists but does not belong to a Store, or the Cart's `store` field references a different Store.
- If the Cart exists but does not have either a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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

Deletes the Cart for a given `id` in a Store. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Cart exists in the Store for the given `id`.
- If the Cart exists in the Project but does not belong to a Store, or the Cart's `store` field references a different Store.
- If the Cart exists in the Project but does not have either a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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

This is the last step in the [email verification process of a Customer](/../api/projects/customers#email-verification-of-customer-in-store). Returns a `200 OK` status if successful.

After the email is verified, all email tokens issued previously through the [email verification flow](/../api/projects/customers#email-verification-of-customer) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Customer exists with the `id` specified in the [customer:{id}](/scopes#composable-commerce-oauth) scope.
- If the Customer exists but is associated with a different Store than what is specified in the `manage_my_profile:{projectKey}:{storeKey}` scope.


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

If used with an optional [access token for an anonymous session](ctp:api:type:AnonymousSession), all Orders and Carts that belong to the `anonymousId` are assigned to the newly logged-in Customer.

- If the Customer does not have a Cart, the most recently modified anonymous cart becomes the Customer's Cart.
- If the Customer already has a Cart, the most recently modified anonymous cart is handled according to [AnonymousCartSignInMode](ctp:api:type:AnonymousCartSignInMode).

A Cart returned in the [CustomerSignInResult](ctp:api:type:CustomerSignInResult) has any invalid Line Items removed and is [updated](/api/carts-orders-overview#update-a-cart) with the latest prices, taxes, and discounts. During these updates, the following errors can be returned: [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError) and [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError).

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

Retrieves Orders in a [Store](ctp:api:type:Store) for the authenticated Customer or anonymous user.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Orders exist that match the provided query predicate.
- If an Order exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->head()`

Checks if one or more Orders exist for the provided query predicate in a [Store](ctp:api:type:Store) for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no Orders exist in the Store that match the Query Predicate.
- If an Order matches the Query Predicate, but no `store` is specified, or the `store` field references a different Store.
- If an Order matches the Query Predicate, but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->orders()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->post(null)`


Creates an Order from a Cart in a [Store](ctp:api:type:Store) for the Customer or anonymous user. The `customerId` or `anonymousId` field on the Order is automatically set based on the [customer:{id}](/scopes#composable-commerce-oauth) or [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.

The Cart must have a shipping address and an active Shipping Method set.

When creating [B2B Orders](/associates-overview#b2b-resources), the Customer must have the `CreateMyOrdersFromMyCarts` [Permission](ctp:api:type:Permission).

If the Cart's `customerId` does not match the [customer:{id}](/scopes#composable-commerce-oauth) scope, or the `anonymousId` does not match the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned.

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [AssociateMissingPermission](ctp:api:type:AssociateMissingPermissionError)
- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)
- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [ShippingMethodDoesNotMatchCart](ctp:api:type:ShippingMethodDoesNotMatchCartError)


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

Retrieves an Order with the provided `id` in a [Store](ctp:api:type:Store) for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Orders exists in the Store with the provided `id`.
- If an Order exists but does not have a `store` specified, or the `store` field references a different Store.
- If an Order exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->withId("ID")->head()`

Checks if an Order exists with the provided `id` in a [Store](ctp:api:type:Store) for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no Order exists in the Store with the provided `id`.
- If an Order exists but does not have a `store` specified, or the `store` field references a different Store.
- If an Order exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->password()->post(null)`

Changing the password of the Customer produces the [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=false`.  Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Customer exists with the `id` specified in the [customer:{id}](/scopes#composable-commerce-oauth) scope.
- If the Customer exists but is associated with a different Store than what is specified in the `manage_my_profile:{projectKey}:{storeKey}` scope.


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

Resetting a password produces the Customer [CustomerPasswordUpdated](ctp:api:type:CustomerPasswordUpdatedMessage) Message with `reset=true`.

After the password is reset, all password tokens issued previously through the [password reset flow](/../api/projects/customers#password-reset-of-customer) are invalidated. In addition, any access and refresh tokens issued previously through the [password flow](/../api/authorization#password-flow) and [refresh token flow](/../api/authorization#refresh-token-flow) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Customer exists with the `id` specified in the [customer:{id}](/scopes#composable-commerce-oauth) scope.
- If the Customer exists but is associated with a different Store than what is specified in the `manage_my_profile:{projectKey}:{storeKey}` scope.


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

Retrieves ShoppingLists for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store). Returns `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingLists exist in a Store.
- If a ShoppingList exists but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList exists in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->head()`

Checks if one or more ShoppingLists exist for the provided query predicate for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store). Returns `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no ShoppingLists exist for the provided query predicate in a Store.
- If a ShoppingList matches the query predicate but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList exists in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->shoppingLists()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->post(null)`


Creates a ShoppingList for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store). The `customer` or `anonymousId` field on the ShoppingList is automatically set based on the given [customer:{id}](/scopes#composable-commerce-oauth) or [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.

When using this endpoint, the `store` field of a ShoppingList is always set to the Store specified in the path parameter.


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

Retrieves a ShoppingList with the provided `id` for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store). Returns `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList matches the provided `id` in a Store.
- If a ShoppingList matches the provided `id` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `id` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withId("ID")->head()`

Checks if a ShoppingList exists with the provided `id` for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store). Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no ShoppingList matches the provided `id` in a Store.
- If a ShoppingList matches the provided `id` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `id` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withId("ID")->post(null)`

Updates a ShoppingList for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/me-shoppingLists#update-actions). Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList matches the provided `id` in a Store.
- If a ShoppingList matches the provided `id` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `id` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

Deletes a ShoppingList in a [Store](ctp:api:type:Store). Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList matches the provided `id` in a Store.
- If a ShoppingList matches the provided `id` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `id` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

Retrieves a ShoppingList with the provided `key` for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store). Returns `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList matches the provided `key` in a Store.
- If a ShoppingList matches the provided `key` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `key` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope,
   or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withKey("key")->head()`

Checks if a ShoppingList exists with the provided `key` for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store). Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no ShoppingList exists that matches the provided `key` in a Store.
- If a ShoppingList matches the provided `key` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `key` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withKey("key")->post(null)`

Updates a ShoppingList for the authenticated Customer or anonymous user in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/me-shoppingLists#update-actions). Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList matches the provided `key` in a Store.
- If a ShoppingList matches the provided `key` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `key` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

Deletes a ShoppingList in a [Store](ctp:api:type:Store). Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList matches the provided `key` in a Store.
- If a ShoppingList matches the provided `key` but does not have a `store` specified, or the `store` field references a different Store.
- If a ShoppingList matches the provided `key` in a Store but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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


If used with an optional [access token for an anonymous session](ctp:api:type:AnonymousSession), all Orders and Carts that belong to the `anonymousId` are assigned to the newly created Customer.

If omitted in the request body, the [Customer](ctp:api:type:Customer) `stores` field is set to the [Store](ctp:api:type:Store) specified in the path parameter.

A Cart returned in the [CustomerSignInResult](ctp:api:type:CustomerSignInResult) has any invalid Line Items removed and is [updated](/api/carts-orders-overview#update-a-cart) with the latest prices, taxes, and discounts. During these updates, the following errors can be returned: [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError) and [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError).

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

Retrieves Orders in a [Store](ctp:api:type:Store).

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->head()`

Checks if one or more Orders exist for the provided query predicate in a [Store](ctp:api:type:Store). Returns a `200 OK` status if any Orders match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->post(null)`

Creates an Order from a Cart in a [Store](ctp:api:type:Store).
The Cart must have a shipping address and an active Shipping Method set.

The shipping address is used for tax calculation for a Cart with `Platform` [TaxMode](ctp:api:type:TaxMode).

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

If a server-side problem occurs, indicated by a 500 Internal Server Error HTTP response, the Order creation may still successfully complete after the error is returned.
If you receive this error, you should verify the status of the Order by querying a unique identifier supplied during the creation request, such as the Order number.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [ShippingMethodDoesNotMatchCart](ctp:api:type:ShippingMethodDoesNotMatchCartError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [InvalidOperation](ctp:api:type:InvalidOperationError)
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

Retrieves an Order with the provided `id` in a [Store](ctp:api:type:Store).
If the Order exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->head()`

Checks if an Order exists with the provided `id` in a [Store](ctp:api:type:Store). Returns a `200 OK` status if the Order exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->post(null)`

Updates an Order in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/orders#update-actions).
If the Order exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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

Deletes an Order in a [Store](ctp:api:type:Store).
If the Order exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

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

Retrieves an Order with the provided `orderNumber` in a [Store](ctp:api:type:Store).
If the Order exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->head()`

Checks if an Order exists with the provided `orderNumber` in a [Store](ctp:api:type:Store). Returns a `200 OK` status if the Order exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->post(null)`

Updates an Order in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/orders#update-actions).
If the Order exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.


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

Deletes an Order in a [Store](ctp:api:type:Store).
If the Order exists in the Project but does not have a `store` specified, or the `store` field references a different Store, this method returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->orderQuote()->post(null)`


Creates an Order from a [Quote](ctp:api:type:Quote) in a [Store](ctp:api:type:Store). The referenced Quote must have the `Pending` [state](ctp:api:type:QuoteState) and must be valid (not past the `validTo` date); otherwise, an [InvalidOperation](ctp:api:type:InvalidOperationError) error is returned.

Produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [InvalidOperation](ctp:api:type:InvalidOperationError)
- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->orderQuote()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->withId("ID")->get()`

Gets the current or staged representation of a [Product](ctp:api:type:Product) by its ID in the specified [Store](ctp:api:type:Store).
If the Store has defined some languages, countries, distribution, supply Channels, and/or Product Selection,
they are used for projections based on [locale](ctp:api:type:ProductProjectionLocales), [price](ctp:api:type:ProductProjectionPrices),
and [inventory](ctp:api:type:ProductProjectionInventoryEntries).

If [ProductSelection](ctp:api:type:ProductSelection) is used, it affects the [availability of the Product](/projects/stores#products-available-in-store) in the specified Store.

If a [ProductTailoring](ctp:api:type:ProductTailoring) exists for the Product with the given `id` and the given Store, this endpoint returns the ProductProjection with tailored data.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->withId("ID")->head()`

Checks if the current or staged representations of a Product exists with the provided `id` in the specified [Store](ctp:api:type:Store). Returns a `200 OK` status if the ProductProjection exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productProjections()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->withKey("key")->get()`

Gets the current or staged representation of a [Product](ctp:api:type:Product) by its key in the specified [Store](ctp:api:type:Store).
If the Store has defined some languages, countries, distribution, supply Channels, and/or Product Selection,
they are used for projections based on [locale](ctp:api:type:ProductProjectionLocales), [price](ctp:api:type:ProductProjectionPrices),
and [inventory](ctp:api:type:ProductProjectionInventoryEntries).

If [ProductSelection](ctp:api:type:ProductSelection) is used, it affects the [availability of the Product](/projects/stores#products-available-in-store) in the specified Store.

If a [ProductTailoring](ctp:api:type:ProductTailoring) exists for the Product with the given `key` and the given Store, this endpoint returns the ProductProjection with tailored data.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->withKey("key")->head()`

Checks if the current or staged representations of a Product exists with the provided `key` in the specified [Store](ctp:api:type:Store). Returns a `200 OK` status if the ProductProjection exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productProjections()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productTailoring()->get()`

Queries Product Tailoring in a specific [Store](ctp:api:type:Store).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productTailoring()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productTailoring()->post(null)`

Creates a [ProductTailoring](ctp:api:type:ProductTailoring) in the [Store](ctp:api:type:Store) specified by `storeKey`.
When using this endpoint the ProductTailoring's `store` field is always set to the [Store](ctp:api:type:Store) specified in the path parameter.

Generates the [ProductTailoringCreated](ctp:api:type:ProductTailoringCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productTailoring()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductId("productID")->productTailoring()->get()`

Gets the current or staged representation of a [Product Tailoring](ctp:api:type:ProductTailoring) by its Product ID in the specified [Store](ctp:api:type:Store).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductId("productID")
                ->productTailoring()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductId("productID")->productTailoring()->post(null)`

Updates the current or staged representation of a [Product Tailoring](ctp:api:type:ProductTailoring) by its Product ID in the specified [Store](ctp:api:type:Store).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductId("productID")
                ->productTailoring()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductId("productID")->productTailoring()->delete()`

Generates the [ProductTailoringDeleted](ctp:api:type:ProductTailoringDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductId("productID")
                ->productTailoring()
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductId("productID")->productTailoring()->images()->post(null)`

Uploads a JPEG, PNG and GIF file to a [ProductVariantTailoring](ctp:api:type:ProductVariantTailoring).
The maximum file size of the image is **10MB**.
Either `variant` or `sku` is required to update a specific ProductVariant.
If neither is provided, the image is uploaded to the Master Variant of the Product.

The response status code depends on the size of the original image.
If the image is small, the API responds with `200 OK`, and if the image is larger, it responds with `202 Accepted`.
The Product returned with a `202 Accepted` status code contains a `warnings` field with an [ImageProcessingOngoing](ctp:api:type:ImageProcessingOngoingWarning) Warning.

Produces the [ProductTailoringImageAdded](/projects/messages/product-catalog-messages#product-tailoring-image-added) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductId("productID")
                ->productTailoring()
                ->images()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductKey("productKey")->productTailoring()->get()`

Gets the current or staged representation of a [Product Tailoring](ctp:api:type:ProductTailoring) by its Product key in the specified [Store](ctp:api:type:Store).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductKey("productKey")
                ->productTailoring()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductKey("productKey")->productTailoring()->post(null)`

Updates the current or staged representation of a [Product Tailoring](ctp:api:type:ProductTailoring) by its Product key in the specified [Store](ctp:api:type:Store).


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductKey("productKey")
                ->productTailoring()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductKey("productKey")->productTailoring()->delete()`

Generates the [ProductTailoringDeleted](ctp:api:type:ProductTailoringDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductKey("productKey")
                ->productTailoring()
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->products()->withProductKey("productKey")->productTailoring()->images()->post(null)`

Uploads a JPEG, PNG and GIF file to a [ProductVariantTailoring](ctp:api:type:ProductVariantTailoring).
The maximum file size of the image is **10MB**.
Either `variant` or `sku` is required to update a specific ProductVariant.
If neither is provided, the image is uploaded to the Master Variant of the Product.

The response status code depends on the size of the original image.
If the image is small, the API responds with `200 OK`, and if the image is larger, it responds with `202 Accepted`.
The Product returned with a `202 Accepted` status code contains a `warnings` field with an [ImageProcessingOngoing](ctp:api:type:ImageProcessingOngoingWarning) Warning.

Produces the [ProductTailoringImageAdded](/projects/messages/product-catalog-messages#product-tailoring-image-added) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->products()
                ->withProductKey("productKey")
                ->productTailoring()
                ->images()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->head()`

Checks if one or more QuoteRequests exist for the provided query predicate. Returns a `200 OK` status if any QuoteRequests match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->post(null)`



### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withId("ID")->head()`

Checks if a QuoteRequest exists with the provided `id`. Returns a `200 OK` status if the QuoteRequest exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withKey("key")->head()`

Checks if a QuoteRequest exists with the provided `key`. Returns a `200 OK` status if the QuoteRequest exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quoteRequests()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quoteRequests()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->head()`

Checks if one or more Quotes exist for the provided query predicate. Returns a `200 OK` status if any Quotes match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withId("ID")->head()`

Checks if a Quote exists with the provided `id`. Returns a `200 OK` status if the Quote exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withKey("key")->head()`

Checks if a Quote exists with the provided `key`. Returns a `200 OK` status if the Quote exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->quotes()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->quotes()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shippingMethods()->matchingCart()->get()`

Retrieves the active ShippingMethods that can ship to the shipping address of the given Cart in a given [Store](ctp:api:type:Store).
Each ShippingMethod contains exactly one ShippingRate with the flag `isMatching` set to `true`.
This ShippingRate is used when the ShippingMethod is [added to the Cart](ctp:api:type:CartSetShippingMethodAction).
If a matching ShippingMethod has `isDefault` set to `true`, it is returned as the first item in the array.


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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shippingMethods()->matchingCart()->head()`

Checks if an active ShippingMethod that can ship to the shipping address of the given Cart exists in the given [Store](ctp:api:type:Store). Returns a `200 OK` status if the ShippingMethod exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shippingMethods()
                ->matchingCart()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->get()`

Retrieves ShoppingLists in a [Store](ctp:api:type:Store).

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->head()`

Checks if one or more ShoppingLists exist for the provided query predicate in a [Store](ctp:api:type:Store). Returns a `200 OK` status if any ShoppingLists match the query predicate or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->post(null)`

Creates a ShoppingList in a [Store](ctp:api:type:Store).
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

Retrieves a ShoppingList with the provided `id` in a [Store](ctp:api:type:Store).
If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different Store,
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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withId("ID")->head()`

Checks if a ShoppingList exists with the provided `id` in a [Store](ctp:api:type:Store). Returns a `200 OK` status if the ShoppingList exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withId("ID")->post(null)`

Updates a ShoppingList in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/shoppingLists#update-actions).
If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different Store,
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

Deletes a ShoppingList in a [Store](ctp:api:type:Store).
If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different Store,
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

Retrieves a ShoppingList with the provided `key` in a [Store](ctp:api:type:Store).
If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different Store,
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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withKey("key")->head()`

Checks if a ShoppingList exists with the provided `key` in a [Store](ctp:api:type:Store). Returns a `200 OK` status if the ShoppingList exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->shoppingLists()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->shoppingLists()->withKey("key")->post(null)`

Updates a ShoppingList in a [Store](ctp:api:type:Store) using one or more [update actions](/../api/projects/shoppingLists#update-actions).
If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different Store,
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

Deletes a ShoppingList in a [Store](ctp:api:type:Store).
If a ShoppingList exists in a Project but does _not_ have the `store` field, or the `store` field references a different Store,
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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->head()`

Checks if one or more StagedQuotes exist for the provided query predicate. Returns a `200 OK` status if any StagedQuotes match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withId("ID")->head()`

Checks if a StagedQuote exists with the provided `id`. Returns a `200 OK` status if the StagedQuote exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withId("ID")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withKey("key")->head()`

Checks if a StagedQuote exists with the provided `key`. Returns a `200 OK` status if the StagedQuote exists or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->stagedQuotes()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->stagedQuotes()
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
## `withProjectKey("projectKey")->inventory()->head()`

Checks if one or more InventoryEntries exist for the provided query predicate. Returns a `200 OK` status if any Inventory Entries match the Query Predicate, a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->head();
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
## `withProjectKey("projectKey")->inventory()->withId("ID")->head()`

Checks if an InventoryEntry exists with the provided `id`. Returns a `200 OK` status if the InventoryEntry exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->inventory()->withKey("key")->head()`

Checks if an InventoryEntry exists with the provided `key`. Returns a `200 OK` status if the InventoryEntry exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withKey("key")
                ->head();
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
If the Customer is registered in a Store, use the [Authenticate (sign in) Customer in Store](ctp:api:endpoint:/{projectKey}/in-store/key={storeKey}/login:POST) method.

Triggers [Cart merge during sign-in](/../api/customers-overview#cart-merge-during-sign-in).

A Cart returned in the [CustomerSignInResult](ctp:api:type:CustomerSignInResult) has any invalid Line Items removed and is [updated](/api/carts-orders-overview#update-a-cart) with the latest prices, taxes, and discounts. During these updates, the following errors can be returned: [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError) and [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError).

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

Returns a Customer for a given Query Predicate. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Customer exists for the given Query Predicate.
- If a Customer exists for the given Query Predicate, but does not have an `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

Updates the Customer specified in the [customer:{id}](/scopes#composable-commerce-oauth) scope. Returns a `200 OK` status if successful.


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

Deletes the Customer specified in the [customer:{id}](/scopes#composable-commerce-oauth) scope. Returns a `200 OK` status if successful.

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

Retrieves the Customer's most recently modified [active Cart](ctp:api:type:CartState). Returns a `200 OK` status if successful.

Carts with `Merchant` or `Quote` [CartOrigin](ctp:api:type:CartOrigin) are ignored.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no active Cart exists.
- If an active Cart exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->activeCart()->head()`

Checks if an active Cart exists. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no active Cart exists.
- If an active Cart exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->activeCart()
                ->head();
```
## `withProjectKey("projectKey")->me()->businessUnits()->get()`

Retrieves Business Units for the authenticated Customer. Returns a `200 OK` status if successful, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.


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
## `withProjectKey("projectKey")->me()->businessUnits()->head()`

Checks if one or more BusinessUnits exist for the provided query predicate. Returns a `200 OK` status if any BusinessUnits match the Query Predicate and the Customer has access to them, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->head();
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

Returns a Business Unit for a given `id`. Returns a `200 OK` status if the Business Unit exists and the Customer has access to it, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.


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
## `withProjectKey("projectKey")->me()->businessUnits()->withId("ID")->head()`

Checks if a BusinessUnit exists with the provided `id`. Returns a `200 OK` status if the BusinessUnit exists and the Customer has access to it, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->me()->businessUnits()->withId("ID")->post(null)`

Updates a Business Unit for a given `id`. Returns a `200 OK` status if the Business Unit exists and the Customer has access to it, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.


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
## `withProjectKey("projectKey")->me()->businessUnits()->withKey("key")->get()`

Returns a Business Unit for a given `key`. Returns a `200 OK` status if the Business Unit exists and the Customer has access to it, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

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
## `withProjectKey("projectKey")->me()->businessUnits()->withKey("key")->head()`

Checks if a BusinessUnit exists with the provided `key`. Returns a `200 OK` status if the Business Unit exists and the Customer has access to it, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->businessUnits()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->me()->businessUnits()->withKey("key")->post(null)`

Updates a Business Unit for a given `key`. Returns a `200 OK` status if the Business Unit exists and the Customer has access to it, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

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
## `withProjectKey("projectKey")->me()->carts()->get()`

Retrieves Carts for the authenticated Customer or anonymous user.


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
## `withProjectKey("projectKey")->me()->carts()->head()`

Checks if a Cart exists that matches a given Query Predicate and contains either a matching `customerId` or `anonymousId`. Returns a `200 OK` status if the Cart exists, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->head();
```
## `withProjectKey("projectKey")->me()->carts()->post(null)`


Creates a Cart for the Customer or anonymous user. The `customerId` or `anonymousId` field on the Cart is automatically set based on the [customer:{id}](/scopes#composable-commerce-oauth) or [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.

Specific Error Codes:

- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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

Returns a Cart for a given `id`. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Cart exists with the provided `id`.
- If the Cart exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->head()`

Checks if a Cart exists with the provided `id`. Returns a `200 OK` status if the Cart exists.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Cart exists with the provided `id`.
- If the Cart exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->post(null)`

Updates the Cart for a given `id`. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Cart exists with the provided `id`.
- If the Cart exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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

Deletes the Cart for a given `id`. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Cart exists with the provided `id`.
- If the Cart exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->carts()->replicate()->post(null)`

Creates a new Cart by replicating an existing Cart or Order of the authenticated Customer.
This can be useful in cases where a customer wants to cancel a recent order to make some changes or reorder a previous order.

The replicated Cart preserves Customer information, Line Items and Custom Line Items, Custom Fields, Discount Codes, and other settings of the Cart or Order.
If the Line Items become invalid, for example, due to removed Products or Prices, they are removed from the new Cart.
If the Customer switches to another Customer Group, the new Cart is updated with the new value.
It has up-to-date Tax Rates, Prices, and Line Item product data and is in `Active` [CartState](ctp:api:type:CartState).

The new Cart does not contain Payments or Deliveries. The [State](ctp:api:type:ItemState) of Line Items and Custom Line Items is reset to `initial`.

If the Cart or Order to be replicated does not belong to the authenticated Customer, the API returns a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error

Specific Error Codes:

- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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

After the email is verified, all email tokens issued previously through the [email verification flow](/../api/projects/customers#email-verification-of-customer) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).


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

If used with an optional [access token for an anonymous session](ctp:api:type:AnonymousSession), all Orders and Carts that belong to the `anonymousId` are assigned to the newly logged-in Customer.

- If the Customer does not have a Cart yet, the most recently modified anonymous cart becomes the Customer's Cart.
- If the Customer already has a Cart, the most recently modified anonymous cart is handled in accordance with [AnonymousCartSignInMode](ctp:api:type:AnonymousCartSignInMode).

A Cart returned in the [CustomerSignInResult](ctp:api:type:CustomerSignInResult) has any invalid Line Items removed and is [updated](/api/carts-orders-overview#update-a-cart) with the latest prices, taxes, and discounts. During these updates, the following errors can be returned: [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError) and [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError).

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

Retrieves Orders for the authenticated Customer or anonymous user.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Orders exist for the provided query predicate.
- If an Order exists but does not have a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->orders()->head()`

Checks if one or more Orders exist for the provided query predicate for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no Orders exist that match the provided query predicate.
- If one or more Orders exist but don't have either a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->head();
```
## `withProjectKey("projectKey")->me()->orders()->post(null)`


Creates an Order from a Cart for the Customer or anonymous user. The `customerId` or `anonymousId` field on the Order is automatically set based on the [customer:{id}](/scopes#composable-commerce-oauth) or [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.

The Cart must have a shipping address and an active Shipping Method set. When creating [B2B Orders](/associates-overview#b2b-resources), the Customer must have the `CreateMyOrdersFromMyCarts` [Permission](ctp:api:type:Permission).

If the Cart's `customerId` does not match the [customer:{id}](/scopes#composable-commerce-oauth) scope, or the `anonymousId` does not match the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned.

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

If a server-side problem occurs, indicated by a 500 Internal Server Error HTTP response, the Order creation may still successfully complete after the error is returned.
If you receive this error, you should verify the status of the Order by querying a unique identifier supplied during the creation request, such as the Order number.

Specific Error Codes:

- [AssociateMissingPermission](ctp:api:type:AssociateMissingPermissionError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [ShippingMethodDoesNotMatchCart](ctp:api:type:ShippingMethodDoesNotMatchCartError)
- [MatchingPriceNotFound](ctp:api:type:MatchingPriceNotFoundError)
- [MissingTaxRateForCountry](ctp:api:type:MissingTaxRateForCountryError)


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

Retrieves an Order with the provided `id` for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no Order exists for the provided `id`.
- If the Order exists but does not have either a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->orders()->withId("ID")->head()`

Checks if an Order exists with the provided `id` for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no Order exists for the provided `id`.
- If the Order exists but does not have either a `customerId` that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope, or an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->me()->orders()->orderQuote()->post(null)`


Creates an Order from a [Quote](ctp:api:type:Quote) for the authenticated Customer. To create [B2B Orders](/associates-overview#b2b-resources), the Customer must have the `CreateMyOrdersFromMyQuotes` [Permission](ctp:api:type:Permission).

The referenced Quote must have the `Pending` [state](ctp:api:type:QuoteState) and must be valid (not past the `validTo` date); otherwise, an [InvalidOperation](ctp:api:type:InvalidOperationError) error is returned.

Produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
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

After the password is reset, all password tokens issued previously through the [password reset flow](/../api/projects/customers#password-reset-of-customer) are invalidated. In addition, any access and refresh tokens issued previously through the [password flow](/../api/authorization#password-flow) and [refresh token flow](/../api/authorization#refresh-token-flow) are invalidated. This invalidation of tokens is [eventually consistent](/../api/general-concepts#eventual-consistency).


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

Retrieves [Payments](/projects/me-payments#mypayment) for the authenticated Customer or anonymous user.

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
## `withProjectKey("projectKey")->me()->payments()->head()`

Checks if one or more [Payments](/projects/me-payments#mypayment) exist for the provided query predicate for the authenticated Customer or anonymous user. Returns a `200 OK` status if any Payments match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->head();
```
## `withProjectKey("projectKey")->me()->payments()->post(null)`

Creates a [Payment](/projects/me-payments#mypayment) for the authenticated Customer or anonymous user.
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

Retrieves a [Payment](/projects/me-payments#mypayment) with the provided `id` for the authenticated Customer or anonymous user.

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
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->head()`

Checks if a [Payment](/projects/me-payments#mypayment) exists with the provided `id` for the authenticated Customer or anonymous user. Returns a `200 OK` status if the Payment exists, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->post(null)`

Updates a [Payment](/projects/me-payments#mypayment) for the authenticated Customer or anonymous user using one or more [update actions](/../api/projects/me-payments#update-actions).
You can only update a Payment if it has no [Transactions](ctp:api:type:Transaction).


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

Deletes a [Payment](/projects/me-payments#mypayment) with the provided `id` for the authenticated Customer or anonymous user.
You can only delete a Payment if it has no [Transactions](ctp:api:type:Transaction).


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

Retrieves Quote Requests for the authenticated Customer. Returns a `200 OK` status if successful.


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
## `withProjectKey("projectKey")->me()->quoteRequests()->head()`

Checks if one or more QuoteRequests exist for the provided query predicate. Returns a `200 OK` status if any QuoteRequests match the query predicate, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->head();
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
## `withProjectKey("projectKey")->me()->quoteRequests()->withId("ID")->head()`

Checks if a QuoteRequest exists with the provided `id`. Returns a `200 OK` status if the QuoteRequest exists or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->me()->quoteRequests()->withKey("key")->head()`

Checks if a QuoteRequest exists with the provided `key`. Returns a `200 OK` status if the QuoteRequest exists or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quoteRequests()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->me()->quotes()->head()`

Checks if one or more Quotes exist for the provided query predicate. Returns a `200 OK` status if any Quotes match the query predicate, or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->head();
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
## `withProjectKey("projectKey")->me()->quotes()->withId("ID")->head()`

Checks if a Quote exists with the provided `id`. Returns a `200 OK` status if the Quote exists or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->me()->quotes()->withKey("key")->head()`

Checks if a Quote exists with the provided `key`. Returns a `200 OK` status if the Quote exists or a [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->quotes()
                ->withKey("key")
                ->head();
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

Retrieves ShoppingLists for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList exists for the provided query predicate.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->shoppingLists()->head()`

Checks if one or more ShoppingLists exist for the provided query predicate for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no ShoppingList exists for the provided query predicate.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->head();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->post(null)`

Creates a ShoppingList for the authenticated Customer or anonymous user. The `customerId` or `anonymousId` on the ShoppingList is automatically set based on the given [customer:{id}](/scopes#composable-commerce-oauth) or [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope.


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

Retrieves a ShoppingList with the provided `id` for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList exists with the provided `id`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->head()`

Checks if a ShoppingList exists with the provided `id` for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no ShoppingList exists for the provided `id`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->post(null)`

Updates a ShoppingList for the authenticated Customer or anonymous user using one or more [update actions](/../api/projects/me-shoppingLists#update-actions).  Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList exists for the provided `id`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

Deletes a ShoppingList for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList exists with the provided `id`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

Retrieves a ShoppingList with the provided `key` for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList exists with the provided `key`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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
## `withProjectKey("projectKey")->me()->shoppingLists()->withKey("key")->head()`

Checks if a ShoppingList exists with the provided `key` for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [Not Found](/../api/errors#404-not-found) error is returned in the following scenarios:

- If no ShoppingList exists with the provided `key`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withKey("key")->post(null)`

Updates a ShoppingList for the authenticated Customer or anonymous user using one or more [update actions](/../api/projects/me-shoppingLists#update-actions).  Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList exists for the provided `key`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

Deletes a ShoppingList for the authenticated Customer or anonymous user. Returns a `200 OK` status if successful.

A [ResourceNotFound](ctp:api:type:ResourceNotFoundError) error is returned in the following scenarios:

- If no ShoppingList exists for the provided `key`.
- If a ShoppingList exists but does not contain either an `anonymousId` that matches the [anonymous_id:{id}](/scopes#composable-commerce-oauth) scope, or a `customer` with `id` value that matches the [customer:{id}](/scopes#composable-commerce-oauth) scope.


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

If used with an optional [access token for an anonymous session](ctp:api:type:AnonymousSession), all Orders and Carts that belong to the `anonymousId` are assigned to the newly created Customer.

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

Deprecated OAuth 2.0 Scope: `view_orders:{projectKey}`

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->messages()
                ->get();
```
## `withProjectKey("projectKey")->messages()->head()`

Checks if one or more Messages exist for the provided query predicate. Returns a `200 OK` status if any Messages match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->messages()
                ->head();
```
## `withProjectKey("projectKey")->messages()->withId("ID")->get()`

Deprecated OAuth 2.0 Scope: `view_orders:{projectKey}`

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
## `withProjectKey("projectKey")->messages()->withId("ID")->head()`

Checks if a Message exists with the provided `id`. Returns a `200 OK` status if the Message exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->messages()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->orders()->get()`

Retrieves Orders in the Project.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->orders()->head()`

Checks if one or more Orders exist for the provided query predicate. Returns a `200 OK` status if any Orders match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->head();
```
## `withProjectKey("projectKey")->orders()->post(null)`

Creates an Order from a Cart.

The Cart must have a shipping address and an active Shipping Method set.

The shipping address is used for tax calculation for a Cart with `Platform` [TaxMode](ctp:api:type:TaxMode).

Creating an Order produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

If a server-side problem occurs, indicated by a 500 Internal Server Error HTTP response, the Order creation may still successfully complete after the error is returned.
If you receive this error, you should verify the status of the Order by querying a unique identifier supplied during the creation request, such as the Order number.

Specific Error Codes:

- [OutOfStock](ctp:api:type:OutOfStockError)
- [PriceChanged](ctp:api:type:PriceChangedError)
- [DiscountCodeNonApplicable](ctp:api:type:DiscountCodeNonApplicableError)
- [ShippingMethodDoesNotMatchCart](ctp:api:type:ShippingMethodDoesNotMatchCartError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [InvalidOperation](ctp:api:type:InvalidOperationError)
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

Retrieves an Order with the provided `id`.

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
## `withProjectKey("projectKey")->orders()->withId("ID")->head()`

Checks if an Order exists with the provided `id`. Returns a `200 OK` status if the Order exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->orders()->withId("ID")->post(null)`

Updates an Order in the Project using one or more [update actions](/../api/projects/orders#update-actions).

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

Deletes an Order in the Project.
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

Retrieves OrderEdits in the Project.

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
## `withProjectKey("projectKey")->orders()->edits()->head()`

Checks if one or more OrderEdits exist for the provided query predicate. Returns a `200 OK` status if any OrderEdits match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->head();
```
## `withProjectKey("projectKey")->orders()->edits()->post(null)`

Creates an OrderEdit in the Project.
You can either create multiple Order Edits for an Order and apply them sequentially to an Order, or create multiple Order Edits parallelly (as alternatives to each other) and apply one of them to the Order.

You can only create an Order Edit if the [InventoryMode](/projects/carts#inventorymode) of the Order and its [LineItems](/projects/carts#lineitem) is `None`.


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

Retrieves an OrderEdit with the provided `id`.

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
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->head()`

Checks if an OrderEdit exists with the provided `id`. Returns a `200 OK` status if the OrderEdit exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->post(null)`

Updates an OrderEdit in the Project using one or more [update actions](/../api/projects/order-edits#update-actions).

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

Deletes an OrderEdit in the Project.

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

Retrieves an OrderEdit with the provided `key`.

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
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->head()`

Checks if an OrderEdit exists with the provided `key`. Returns a `200 OK` status if the OrderEdit exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->post(null)`

Updates an OrderEdit in the Project using one or more [update actions](/../api/projects/order-edits#update-actions).

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

Deletes an OrderEdit in the Project.

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

Creates an Order without needing to create a Cart first.
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

Retrieves an Order with the provided `orderNumber`.

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
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->head()`

Checks if an Order exists with the provided `orderNumber`. Returns a `200 OK` status if the Order exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->head();
```
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->post(null)`

Updates an Order in the Project using one or more [update actions](/../api/projects/orders#update-actions).

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

Deletes an Order in the Project.
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


Creates an Order from a Quote. The referenced Quote must have the `Pending` [state](ctp:api:type:QuoteState) and must be valid (not past the `validTo` date); otherwise, an [InvalidOperation](ctp:api:type:InvalidOperationError) error is returned.

Produces the [OrderCreated](ctp:api:type:OrderCreatedMessage) Message.

Specific Error Codes:

- [CountryNotConfiguredInStore](ctp:api:type:CountryNotConfiguredInStoreError)
- [InvalidItemShippingDetails](ctp:api:type:InvalidItemShippingDetailsError)
- [InvalidOperation](ctp:api:type:InvalidOperationError)
- [OutOfStock](ctp:api:type:OutOfStockError)


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
Returns a `200 OK` status if the index exists or a `404 Not Found` error otherwise.


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

Retrieves Payments in the Project.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->get();
```
## `withProjectKey("projectKey")->payments()->head()`

Checks if one or more Payments exist for the provided query predicate. Returns a `200 OK` status if any Payments match the query predicate, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->head();
```
## `withProjectKey("projectKey")->payments()->post(null)`

Creates a Payment in the Project.
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

Retrieves a Payment with the provided `id`.

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
## `withProjectKey("projectKey")->payments()->withId("ID")->head()`

Checks if a Payment exists with the provided `id`. Returns a `200 OK` status if the Payment exists, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->payments()->withId("ID")->post(null)`

Updates a Payment in the Project using one or more [update actions](/../api/projects/payments#update-actions).

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

Deletes a Payment in the Project.

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

Retrieves a Payment with the provided `key`.

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
## `withProjectKey("projectKey")->payments()->withKey("key")->head()`

Checks if a Payment exists with the provided `key`. Returns a `200 OK` status if the Payment exists, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->payments()->withKey("key")->post(null)`

Updates a Payment in the Project using one or more [update actions](/../api/projects/payments#update-actions).

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

Deletes a Payment in the Project.

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
## `withProjectKey("projectKey")->productDiscounts()->head()`

Checks if one or more ProductDiscounts exist for the provided query predicate. Returns a `200 OK` status if any ProductDiscounts match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->head();
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
## `withProjectKey("projectKey")->productDiscounts()->withId("ID")->head()`

Checks if a ProductDiscount exists with the provided `id`. Returns a `200 OK` status if the ProductDiscount exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->productDiscounts()->withKey("key")->head()`

Checks if a ProductDiscount exists with the provided `key`. Returns a `200 OK` status if the ProductDiscount exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->productProjections()->head()`

Checks if the current or staged representation of a Product exists for the provided query predicate. Returns a `200 OK` status if any ProductProjections match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->head();
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
## `withProjectKey("projectKey")->productProjections()->withId("ID")->head()`

Checks if the current or staged representation of a Product exists with the provided `id`. Returns a `200 OK` status if the ProductProjection exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->productProjections()->withKey("key")->head()`

Checks if the current or staged representation of a Product exists with the provided `key`. Returns a `200 OK` status if the ProductProjection exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->productProjections()->search()->post(null)`

For implementing funnel search on Product Listing Pages where users select multiple filters, use this POST method.
To avoid URL length restrictions, this method passes the same query parameters as defined in the [GET](ctp:api:endpoint:/{projectKey}/product-projections/search:GET) method, within the request body in URL-encoded format.


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

This method appends query parameters to the URL.
The maximum allowed URL length is 8192 characters.
Exceeding this limit will result in URL truncation, potentially leading to unexpected results.
For funnel searches on Product Listing Pages, where users select multiple filters, we recommend the [POST](ctp:api:endpoint:/{projectKey}/product-projections/search:POST) method which passes the query parameters within the request body, avoiding URL length restrictions.


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
## `withProjectKey("projectKey")->productSelections()->head()`

Checks if one or more ProductSelections exist for the provided query predicate. Returns a `200 OK` status if any ProductSelections match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->head();
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
## `withProjectKey("projectKey")->productSelections()->withId("ID")->head()`

Checks if a ProductSelection exists with the provided `id`. Returns a `200 OK` status if the ProductSelection exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withId("ID")
                ->head();
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

Deletion will only succeed if the Product Selection is not assigned to any [Store](ctp:api:type:Store).

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
## `withProjectKey("projectKey")->productSelections()->withKey("key")->head()`

Checks if a ProductSelection exists with the provided `key`. Returns a `200 OK` status if the ProductSelection exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productSelections()
                ->withKey("key")
                ->head();
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

Deletion will only succeed if the Product Selection is not assigned to any [Store](ctp:api:type:Store).

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
## `withProjectKey("projectKey")->productTailoring()->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->get();
```
## `withProjectKey("projectKey")->productTailoring()->head()`

Checks if one or more ProductTailorings exist for the provided query predicate. Returns a `200 OK` status if any ProductTailoring match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->head();
```
## `withProjectKey("projectKey")->productTailoring()->post(null)`

Generates the [ProductTailoringCreated](ctp:api:type:ProductTailoringCreatedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->post(null);
```
## `withProjectKey("projectKey")->productTailoring()->withId("ID")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productTailoring()->withId("ID")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->productTailoring()->withId("ID")->delete()`

Generates the [ProductTailoringDeleted](ctp:api:type:ProductTailoringDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->productTailoring()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productTailoring()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->productTailoring()->withKey("key")->delete()`

Generates the [ProductTailoringDeleted](ctp:api:type:ProductTailoringDeletedMessage) Message.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTailoring()
                ->withKey("key")
                ->delete();
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

Checks if one or more ProductTypes exist for the provided query predicate. Returns a `200 OK` status if any ProductTypes match the query predicate, or a `404 Not Found` otherwise.

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

Checks if a ProductType exists with the provided `id`. Returns a `200 OK` status if the ProductType exists or a `404 Not Found` otherwise.

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

Checks if a ProductType exists with the provided `key`. Returns a `200 OK` status if the ProductType exists or a `404 Not Found` otherwise.

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

If [Product price selection query parameters](/../api/pricing-and-discounts-overview#product-price-selection) are provided, the selected Prices are added to the response.

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

Checks if one or more Products exist for the provided query predicate. Returns a `200 OK` status if any Products match the query predicate, or a `404 Not Found` otherwise.

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

To create a new Product, send a representation that is going to become the initial _staged_ and _current_ representation of the new Product in the catalog.
If [Product price selection query parameters](/../api/pricing-and-discounts-overview#product-price-selection) are provided, selected Prices will be added to the response.
Produces the [ProductCreated](/projects/messages/product-catalog-messages#product-created) Message.


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

If [Product price selection query parameters](/../api/pricing-and-discounts-overview#product-price-selection) are provided, the selected Prices are added to the response.

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

Checks if a Product exists with the provided `id`. Returns a `200 OK` status if the Product exists or a `404 Not Found` otherwise.

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

If [Product price selection query parameters](/../api/pricing-and-discounts-overview#product-price-selection) are provided, the selected Prices are added to the response.

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

If [Product price selection query parameters](/../api/pricing-and-discounts-overview#product-price-selection) are provided, the selected Prices are added to the response.
Produces the [ProductDeleted](/projects/messages/product-catalog-messages#product-deleted) Message.

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

Uploads a JPEG, PNG, or a GIF image file to a [ProductVariant](ctp:api:type:ProductVariant).
The maximum file size of the image is **10MB**.
Either `variant` or `sku` is required to update a specific ProductVariant.
If neither is provided, the image is uploaded to the Master Variant of the Product.

The response status code depends on the size of the original image.
If the image is small, the API responds with `200 OK`, and if the image is larger, it responds with `202 Accepted`.
The Product returned with a `202 Accepted` status code contains a `warnings` field with an [ImageProcessingOngoing](ctp:api:type:ImageProcessingOngoingWarning) Warning.

Produces the [ProductImageAdded](/projects/messages/product-catalog-messages#product-image-added) Message.


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

If [Product price selection query parameters](/../api/pricing-and-discounts-overview#product-price-selection) are provided, the selected Prices are added to the response.

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

Checks if a Product exists with the provided `key`. Returns a `200 OK` status if the Product exists or a `404 Not Found` otherwise.

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

If [Product price selection query parameters](/../api/pricing-and-discounts-overview#product-price-selection) are provided, the selected Prices are added to the response.
Produces the [ProductDeleted](/projects/messages/product-catalog-messages#product-deleted) Message.

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
## `withProjectKey("projectKey")->products()->search()->post(null)`

If indexing is in progress or if Product Search is inactive, an [ObjectNotFound](ctp:api:type:ObjectNotFoundError) error is returned.
If inactive, you can [reactivate](/../api/projects/product-search#activate-the-product-search-api) it.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->search()
                ->post(null);
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
## `withProjectKey("projectKey")->quoteRequests()->head()`

Checks if one or more QuoteRequests exist for the provided query predicate. Returns a `200 OK` status if any QuoteRequests match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->head();
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
## `withProjectKey("projectKey")->quoteRequests()->withId("ID")->head()`

Checks if a QuoteRequest exists with the provided `id`. Returns a `200 OK` status if the QuoteRequest exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->quoteRequests()->withKey("key")->head()`

Checks if a QuoteRequest exists with the provided `key`. Returns a `200 OK` status if the QuoteRequest exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quoteRequests()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->quotes()->head()`

Checks if one or more Quotes exist for the provided query predicate. Returns a `200 OK` status if any Quotes match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->head();
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
## `withProjectKey("projectKey")->quotes()->withId("ID")->head()`

Checks if a Quote exists with the provided `id`. Returns a `200 OK` status if the Quote exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->quotes()->withKey("key")->head()`

Checks if a Quote exists with the provided `key`. Returns a `200 OK` status if the Quote exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->quotes()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->reviews()->head()`

Checks if one or more Reviews exist for the provided query predicate. Returns a `200 OK` status if any Reviews match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->head();
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
## `withProjectKey("projectKey")->reviews()->withId("ID")->head()`

Checks if a Review exists with the provided `id`. Returns a `200 OK` status if the Review exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->reviews()->withKey("key")->head()`

Checks if a Review exists with the provided `key`. Returns a `200 OK` status if the Review exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->shippingMethods()->head()`

Checks if one or more ShippingMethods exist for the provided query predicate. Returns a `200 OK` status if any ShippingMethods match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->head();
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
## `withProjectKey("projectKey")->shippingMethods()->withId("ID")->head()`

Checks if a ShippingMethod exists with the provided `id`. Returns a `200 OK` status if the ShippingMethod exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->shippingMethods()->withKey("key")->head()`

Checks if a ShippingMethod exists with the provided `key`. Returns a `200 OK` status if the ShippingMethod exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withKey("key")
                ->head();
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

Retrieves the active ShippingMethods that can ship to the shipping address of the given Cart.
Each ShippingMethod contains exactly one ShippingRate with the flag `isMatching` set to `true`.
This ShippingRate is used when the ShippingMethod is [added to the Cart](ctp:api:type:CartSetShippingMethodAction).
If a matching ShippingMethod has `isDefault` set to `true`, it is returned as the first item in the array.


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
## `withProjectKey("projectKey")->shippingMethods()->matchingCart()->head()`

Checks if an active ShippingMethod exists for the given Cart. If a matching ShippingMethod has `isDefault` set to `true`, it is returned as the first item in the array. Returns a `200 OK` status if the ShippingMethod exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingCart()
                ->head();
```
## `withProjectKey("projectKey")->shippingMethods()->matchingCartLocation()->get()`

Retrieves the active ShippingMethods that can ship to the given [Location](ctp:api:type:Location)
with a `predicate` that matches the given Cart.
Each ShippingMethod contains exactly one ShippingRate with the flag `isMatching` set to `true`.
This ShippingRate is used when the ShippingMethod is [added to the Cart](ctp:api:type:CartSetShippingMethodAction).
If a matching ShippingMethod has `isDefault` set to `true`, it is returned as the first item in the array.


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
## `withProjectKey("projectKey")->shippingMethods()->matchingCartLocation()->head()`

Checks if an active ShippingMethod that can ship to the given [Location](ctp:api:type:Location) exists for the given Cart. Returns a `200 OK` status if the ShippingMethod exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingCartLocation()
                ->head();
```
## `withProjectKey("projectKey")->shippingMethods()->matchingLocation()->get()`

Retrieves the active ShippingMethods that can ship to the given [Location](/projects/zones#location).
ShippingMethods that have a `predicate` defined are automatically disqualified.
If the `currency` parameter is given, then the ShippingMethods must also have a rate defined in the specified currency.
Each ShippingMethod contains at least one ShippingRate with the flag `isMatching` set to `true`.
If the `currency` parameter is given, exactly one ShippingRate will contain it.
If a matching ShippingMethod has `isDefault` set to `true`, it is returned as the first item in the array.


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
## `withProjectKey("projectKey")->shippingMethods()->matchingLocation()->head()`

Checks if an active ShippingMethod that can ship to the given [Location](ctp:api:type:Location) exists. Returns a `200 OK` status if the ShippingMethod exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingLocation()
                ->head();
```
## `withProjectKey("projectKey")->shippingMethods()->matchingOrderedit()->get()`

Retrieves the active ShippingMethods that can ship to the given [Location](ctp:api:type:Location) for an [OrderEdit](ctp:api:type:OrderEdit).
If a matching ShippingMethod has `isDefault` set to `true`, it is returned as the first item in the array.
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
## `withProjectKey("projectKey")->shippingMethods()->matchingOrderedit()->head()`

Checks if an active ShippingMethod that can ship to the given [Location](ctp:api:type:Location) exists for the given [OrderEdit](ctp:api:type:OrderEdit). Returns a `200 OK` status if the ShippingMethod exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->matchingOrderedit()
                ->head();
```
## `withProjectKey("projectKey")->shoppingLists()->get()`

Retrieves ShoppingLists in the Project.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->head()`

Checks if one or more ShoppingLists exist for the provided query predicate. Returns a `200 OK` status if any ShoppingLists match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->head();
```
## `withProjectKey("projectKey")->shoppingLists()->post(null)`

Create a ShoppingList in the Project.

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

Retrieves a ShoppingList with the provided `id`.

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
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->head()`

Checks if a ShoppingList exists with the provided `id`. Returns a `200 OK` status if the ShoppingList exists, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withId("ID")
                ->head();
```
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->post(null)`

Updates a ShoppingList in the Project using one or more [update actions](/../api/projects/shoppingLists#update-actions).

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

Deletes a ShoppingList in the Project.

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

Retrieves a ShoppingList with the provided `key`.

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
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->head()`

Checks if a ShoppingList exists with the provided `key`. Returns a `200 OK` status if the ShoppingList exists, or [Not Found](/../api/errors#404-not-found) otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withKey("key")
                ->head();
```
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->post(null)`

Updates a ShoppingList in the Project using one or more [update actions](/../api/projects/shoppingLists#update-actions).

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

Deletes a ShoppingList in the Project.

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
## `withProjectKey("projectKey")->stagedQuotes()->head()`

Checks if one or more StagedQuotes exist for the provided query predicate. Returns a `200 OK` status if any StagedQuotes match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->head();
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
## `withProjectKey("projectKey")->stagedQuotes()->withId("ID")->head()`

Checks if a StagedQuote exists with the provided `id`. Returns a `200 OK` status if the StagedQuote exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->stagedQuotes()->withKey("key")->head()`

Checks if a StagedQuote exists with the provided `key`. Returns a `200 OK` status if the StagedQuote exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stagedQuotes()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->standalonePrices()->head()`

Checks if one or more StandalonePrices exist for the provided query predicate. Returns a `200 OK` status if any StandalonePrices match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->head();
```
## `withProjectKey("projectKey")->standalonePrices()->post(null)`

Creating a Standalone Price produces the [StandalonePriceCreated](ctp:api:type:StandalonePriceCreatedMessage) Message.

- If the Standalone Price has the same price scope as an existing Standalone Price, a [DuplicateStandalonePriceScope](ctp:api:type:DuplicateStandalonePriceScopeError) error is returned.
- If the Standalone Price has overlapping validity periods within the same price scope, a [OverlappingStandalonePriceValidity](ctp:api:type:OverlappingStandalonePriceValidityError) error is returned. A Price without validity period does not conflict with a Price defined for a time period.


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
## `withProjectKey("projectKey")->standalonePrices()->withId("ID")->head()`

Checks if a StandalonePrice exists with the provided `id`. Returns a `200 OK` status if the StandalonePrice exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->standalonePrices()->withKey("key")->head()`

Checks if a StandalonePrice exists with the provided `key`. Returns a `200 OK` status if the StandalonePrice exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->standalonePrices()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->states()->head()`

Checks if one or more States exist for the provided query predicate. Returns a `200 OK` status if any States match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->head();
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
## `withProjectKey("projectKey")->states()->withId("ID")->head()`

Checks if a State exists with the provided `id`. Returns a `200 OK` status if the State exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->states()->withKey("key")->head()`

Checks if a State exists with the provided `key`. Returns a `200 OK` status if the State exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->stores()->head()`

Checks if one or more Stores exist for the provided query predicate. Returns a `200 OK` status if any Stores match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->head();
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
## `withProjectKey("projectKey")->stores()->withId("ID")->head()`

Checks if a Store exists with the provided `id`. Returns a `200 OK` status if the Store exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->stores()->withKey("key")->head()`

Checks if a Store exists with the provided `key`. Returns a `200 OK` status if the Store exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->subscriptions()->head()`

Checks if one or more Subscriptions exist for the provided query predicate. Returns a `200 OK` status if any Subscriptions match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->head();
```
## `withProjectKey("projectKey")->subscriptions()->post(null)`

A test notification is sent to ensure the correct configuration of the Destination. If the notification cannot be delivered, the Subscription will not be created. The payload of the test notification is of type [ResourceCreated](/../api/projects/subscriptions#resourcecreateddeliverypayload) for the `resourceTypeId` `subscription`.


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
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->head()`

Checks if a Subscription exists with the provided `id`. Returns a `200 OK` status if the Subscription exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->head()`

Checks if a Subscription exists with the provided `key`. Returns a `200 OK` status if the Subscription exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->taxCategories()->head()`

Checks if one or more Tax Categories exist for the provided query predicate. Returns a `200 OK` status if any TaxCategories match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->head();
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
## `withProjectKey("projectKey")->taxCategories()->withId("ID")->head()`

Checks if a TaxCategory exists with the provided `id`. Returns a `200 OK` status if the TaxCategory exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->taxCategories()->withKey("key")->head()`

Checks if a TaxCategory exists with the provided `key`. Returns a `200 OK` status if the Tax Category exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->types()->head()`

Checks if one or more Types exist for the provided query predicate. Returns a `200 OK` status if any Types match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->head();
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
## `withProjectKey("projectKey")->types()->withId("ID")->head()`

Checks if a Type exists with the provided `id`. Returns a `200 OK` status if the Type exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->types()->withKey("key")->head()`

Checks if a Type exists with the provided `key`. Returns a `200 OK` status if the Type exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withKey("key")
                ->head();
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
## `withProjectKey("projectKey")->zones()->head()`

Checks if one or more Zones exist for the provided query predicate. Returns a `200 OK` status if any Zones match the query predicate, or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->head();
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
## `withProjectKey("projectKey")->zones()->withId("ID")->head()`

Checks if a Zone exists with the provided `id`. Returns a `200 OK` status if the Zone exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withId("ID")
                ->head();
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
## `withProjectKey("projectKey")->zones()->withKey("key")->head()`

Checks if a Zone exists with the provided `key`. Returns a `200 OK` status if the Zone exists or a `404 Not Found` otherwise.

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withKey("key")
                ->head();
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
