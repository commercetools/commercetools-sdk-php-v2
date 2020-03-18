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
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyReviewsKeyByKey
 */
class ResourceByProjectKeyReviewsKeyByKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
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
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyReviewsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/reviews/key={key}',
            ],
            'ByProjectKeyReviewsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/reviews/key={key}',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withKey('key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '{projectKey}/reviews/key={key}?dataErasure=dataErasure',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/reviews/key={key}?version=version',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/reviews/key={key}?expand=expand',
            ],
            'ByProjectKeyReviewsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/reviews/key={key}',
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
            'ByProjectKeyReviewsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
