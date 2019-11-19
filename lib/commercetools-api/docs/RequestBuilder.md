# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use CommercetoolsApiClientClientApiRoot;

$root = new ApiRoot();
```

## `withProjectKey("projectKey")->get()`

The Endpoint is responding a limited set of information about settings and configuration of the project.


### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->get();
```
## `withProjectKey("projectKey")->post(null)`

Update project

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->post(null);
```
## `withProjectKey("projectKey")->apiClients()->get()`

Query api-clients

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->get();
```
## `withProjectKey("projectKey")->apiClients()->post(null)`

Create ApiClient

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->post(null);
```
## `withProjectKey("projectKey")->apiClients()->withId("ID")->get()`

Get ApiClient by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->apiClients()->withId("ID")->delete()`

Delete ApiClient by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->apiClients()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->cartDiscounts()->get()`

Query cart-discounts

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->get();
```
## `withProjectKey("projectKey")->cartDiscounts()->post(null)`

Create CartDiscount

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->post(null);
```
## `withProjectKey("projectKey")->cartDiscounts()->withId("ID")->get()`

Get CartDiscount by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->cartDiscounts()->withId("ID")->post(null)`

Update CartDiscount by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->cartDiscounts()->withId("ID")->delete()`

Delete CartDiscount by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->cartDiscounts()->withKey("key")->get()`

Get CartDiscount by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->cartDiscounts()->withKey("key")->post(null)`

Update CartDiscount by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->cartDiscounts()->withKey("key")->delete()`

Delete CartDiscount by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->cartDiscounts()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->carts()->get()`

Query carts

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->carts()->post(null)`

Create Cart

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->carts()->withId("ID")->get()`

Get Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->carts()->withId("ID")->post(null)`

Update Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->carts()->withId("ID")->delete()`

Delete Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->carts()->replicate()->post(null)`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->carts()
                ->replicate()
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->get()`

Query categories

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->get();
```
## `withProjectKey("projectKey")->categories()->post(null)`

Create Category

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->withId("ID")->get()`

Get Category by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->categories()->withId("ID")->post(null)`

Update Category by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->withId("ID")->delete()`

Delete Category by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->categories()->withKey("key")->get()`

Get Category by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->categories()->withKey("key")->post(null)`

Update Category by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->categories()->withKey("key")->delete()`

Delete Category by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->categories()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->channels()->get()`

Query channels

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->get();
```
## `withProjectKey("projectKey")->channels()->post(null)`

Create Channel

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->post(null);
```
## `withProjectKey("projectKey")->channels()->withId("ID")->get()`

Get Channel by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->channels()->withId("ID")->post(null)`

Update Channel by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->channels()->withId("ID")->delete()`

Delete Channel by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->channels()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->customObjects()->get()`

Query custom-objects

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->get();
```
## `withProjectKey("projectKey")->customObjects()->post(null)`

Create CustomObject

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->post(null);
```
## `withProjectKey("projectKey")->customObjects()->withContainerAndKey("container", "key")->get()`

Get CustomObject by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->withContainerAndKey("container", "key")
                ->get();
```
## `withProjectKey("projectKey")->customObjects()->withContainerAndKey("container", "key")->delete()`

Delete CustomObject by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->withContainerAndKey("container", "key")
                ->delete();
```
## `withProjectKey("projectKey")->customObjects()->withId("ID")->get()`

Get CustomObject by container

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->customObjects()->withId("ID")->delete()`

Delete CustomObject by container

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customObjects()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->customerGroups()->get()`

Query customer-groups

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->get();
```
## `withProjectKey("projectKey")->customerGroups()->post(null)`

Create CustomerGroup

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->post(null);
```
## `withProjectKey("projectKey")->customerGroups()->withId("ID")->get()`

Get CustomerGroup by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->customerGroups()->withId("ID")->post(null)`

Update CustomerGroup by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->customerGroups()->withId("ID")->delete()`

Delete CustomerGroup by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->customerGroups()->withKey("key")->get()`

Get CustomerGroup by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->customerGroups()->withKey("key")->post(null)`

Update CustomerGroup by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->customerGroups()->withKey("key")->delete()`

Delete CustomerGroup by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customerGroups()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->customers()->get()`

