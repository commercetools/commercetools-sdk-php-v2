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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyQuoteRequestsKeyByKey
 */
class ResourceByProjectKeyQuoteRequestsKeyByKeyTest extends TestCase
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
            'ByProjectKeyQuoteRequestsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/quote-requests/key=test_key',
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/quote-requests/key=test_key',
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/quote-requests/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/quote-requests/key=test_key?version=version',
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/quote-requests/key=test_key',
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
            'ByProjectKeyQuoteRequestsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyQuoteRequestsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyQuoteRequestsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
