
> This package has been generated using [raml-php-generator](https://github.com/jayS-de/raml-php-generator)    

# Commercetools

Client and Request Builder for making API requests against [Commercetools](https://api.sphere.io).

## Installation

```sh
composer require commercetools/raml-php-sdk
```

## Usage

```php
namespace Commercetools\Raml;

require_once __DIR__ . '/vendor/autoload.php';

$client = new Client();
```

### Authentication

#### OAuth 2.0

This API supports authentication with [OAuth 2.0](https://github.com/thephpleague/oauth2-client). Initialize the `OAuth2` instance with the application client id, client secret and a redirect uri to authenticate with users.

```php
$credentials = [
    'clientId' => 'your client id',
    'clientSecret' => 'your client secret'
];

$client = new Client(['credentials' => $credentials]);

// Available methods for OAuth 2.0:
 - oauth_2_0
```

#### Base URI

You can override the base URI by setting the `baseUri` property, or initializing a request builder with a base URI. For example:

```php
$builder =  new RequestBuilder(['baseUri' => 'http://google.com/search']);
```

### Methods

All methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

#### `withProjectKey('projectKey')->get($query = null, $options = [])`

* **projectKey** (type: `string`)

The Endpoint is responding a limited set of information about settings and configuration of the project.

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->categories()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query Categories

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->categories()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->categories()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a Category

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->categories()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->categories()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get Category by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->categories()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->categories()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a Category

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->categories()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->categories()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a Category

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->categories()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->carts()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query carts

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->carts()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->carts()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a cart

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->carts()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->carts()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get cart by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->carts()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->carts()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a cart

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->carts()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->carts()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a cart

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->carts()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->cartDiscounts()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query cart-discounts

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->cartDiscounts()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->cartDiscounts()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a cart-discount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->cartDiscounts()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->cartDiscounts()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get cart-discount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->cartDiscounts()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->cartDiscounts()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a cart-discount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->cartDiscounts()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->cartDiscounts()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a cart-discount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->cartDiscounts()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->channels()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query channels

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->channels()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->channels()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a channel

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->channels()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->channels()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get channel by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->channels()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->channels()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a channel

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->channels()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->channels()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a channel

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->channels()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query Customers

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a Customer

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get Customer by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a Customer

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a Customer

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->emailToken()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a Token for verifying the Customer's Email

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->emailToken()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->email()->confirm()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Verifies customer's email using a token.

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->email()->confirm()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->password()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Change a customers password

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->password()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->passwordToken()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

The token value is used to reset the password of the customer with the given email. The token is valid only for 10 minutes.

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->passwordToken()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customers()->password()->reset()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Set a new password using a token.

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customers()->password()->reset()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customerGroups()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query customer-groups

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customerGroups()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customerGroups()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a customer-group

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customerGroups()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customerGroups()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get customer-group by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customerGroups()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customerGroups()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a customer-group

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customerGroups()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customerGroups()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a customer-group

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customerGroups()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customObjects()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query custom-objects

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customObjects()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customObjects()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create or update a custom-object

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customObjects()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customObjects()->withContainer('container')->withKey('key')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **container** (type: `string`)
* **key** (type: `string`)

Get custom-object by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customObjects()->withContainer('container')->withKey('key')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customObjects()->withContainer('container')->withKey('key')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **container** (type: `string`)
* **key** (type: `string`)

Delete a custom-object

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customObjects()->withContainer('container')->withKey('key')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customObjects()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get custom-object by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customObjects()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->customObjects()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a custom-object

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->customObjects()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->discountCodes()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query discount-codes

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->discountCodes()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->discountCodes()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a discount-code

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->discountCodes()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->discountCodes()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get discount-code by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->discountCodes()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->discountCodes()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a discount-code

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->discountCodes()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->discountCodes()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a discount-code

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->discountCodes()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->graphql()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Execute a GraphQL query

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->graphql()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->inventory()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query inventories

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->inventory()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->inventory()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a inventory

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->inventory()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->inventory()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get inventory by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->inventory()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->inventory()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a inventory

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->inventory()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->inventory()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a inventory

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->inventory()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->login()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Authenticate Customer (Sign In)

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->login()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->messages()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query messages

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->messages()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->messages()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get message by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->messages()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->orders()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query orders

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->orders()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->orders()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a order

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->orders()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->orders()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get order by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->orders()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->orders()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a order

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->orders()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->orders()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a order

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->orders()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->orders()->import()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create an Order by Import

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->orders()->import()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->payments()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query payments

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->payments()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->payments()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a payment

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->payments()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->payments()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get payment by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->payments()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->payments()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a payment

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->payments()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->payments()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a payment

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->payments()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query Product

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a Product

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->withKey('key')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Get Product by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->withKey('key')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->withKey('key')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Update a Product by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->withKey('key')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->withKey('key')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Delete a Product by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->withKey('key')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get Product by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a Product

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a Product

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->products()->withId('ID')->images()->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Uploads a binary image file to a given product variant. The supported image formats are JPEG, PNG and GIF.

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->products()->withId('ID')->images()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productDiscounts()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query product discounts

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productDiscounts()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productDiscounts()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a product discount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productDiscounts()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productDiscounts()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get product discount by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productDiscounts()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productDiscounts()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a product discount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productDiscounts()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productDiscounts()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a product discount

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productDiscounts()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productProjections()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query Product Projection

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productProjections()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productProjections()->withKey('key')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Get Product Projection by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productProjections()->withKey('key')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productProjections()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get Product Projection by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productProjections()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productProjections()->search()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Search Product Projection

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productProjections()->search()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productProjections()->search()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Search Product Projection

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productProjections()->search()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productProjections()->suggest()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productProjections()->suggest()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query Product Types

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a Product Type

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->withKey('key')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Get Product Type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->withKey('key')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->withKey('key')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Update a Product Type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->withKey('key')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->withKey('key')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Delete a Product Type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->withKey('key')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get Product Type by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a Product Type

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->productTypes()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a Product Type

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->productTypes()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query reviews

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a review

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->withKey('key')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Get review by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->withKey('key')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->withKey('key')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Update a review by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->withKey('key')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->withKey('key')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Delete a review by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->withKey('key')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get review by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a review

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->reviews()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a review

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->reviews()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->shippingMethods()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query shipping-methods

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->shippingMethods()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->shippingMethods()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a shipping-method

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->shippingMethods()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->shippingMethods()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get shipping-method by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->shippingMethods()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->shippingMethods()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a shipping-method

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->shippingMethods()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->shippingMethods()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a shipping-method

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->shippingMethods()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->states()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query states

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->states()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->states()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a state

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->states()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->states()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get state by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->states()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->states()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a state

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->states()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->states()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a state

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->states()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query subscriptions

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a subscription

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->withKey('key')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Get subscription by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->withKey('key')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->withKey('key')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Update a subscription by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->withKey('key')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->withKey('key')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Delete a subscription by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->withKey('key')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get subscription by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a subscription

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->subscriptions()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a subscription

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->subscriptions()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->taxCategories()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query tax categories

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->taxCategories()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->taxCategories()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a tax category

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->taxCategories()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->taxCategories()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get Tax Category by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->taxCategories()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->taxCategories()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a Tax Category

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->taxCategories()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->taxCategories()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a Tax Category

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->taxCategories()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query types

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a type

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->withKey('key')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Get type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->withKey('key')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->withKey('key')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Update Type by Key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->withKey('key')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->withKey('key')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **key** (type: `string`)

Delete a type by key

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->withKey('key')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get type by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a type

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->types()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a type

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->types()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->zones()->get($query = null, $options = [])`

* **projectKey** (type: `string`)

Query zones

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->zones()->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->zones()->post($body = null, $options = [])`

* **projectKey** (type: `string`)

Create a zone

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->zones()->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->zones()->withId('ID')->get($query = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Get zone by ID

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->zones()->withId('ID')->get($query = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->zones()->withId('ID')->post($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Update a zone

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->zones()->withId('ID')->post($body = null, $options = []);
$response = $client->send($request);
```
  
#### `withProjectKey('projectKey')->zones()->withId('ID')->delete($body = null, $options = [])`

* **projectKey** (type: `string`)
* **ID** (type: `string`)

Delete a zone

```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKey('projectKey')->zones()->withId('ID')->delete($body = null, $options = []);
$response = $client->send($request);
```
  
## License

MIT
