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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsByIDGet
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
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/me/quote-requests/test_ID?version=version',
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/me/quote-requests/test_ID?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/me/quote-requests/test_ID',
            ],
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
            'ByProjectKeyMeQuoteRequestsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                }
            ],
            'ByProjectKeyMeQuoteRequestsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
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
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                599
            ],
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
            ]
        ];
    }
}
