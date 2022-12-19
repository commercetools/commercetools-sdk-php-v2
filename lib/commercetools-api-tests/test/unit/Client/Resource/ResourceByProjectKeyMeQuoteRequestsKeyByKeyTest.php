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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeQuoteRequestsKeyByKey
 */
class ResourceByProjectKeyMeQuoteRequestsKeyByKeyTest extends TestCase
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
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/quote-requests/key=test_key',
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/me/quote-requests/key=test_key?version=version',
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/me/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/me/quote-requests/key=test_key',
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/me/quote-requests/key=test_key',
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
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                }
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                599
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                599
            ]
        ];
    }
}
