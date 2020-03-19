# Commercetools

Client and Request Builder for making API requests against [Commercetools](https://www.commercetools.com).

## Installation

```sh
composer require commercetools/spec-sdks
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
$root =  new ApiRequestBuilder($client);
$request = $root->withProjectKey('your-project-key')->get();
```


### Executing requests

```php
use Commercetools\Api\Client\ApiRequestBuilder;
use GuzzleHttp\ClientInterface;

/** @var ClientInterface $client */
$root =  new ApiRequestBuilder($client);
$request = $root->withProjectKey('your-project-key')->get();

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

## License

MIT
