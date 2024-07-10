# Composable Commerce PHP SDK

## Introduction

This repository contains the PHP SDK generated from the Composable Commerce API reference.


Client and Request Builder for making API requests against [Commercetools](https://www.commercetools.com).

## Package and Installation

```sh
composer require commercetools/commercetools-sdk
```

| Package            | Version                                                                                                                                                                                                                                                                                                                          |
|--------------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| commercetools SDK  | [![Latest Stable Version](https://img.shields.io/packagist/v/commercetools/commercetools-sdk.svg)](https://packagist.org/packages/commercetools/commercetools-sdk) [![Total Downloads](https://img.shields.io/packagist/dt/commercetools/commercetools-sdk.svg)](https://packagist.org/packages/commercetools/commercetools-sdk) |


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


## Usage



### How to create the Client

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
- [PSR-4 - Autoloader](https://www.php-fig.org/psr/psr-4/)
- [PSR-6 - CachingInterface](https://www.php-fig.org/psr/psr-6/)
```php
$cache = new FilesystemCache(); //using Symfony cache
ClientFactory->createGuzzleClientForHandler(
    $config,
    OAuthHandlerFactory::ofAuthConfig($authConfig, $cache)
)
```


### RequestBuilder

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


### Executing requests

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
### Custom endpoint for different regions

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

### Migration Guidelines
To migrate from the 1.x to the 2.x, there is a guideline below:
* [Migration guidelines from v1 to v2](./Migration.md)

### Observability

To monitor and observe the SDK, see the official documentation [Observability](https://docs.commercetools.com/sdk/observability), there is a [Demo application](https://github.com/commercetools/commercetools-sdk-php-v2/tree/master/examples/symfony-app) which shows how to monitor the PHP SDK with New Relic.

### Documentation

* [Documentation](https://commercetools.github.io/commercetools-sdk-php-v2/docs/html/index.html)

## License

MIT