Query customers

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->get();
```
## `withProjectKey("projectKey")->customers()->post(null)`

Create Customer

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withId("ID")->get()`

Get Customer by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->customers()->withId("ID")->post(null)`

Update Customer by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withId("ID")->delete()`

Delete Customer by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->customers()->email()->confirm()->post(null)`

Verifies customer's email using a token.

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->email()
                ->confirm()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->emailToken()->post(null)`

Create a Token for verifying the Customer's Email

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->emailToken()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withEmailToken("emailToken")->get()`

Get Customer by emailToken

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withEmailToken("emailToken")
                ->get();
```
## `withProjectKey("projectKey")->customers()->withKey("key")->get()`

Get Customer by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->customers()->withKey("key")->post(null)`

Update Customer by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withKey("key")->delete()`

Delete Customer by key

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->password()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->password()->reset()->post(null)`

Set a new password using a token.

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->password()
                ->reset()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->passwordToken()->post(null)`

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->passwordToken()
                ->post(null);
```
## `withProjectKey("projectKey")->customers()->withPasswordToken("passwordToken")->get()`

Get Customer by passwordToken

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->customers()
                ->withPasswordToken("passwordToken")
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->get()`

Query discount-codes

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->post(null)`

Create DiscountCode

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->post(null);
```
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->get()`

Get DiscountCode by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->post(null)`

Update DiscountCode by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->discountCodes()->withId("ID")->delete()`

Delete DiscountCode by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->discountCodes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->extensions()->get()`

Query extensions

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->get();
```
## `withProjectKey("projectKey")->extensions()->post(null)`

Create Extension

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->post(null);
```
## `withProjectKey("projectKey")->extensions()->withId("ID")->get()`

Get Extension by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->extensions()->withId("ID")->post(null)`

Update Extension by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->extensions()->withId("ID")->delete()`

Delete Extension by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->extensions()->withKey("key")->get()`

Get Extension by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->extensions()->withKey("key")->post(null)`

Update Extension by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->extensions()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->extensions()->withKey("key")->delete()`

Delete Extension by key

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->graphql()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->get()`

Query carts

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->post(null)`

Create Cart

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->get()`

Get Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->post(null)`

Update Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->carts()->withId("ID")->delete()`

Delete Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->get()`

Query customers

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->post(null)`

Create Customer

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->get()`

Get Customer by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->post(null)`

Update Customer by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withId("ID")->delete()`

Delete Customer by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->email()->confirm()->post(null)`

Verifies customer's email using a token.

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->email()
                ->confirm()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->emailToken()->post(null)`

Create a Token for verifying the Customer's Email

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->emailToken()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withEmailToken("emailToken")->get()`

Get Customer by emailToken

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withEmailToken("emailToken")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->get()`

Get Customer by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->post(null)`

Update Customer by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withKey("key")->delete()`

Delete Customer by key

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->password()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->password()->reset()->post(null)`

Set a new password using a token.

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->password()
                ->reset()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->passwordToken()->post(null)`

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->passwordToken()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->customers()->withPasswordToken("passwordToken")->get()`

Get Customer by passwordToken

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->customers()
                ->withPasswordToken("passwordToken")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->login()->post(null)`

Authenticate Customer (Sign In)

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->activeCart()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->get()`

Query carts

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->post(null)`

Create Cart

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->get()`

Get Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->post(null)`

Update Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->carts()->withId("ID")->delete()`

Delete Cart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->get()`

Query orders

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->post(null)`

Create Order

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->me()->orders()->withId("ID")->get()`

Get Order by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->me()
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->get()`

Query orders

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->post(null)`

Create Order

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->get()`

Get Order by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->post(null)`

Update Order by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withId("ID")->delete()`

Delete Order by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->get()`

Get Order by orderNumber

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->get();
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->post(null)`

Update Order by orderNumber

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->post(null);
```
## `withProjectKey("projectKey")->inStoreKeyWithStoreKeyValue("storeKey")->orders()->withOrderNumber("orderNumber")->delete()`

Delete Order by orderNumber

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inStoreKeyWithStoreKeyValue("storeKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->delete();
```
## `withProjectKey("projectKey")->inventory()->get()`

