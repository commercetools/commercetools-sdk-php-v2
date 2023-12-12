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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKey
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->customers()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/customers/key=test_key',
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
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->customers()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
