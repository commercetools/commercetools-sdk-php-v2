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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsKeyByKey
 */
class ResourceByProjectKeyProductProjectionsKeyByKeyTest extends TestCase
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
            'ByProjectKeyProductProjectionsKeyByKeyGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?staged=staged',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withStoreProjection('storeProjection');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-projections/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/product-projections/key=test_key',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/product-projections/key=test_key',
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
            'ByProjectKeyProductProjectionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductProjectionsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductProjectionsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyProductProjectionsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->head();
                },
                599
            ]
        ];
    }
}
