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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyQuotesKeyByKey
 */
class ResourceByProjectKeyQuotesKeyByKeyTest extends TestCase
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
            'ByProjectKeyQuotesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/quotes/key=test_key',
            ],
            'ByProjectKeyQuotesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/quotes/key=test_key',
            ],
            'ByProjectKeyQuotesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/quotes/key=test_key',
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/quotes/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/quotes/key=test_key?version=version',
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyQuotesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/quotes/key=test_key',
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
            'ByProjectKeyQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyQuotesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyQuotesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyQuotesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyQuotesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyQuotesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyQuotesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyQuotesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyQuotesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyQuotesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyQuotesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyQuotesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyQuotesKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyQuotesKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyQuotesKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyQuotesKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyQuotesKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyQuotesKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyQuotesKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyQuotesKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyQuotesKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyQuotesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyQuotesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyQuotesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyQuotesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyQuotesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyQuotesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyQuotesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyQuotesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyQuotesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyQuotesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyQuotesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
