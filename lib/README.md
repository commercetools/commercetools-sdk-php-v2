# Commercetools

Client and Request Builder for making API requests against [Commercetools](https://api.sphere.io).

## Installation

```sh
composer require  commercetools/raml-php-sdk
```

## Usage

```php
namespace Commercetools;

require_once __DIR__ . '/vendor/autoload.php';

$client = ClientFactory::create();
```

### Authentication

#### OAuth 2.0

This API supports authentication with OAuth 2.0. Initialize the `OAuth2` instance with the application client id and client secret.

```php
$config = new Config();
$config->getCredentials()->setClientId(<client_id>)->setClientSecret(<client_secret>);

$client = ClientFactory::create($config);
```

#### Base URI

You can override the base URI by setting the `baseUri` property, or initializing a request builder with a base URI. For example:

```php
$config = new Config();
$config->setApiUrl('http://google.com/search']);
```

### Mapper

To map the result data you can use the ResultMapper

```php

$mapper = new ResultMapper(new ModelClassMap());
...
$response = $client->send($request);

// use one of the following possibilities
$result = $request->map($response, $mapper);
$result = $mapper->map($request, $response);
$result = $mapper->mapData(Project::class, json_decode((string)$response->getBody(), true));
```

### RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
$builder = new RequestBuilder();
```

#### `withProjectKeyValue()->get()`

The Endpoint is responding a limited set of information about settings and configuration of the project.


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->post()`

Update project

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->get()`

Query categories

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->post()`

Create Category

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->keyWithKeyValue()->get()`

Get Category by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->keyWithKeyValue()->post()`

Update Category by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->keyWithKeyValue()->delete()`

Delete Category by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->withIDValue()->get()`

Get Category by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->withIDValue()->post()`

Update Category by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->categories()->withIDValue()->delete()`

Delete Category by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->carts()->get()`

Query carts

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->carts()->post()`

Create Cart

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->carts()->withIDValue()->get()`

Get Cart by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->carts()->withIDValue()->post()`

Update Cart by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->carts()->withIDValue()->delete()`

Delete Cart by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->cartDiscounts()->get()`

Query cart-discounts

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->cartDiscounts()->post()`

Create CartDiscount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->cartDiscounts()->withIDValue()->get()`

Get CartDiscount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->cartDiscounts()->withIDValue()->post()`

Update CartDiscount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->cartDiscounts()->withIDValue()->delete()`

Delete CartDiscount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->channels()->get()`

Query channels

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->channels()->post()`

Create Channel

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->channels()->withIDValue()->get()`

Get Channel by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->channels()->withIDValue()->post()`

Update Channel by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->channels()->withIDValue()->delete()`

Delete Channel by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->get()`

Query customers

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->post()`

Create Customer

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->passwordTokenWithPasswordTokenValue()->get()`

Get Customer by passwordToken

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->passwordTokenWithPasswordTokenValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->emailTokenWithEmailTokenValue()->get()`

Get Customer by emailToken

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->emailTokenWithEmailTokenValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->emailToken()->post()`

Create a Token for verifying the Customer's Email

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->emailToken()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->email()->confirm()->post()`

Verifies customer's email using a token.

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->email()->confirm()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->password()->post()`

Change a customers password

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->password()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->password()->reset()->post()`

Set a new password using a token.

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->password()->reset()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->passwordToken()->post()`

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->passwordToken()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->withIDValue()->get()`

Get Customer by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->withIDValue()->post()`

Update Customer by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customers()->withIDValue()->delete()`

Delete Customer by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->get()`

Query customer-groups

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->post()`

Create CustomerGroup

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->get()`

Get CustomerGroup by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->post()`

Update CustomerGroup by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->delete()`

Delete CustomerGroup by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->withIDValue()->get()`

Get CustomerGroup by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->withIDValue()->post()`

Update CustomerGroup by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customerGroups()->withIDValue()->delete()`

Delete CustomerGroup by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customObjects()->get()`

Query custom-objects

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customObjects()->post()`

Create CustomObject

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customObjects()->withContainerValue()->get()`

Get CustomObject by container

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customObjects()->withContainerValue()->delete()`

Delete CustomObject by container

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->get()`

Get CustomObject by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->delete()`

Delete CustomObject by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->discountCodes()->get()`

Query discount-codes

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->discountCodes()->post()`

Create DiscountCode

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->discountCodes()->withIDValue()->get()`

Get DiscountCode by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->discountCodes()->withIDValue()->post()`

Update DiscountCode by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->discountCodes()->withIDValue()->delete()`

Delete DiscountCode by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->graphql()->post()`

Execute a GraphQL query

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->graphql()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->inventory()->get()`

Query inventory

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->inventory()->post()`

Create InventoryEntry

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->inventory()->withIDValue()->get()`

Get InventoryEntry by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->inventory()->withIDValue()->post()`

Update InventoryEntry by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->inventory()->withIDValue()->delete()`

Delete InventoryEntry by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->login()->post()`

Authenticate Customer (Sign In)

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->login()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->messages()->get()`

Query messages

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->messages()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->messages()->withIDValue()->get()`

Get Message by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->messages()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->get()`

Query orders

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->post()`

Create Order

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->import()->post()`

Create an Order by Import

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->import()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->get()`

Get Order by orderNumber

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->post()`

Update Order by orderNumber

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->delete()`

Delete Order by orderNumber

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->withIDValue()->get()`

Get Order by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->withIDValue()->post()`

Update Order by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->orders()->withIDValue()->delete()`

Delete Order by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->get()`

Query payments

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->post()`

Create Payment

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->keyWithKeyValue()->get()`

Get Payment by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->keyWithKeyValue()->post()`

Update Payment by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->keyWithKeyValue()->delete()`

Delete Payment by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->withIDValue()->get()`

Get Payment by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->withIDValue()->post()`

Update Payment by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->payments()->withIDValue()->delete()`

Delete Payment by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->get()`

Query products

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->post()`

Create Product

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->keyWithKeyValue()->get()`

Get Product by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->keyWithKeyValue()->post()`

Update Product by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->keyWithKeyValue()->delete()`

Delete Product by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->withIDValue()->get()`

Get Product by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->withIDValue()->post()`

Update Product by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->withIDValue()->delete()`

Delete Product by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->products()->withIDValue()->images()->post()`

Uploads a binary image file to a given product variant. The supported image formats are JPEG, PNG and GIF.


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->images()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productDiscounts()->get()`

Query product-discounts

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productDiscounts()->post()`

Create ProductDiscount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productDiscounts()->withIDValue()->get()`

Get ProductDiscount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productDiscounts()->withIDValue()->post()`

Update ProductDiscount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productDiscounts()->withIDValue()->delete()`

Delete ProductDiscount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productProjections()->get()`

Query product-projections

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productProjections()->search()->post()`

Search Product Projection

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->search()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productProjections()->search()->get()`

Search Product Projection

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->search()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productProjections()->suggest()->get()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->suggest()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productProjections()->keyWithKeyValue()->get()`

Get ProductProjection by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productProjections()->withIDValue()->get()`

Get ProductProjection by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->get()`

Query product-types

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->post()`

Create ProductType

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->keyWithKeyValue()->get()`

Get ProductType by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->keyWithKeyValue()->post()`

Update ProductType by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->keyWithKeyValue()->delete()`

Delete ProductType by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->withIDValue()->get()`

Get ProductType by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->withIDValue()->post()`

Update ProductType by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->productTypes()->withIDValue()->delete()`

Delete ProductType by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->get()`

Query reviews

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->post()`

Create Review

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->keyWithKeyValue()->get()`

Get Review by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->keyWithKeyValue()->post()`

Update Review by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->keyWithKeyValue()->delete()`

Delete Review by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->withIDValue()->get()`

Get Review by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->withIDValue()->post()`

Update Review by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->reviews()->withIDValue()->delete()`

Delete Review by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->get()`

Query shipping-methods

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->post()`

Create ShippingMethod

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->get()`

Get ShippingMethod by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->post()`

Update ShippingMethod by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->delete()`

Delete ShippingMethod by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->withIDValue()->get()`

Get ShippingMethod by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->withIDValue()->post()`

Update ShippingMethod by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shippingMethods()->withIDValue()->delete()`

Delete ShippingMethod by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->get()`

Query shopping-lists

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->post()`

Create ShoppingList

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->get()`

Get ShoppingList by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->post()`

Update ShoppingList by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->delete()`

Delete ShoppingList by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->withIDValue()->get()`

Get ShoppingList by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->withIDValue()->post()`

Update ShoppingList by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->shoppingLists()->withIDValue()->delete()`

Delete ShoppingList by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->states()->get()`

Query states

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->states()->post()`

Create State

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->states()->withIDValue()->get()`

Get State by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->states()->withIDValue()->post()`

Update State by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->states()->withIDValue()->delete()`

Delete State by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->get()`

Query subscriptions

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->post()`

Create Subscription

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->get()`

Get Subscription by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->post()`

Update Subscription by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->delete()`

Delete Subscription by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->withIDValue()->get()`

Get Subscription by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->withIDValue()->post()`

Update Subscription by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->subscriptions()->withIDValue()->delete()`

Delete Subscription by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->taxCategories()->get()`

Query tax-categories

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->taxCategories()->post()`

Create TaxCategory

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->taxCategories()->withIDValue()->get()`

Get TaxCategory by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->taxCategories()->withIDValue()->post()`

Update TaxCategory by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->taxCategories()->withIDValue()->delete()`

Delete TaxCategory by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->get()`

Query types

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->post()`

Create Type

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->keyWithKeyValue()->get()`

Get Type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->keyWithKeyValue()->post()`

Update Type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->keyWithKeyValue()->delete()`

Delete Type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->withIDValue()->get()`

Get Type by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->withIDValue()->post()`

Update Type by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->types()->withIDValue()->delete()`

Delete Type by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->zones()->get()`

Query zones

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->zones()->post()`

Create Zone

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->zones()->withIDValue()->get()`

Get Zone by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->zones()->withIDValue()->post()`

Update Zone by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->zones()->withIDValue()->delete()`

Delete Zone by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->get()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->post()`

Create a customer

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->delete()`

Delete a Customer

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->email()->confirm()->post()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->email()->confirm()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->password()->post()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->password()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->password()->reset()->post()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->password()->reset()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->signup()->post()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->signup()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->login()->post()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->login()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->activeCart()->get()`


```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->activeCart()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->carts()->get()`

Query carts

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->carts()->post()`

Create Cart

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->carts()->withIDValue()->get()`

Get Cart by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->carts()->withIDValue()->post()`

Update Cart by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->carts()->withIDValue()->delete()`

Delete Cart by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->withIDValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->orders()->get()`

Query orders

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->orders()->post()`

Create Order

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->orders()->withIDValue()->get()`

Get Order by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->me()->orders()->withIDValue()->post()`

Update Order by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->get()`

Query extensions

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->post()`

Create Extension

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->keyWithKeyValue()->get()`

Get Extension by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->keyWithKeyValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->keyWithKeyValue()->post()`

Update Extension by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->keyWithKeyValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->keyWithKeyValue()->delete()`

Delete Extension by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->withIDValue()->get()`

Get Extension by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->withIDValue()->get();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->withIDValue()->post()`

Update Extension by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->withIDValue()->post();
$response = $client->send($request);
```
#### `withProjectKeyValue()->extensions()->withIDValue()->delete()`

Delete Extension by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->withIDValue()->delete();
$response = $client->send($request);
```

## License

MIT