Query inventory

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->get();
```
## `withProjectKey("projectKey")->inventory()->post(null)`

Create InventoryEntry

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->post(null);
```
## `withProjectKey("projectKey")->inventory()->withId("ID")->get()`

Get InventoryEntry by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->inventory()->withId("ID")->post(null)`

Update InventoryEntry by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->inventory()->withId("ID")->delete()`

Delete InventoryEntry by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->inventory()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->login()->post(null)`

Authenticate Customer (Sign In)

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->login()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->get()`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->get();
```
## `withProjectKey("projectKey")->me()->post(null)`

Create a customer

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->delete()`

Delete a Customer

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->delete();
```
## `withProjectKey("projectKey")->me()->activeCart()->get()`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->activeCart()
                ->get();
```
## `withProjectKey("projectKey")->me()->carts()->get()`

Query carts

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->get();
```
## `withProjectKey("projectKey")->me()->carts()->post(null)`

Create MyCart

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->get()`

Get MyCart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->post(null)`

Update MyCart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->carts()->withId("ID")->delete()`

Delete MyCart by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->carts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->email()->confirm()->post()`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->email()
                ->confirm()
                ->post();
```
## `withProjectKey("projectKey")->me()->login()->post(null)`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->login()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->orders()->get()`

Query orders

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->me()->orders()->post(null)`

Create MyOrder

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->orders()->withId("ID")->get()`

