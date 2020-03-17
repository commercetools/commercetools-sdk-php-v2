<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsKeyByKey
 */
class ResourceByProjectKeyProductsKeyByKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        };
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyProductsKeyByKeyGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                '{projectKey}/products/key={key}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                '{projectKey}/products/key={key}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                '{projectKey}/products/key={key}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                '{projectKey}/products/key={key}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                '{projectKey}/products/key={key}?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withStoreProjection('storeProjection');
                },
                'get',
                '{projectKey}/products/key={key}?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/products/key={key}',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceCurrency('priceCurrency');
                },
                'post',
                '{projectKey}/products/key={key}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceCountry('priceCountry');
                },
                'post',
                '{projectKey}/products/key={key}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'post',
                '{projectKey}/products/key={key}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withPriceChannel('priceChannel');
                },
                'post',
                '{projectKey}/products/key={key}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withLocaleProjection('localeProjection');
                },
                'post',
                '{projectKey}/products/key={key}?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withStoreProjection('storeProjection');
                },
                'post',
                '{projectKey}/products/key={key}?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/products/key={key}',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceCurrency('priceCurrency');
                },
                'delete',
                '{projectKey}/products/key={key}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceCountry('priceCountry');
                },
                'delete',
                '{projectKey}/products/key={key}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'delete',
                '{projectKey}/products/key={key}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withPriceChannel('priceChannel');
                },
                'delete',
                '{projectKey}/products/key={key}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withLocaleProjection('localeProjection');
                },
                'delete',
                '{projectKey}/products/key={key}?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withStoreProjection('storeProjection');
                },
                'delete',
                '{projectKey}/products/key={key}?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/products/key={key}?version=version',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/products/key={key}?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/products/key={key}',
            ]
        ];
    }

    public function getResources()
    {
        return [
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyProductsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
