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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersOrderNumberByOrderNumberGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersOrderNumberByOrderNumberPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersOrderNumberByOrderNumberDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersOrderNumberByOrderNumber
 */
class ResourceByProjectKeyOrdersOrderNumberByOrderNumberTest extends TestCase
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
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/orders/order-number=test_orderNumber?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withOrderNumber("test_orderNumber")
                        ->get();
                },
                'get',
                'test_projectKey/orders/order-number=test_orderNumber',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/orders/order-number=test_orderNumber?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withOrderNumber("test_orderNumber")
                        ->post(null);
                },
                'post',
                'test_projectKey/orders/order-number=test_orderNumber',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/orders/order-number=test_orderNumber?dataErasure=dataErasure',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/orders/order-number=test_orderNumber?version=version',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/orders/order-number=test_orderNumber?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->withOrderNumber("test_orderNumber")
                        ->delete();
                },
                'delete',
                'test_projectKey/orders/order-number=test_orderNumber',
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
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                }
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                }
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                200
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                400
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                401
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                403
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                404
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                500
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                503
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                599
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                599
            ]
        ];
    }
}
