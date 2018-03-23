# Commercetools

Client and Request Builder for making API requests against [Commercetools](https://api.sphere.io).

## Installation

```sh
composer require  commercetools/raml-php-sdk
```

## Usage

```php
namespace Commercetools;

use Commercetools\Client\ClientFactory;

require_once __DIR__ . '/vendor/autoload.php';

$client = ClientFactory::create();
```

### Authentication

#### OAuth 2.0

This API supports authentication with OAuth 2.0. Initialize the `OAuth2` instance with the application client id and client secret.

```php
use Commercetools\Client\Config;
use Commercetools\Client\ClientFactory;

$config = new Config();
$config->getCredentials()->setClientId()->setClientSecret();

$client = ClientFactory::create($config);
```

#### Base URI

You can override the base URI by setting the `baseUri` property, or initializing a request builder with a base URI. For example:

```php
use Commercetools\Client\Config;

$config = new Config();
$config->setApiUrl('http://google.com/search']);
```

### Mapper

To map the result data you can use the ResultMapper

```php
use Commercetools\Base\ResultMapper;
use Commercetools\Types\ModelClassMap;

$mapper = new ResultMapper(new ModelClassMap());
...
$response = $client->send($request);

// use one of the following possibilities
$result = $request->map($response, $mapper);
$result = $mapper->map($request, $response);
$result = $mapper->mapData(Project::class, json_decode((string)$response->getBody(), true));
```

### RequestBuilder

Detailed information of all available methods can be found [here](lib/README.md#requestbuilder)

Examples to retrieve project information
```php
use Commercetools\CtpRequestBuilder;
use Commercetools\Request\RequestBuilder;

$builder =  new CtpRequestBuilder('<project-key>');
$request = $builder->with()->get()

// or
$builder =  new RequestBuilder(['projectKey' => '<project-key>']);
$request = $builder->withProjectKeyValue()->get();

// or
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue('<project-key>')->get();


```

Detailed information of all available methods can be found [here](lib/README.md#requestbuilder)


## License

MIT
