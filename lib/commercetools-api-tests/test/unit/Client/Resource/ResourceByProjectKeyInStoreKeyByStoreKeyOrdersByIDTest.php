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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByID
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersByIDTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->orders()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->orders()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->orders()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->orders()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/orders/test_ID',
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
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
