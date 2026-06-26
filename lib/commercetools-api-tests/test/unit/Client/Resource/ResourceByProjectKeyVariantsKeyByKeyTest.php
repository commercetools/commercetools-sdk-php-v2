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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantsKeyByKey
 */
class ResourceByProjectKeyVariantsKeyByKeyTest extends TestCase
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
            'ByProjectKeyVariantsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/variants/key=test_key?expand=expand',
            ],
            'ByProjectKeyVariantsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/variants/key=test_key',
            ],
            'ByProjectKeyVariantsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/variants/key=test_key',
            ],
            'ByProjectKeyVariantsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/variants/key=test_key?expand=expand',
            ],
            'ByProjectKeyVariantsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/variants/key=test_key',
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/variants/key=test_key?version=version',
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/variants/key=test_key?expand=expand',
            ],
            'ByProjectKeyVariantsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/variants/key=test_key',
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
            'ByProjectKeyVariantsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyVariantsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyVariantsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyVariantsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyVariantsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyVariantsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyVariantsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyVariantsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyVariantsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyVariantsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyVariantsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyVariantsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyVariantsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyVariantsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyVariantsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyVariantsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyVariantsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyVariantsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyVariantsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyVariantsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyVariantsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyVariantsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyVariantsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyVariantsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyVariantsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyVariantsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyVariantsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyVariantsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyVariantsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyVariantsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyVariantsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyVariantsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyVariantsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
