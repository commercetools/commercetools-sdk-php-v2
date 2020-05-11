<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEdits;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersImport;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersOrderNumberByOrderNumber;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyOrders
 */
class ResourceByProjectKeyOrdersTest extends TestCase
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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/orders?expand=expand',
            ],
            'ByProjectKeyOrdersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/orders?sort=sort',
            ],
            'ByProjectKeyOrdersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/orders?limit=limit',
            ],
            'ByProjectKeyOrdersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/orders?offset=offset',
            ],
            'ByProjectKeyOrdersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/orders?withTotal=withTotal',
            ],
            'ByProjectKeyOrdersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/orders?where=where',
            ],
            'ByProjectKeyOrdersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/orders?var.varName=var.varName',
            ],
            'ByProjectKeyOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->get();
                },
                'get',
                'test_projectKey/orders',
            ],
            'ByProjectKeyOrdersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/orders?expand=expand',
            ],
            'ByProjectKeyOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->post(null);
                },
                'post',
                'test_projectKey/orders',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyOrdersImport' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrdersImport {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->importOrder();
                },
                ResourceByProjectKeyOrdersImport::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/orders/import'
            ],
            'ResourceByProjectKeyOrdersOrderNumberByOrderNumber' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrdersOrderNumberByOrderNumber {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withOrderNumber("test_orderNumber");
                },
                ResourceByProjectKeyOrdersOrderNumberByOrderNumber::class,
                ['projectKey' => 'test_projectKey', 'orderNumber' => 'test_orderNumber'],
                '/{projectKey}/orders/order-number={orderNumber}'
            ],
            'ResourceByProjectKeyOrdersEdits' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrdersEdits {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits();
                },
                ResourceByProjectKeyOrdersEdits::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/orders/edits'
            ],
            'ResourceByProjectKeyOrdersByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrdersByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyOrdersByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/orders/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                }
            ],
            'ByProjectKeyOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyOrdersGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                200
            ],
            'ByProjectKeyOrdersGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                400
            ],
            'ByProjectKeyOrdersGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                401
            ],
            'ByProjectKeyOrdersGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                403
            ],
            'ByProjectKeyOrdersGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                404
            ],
            'ByProjectKeyOrdersGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                500
            ],
            'ByProjectKeyOrdersGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                503
            ],
            'ByProjectKeyOrdersGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                599
            ],
            'ByProjectKeyOrdersPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyOrdersPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyOrdersPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyOrdersPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyOrdersPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyOrdersPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyOrdersPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyOrdersPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyOrdersPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