Get MyOrder by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->orders()->withId("ID")->post(null)`

Update MyOrder by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->orders()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->password()->post(null)`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->password()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->password()->reset()->post()`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->password()
                ->reset()
                ->post();
```
## `withProjectKey("projectKey")->me()->payment()->withIDValue("ID")->post(null)`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payment()
                ->withIDValue("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payment()->keyWithKeyValue("key")->post(null)`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payment()
                ->keyWithKeyValue("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->get()`

Query payments

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->get();
```
## `withProjectKey("projectKey")->me()->payments()->post(null)`

Create MyPayment

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->get()`

Get MyPayment by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->post(null)`

Update MyPayment by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->payments()->withId("ID")->delete()`

Delete MyPayment by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->payments()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->get()`

Query shopping-lists

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->post(null)`

Create MyShoppingList

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->post(null);
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->get()`

Get MyShoppingList by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->post(null)`

Update MyShoppingList by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->shoppingLists()->withId("ID")->delete()`

Delete MyShoppingList by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->me()->shoppingLists()->keyWithKeyValue("key")->post(null)`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->shoppingLists()
                ->keyWithKeyValue("key")
                ->post(null);
```
## `withProjectKey("projectKey")->me()->signup()->post(null)`

null

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->me()
                ->signup()
                ->post(null);
```
## `withProjectKey("projectKey")->messages()->get()`

Query messages

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->messages()
                ->get();
```
## `withProjectKey("projectKey")->messages()->withId("ID")->get()`

Get Message by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->messages()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->orders()->get()`

Query orders

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->get();
```
## `withProjectKey("projectKey")->orders()->post(null)`

Create Order

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withId("ID")->get()`

Get Order by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->orders()->withId("ID")->post(null)`

Update Order by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withId("ID")->delete()`

Delete Order by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->orders()->edits()->get()`

Query edits

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->get();
```
## `withProjectKey("projectKey")->orders()->edits()->post(null)`

Create OrderEdit

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->get()`

Get OrderEdit by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->post(null)`

Update OrderEdit by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withId("ID")->delete()`

Delete OrderEdit by ID

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withId("ID")
                ->apply()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->get()`

Get OrderEdit by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->post(null)`

Update OrderEdit by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->edits()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->edits()->withKey("key")->delete()`

Delete OrderEdit by key

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->importOrder()
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->get()`

Get Order by orderNumber

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->get();
```
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->post(null)`

Update Order by orderNumber

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->post(null);
```
## `withProjectKey("projectKey")->orders()->withOrderNumber("orderNumber")->delete()`

Delete Order by orderNumber

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->orders()
                ->withOrderNumber("orderNumber")
                ->delete();
```
## `withProjectKey("projectKey")->payments()->get()`

Query payments

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->get();
```
## `withProjectKey("projectKey")->payments()->post(null)`

Create Payment

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->post(null);
```
## `withProjectKey("projectKey")->payments()->withId("ID")->get()`

Get Payment by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->payments()->withId("ID")->post(null)`

Update Payment by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->payments()->withId("ID")->delete()`

Delete Payment by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->payments()->withKey("key")->get()`

Get Payment by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->payments()->withKey("key")->post(null)`

Update Payment by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->payments()->withKey("key")->delete()`

Delete Payment by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->payments()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->productDiscounts()->get()`

Query product-discounts

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->get();
```
## `withProjectKey("projectKey")->productDiscounts()->post(null)`

Create ProductDiscount

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->post(null);
```
## `withProjectKey("projectKey")->productDiscounts()->withId("ID")->get()`

Get ProductDiscount by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productDiscounts()->withId("ID")->post(null)`

Update ProductDiscount by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->productDiscounts()->withId("ID")->delete()`

Delete ProductDiscount by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->productDiscounts()->withKey("key")->get()`

Get ProductDiscount by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productDiscounts()->withKey("key")->post(null)`

Update ProductDiscount by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->productDiscounts()->withKey("key")->delete()`

Delete ProductDiscount by key

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productDiscounts()
                ->matching()
                ->post(null);
```
## `withProjectKey("projectKey")->productProjections()->get()`

Query product-projections

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->get();
```
## `withProjectKey("projectKey")->productProjections()->withId("ID")->get()`

Get ProductProjection by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productProjections()->withKey("key")->get()`

Get ProductProjection by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productProjections()->search()->post()`

Search Product Projection

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->search()
                ->post();
```
## `withProjectKey("projectKey")->productProjections()->search()->get()`

Search Product Projection

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productProjections()
                ->suggest()
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->get()`

Query product-types

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->post(null)`

Create ProductType

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->post(null);
```
## `withProjectKey("projectKey")->productTypes()->withId("ID")->get()`

Get ProductType by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->withId("ID")->post(null)`

Update ProductType by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->productTypes()->withId("ID")->delete()`

Delete ProductType by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->productTypes()->withKey("key")->get()`

Get ProductType by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->productTypes()->withKey("key")->post(null)`

Update ProductType by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->productTypes()->withKey("key")->delete()`

Delete ProductType by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->productTypes()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->products()->get()`

Query products

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->get();
```
## `withProjectKey("projectKey")->products()->post(null)`

Create Product

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withId("ID")->get()`

Get Product by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->products()->withId("ID")->post(null)`

Update Product by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withId("ID")->delete()`

Delete Product by ID

### Example
```php
$builder =  new ApiRoot();
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
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withId("ID")
                ->images()
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withKey("key")->get()`

Get Product by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->products()->withKey("key")->post(null)`

Update Product by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->products()->withKey("key")->delete()`

Delete Product by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->products()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->reviews()->get()`

Query reviews

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->get();
```
## `withProjectKey("projectKey")->reviews()->post(null)`

Create Review

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->post(null);
```
## `withProjectKey("projectKey")->reviews()->withId("ID")->get()`

Get Review by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->reviews()->withId("ID")->post(null)`

Update Review by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->reviews()->withId("ID")->delete()`

Delete Review by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->reviews()->withKey("key")->get()`

Get Review by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->reviews()->withKey("key")->post(null)`

Update Review by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->reviews()->withKey("key")->delete()`

Delete Review by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->reviews()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->shippingMethods()->get()`

Query shipping-methods

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->post(null)`

Create ShippingMethod

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->post(null);
```
## `withProjectKey("projectKey")->shippingMethods()->withId("ID")->get()`

Get ShippingMethod by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->withId("ID")->post(null)`

Update ShippingMethod by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->shippingMethods()->withId("ID")->delete()`

Delete ShippingMethod by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->shippingMethods()->withKey("key")->get()`

Get ShippingMethod by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->shippingMethods()->withKey("key")->post(null)`

Update ShippingMethod by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->shippingMethods()->withKey("key")->delete()`

Delete ShippingMethod by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shippingMethods()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->shoppingLists()->get()`

Query shopping-lists

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->post(null)`

Create ShoppingList

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->post(null);
```
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->get()`

Get ShoppingList by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->post(null)`

Update ShoppingList by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->shoppingLists()->withId("ID")->delete()`

Delete ShoppingList by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->get()`

Get ShoppingList by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->post(null)`

Update ShoppingList by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->shoppingLists()->withKey("key")->delete()`

Delete ShoppingList by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->shoppingLists()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->states()->get()`

Query states

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->get();
```
## `withProjectKey("projectKey")->states()->post(null)`

Create State

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->post(null);
```
## `withProjectKey("projectKey")->states()->withId("ID")->get()`

Get State by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->states()->withId("ID")->post(null)`

Update State by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->states()->withId("ID")->delete()`

Delete State by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->states()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->stores()->get()`

Query stores

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->get();
```
## `withProjectKey("projectKey")->stores()->post(null)`

Create Store

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->post(null);
```
## `withProjectKey("projectKey")->stores()->withId("ID")->get()`

Get Store by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->stores()->withId("ID")->post(null)`

Update Store by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->stores()->withId("ID")->delete()`

Delete Store by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->stores()->withKey("key")->get()`

Get Store by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->stores()->withKey("key")->post(null)`

Update Store by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->stores()->withKey("key")->delete()`

Delete Store by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->stores()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->subscriptions()->get()`

Query subscriptions

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->get();
```
## `withProjectKey("projectKey")->subscriptions()->post(null)`

Create Subscription

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->post(null);
```
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->get()`

Get Subscription by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->post(null)`

Update Subscription by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->subscriptions()->withId("ID")->delete()`

Delete Subscription by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->get()`

Get Subscription by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->post(null)`

Update Subscription by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->subscriptions()->withKey("key")->delete()`

Delete Subscription by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->subscriptions()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->taxCategories()->get()`

Query tax-categories

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->get();
```
## `withProjectKey("projectKey")->taxCategories()->post(null)`

Create TaxCategory

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->post(null);
```
## `withProjectKey("projectKey")->taxCategories()->withId("ID")->get()`

Get TaxCategory by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->taxCategories()->withId("ID")->post(null)`

Update TaxCategory by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->taxCategories()->withId("ID")->delete()`

Delete TaxCategory by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->taxCategories()->withKey("key")->get()`

Get TaxCategory by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->taxCategories()->withKey("key")->post(null)`

Update TaxCategory by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->taxCategories()->withKey("key")->delete()`

Delete TaxCategory by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->taxCategories()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->types()->get()`

Query types

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->get();
```
## `withProjectKey("projectKey")->types()->post(null)`

Create Type

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->post(null);
```
## `withProjectKey("projectKey")->types()->withId("ID")->get()`

Get Type by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->types()->withId("ID")->post(null)`

Update Type by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->types()->withId("ID")->delete()`

Delete Type by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->types()->withKey("key")->get()`

Get Type by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->types()->withKey("key")->post(null)`

Update Type by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->types()->withKey("key")->delete()`

Delete Type by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->types()
                ->withKey("key")
                ->delete();
```
## `withProjectKey("projectKey")->zones()->get()`

Query zones

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->get();
```
## `withProjectKey("projectKey")->zones()->post(null)`

Create Zone

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->post(null);
```
## `withProjectKey("projectKey")->zones()->withId("ID")->get()`

Get Zone by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withId("ID")
                ->get();
```
## `withProjectKey("projectKey")->zones()->withId("ID")->post(null)`

Update Zone by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withId("ID")
                ->post(null);
```
## `withProjectKey("projectKey")->zones()->withId("ID")->delete()`

Delete Zone by ID

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withId("ID")
                ->delete();
```
## `withProjectKey("projectKey")->zones()->withKey("key")->get()`

Get Zone by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withKey("key")
                ->get();
```
## `withProjectKey("projectKey")->zones()->withKey("key")->post(null)`

Update Zone by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withKey("key")
                ->post(null);
```
## `withProjectKey("projectKey")->zones()->withKey("key")->delete()`

Delete Zone by key

### Example
```php
$builder =  new ApiRoot();
$request = $builder
                ->withProjectKey("projectKey")
                ->zones()
                ->withKey("key")
                ->delete();
```