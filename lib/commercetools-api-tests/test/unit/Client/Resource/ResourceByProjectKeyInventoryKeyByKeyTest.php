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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInventoryKeyByKey
 */
class ResourceByProjectKeyInventoryKeyByKeyTest extends TestCase
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
            'ByProjectKeyInventoryKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/inventory/key=test_key?expand=expand',
            ],
            'ByProjectKeyInventoryKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/inventory/key=test_key',
            ],
            'ByProjectKeyInventoryKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/inventory/key=test_key',
            ],
            'ByProjectKeyInventoryKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/inventory/key=test_key?expand=expand',
            ],
            'ByProjectKeyInventoryKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/inventory/key=test_key',
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/inventory/key=test_key?version=version',
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/inventory/key=test_key?expand=expand',
            ],
            'ByProjectKeyInventoryKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/inventory/key=test_key',
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
            'ByProjectKeyInventoryKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyInventoryKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyInventoryKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyInventoryKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInventoryKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInventoryKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInventoryKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInventoryKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInventoryKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInventoryKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInventoryKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyInventoryKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInventoryKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInventoryKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyInventoryKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyInventoryKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyInventoryKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyInventoryKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyInventoryKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyInventoryKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyInventoryKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyInventoryKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyInventoryKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInventoryKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInventoryKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInventoryKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInventoryKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInventoryKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInventoryKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInventoryKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInventoryKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInventoryKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInventoryKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
