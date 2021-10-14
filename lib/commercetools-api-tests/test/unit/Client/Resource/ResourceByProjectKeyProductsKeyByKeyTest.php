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
        $this->assertSame($relativeUri, (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
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
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ClientException("Oops!", $request, new Response(400)));

        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request, new Response(500)));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyProductsKeyByKeyGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/products/key=test_key?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/products/key=test_key?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/products/key=test_key?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/products/key=test_key?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/products/key=test_key?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->get()
                        ->withStoreProjection('storeProjection');
                },
                'get',
                'test_projectKey/products/key=test_key?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/products/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/products/key=test_key',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->post(null)
                        ->withPriceCurrency('priceCurrency');
                },
                'post',
                'test_projectKey/products/key=test_key?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->post(null)
                        ->withPriceCountry('priceCountry');
                },
                'post',
                'test_projectKey/products/key=test_key?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'post',
                'test_projectKey/products/key=test_key?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->post(null)
                        ->withPriceChannel('priceChannel');
                },
                'post',
                'test_projectKey/products/key=test_key?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->post(null)
                        ->withLocaleProjection('localeProjection');
                },
                'post',
                'test_projectKey/products/key=test_key?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->post(null)
                        ->withStoreProjection('storeProjection');
                },
                'post',
                'test_projectKey/products/key=test_key?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/products/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/products/key=test_key',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withPriceCurrency('priceCurrency');
                },
                'delete',
                'test_projectKey/products/key=test_key?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withPriceCountry('priceCountry');
                },
                'delete',
                'test_projectKey/products/key=test_key?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'delete',
                'test_projectKey/products/key=test_key?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withPriceChannel('priceChannel');
                },
                'delete',
                'test_projectKey/products/key=test_key?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withLocaleProjection('localeProjection');
                },
                'delete',
                'test_projectKey/products/key=test_key?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withStoreProjection('storeProjection');
                },
                'delete',
                'test_projectKey/products/key=test_key?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/products/key=test_key?version=version',
            ],
            'ByProjectKeyProductsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/products/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/products/key=test_key',
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
            'ByProjectKeyProductsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                502
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
            'ByProjectKeyProductsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->get();
                },
                599
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
            'ByProjectKeyProductsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                502
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
            'ByProjectKeyProductsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->post(null);
                },
                599
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
            'ByProjectKeyProductsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                502
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
            ],
            'ByProjectKeyProductsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
