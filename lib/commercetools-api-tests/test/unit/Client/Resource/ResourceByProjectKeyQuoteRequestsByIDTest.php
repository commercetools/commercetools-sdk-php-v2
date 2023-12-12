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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyQuoteRequestsByID
 */
class ResourceByProjectKeyQuoteRequestsByIDTest extends TestCase
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
            'ByProjectKeyQuoteRequestsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/quote-requests/test_ID?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/quote-requests/test_ID',
            ],
            'ByProjectKeyQuoteRequestsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/quote-requests/test_ID',
            ],
            'ByProjectKeyQuoteRequestsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/quote-requests/test_ID?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/quote-requests/test_ID',
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/quote-requests/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/quote-requests/test_ID?version=version',
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/quote-requests/test_ID?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/quote-requests/test_ID',
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
            'ByProjectKeyQuoteRequestsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyQuoteRequestsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyQuoteRequestsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyQuoteRequestsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyQuoteRequestsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyQuoteRequestsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyQuoteRequestsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyQuoteRequestsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyQuoteRequestsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyQuoteRequestsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyQuoteRequestsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyQuoteRequestsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyQuoteRequestsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyQuoteRequestsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyQuoteRequestsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyQuoteRequestsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyQuoteRequestsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyQuoteRequestsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyQuoteRequestsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyQuoteRequestsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyQuoteRequestsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyQuoteRequestsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyQuoteRequestsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyQuoteRequestsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyQuoteRequestsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyQuoteRequestsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyQuoteRequestsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyQuoteRequestsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyQuoteRequestsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyQuoteRequestsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyQuoteRequestsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyQuoteRequestsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyQuoteRequestsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
