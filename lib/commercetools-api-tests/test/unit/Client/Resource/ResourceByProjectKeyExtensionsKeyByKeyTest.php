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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensionsKeyByKey
 */
class ResourceByProjectKeyExtensionsKeyByKeyTest extends TestCase
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
            'ByProjectKeyExtensionsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/extensions/key=test_key?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/extensions/key=test_key',
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/extensions/key=test_key?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/extensions/key=test_key',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/extensions/key=test_key?version=version',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/extensions/key=test_key?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/extensions/key=test_key',
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
            'ByProjectKeyExtensionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyExtensionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyExtensionsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyExtensionsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
