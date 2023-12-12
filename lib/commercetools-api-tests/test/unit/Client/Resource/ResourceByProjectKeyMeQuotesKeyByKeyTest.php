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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuotesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuotesKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuotesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeQuotesKeyByKey
 */
class ResourceByProjectKeyMeQuotesKeyByKeyTest extends TestCase
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
            'ByProjectKeyMeQuotesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quotes()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/me/quotes/key=test_key',
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/me/quotes/key=test_key',
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quotes()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/quotes/key=test_key',
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
            'ByProjectKeyMeQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeQuotesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeQuotesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyMeQuotesKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeQuotesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quotes()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
