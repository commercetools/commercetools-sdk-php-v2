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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStoresKeyByKey
 */
class ResourceByProjectKeyStoresKeyByKeyTest extends TestCase
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
            'ByProjectKeyStoresKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/stores/key=test_key?expand=expand',
            ],
            'ByProjectKeyStoresKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/stores/key=test_key',
            ],
            'ByProjectKeyStoresKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/stores/key=test_key?expand=expand',
            ],
            'ByProjectKeyStoresKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/stores/key=test_key',
            ],
            'ByProjectKeyStoresKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/stores/key=test_key?version=version',
            ],
            'ByProjectKeyStoresKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/stores/key=test_key?expand=expand',
            ],
            'ByProjectKeyStoresKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/stores/key=test_key',
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
            'ByProjectKeyStoresKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyStoresKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyStoresKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStoresKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyStoresKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyStoresKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyStoresKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyStoresKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyStoresKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyStoresKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyStoresKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyStoresKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStoresKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyStoresKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStoresKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStoresKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStoresKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStoresKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStoresKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStoresKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyStoresKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyStoresKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyStoresKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyStoresKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyStoresKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyStoresKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyStoresKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyStoresKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyStoresKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
