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

Creating a cart can fail with an InvalidOperation if the referenced shipping method in the
CartDraft has a predicate which does not match the cart.


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

The cart may not contain up-to-date prices, discounts etc.
If you want to ensure they're up-to-date, send an Update request with the Recalculate update action instead.


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

Retrieves the active cart of the customer that has been modified most recently.
It does not consider carts with CartOrigin Merchant. If no active cart exists, a 404 Not Found error is returned.

The cart may not contain up-to-date prices, discounts etc. If you want to ensure they're up-to-date,
send an Update request with the Recalculate update action instead.


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

The cart may not contain up-to-date prices, discounts etc.
If you want to ensure they're up-to-date, send an Update request with the Recalculate update action instead.


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

null

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

null

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

Creating a category produces the CategoryCreated message.

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

null

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

null

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

null

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

null

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

null

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

null

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

The query endpoint allows to retrieve custom objects in a specific container or all custom objects.
For performance reasons, it is highly advisable to query only for custom objects in a container by using
the container field in the where predicate.


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

Creates a new custom object or updates an existing custom object.
If an object with the given container/key exists,
the object will be replaced with the new value and the version is incremented.
If the request contains a version and an object with the given container/key exists then the version
must match the version of the existing object. Concurrent updates for the same custom object still can result
in a Conflict (409) even if the version is not provided.
Fields with null values will not be saved.


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

Get CustomObject by container and key

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

Delete CustomObject by container and key

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

Creates a customer. If an anonymous cart is passed in,
then the cart is assigned to the created customer and the version number of the Cart will increase.
If the ID of an anonymous session is given, all carts and orders will be assigned to the created customer.


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

null

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

Verifies customer's email using a token.

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

Create a Token for verifying the Customer's Email

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

null

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

Change a customers password

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

Set a new password using a token.

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

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


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

null

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

null

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

null

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

null

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

null

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

Currently, a maximum of 25 extensions can be created per project.

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

Retrieves the representation of an extension by its id.

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

Retrieves the representation of an extension by its key.

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->get()`

Queries carts in a specific Store.

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

Creates a cart in the store specified by {storeKey}.
When using this endpoint the cart's store field is always set to the store specified in the path parameter.
Creating a cart can fail with an InvalidOperation if the referenced shipping method
in the CartDraft has a predicate which does not match the cart.


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

Returns a cart by its ID from a specific Store.
If the cart exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.
The cart may not contain up-to-date prices, discounts etc.
If you want to ensure they're up-to-date, send an Update request with the Recalculate update action instead.


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

Updates a cart in the store specified by {storeKey}.
If the cart exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.


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

null

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

Retrieves the active cart of the customer that has been modified most recently in a specific Store.

If the cart exists in the commercetools project but does not have the store field, or the store field
references a different store, this method returns a ResourceNotFound error.

The cart may not contain up-to-date prices, discounts etc. If you want to ensure they're up-to-date,
send an Update request with the Recalculate update action instead.


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

Returns a cart by its key from a specific Store.
If the cart exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.
The cart may not contain up-to-date prices, discounts etc.
If you want to ensure they're up-to-date, send an Update request with the Recalculate update action instead.


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

Updates a cart in the store specified by {storeKey}.
If the cart exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.


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

null

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

null

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

Creates a customer in a specific Store.
When using this endpoint, if omitted,
the customer's stores field is set to the store specified in the path parameter.
If an anonymous cart is passed in as when using this method,
then the cart is assigned to the created customer and the version number of the Cart increases.
If the ID of an anonymous session is given, all carts and orders will be assigned to the created customer and
the store specified. If you pass in a cart with a store field specified,
the store field must reference the same store specified in the {storeKey} path parameter.


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

Returns a customer by its ID from a specific Store.
It also considers customers that do not have the stores field.
If the customer exists in the commercetools project but the stores field references different stores,
this method returns a ResourceNotFound error.


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

Updates a customer in the store specified by {storeKey}.
If the customer exists in the commercetools project but the stores field references a different store,
this method returns a ResourceNotFound error.


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

null

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

Verifies customer's email using a token.

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

Create a Token for verifying the Customer's Email in store

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

null

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

Returns a customer by its Key from a specific Store.
It also considers customers that do not have the stores field.
If the customer exists in the commercetools project but the stores field references different stores,
this method returns a ResourceNotFound error.


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

If the customer exists in the commercetools project but the stores field references a different store,
this method returns a ResourceNotFound error.


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

null

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

Change a customers password

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

Set a new password using a token.

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

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


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

null

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

Authenticate Customer (Sign In) in store

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->activeCart()->get()`

null

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
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->withId("ID")->get()`

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
                ->withId("ID")
                ->get();
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
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withId("ID")->get()`

Gets a shopping list by ID.

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
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withId("ID")->delete()`

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
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->shoppingLists()->withKey("key")->get()`

Gets a shopping list by Key.

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

