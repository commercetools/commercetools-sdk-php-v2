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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyZonesKeyByKey
 */
class ResourceByProjectKeyZonesKeyByKeyTest extends TestCase
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
            'ByProjectKeyZonesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->zones()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/zones/key=test_key?expand=expand',
            ],
            'ByProjectKeyZonesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->zones()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/zones/key=test_key',
            ],
            'ByProjectKeyZonesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->zones()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/zones/key=test_key',
            ],
            'ByProjectKeyZonesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->zones()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/zones/key=test_key?expand=expand',
            ],
            'ByProjectKeyZonesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->zones()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/zones/key=test_key',
            ],
            'ByProjectKeyZonesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->zones()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/zones/key=test_key?version=version',
            ],
            'ByProjectKeyZonesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->zones()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/zones/key=test_key?expand=expand',
            ],
            'ByProjectKeyZonesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->zones()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/zones/key=test_key',
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
            'ByProjectKeyZonesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyZonesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyZonesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyZonesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyZonesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyZonesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyZonesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyZonesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyZonesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyZonesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyZonesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyZonesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyZonesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyZonesKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyZonesKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyZonesKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyZonesKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyZonesKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyZonesKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyZonesKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyZonesKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyZonesKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyZonesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyZonesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyZonesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyZonesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyZonesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyZonesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyZonesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyZonesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyZonesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyZonesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyZonesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyZonesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyZonesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyZonesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyZonesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyZonesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyZonesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyZonesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyZonesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyZonesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
