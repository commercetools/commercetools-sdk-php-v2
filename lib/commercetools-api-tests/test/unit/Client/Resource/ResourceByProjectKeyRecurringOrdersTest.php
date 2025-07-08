<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurringOrdersByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurringOrdersKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurringOrders
 */
class ResourceByProjectKeyRecurringOrdersTest extends TestCase
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
            'ByProjectKeyRecurringOrdersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/recurring-orders?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/recurring-orders?sort=sort',
            ],
            'ByProjectKeyRecurringOrdersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/recurring-orders?limit=limit',
            ],
            'ByProjectKeyRecurringOrdersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/recurring-orders?offset=offset',
            ],
            'ByProjectKeyRecurringOrdersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/recurring-orders?withTotal=withTotal',
            ],
            'ByProjectKeyRecurringOrdersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/recurring-orders?where=where',
            ],
            'ByProjectKeyRecurringOrdersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/recurring-orders?var.varName=var.varName',
            ],
            'ByProjectKeyRecurringOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->get();
                },
                'get',
                'test_projectKey/recurring-orders',
            ],
            'ByProjectKeyRecurringOrdersHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/recurring-orders?where=where',
            ],
            'ByProjectKeyRecurringOrdersHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->head();
                },
                'head',
                'test_projectKey/recurring-orders',
            ],
            'ByProjectKeyRecurringOrdersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/recurring-orders?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                'post',
                'test_projectKey/recurring-orders',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyRecurringOrdersByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyRecurringOrdersByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyRecurringOrdersByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/recurring-orders/{ID}'
            ],
            'ResourceByProjectKeyRecurringOrdersKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyRecurringOrdersKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyRecurringOrdersKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/recurring-orders/key={key}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyRecurringOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                }
            ],
            'ByProjectKeyRecurringOrdersHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                }
            ],
            'ByProjectKeyRecurringOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecurringOrdersGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->get();
                },
                599
            ],
            'ByProjectKeyRecurringOrdersHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->head();
                },
                599
            ],
            'ByProjectKeyRecurringOrdersPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyRecurringOrdersPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyRecurringOrdersPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyRecurringOrdersPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyRecurringOrdersPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyRecurringOrdersPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyRecurringOrdersPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyRecurringOrdersPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyRecurringOrdersPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyRecurringOrdersPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
