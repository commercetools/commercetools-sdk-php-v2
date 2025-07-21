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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurringOrdersKeyByKey
 */
class ResourceByProjectKeyRecurringOrdersKeyByKeyTest extends TestCase
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
            'ByProjectKeyRecurringOrdersKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/recurring-orders/key=test_key?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/recurring-orders/key=test_key',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/recurring-orders/key=test_key',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/recurring-orders/key=test_key?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/recurring-orders/key=test_key',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/recurring-orders/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/recurring-orders/key=test_key?version=version',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/recurring-orders/key=test_key?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/recurring-orders/key=test_key',
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
            'ByProjectKeyRecurringOrdersKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecurringOrdersKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
