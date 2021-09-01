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
For the Import API [here](lib/commercetools-import/docs/RequestBuilder.md) and for the ML API [here](lib/commercetools-ml/docs/RequestBuilder.md)

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
use Commercetools\Client\MLRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$builder =  new ApiRequestBuilder('your-project-key', $client);
$request = $builder->with()->categories()->get();

$importBuilder =  new ImportRequestBuilder('your-project-key', $client);
$request = $importBuilder->with()->importSinks()->get();

$mlBuilder =  new MLRequestBuilder('your-project-key', $client);
$request = $mlBuilder->with()->recommendations()->generalCategories()->get();
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

### Migration Guidelines
To migrate from the 1.x to the 2.x, there is a guideline below:
* [Migration guidelines from v1 to v2](../Migration.md)

## License

MIT
