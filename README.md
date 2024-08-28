# Composable Commerce PHP SDK

## Index of Topics

- [Introduction](#introduction)
- [Package and Installation](#package-and-installation)
- [Technical Overview](#technical-overview)
  - [Placeholder values](#placeholder-values)
- [Getting Started](#getting-started) 
  - [Client Creation](#client-creation)
  - [Customize Endpoint for different regions](#customize-endpoint-for-different-regions)
  - [Performing Requests](#performing-requests)
- [Configuration](#configuration)
  - [Applying PSRs](#applying-psrs)
  - [Error Handling](#error-handling)
- [Authentication](#authentication)
  - [Token Storage Creation](#token-storage-creation)
  - [Password Flow](#password-flow)
  - [Anonymous Flow](#anonymous-flow)
  - [Refresh Flow](#refresh-flow)
- [Middlewares](#middlewares)
  - [DefaultMiddleware](#defaultmiddleware)
  - [CorrelationIdMiddleware](#correlationidmiddleware)
  - [RetryNAMiddleware](#retrynamiddleware)
  - [OAuthHandlerMiddleware](#oauthhandlermiddleware)
  - [LoggerMiddleware](#loggermiddleware)
  - [ReauthenticateMiddleware](#reauthenticatemiddleware)
- [Querying](#querying)
  - [Predicates](#predicates)
  - [Get By Id/Key](#get-by-idkey)
  - [Sorting](#sorting)
  - [Pagination](#pagination)
- [Products and ProductTypes](#products-and-producttypes)
  - [ProductType Creation](#producttype-creation)
  - [Product Creation](#product-creation)
  - [Reading Attributes](#reading-attributes)
  - [Update attribute values of a product](#update-attribute-values-of-a-product)
- [Serialization](#serialization) 
- [Migration Guidelines From SDK v1](#migration-guidelines-from-sdk-v1)
- [Observability](#observability)
- [Documentation](#documentation)
- [License](#license)

<a id="introduction"></a>
## Introduction

This repository contains the PHP SDK generated from the Composable Commerce API reference.

Client and Request Builder for making API requests against [Commercetools](https://www.commercetools.com).

<a id="package-and-installation"></a>
## Package and Installation

```sh
composer require commercetools/commercetools-sdk
```

| Package            | Version                                                                                                                                                                                                                                                                                                                          |
|--------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| commercetools SDK  | [![Latest Stable Version](https://img.shields.io/packagist/v/commercetools/commercetools-sdk.svg)](https://packagist.org/packages/commercetools/commercetools-sdk) [![Total Downloads](https://img.shields.io/packagist/dt/commercetools/commercetools-sdk.svg)](https://packagist.org/packages/commercetools/commercetools-sdk) |


<a id="technical-overview"></a>
## Technical Overview

The SDK consists of the following projects:
* `lib/commercetools-base/src`: Contains Client which communicate with Composable Commerce to execute requests, it contains also the classes related to the client like tokens, middlewares and handlers, and mappers and exceptions.
* `lib/commercetools-api/src`: Contains all generated models and request builders to communicate with [Composable Commerce HTTP API](https://docs.commercetools.com/api/).
* `lib/commercetools-import/src`: Contains all generated models and request builders to communicate with the [Import API](https://docs.commercetools.com/import-api/).
* `lib/commercetools-history/src`: Contains all generated models and request builders to communicate with the [Change History API](https://docs.commercetools.com/api/history/change-history).

In addition, the SDK has the following directories:
* `examples/symfony-app` : it shows how the PHP SDK can be used in a Symfony application for a Docker environment with NewRelic monitoring enabled. 
* `test/integration` : Integration Tests for the SDK. A good way for anyone using the PHP SDK to understand it further.
* `test/unit` : Unit Tests for 
* `lib/commercetools-api-tests` : generated unit test for each class for the api folder
* `lib/commercetools-history-tests` : generated unit test for each class for the history folder
* `lib/commercetools-import-tests` : generated unit test for each class for the import folder


The PHP SDK utilizes various standard interfaces and components to ensure consistency and interoperability:

- [JSON serializer](https://www.php.net/manual/en/jsonserializable.jsonserialize.php)
- [PSR-3 - LoggerInterface](https://www.php-fig.org/psr/psr-3/)
- [PSR-4 - Autoloader](https://www.php-fig.org/psr/psr-4/)
- [PSR-6 - CachingInterface](https://www.php-fig.org/psr/psr-6/)
- [PSR-7 - HTTP Message Interface](https://www.php-fig.org/psr/psr-7/)
- [PSR-16 - Common Interface for Caching Libraries](https://www.php-fig.org/psr/psr-16/)
- [PSR-18 - HTTP Client](https://www.php-fig.org/psr/psr-18/)
- PHP Date API:
    - [DateTimeImmutable](https://secure.php.net/manual/en/datetimeimmutable.construct.php)

<a id="placeholder-values"></a>
### Placeholder values

Example code in this guide uses placeholders that should be replaced with the following values.

If you do not have an API Client, follow our [Get your API Client](#client-creation) guide.

| Placeholder      | Replace with | From                                    |
| ---------------- | ------------ | --------------------------------------- |
| `{projectKey}`   | project_key  | your API Client                         |
| `{clientID}`     | client_id    | your API Client                         |
| `{clientSecret}` | secret       | your API Client                         |
| `{scope}`        | scope        | your API Client                         |
| `{region}`       | your Region  | [Hosts](/../api/general-concepts#hosts) |

<a id="getting-started"></a>
## Getting Started

<a id="client-creation"></a>
### Client Creation

The example below shows how to create a client with customized URIs passed in the creation of the Client itself.
You will find the same classes in the Import API folder.

```php
namespace Commercetools;

use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;

require_once __DIR__ . '/vendor/autoload.php';

/** @var string $clientId */
/** @var string $clientSecret */
/** @var string $scope
 *   Provide the scope when you want to request a specific ones for the client. 
 *   Can be omitted to use all scopes of the oauth client.
 *   Format: `<the scope name>:<the project key>`.
 *   Example: `manage_products:project1`. $authConfig 
 */
$authConfig = new ClientCredentialsConfig(
    new ClientCredentials('{clientID}', '{clientSecret}', '{scope}'),
    [],
    'https://auth.{region}.commercetools.com/oauth/token'
);
$client = ClientFactory::of()->createGuzzleClient(
    new Config([], 'https://api.{region}.commercetools.com'),
    $authConfig
);
```

<a id="customize-endpoint-for-different-regions"></a>
### Customize Endpoint for different regions

By default, the library uses `api.europe-west1.gcp.commercetools.com` endpoint. If you use a different region, you can configure the client to use a custom endpoint. Here is an example for the `us-central1` region:
```php
$authConfig = new ClientCredentialsConfig(
    new ClientCredentials('{clientId}', '{clientSecret}'), 
    [], 
    'https://auth.us-central1.gcp.commercetools.com/oauth/token'
);

$config = new Config([], 'https://api.us-central1.gcp.commercetools.com');
$client = ClientFactory::of()->createGuzzleClient(
    $config,
    $authConfig,
);
```
Note that the auth endpoint should contain the `/oauth/token` suffix, but the API endpoint - don't.


<a id="performing-requests"></a>
### Performing Requests

Detailed information of all available methods for the product API can be found [here](lib/commercetools-api/docs/RequestBuilder.md)

Information for the Import API can be found [here](lib/commercetools-import/docs/RequestBuilder.md).

Examples to retrieve project information

```php
use Commercetools\Api\Client\ApiRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder($client);
$request = $builder->withProjectKey('{projectKey}')->get();
```

To avoid specifying the project key for every request built it's possible to use the ones in the `Commercetools\Client` namespace instead

```php
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Client\ImportRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder('{projectKey}', $client);
$request = $builder->categories()->get();

$importBuilder =  new ImportRequestBuilder('{projectKey}', $client);
$request = $importBuilder->importSinks()->get();
```
These are some examples about how to execute a request:

```php
use Commercetools\Client\ApiRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder('{projectKey}', $client);
$request = $builder->with()->get();

// executing the request and mapping the response directly to a domain model
$project = $request->execute();

// send the request to get the response object 
$response = $request->send();
// map the response to a domain model
$project = $request->mapFromResponse($response);

// send the request asynchronously 
$promise = $request->sendAsync();
// map the response to a domain model
$project = $request->mapFromResponse($promise->wait());

// send the request using a client instance
$response = $client->send($request);
$project = $request->mapFromResponse($response);
```

<a id="configuration"></a>
## Configuration

<a id="applying-psrs"></a>
### Applying PSRs
The PHP SDK utilizes various standard interfaces and components to ensure consistency and interoperability:
- [PS3 - Logger Interface](https://www.php-fig.org/psr/psr-3/)

```php
$authHandler = HandlerStack::create();
$authHandler->push(
    MiddlewareFactory::createLoggerMiddleware(new Logger('auth', [new StreamHandler('./logs/requests.log')]))
);
$authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret), [
    'handler' => $authHandler,
]);
$logger = new Logger('client', [new StreamHandler('./logs/requests.log')]);
$client = ClientFactory::of()->createGuzzleClientForHandler(
    new Config(['maxRetries' => 3]),
    OAuthHandlerFactory::ofAuthConfig($authConfig),
    $logger
);
```
- [PSR-6 - CachingInterface](https://www.php-fig.org/psr/psr-6/)
```php
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
$filesystemCache = new FilesystemAdapter();

$config = new Config(['timeout' => 30]);
$client = ClientFactory->createGuzzleClientForHandler(
    $config,
    OAuthHandlerFactory::ofAuthConfig($authConfig, $cache)
);
```
- [PSR-7 - HTTP Message Interface](https://www.php-fig.org/psr/psr-7/)
```php
//set up the client something like the examples before

// create a guzzle request
/** @var CategoryBuilder $category */
$request = $client->with()->categories()->withId($category->getId())->get()->withExpand('parent');
$result = $request->execute();

$request = new \GuzzleHttp\Psr7\Request('GET', '{projectKey}/categories/{ID}');
$response = $client->send($request);
```
- [PSR-16 - Common Interface for Caching Libraries](https://www.php-fig.org/psr/psr-16/)
```php
use Symfony\Component\Cache\Simple\FilesystemCache;
use Symfony\Component\Cache\Psr16Cache;

$filesystemCache = new FilesystemAdapter();
$cache = new Psr16Cache($filesystemCache);

$config = new Config(['timeout' => 30]);
$client = ClientFactory->createGuzzleClientForHandler(
    $config,
    OAuthHandlerFactory::ofAuthConfig($authConfig, $cache)
);
```
<a id="error-handling"></a>
### Error Handling
The error handle is already provided with the [ExceptionFactory](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Exception/ExceptionFactory.php) class.
The methods contained in this class encapsulate the logic for converting Guzzle exceptions into your custom exceptions based on the HTTP response status codes.
Which can be called directly in the request or can be called by a dedicated middleware for the error handling. 
Direct invocation in a request handling or directly handled in a middleware:
```php
    if ($e->getCode() >= 500) {
        throw ExceptionFactory::createServerException($e, $apiRequest, $response, $result);
    } else {
        throw ExceptionFactory::createClientException($e, $apiRequest, $response, $result);
    }
```
<a id="authentication"></a>
## Authentication
The factory class [ProviderFactory](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/src/Client/ProviderFactory.php) is for managing authentication and token handling.

<a id="token-storage-creation"></a>
### Token Storage Creation
To generate a TokenStorageProvider that manages tokens using different flows: Refresh Flow and Anonymous Flow, you can use `ProviderFactory::createTokenStorageProvider($anonTokenUrl, $refreshTokenUrl, $clientCredentials, $client, $tokenStorage, $anonymousIdProvider);`.

<a id="password-flow"></a>
### Password Flow
The `ProviderFactory::createPasswordFlowProvider($passwordTokenUrl, $clientCredentials, $client, $tokenStorage);` method, creates a PasswordFlowTokenProvider for authenticating users with username and password, acquiring tokens securely.

<a id="anonymous-flow"></a>
### Anonymous Flow
The `createAnonymousFlowProvider($anonTokenUrl, $clientCredentials, $client, $refreshFlowTokenProvider, $anonymousIdProvider);` method builds an AnonymousFlowTokenProvider to manage tokens for anonymous users, integrating with the API's anonymous token endpoint.

<a id="refresh-flow"></a>
### Refresh Flow
The `createRefreshFlowProvider($refreshTokenUrl, $clientCredentials, $client, $tokenStorage)` method sets up a RefreshFlowTokenProvider to handle token refresh operations seamlessly, ensuring continuous access to API resources.

<a id="middlewares"></a>
## Middlewares
We introduced middleware to add functionalities to the requests and the responses in the PHP SDK.

You can add middleware when creating the PHP SDK client. Multiple middlewares can be added using the array of middlewares.

The scope of the MiddlewareFactory which is a Factory pattern is to handle all the available middleware and have the chance to have them customized.

The methods that are contained in this class, are meant to create an array of middlewares.

<a id="defaultmiddleware"></a>
### DefaultMiddleware

The method [createDefaultMiddlewares](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L26) creates an array with default values of OAuth Handler, Authentication, Logger, Retry and Correlation ID.

```php
$authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret), [
            'handler' => $authHandler,
        ]);
$oauthHandler = OAuthHandlerFactory::ofAuthConfig($authConfig),
$logger = new Logger('client', [new StreamHandler('./logs/requests.log')]);
$maxRetries = 3;
$correlationIdProvider = new DefaultCorrelationIdProvider();

$middlewares = MiddlewareFactory::createDefaultMiddlewares(
    $oauthHandler,
    $logger,
    $maxRetries,
    $correlationIdProvider
);
```
<a id="correlationidmiddleware"></a>
### CorrelationIdMiddleware

The method [createCorrelationIdMiddleware](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L51) creates a middleware that adds a correlation ID to the headers of HTTP requests.

```php
$correlationIdProvider = new DefaultCorrelationIdProvider();

$correlationIdMiddleware = MiddlewareFactory::createCorrelationIdMiddleware(
    $correlationIdProvider
);
```
<a id="retrynamiddleware"></a>
### RetryNAMiddleware

The method [createRetryNAMiddleware](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L66) is designed to create middleware that retries HTTP requests under certain conditions are met. This middleware is particularly useful in scenarios where transient errors, such as temporary server unavailability, may occur.

```php
$maxRetries = 3;

$retryMiddleware = MiddlewareFactory::createRetryNAMiddleware($maxRetries);
```
<a id="oauthhandlermiddleware"></a>
### OAuthHandlerMiddleware

The method [createMiddlewareForOAuthHandler](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L95) creates a middleware for handling OAuth2 authentication ensuring to include the necessary OAuth credentials.

```php
$tokenProvider = new YourTokenProvider();
$oauthHandler = OAuthHandlerFactory::ofProvider($tokenProvider),

$oauthMiddleware = MiddlewareFactory::createMiddlewareForOAuthHandler($oauthHandler);
```

<a id="loggermiddleware"></a>
### LoggerMiddleware

The method [createLoggerMiddleware](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L104) creates a middleware for logging HTTP requests and responses.

```php
$logger = new Logger('auth');
$logger->pushHandler(new StreamHandler('./logs/requests.log', Logger::DEBUG));

$loggerMiddleware = MiddlewareFactory::createLoggerMiddleware($logger);
```
<a id="reauthenticatemiddleware"></a>
### ReauthenticateMiddleware

The method [createReauthenticateMiddleware](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L114C28-L114C58) creates a middleware that automatically reauthenticates HTTP requests when an invalid token error (HTTP 401) is encountered. It uses an OAuth2Handler to refresh the token and retry the request up to a specified number of times.

```php
$authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret), [
            'handler' => $authHandler,
        ]);
$oauthHandler = OAuthHandlerFactory::ofAuthConfig($authConfig),
//maxRetries have the default value 1 as a second parameter of the function
$reauthMiddleware = MiddlewareFactory::createReauthenticateMiddleware($oauthHandler);
```



<a id="querying"></a>
## Querying
For the examples that we are mentioning below we are setting the `$builder` like here:
```php
use Commercetools\Client\ApiRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder('{projectKey}', $client);
```

Since the most of the variables to pass in the `with()` method are scalars, this means that we can pass arrays in the related parameter of the method like in the examples below.

<a id="predicates"></a>
### Predicates
The system allows the use of predicates when querying the API. Predicates are added as query parameter string to the request itself. 
The following example shows the usage of input variables:
```php
$builder
    ->customers()
    ->get()
    ->withWhere('lastName=:lastName')
    ->withPredicateVar("lastName", $customerSignIn->getCustomer()->getLastName());
```
It's also possible to use array values in predicates in case of a varying number of parameters.
```php
$builder
    ->productProjections()
    ->get()
    ->withWhere('masterVariant(sku in :skus)')
    ->withPredicateVar("skus", ["foo", "bar"]);
```

<a id="get-by-idkey"></a>
### Get By Id/Key
```php
$builder
    ->productProjections()
    ->withId('test_id')
    ->get();
```
```php
$builder
    ->productProjections()
    ->withKey('test_key')
    ->get();
```

<a id="sorting"></a>
### Sorting
See [Sort](https://docs.commercetools.com/api/general-concepts#sorting) for details.

Sorting using one parameter:
```php
$builder
    ->products()
    ->get()
    ->withSort("masterData.current.name.en asc");
```

Sorting using multiple parameters:
```php
$builder
    ->products()
    ->get()
    ->withSort(["masterData.current.name.en asc", "id asc"]);
```

<a id="pagination"></a>
### Pagination
Limiting the number of the returned documents or page size:
```php
$builder
    ->products()
    ->get()
    ->withLimit(4)
    ->withOffset(4);
```
<a id="products-and-producttypes"></a>
## Products and ProductTypes
<a id="producttype-creation"></a>
### ProductType Creation
A [ProductType](https://commercetools.github.io/commercetools-sdk-php-v2/docs/html/d7/dbf/interface_commercetools_1_1_api_1_1_models_1_1_product_type_1_1_product_type.html) is like a schema that defines how the product attributes are structured.

`ProductType` contains a list of [AttributeDefinition](https://commercetools.github.io/commercetools-sdk-php-v2/docs/html/da/d68/interface_commercetools_1_1_api_1_1_models_1_1_product_type_1_1_attribute_definition.html) which corresponds to the name and type of each attribute, along with some additional information. Each name/type pair must be unique across a Project, so if you create an attribute "foo" of type String, you cannot create another ProductType where "foo" has another type (e.g. LocalizedString). If you do it anyway you get an error message like:

"The attribute with name 'foo' has a different type on product type 'exampleproducttype'."

In this scenario we provide two `ProductTypes` **book** and **t-shirt**.

The **book** product type contains the following attributes:

$isbn as String, International Standard Book Number
The **t-shirt** product type contains the following attributes:

$color as [AttributeLocalizedEnumValue](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-api/src/Models/ProductType/AttributeLocalizedEnumValue.php) with the colors green and red and their translations in German and English.
$size as [AttributePlainEnumValue](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-api/src/Models/ProductType/AttributePlainEnumValue.php) with S, M and X.
$laundrySymbols as set of [AttributeLocalizedEnumValue](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-api/src/Models/ProductType/AttributeLocalizedEnumValue.php) with temperature and tumble drying.
$matchingProducts as set of [ProductReference](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-api/src/Models/Product/ProductReference.php), which can point to products that are similar to the current product.
$rrp as [Money](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-api/src/Models/Common/Money.php) containing the recommended retail price.
$availableSince as [DateTime](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-api/src/Models/ProductType/AttributeDateTimeType.php) which contains the date since when the product is available for the customer in the shop.
All available attribute types you can find here: AttributeType in "All Known Implementing Classes".

The code for the creation of the book ProductType:
```php
$isbn = AttributeDefinitionBuilder::of()
    ->withType(AttributeTextTypeBuilder::of()->build())
    ->withName(self::ISBN_ATTR_NAME)
    ->withLabel(LocalizedStringBuilder::of("ISBN")->build())
    ->withIsRequired(false)
    ->build();

$productType = ProductTypeBuilder::of()
    ->withName(self::BOOK_PRODUCT_TYPE_NAME)
    ->withDescription("books")
    ->withAttributes(AttributeDefinitionCollection::of()->add($isbn))
    ->build();
    
$builder =  new ApiRequestBuilder('{projectKey}', $client);
$request = $builder
              ->productTypes()
              ->withId($productType->getId())
              ->get();
$productTypeQueryResponse = $request->execute();
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

The code for the creation of the t-shirt ProductType:

```php
$green = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("green")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "green", "de" => "grün"])->build())
                    ->build();
        $red = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("red")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "red", "de" => "rot"])->build())
                    ->build();
        $color = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::COLOR_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "color"])->build())
                    ->withType(AttributeLocalizedEnumTypeBuilder::of()
                                ->withValues(AttributeLocalizedEnumValueCollection::fromArray([$green, $red]))
                                ->build())
                    ->withIsRequired(true)
                    ->build();
        $small = AttributePlainEnumValueBuilder::of()
                    ->withKey("S")
                    ->withLabel("S")
                    ->build();
        $medium = AttributePlainEnumValueBuilder::of()
                    ->withKey("M")
                    ->withLabel("M")
                    ->build();
        $sizeX = AttributePlainEnumValueBuilder::of()
                    ->withKey("X")
                    ->withLabel("X")
                    ->build();
        $size = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::SIZE_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Size"])->build())
                    ->withType(AttributeEnumTypeBuilder::of()
                                    ->withValues(AttributePlainEnumValueCollection::fromArray([$small, $medium, $sizeX]))
                                    ->build())
                    ->withIsRequired(true)
                    ->build();
        $cold = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("cold")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Wash at or below 30°C ", "de" => "30°C"])->build())
                    ->build();
        $hot = AttributeLocalizedEnumValueBuilder::of()
                    ->withKey("hot")
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Wash at or below 60°C", "de" => "60°C"])->build())
                    ->build();
        $tumbleDrying = AttributeLocalizedEnumValueBuilder::of()
                            ->withKey("tumbleDrying")
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "Tumble Drying", "de" => "Trommeltrocknen"])->build())
                            ->build();
        $noTumbleDrying = AttributeLocalizedEnumValueBuilder::of()
                            ->withKey("noTumbleDrying")
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "no tumble drying", "de" => "Nicht im Trommeltrockner trocknen"])->build())
                            ->build();
        $laundryLabelType = AttributeSetTypeBuilder::of()
                                ->withElementType(AttributeLocalizedEnumTypeBuilder::of()
                                                    ->withValues(AttributeLocalizedEnumValueCollection::fromArray([$cold, $hot, $tumbleDrying, $noTumbleDrying]))
                                                    ->build())
                                ->build();
        $laundrySymbols = AttributeDefinitionDraftBuilder::of()
                            ->withType($laundryLabelType)
                            ->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "washing labels"])->build())
                            ->withIsRequired(false)
                            ->build();

        $matchingProducts = AttributeDefinitionDraftBuilder::of()
                                ->withName(self::MATCHING_PRODUCTS_ATTR_NAME)
                                ->withLabel(LocalizedStringBuilder::fromArray(["en" => "matching products"])->build())
                                ->withType(AttributeSetTypeBuilder::of()
                                            ->withElementType(AttributeReferenceTypeBuilder::of()
                                                                ->withReferenceTypeId("product")
                                                                ->build())
                                            ->build())
                                ->withIsRequired(false)
                                ->build();
        $rrp = AttributeDefinitionDraftBuilder::of()
                    ->withName(self::RRP_ATTR_NAME)
                    ->withLabel(LocalizedStringBuilder::fromArray(["en" => "recommended retail price"])->build())
                    ->withType(AttributeMoneyTypeBuilder::of()->build())
                    ->withIsRequired(false)
                    ->build();
        $availableSince = AttributeDefinitionDraftBuilder::of()
                            ->withName(self::AVAILABLE_SINCE_ATTR_NAME)
                            ->withLabel(LocalizedStringBuilder::fromArray(["en" => "available since"])->build())
                            ->withType(AttributeDateTimeTypeBuilder::of()->build())
                            ->withIsRequired(false)
                            ->build();
        $attributes = AttributeDefinitionDraftCollection::fromArray([$color, $size, $laundrySymbols, $matchingProducts, $rrp, $availableSince]);

        $productTypeDraft = ProductTypeDraftBuilder::of()
                              ->withKey(ProductTypeFixture::uniqueProductTypeString())
                              ->withName(self::PRODUCT_TYPE_NAME)
                              ->withDescription("a 'T' shaped cloth")
                              ->withAttributes($attributes)
                              ->build();
        $productType = $builder
            ->with()
            ->productTypes()
            ->post($productTypeDraft)
            ->execute();
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

ProductTypes have a key (String) which can be used as key to logically identify ProductTypes. The key has an unique constraint.

### Product Creation
To create a product you need to reference the product type. Since the ProductType ID of the development system will not be the ID of the production system it is necessary to find the product type by name:
```php
$productType = $builder
            ->with()
            ->productTypes()
            ->get()
            ->withQueryParam('where', 'name="' . $name . '"')
            ->execute();

        return $productType->getResults()->current() ?: null;
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

The simplest way of adding attributes to a ProductVariant is to use ```php ProductVariantDraftBuilder::of()->withAttributes($attributes)``` which enables you to directly put the value of the attribute to the draft. But it cannot check if you put the right objects and types in it.

A book example:
```php
$attributes = AttributeCollection::of()
                ->add(
                    AttributeBuilder::of()
                        ->withName(self::ISBN_ATTR_NAME)
                        ->withValue("978-3-86680-192-9")
                        ->build());
$productVariantDraft = ProductVariantDraftBuilder::of()
                        ->withAttributes($attributes)
                        ->build();
$productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
                                    ->withId($productType->getId())
                                    ->build();
$productDraft = ProductDraftBuilder::of()
                ->withProductType($productTypeResourceIdentifier)
                ->withName(LocalizedStringBuilder::of()->put("en", "a book")->build())
                ->withSlug(LocalizedStringBuilder::of()->put("en", ProductTypeFixture::uniqueProductTypeString())->build())
                ->withMasterVariant($productVariantDraft)
                ->build();

$product = $builder->products()
    ->post($productDraft)
    ->execute();
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

A T-shirt example:
```php
$referenceableProduct = ProductFixture::referenceableProduct($builder);
$productType = ProductTypeFixture::fetchProductTypeByName($builder, self::PRODUCT_TYPE_NAME);

if (!$productType) {
    $productType = ProductTypeFixture::createProductType($builder, self::PRODUCT_TYPE_NAME);
}

$productReference = ProductReferenceBuilder::of()->withId($referenceableProduct->getId())->build();
$datetime = new \DateTime('2015-02-02');
$datetime = $datetime->format(\DateTime::ATOM);
$attributes = AttributeCollection::of()
    ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
    ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
    ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue(["cold", "tumbleDrying"])->build())
    ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCentAmount(300)->withCurrencyCode("EUR")->build())->build())
    ->add(AttributeBuilder::of()->withName(self::AVAILABLE_SINCE_ATTR_NAME)->withValue($datetime)->build())
    ->add(AttributeBuilder::of()->withName(self::MATCHING_PRODUCTS_ATTR_NAME)->withValue([$productReference])->build());
$productVariantDraft = ProductVariantDraftBuilder::of()
    ->withAttributes($attributes)
    ->build();
$productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
    ->withId($productType->getId())
    ->build();
$productDraft = ProductDraftBuilder::of()
    ->withProductType($productTypeResourceIdentifier)
    ->withKey(ProductFixture::uniqueProductString())
    ->withName(LocalizedStringBuilder::of()->put('en', 'basic shirt')->build())
    ->withSlug(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
    ->withMasterVariant($productVariantDraft)
    ->build();

$product = $builder->products()
    ->post($productDraft)
    ->execute();
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

A wrong value for a field or an invalid type will cause a BadRequestException with an error code of "InvalidField".

```php
$productType = $builder->productTypes()
            ->post($productTypeDraft)
            ->execute();
$productVariantDraft  = ProductVariantDraftBuilder::of()
    ->withAttributes(AttributeCollection::of()
        ->add(AttributeBuilder::of()
                ->withName(self::COLOR_ATTR_NAME)
                ->withValue(1) //1 is of illegal type and of illegal key
                ->build()))
    ->build();
$productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
    ->withId($productType->getId())
    ->build();
$productDraft = ProductDraftBuilder::of()
    ->withProductType($productTypeResourceIdentifier)
    ->withName(LocalizedStringBuilder::of()->put("en", "basic shirt")->build())
    ->withSlug(LocalizedStringBuilder::of()->put("en", ProductTypeFixture::uniqueProductTypeString())->build())
    ->withMasterVariant($productVariantDraft)
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

As alternative, you could declare your attributes at the same place and use these to read and write attribute values:

```php
$green = AttributeLocalizedEnumValueBuilder::of()
            ->withKey("green")
            ->withLabel(LocalizedStringBuilder::of()->put("en", "green ")->put("de", "grün")->build())
            ->build();
        $cold = AttributeLocalizedEnumValueBuilder::of()
            ->withKey("cold")
            ->withLabel(LocalizedStringBuilder::of()->put("en", "Wash at or below 30°C ")->put("de", "30°C")->build())
            ->build();
        $tumbleDrying = AttributeLocalizedEnumValueBuilder::of()
            ->withKey("tumbleDrying")
            ->withLabel(LocalizedStringBuilder::of()->put("en", "tumble drying")->put("de", "Trommeltrocknen")->build())
            ->build();
        $productReference = ProductReferenceBuilder::of()->withId($referenceableProduct->getId())->build();

        $attributes = AttributeCollection::of()
            ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("green")->build())
            ->add(AttributeBuilder::of()->withName(self::SIZE_ATTR_NAME)->withValue("S")->build())
            ->add(AttributeBuilder::of()->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)->withValue(["cold", "tumbleDrying"])->build())
            ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCentAmount(300)->withCurrencyCode("EUR")->build())->build())
            ->add(AttributeBuilder::of()->withName(self::AVAILABLE_SINCE_ATTR_NAME)->withValue($datetime)->build())
            ->add(AttributeBuilder::of()->withName(self::MATCHING_PRODUCTS_ATTR_NAME)->withValue([$productReference])->build());
        $productVariantDraft = ProductVariantDraftBuilder::of()
            ->withAttributes($attributes)
            ->build();
        $productTypeResourceIdentifier = ProductTypeResourceIdentifierBuilder::of()
            ->withId($productType->getId())
            ->build();
        $productDraft = ProductDraftBuilder::of()
            ->withProductType($productTypeResourceIdentifier)
            ->withKey(ProductFixture::uniqueProductString())
            ->withName(LocalizedStringBuilder::of()->put('en', 'basic shirt')->build())
            ->withSlug(LocalizedStringBuilder::of()->put('en', ProductFixture::uniqueProductString())->build())
            ->withMasterVariant($productVariantDraft)
            ->build();
        $product = $builder->products()
            ->post($productDraft)
            ->execute();

        $masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();
        foreach ($masterVariant->getAttributes() as $attribute) {
            if ($attribute->getName() === self::COLOR_ATTR_NAME) {
                assertEquals($attribute->getValue()->key, "green");
            }
            if ($attribute->getName() === self::SIZE_ATTR_NAME) {
                assertEquals($attribute->getValue()->key, "S");
            }
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

### Reading Attributes
The simplest way to get the value of the attribute is to use getValue() methods of Attribute, like ```php $attribute->getValue()```:
```php
$product = $this->createProduct();
$masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();
foreach ($masterVariant->getAttributes() as $attribute) {
    if ($attribute->getName() === self::SIZE_ATTR_NAME) {
        assertEquals($attribute->getValue()->key, "S");
    }
}
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

You might also use the ```php getValueAs()``` method as a conversion for the attribute, like you have a EnumValue but extract it as boolean because these methods cast the values passed:
```php
$product = $builder->products()->post($productDraft)->execute();
$masterVariant = $product->getMasterData()->getStaged()->getMasterVariant();

$result = null;
foreach ($masterVariant->getAttributes() as $attribute) {
    if ($attribute->getName() === self::SIZE_ATTR_NAME) {
        /** @var AttributeAccessor $attrAccessor */
        $attrAccessor = $attribute->with(AttributeAccessor::of());

        $result = $attrAccessor->getValueAsBool();
    }
}

$this->assertIsBool($result);
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

### Update attribute values of a product
Here below some examples about setting attribute values is like a product creation:

Example for books:
```php
$product = $this->createBookProduct();
$masterVariantId = 1;
$productUpdate = ProductUpdateBuilder::of()
    ->withVersion($product->getVersion())
    ->withActions(
        ProductUpdateActionCollection::fromArray([
            ProductSetAttributeActionBuilder::of()
                ->withVariantId($masterVariantId)
                ->withName(self::ISBN_ATTR_NAME)
                ->withValue("978-3-86680-192-8")
                ->build()
        ])
        )->build();

$productUpdated = $builder
    ->products()
    ->withId($product->getId())
    ->post($productUpdate)
    ->execute();
$masterVariant = $productUpdated->getMasterData()->getStaged()->getMasterVariant();
$attribute = ProductTypeFixture::findAttributes($masterVariant->getAttributes(), self::ISBN_ATTR_NAME);

assertEquals($attribute->getValue(), "978-3-86680-192-8");
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

Example for T-shirts:
```php
$masterVariantId = 1;
$productUpdatedAction = ProductUpdateBuilder::of()
    ->withVersion($product->getVersion())
    ->withActions(
        ProductUpdateActionCollection::fromArray([
            ProductSetAttributeActionBuilder::of()
                ->withVariantId($masterVariantId)
                ->withName(self::COLOR_ATTR_NAME)
                ->withValue("red")
                ->build(),
            ProductSetAttributeActionBuilder::of()
                ->withVariantId($masterVariantId)
                ->withName(self::SIZE_ATTR_NAME)
                ->withValue("M")
                ->build(),
            ProductSetAttributeActionBuilder::of()
                ->withVariantId($masterVariantId)
                ->withName(self::LAUNDRY_SYMBOLS_ATTR_NAME)
                ->withValue(["cold"])
                ->build(),
            ProductSetAttributeActionBuilder::of()
                ->withVariantId($masterVariantId)
                ->withName(self::RRP_ATTR_NAME)
                ->withValue(MoneyBuilder::of()->withCurrencyCode("EUR")->withCentAmount(2000)->build())
                ->build(),
        ])
    )->build();
$productUpdated = $builder
    ->with()
    ->products()
    ->withId($product->getId())
    ->post($productUpdatedAction)
    ->execute();

$attributesUpdatedProduct = $productUpdated->getMasterData()->getStaged()->getMasterVariant()->getAttributes();

self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::SIZE_ATTR_NAME)->getValue()->key, "M");
self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::COLOR_ATTR_NAME)->getValue()->key, "red");
self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::LAUNDRY_SYMBOLS_ATTR_NAME)->getValue()[0]->key, "cold");
self::assertEquals(ProductTypeFixture::findAttribute($attributesUpdatedProduct, self::RRP_ATTR_NAME)->getValue()->centAmount, 2000);
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

### Create attributes for importing orders

Importing attribute values for orders works different from updating products. In orders you provide the full value for enum-like types instead of just the key as done for all other types. This makes it possible to create a new enum value on the fly. The other attributes behave as expected.

Example:
```php
$product = $this->createProduct($builder);
$attributes = AttributeCollection::of()
    ->add(AttributeBuilder::of()->withName(self::COLOR_ATTR_NAME)->withValue("yellow")->build())
    ->add(AttributeBuilder::of()->withName(self::RRP_ATTR_NAME)->withValue(MoneyBuilder::of()->withCurrencyCode("EUR")->withCentAmount(30)->build())->build());

$productVariantImportDraft = ProductVariantImportDraftBuilder::of()
                                ->withId(1)
                                ->withAttributes($attributes)
                                ->build();
$lineItemImportDraft = LineItemImportDraftBuilder::of()
    ->withProductId($product->getId())
    ->withVariant($productVariantImportDraft)
    ->withQuantity(1)
    ->withPrice(ProductFixture::priceDraft())
    ->withName(LocalizedStringBuilder::of()->put("en", "product name")->build())
    ->build();
$orderImportDraft = OrderImportDraftBuilder::of()
    ->withLineItems(LineItemImportDraftCollection::of()->add($lineItemImportDraft))
    ->withTotalPrice(MoneyBuilder::of()->withCentAmount(20)->withCurrencyCode("EUR")->build())
    ->withOrderState(OrderState::COMPLETE)
    ->build();
$order = $builder->orders()
    ->importOrder()
    ->post($orderImportDraft)
    ->execute();
$productVariant = $order->getLineItems()->current()->getVariant();
$colorAttribute = ProductTypeFixture::findAttribute($productVariant->getAttributes(), self::COLOR_ATTR_NAME);
assertEquals("yellow", $colorAttribute->getValue());
$rrpAttribute = ProductTypeFixture::findAttribute($productVariant->getAttributes(), self::RRP_ATTR_NAME);
assertEquals(30, $rrpAttribute->getValue()->centAmount);
```
See the [Test Code](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/test/integration/Api/ProductType/ProductTypeCreationDemoIntegrationTest.php)

## Serialization
In the PHP SDK some classes implement the [JsonSerializable](https://www.php.net/manual/en/class.jsonserializable.php) interface, and they have a customized `jsonSerialize()` method to convert the instance of the class to a JSON string easily.
This mean that when the method `json_encode()` will be called, the object will be correctly converted and formatted to a JSON string.

See the example below:

```php
$messagePayload = new MessageDeliveryPayloadModel(
    "{projectKey}",
    null, // Replace with an actual Reference object if needed
    null, // Replace with an actual UserProvidedIdentifiers object if needed
    "uniqueId456", // ID
    1, // The version
    new DateTimeImmutable("2024-08-06T12:34:56+00:00"), // CreatedAt
    new DateTimeImmutable("2024-08-06T12:34:56+00:00"), // LastModifiedAt
    42, // SequenceNumber
    1, // Resource version
    null, // Replace with an actual PayloadNotIncluded object if needed
    "Message" // notification type
);

$messagePayloadJSON = json_encode($messagePayload);
```

<a id="migration-guidelines-from-sdk-v1"></a>
## Migration Guidelines from SDK v1
To migrate from the 1.x to the 2.x, there is a guideline below:
* [Migration guidelines from v1 to v2](./Migration.md)

<a id="observability"></a>
## Observability

To monitor and observe the SDK, see the official documentation [Observability](https://docs.commercetools.com/sdk/observability), there is a [Demo application](https://github.com/commercetools/commercetools-sdk-php-v2/tree/master/examples/symfony-app) which shows how to monitor the PHP SDK with New Relic.

<a id="documentation"></a>
## Documentation

* [Documentation](https://commercetools.github.io/commercetools-sdk-php-v2/docs/html/index.html)

<a id="license"></a>
## License

MIT
