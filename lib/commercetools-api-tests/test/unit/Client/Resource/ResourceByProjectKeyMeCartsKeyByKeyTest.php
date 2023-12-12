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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeCartsKeyByKey
 */
class ResourceByProjectKeyMeCartsKeyByKeyTest extends TestCase
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
            'ByProjectKeyMeCartsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/carts/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeCartsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/me/carts/key=test_key',
            ],
            'ByProjectKeyMeCartsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/me/carts/key=test_key',
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/carts/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeCartsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/carts/key=test_key',
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/me/carts/key=test_key?version=version',
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/me/carts/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/me/carts/key=test_key',
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
            'ByProjectKeyMeCartsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyMeCartsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyMeCartsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeCartsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeCartsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyMeCartsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeCartsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMeCartsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
