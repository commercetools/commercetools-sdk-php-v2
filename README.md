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
use Commercetools\Client\ClientCredentials;
use Commercetools\Client\ClientFactory;
use Commercetools\Client\OAuthHandlerFactory;

require_once __DIR__ . '/vendor/autoload.php';

$authConfig = new ClientCredentialsConfig(new ClientCredentials($clientId, $clientSecret));

$client = ClientFactory::of()->createGuzzleClient(
    new Config(),
    OAuthHandlerFactory::ofAuthConfig($authConfig)
);
```

### RequestBuilder

Detailed information of all available methods for the product API can be found [here](lib/commercetools-api/docs/RequestBuilder.md)
and for the import API [here](lib/commercetools-import/docs/RequestBuilder.md)

Examples to retrieve project information

```php
use Commercetools\Api\Client\ApiRequestBuilder;

$root =  new ApiRequestBuilder($client);
$request = $root->withProjectKey('your-project-key')->get();
```

## License

MIT
