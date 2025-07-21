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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurringOrdersByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurringOrdersByID
 */
class ResourceByProjectKeyRecurringOrdersByIDTest extends TestCase
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
            'ByProjectKeyRecurringOrdersByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/recurring-orders/test_ID?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/recurring-orders/test_ID',
            ],
            'ByProjectKeyRecurringOrdersByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/recurring-orders/test_ID',
            ],
            'ByProjectKeyRecurringOrdersByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/recurring-orders/test_ID?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/recurring-orders/test_ID',
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/recurring-orders/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/recurring-orders/test_ID?version=version',
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurringOrders()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/recurring-orders/test_ID?expand=expand',
            ],
            'ByProjectKeyRecurringOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurringOrders()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/recurring-orders/test_ID',
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
            'ByProjectKeyRecurringOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyRecurringOrdersByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyRecurringOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyRecurringOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecurringOrdersByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyRecurringOrdersByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyRecurringOrdersByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyRecurringOrdersByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyRecurringOrdersByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyRecurringOrdersByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyRecurringOrdersByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyRecurringOrdersByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyRecurringOrdersByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyRecurringOrdersByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyRecurringOrdersByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyRecurringOrdersByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyRecurringOrdersByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurringOrders()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
