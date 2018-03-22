# Commercetools

Client and Request Builder for making API requests against Commercetools.

## Installation

```sh
composer require  commercetools/raml-php-sdk
```

## Usage

```php
namespace Commercetools;

require_once __DIR__ . '/vendor/autoload.php';

$client = Factory::create();
```

### Authentication

#### OAuth 2.0

This API supports authentication with OAuth 2.0. Initialize the `OAuth2` instance with the application client id and client secret.

```php
$config = new Config();
$config->getCredentials()->setClientId(<client_id>)->setClientSecret(<client_secret>);

$client = Factory::create($config);
```

#### Base URI

You can override the base URI by setting the `baseUri` property, or initializing a request builder with a base URI. For example:

```php
$config = new Config();
$config->setApiUrl('http://google.com/search']);
```

### RequestBuilder

In order to be able to build request objects you can use the RequestBuilder

```php
$builder = new RequestBuilder();
```

### Mapper

To map the result data you can use the ResultMapper

```php

$mapper = new ResultMapper(new ModelClassMap());
$request = $builder->withProjectKeyValue()->get();

$response = $client->send($request);

// use one of the following possibilities
$result = $request->map($response, $mapper);
$result = $mapper->map($request, $response);
$result = $mapper->mapData(Project::class, json_decode((string)$response->getBody(), true));
```


### Methods

All methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

## License

MIT
