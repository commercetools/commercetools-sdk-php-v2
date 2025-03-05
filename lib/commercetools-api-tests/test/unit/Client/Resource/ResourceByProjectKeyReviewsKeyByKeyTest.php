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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyReviewsKeyByKey
 */
class ResourceByProjectKeyReviewsKeyByKeyTest extends TestCase
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
            'ByProjectKeyReviewsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/reviews/key=test_key?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/reviews/key=test_key',
            ],
            'ByProjectKeyReviewsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/reviews/key=test_key',
            ],
            'ByProjectKeyReviewsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/reviews/key=test_key?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/reviews/key=test_key',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/reviews/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/reviews/key=test_key?version=version',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/reviews/key=test_key?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/reviews/key=test_key',
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
            'ByProjectKeyReviewsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyReviewsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyReviewsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyReviewsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyReviewsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyReviewsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyReviewsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyReviewsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyReviewsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyReviewsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyReviewsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyReviewsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyReviewsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyReviewsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyReviewsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyReviewsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyReviewsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyReviewsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyReviewsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyReviewsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyReviewsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyReviewsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyReviewsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyReviewsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyReviewsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyReviewsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyReviewsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyReviewsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyReviewsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyReviewsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyReviewsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyReviewsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
