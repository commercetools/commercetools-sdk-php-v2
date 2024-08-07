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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeQuoteRequestsByID
 */
class ResourceByProjectKeyMeQuoteRequestsByIDTest extends TestCase
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
            'ByProjectKeyMeQuoteRequestsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/quote-requests/test_ID?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/me/quote-requests/test_ID',
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/me/quote-requests/test_ID',
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/quote-requests/test_ID?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/quote-requests/test_ID',
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
            'ByProjectKeyMeQuoteRequestsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeQuoteRequestsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
