# Composable Commerce PHP SDK

## Index of Topics

- [Introduction](#introduction)
- [Package and Installation](#package-and-installation)
- [Technical Overview](#technical-overview)
- [Placeholder values](#placeholder-values)
- [Configuration](#configuration)
  - [How to create the Client](#how-to-create-the-client)
  - [How to apply PSRs](#how-to-apply-psrs)
- [Middlewares](#middlewares)
  - [DefaultMiddleware](#defaultmiddleware)
  - [CorrelationIdMiddleware](#correlationidmiddleware)
  - [RetryNAMiddleware](#retrynamiddleware)
  - [OAuthHandlerMiddleware](#oauthhandlermiddleware)
  - [LoggerMiddleware](#loggermiddleware)
  - [ReauthenticateMiddleware](#reauthenticatemiddleware)
- 
- 
  - [How to use RequestBuilders](#how-to-use-requestbuilders)
  - [How to execute requests](#how-to-execute-requests)
  - [How to customize endpoint for different regions](#how-to-customize-endpoint-for-different-regions)
- [Migration Guidelines](#migration-guidelines)
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
* `lib/commercetools-api/src`: Contains all generated models and request builders to communicate with [Composable Commerce HTTP API](https://docs.commercetools.com/http-api.html).
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
## Placeholder values

Example code in this guide uses placeholders that should be replaced with the following values.

If you do not have an API Client, follow our [Get your API Client](/../getting-started/create-api-client) guide.

| Placeholder      | Replace with | From                                    |
| ---------------- | ------------ | --------------------------------------- |
| `{projectKey}`   | project_key  | your API Client                         |
| `{clientID}`     | client_id    | your API Client                         |
| `{clientSecret}` | secret       | your API Client                         |
| `{scope}`        | scope        | your API Client                         |
| `{region}`       | your Region  | [Hosts](/../api/general-concepts#hosts) |

<a id="configuration"></a>
## Configuration

<a id="how-to-create-the-client"></a>
### How to create the Client

The example below shows how to create a client with customized URIs passed in the creation of the Client itself.

### 
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


<a id="how-to-apply-psrs"></a>
### How to apply PSRs
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
<a id="middlewares"></a>
## Middlewares
We introduced middleware to add functionalities to the requests and the responses in the PHP SDK.

You can add middleware when creating the PHP SDK client. Multiple middlewares can be added using the array of middlewares.

The scope of the MiddlewareFactory which is a Factory pattern is to handle all the available middleware and have the chance to have them customized.

The methods that are contained in this class, are meant to create an array of middlewares.

<a id="DefaultMiddleware"></a>
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
<a id="CorrelationIdMiddleware"></a>
### CorrelationIdMiddleware

The method [createCorrelationIdMiddleware](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L51) creates a middleware that adds a correlation ID to the headers of HTTP requests.

```php
$correlationIdProvider = new DefaultCorrelationIdProvider();

$correlationIdMiddleware = MiddlewareFactory::createCorrelationIdMiddleware(
  $correlationIdProvider
);
```
<a id="RetryNAMiddleware"></a>
### RetryNAMiddleware

The method [createRetryNAMiddleware](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L66) is designed to create middleware that retries HTTP requests under certain conditions.

```php
$maxRetries = 3;

$retryMiddleware = MiddlewareFactory::createRetryNAMiddleware($maxRetries);
```
<a id="OAuthHandlerMiddleware"></a>
### OAuthHandlerMiddleware

The method [createMiddlewareForOAuthHandler](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L95) creates a middleware for handling OAuth2 authentication ensuring to include th necessary OAuth credentials.

```php
$tokenProvider = new YourTokenProvider();
$oauthHandler = OAuthHandlerFactory::ofProvider($tokenProvider),

$oauthMiddleware = MiddlewareFactory::createMiddlewareForOAuthHandler($oauthHandler);
```

<a id="LoggerMiddleware"></a>
### LoggerMiddleware

The method [createLoggerMiddleware](https://github.com/commercetools/commercetools-sdk-php-v2/blob/master/lib/commercetools-base/src/Client/MiddlewareFactory.php#L104) creates a middleware for logging HTTP requests and responses.

```php
$logger = new Logger('auth');
$logger->pushHandler(new StreamHandler('./logs/requests.log', Logger::DEBUG));

$loggerMiddleware = MiddlewareFactory::createLoggerMiddleware($logger);
```
<a id="ReauthenticateMiddleware"></a>
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

<a id="how-to-use-requestbuilders"></a>
### How to use RequestBuilders

Detailed information of all available methods for the product API can be found [here](lib/commercetools-api/docs/RequestBuilder.md).
Information for the Import API can be found [here](lib/commercetools-import/docs/RequestBuilder.md).

Examples to retrieve project information

```php
use Commercetools\Api\Client\ApiRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder($client);
$request = $builder->withProjectKey('your-project-key')->get();
```

To avoid specifying the project key for every request built it's possible to use the ones in the `Commercetools\Client` namespace instead

```php
use Commercetools\Client\ApiRequestBuilder;
use Commercetools\Client\ImportRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder('your-project-key', $client);
$request = $builder->categories()->get();

$importBuilder =  new ImportRequestBuilder('your-project-key', $client);
$request = $importBuilder->importSinks()->get();
```

<a id="how-to-execute-requests"></a>
### How to execute requests

```php
use Commercetools\Client\ApiRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder('your-project-key', $client);
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

<a id="how-to-customize-endpoint-for-different-regions"></a>
### How to customize endpoint for different regions

By default, the library uses `api.europe-west1.gcp.commercetools.com` endpoint. If you use a different region, you can configure the client to use a custom endpoint. Here is an example for the `us-central1` region:
```php
$authConfig = new ClientCredentialsConfig(
  new ClientCredentials(CLIENT_ID, CLIENT_SECRET), 
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

<a id="migration-guidelines"></a>
## Migration Guidelines
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
