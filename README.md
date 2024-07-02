# Commercetools

Client and Request Builder for making API requests against [Commercetools](https://www.commercetools.com).

## Installation

```sh
composer require commercetools/commercetools-sdk
```

## Usage

```php
namespace Commercetools;

use Commercetools\Api\Client\ClientCredentialsConfig;
use Commercetools\Api\Client\Config;
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;

require_once __DIR__ . '/vendor/autoload.php';

/** @var string $clientId */
/** @var string $clientSecret */
$authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));

$client = ClientFactory::of()->createGuzzleClient(
    new Config(),
    $authConfig
);
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


### Configuring the scope

The scope is needed when you have a client with multiple permissions but you want only a token for a specific scope. If you need to define the scope, you should combine the scope name with the project key, like this:

```php
const PROJECT_KEY = 'my_project_key';
const SCOPE = 'manage_project:my_project_key';
$clientCredentials = new ClientCredentials(CLIENT_ID, CLIENT_SECRET, SCOPE);
$client = ClientFactory::of()->createGuzzleClient($new ClientCredentialsConfig($clientCredentials), new Config());
```

The oauth server will default a token request to the client permissions if the scope is being omitted. The best practice is to create a client in the Merchant Center with the needed permissions and omit the scope when requesting the token.


### Migration Guidelines
To migrate from the 1.x to the 2.x, there is a guideline below:
* [Migration guidelines from v1 to v2](./Migration.md)

### Observability

To monitor and observe the SDK, see the official documentation [Observability](https://docs.commercetools.com/sdk/observability), there is a [Demo application](https://github.com/commercetools/commercetools-sdk-php-v2/tree/master/examples/symfony-app) which shows how to monitor the PHP SDK with New Relic.

### Documentation

* [Documentation](https://commercetools.github.io/commercetools-sdk-php-v2/docs/html/index.html)

## License

MIT