Update a shopping list found by its Key.

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
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->get()`

Queries orders in a specific Store.

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

Creates an order from a Cart from a specific Store.
When using this endpoint the orders's store field is always set to the store specified in the path parameter.
The cart must have a shipping address set before creating an order. When using the Platform TaxMode,
the shipping address is used for tax calculation.


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

Returns an order by its ID from a specific Store.
If the order exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.


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

Updates an order in the store specified by {storeKey}.
If the order exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.


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

null

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

Returns an order by its order number from a specific Store.

If the order exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.
In case the orderNumber does not match the regular expression [a-zA-Z0-9_-]+,
it should be provided in URL-encoded format.


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

Updates an order in the store specified by {storeKey}.
If the order exists in the commercetools project but does not have the store field,
or the store field references a different store, this method returns a ResourceNotFound error.
In case the orderNumber does not match the regular expression [a-zA-Z0-9_-]+,
it should be provided in URL-encoded format.


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

null

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
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->get()`

You can use the product projections query endpoint to get the current or staged representations of Products.
When used with an API client that has the view_published_products:{projectKey} scope,
this endpoint only returns published (current) product projections.


### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->productProjections()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->productProjections()->withId("ID")->get()`

Gets the current or staged representation of a product by its ID from a specific Store.

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

Gets the current or staged representation of a product by its ID from a specific Store.

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

Queries Product Selection assignments in a specific Store.

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

null

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

null

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

Gets a shopping list by ID.

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

null

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

null

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

Gets a shopping list by Key.

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

Update a shopping list found by its Key.

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

null

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

null

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

null

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

null

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

Authenticate Customer (Sign In). Retrieves the authenticated
customer (a customer that matches the given email/password pair).
If used with an access token for Anonymous Sessions,
all orders and carts belonging to the anonymousId will be assigned to the newly created customer.
If a cart is is returned as part of the CustomerSignInResult,
it has been recalculated (It will have up-to-date prices, taxes and discounts,
and invalid line items have been removed.).


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

Update my customer

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

Delete my Customer

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

null

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
## `withProjectKey("projectKey")->me()->emailConfirm()->post()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->emailConfirm()
                ->post();
```
## `withProjectKey("projectKey")->me()->login()->post(null)`

null

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

null

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
## `withProjectKey("projectKey")->me()->password()->post(null)`

null

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

null

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

null

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
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->delete()`

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
                ->delete();
```
## `withProjectKey("projectKey")->me()->payments()->withKey("key")->get()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->me()->payments()->withKey("key")->post(null)`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->withKey("key")->delete()`

null

### Example
```php
use Commercetools\Api\Client\ApiRequestBuilder;

$builder =  new ApiRequestBuilder();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withKey("key")
                ->delete();
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

null

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

null

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

null

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

Creates an order from a Cart.
The cart must have a shipping address set before creating an order.
When using the Platform TaxMode, the shipping address is used for tax calculation.


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

null

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

null

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

Create an Order by Import

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

In case the orderNumber does not match the regular expression [a-zA-Z0-9_-]+,
it should be provided in URL-encoded format.


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

null

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

To create a payment object a payment draft object has to be given with the request.

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

null

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

You can use the product projections query endpoint to get the current or staged representations of Products.
When used with an API client that has the view_published_products:{projectKey} scope,
this endpoint only returns published (current) product projections.


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

Gets the current or staged representation of a product in a catalog by ID.
When used with an API client that has the view_published_products:{projectKey} scope,
this endpoint only returns published (current) product projections.


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

Gets the current or staged representation of a product found by Key.
When used with an API client that has the view_published_products:{projectKey} scope,
this endpoint only returns published (current) product projections.


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

Search Product Projection

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

Search Product Projection

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

You can use the query endpoint to get the full representations of products.
REMARK: We suggest to use the performance optimized search endpoint which has a bunch functionalities,
the query API lacks like sorting on custom attributes, etc.


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

Checks if products exist.

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

To create a new product, send a representation that is going to become the initial staged representation
of the new product in the master catalog. If price selection query parameters are provided,
the selected prices will be added to the response.


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

Gets the full representation of a product by ID.

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

Checks if product with given ID exists.

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

null

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

null

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

Uploads a binary image file to a given product variant. The supported image formats are JPEG, PNG and GIF.


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

Gets the full representation of a product by Key.

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

Checks if product with given key exists.

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

null

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

null

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

null

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
## `withProjectKey("projectKey")->shippingMethods()->matchingLocation()->get()`

null

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

null

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

Gets a shopping list by ID.

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

Gets a shopping list by Key.

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

Update a shopping list found by its Key.

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

The creation of a Subscription is eventually consistent, it may take up to a minute before it becomes fully active.
In order to test that the destination is correctly configured, a test message will be put into the queue.
If the message could not be delivered, the subscription will not be created.
The payload of the test message is a notification of type ResourceCreated for the resourceTypeId subscription.
Currently, a maximum of 25 subscriptions can be created per project.


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

Retrieves the representation of a subscription by its id.

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
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->get()`

Retrieves the representation of a subscription by its key.

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
