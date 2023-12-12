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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeySubscriptionsKeyByKey
 */
class ResourceByProjectKeySubscriptionsKeyByKeyTest extends TestCase
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
            'ByProjectKeySubscriptionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/subscriptions/key=test_key',
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/subscriptions/key=test_key',
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/subscriptions/key=test_key',
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->subscriptions()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/subscriptions/key=test_key?version=version',
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/subscriptions/key=test_key',
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
            'ByProjectKeySubscriptionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeySubscriptionsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeySubscriptionsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
