<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersByID;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeOrders
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/orders',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->orders()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/me/orders?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/me/orders',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->orders()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersByID::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'ID' => 'test_ID'],
                '/{projectKey}/in-store/key={storeKey}/me/orders/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
