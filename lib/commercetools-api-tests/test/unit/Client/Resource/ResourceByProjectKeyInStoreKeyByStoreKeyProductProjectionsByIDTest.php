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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductProjectionsByID
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, ?string $body = null)
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
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID?localeProjection=localeProjection',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->productProjections()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->productProjections()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID',
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
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->head();
                },
                599
            ]
        ];
    }
}
