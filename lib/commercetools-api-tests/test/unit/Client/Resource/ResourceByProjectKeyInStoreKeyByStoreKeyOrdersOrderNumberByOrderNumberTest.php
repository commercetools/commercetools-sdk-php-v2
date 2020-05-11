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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumber
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->orders()
                        ->withOrderNumber("test_orderNumber")
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->orders()
                        ->withOrderNumber("test_orderNumber")
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber?dataErasure=dataErasure',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withOrderNumber('test_orderNumber')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->orders()
                        ->withOrderNumber("test_orderNumber")
                        ->delete();
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/order-number=test_orderNumber',
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
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
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
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersOrderNumberByOrderNumberDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                599
            ]
        ];
    }
}
