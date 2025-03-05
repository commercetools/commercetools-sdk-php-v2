<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeQuoteRequestsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeQuoteRequestsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeQuoteRequestsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeQuoteRequests
 */
class ResourceByProjectKeyMeQuoteRequestsTest extends TestCase
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
            'ByProjectKeyMeQuoteRequestsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/quote-requests?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/me/quote-requests?sort=sort',
            ],
            'ByProjectKeyMeQuoteRequestsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/me/quote-requests?limit=limit',
            ],
            'ByProjectKeyMeQuoteRequestsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/me/quote-requests?offset=offset',
            ],
            'ByProjectKeyMeQuoteRequestsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/me/quote-requests?withTotal=withTotal',
            ],
            'ByProjectKeyMeQuoteRequestsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/me/quote-requests?where=where',
            ],
            'ByProjectKeyMeQuoteRequestsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/me/quote-requests?var.varName=var.varName',
            ],
            'ByProjectKeyMeQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                'get',
                'test_projectKey/me/quote-requests',
            ],
            'ByProjectKeyMeQuoteRequestsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/me/quote-requests?where=where',
            ],
            'ByProjectKeyMeQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                'head',
                'test_projectKey/me/quote-requests',
            ],
            'ByProjectKeyMeQuoteRequestsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->quoteRequests()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/quote-requests?expand=expand',
            ],
            'ByProjectKeyMeQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                'post',
                'test_projectKey/me/quote-requests',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMeQuoteRequestsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeQuoteRequestsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyMeQuoteRequestsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/me/quote-requests/{ID}'
            ],
            'ResourceByProjectKeyMeQuoteRequestsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeQuoteRequestsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->quoteRequests()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyMeQuoteRequestsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/me/quote-requests/key={key}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMeQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                }
            ],
            'ByProjectKeyMeQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                }
            ],
            'ByProjectKeyMeQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeQuoteRequestsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeQuoteRequestsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                200
            ],
            'ByProjectKeyMeQuoteRequestsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->head();
                },
                599
            ],
            'ByProjectKeyMeQuoteRequestsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyMeQuoteRequestsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeQuoteRequestsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeQuoteRequestsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeQuoteRequestsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeQuoteRequestsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeQuoteRequestsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeQuoteRequestsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeQuoteRequestsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->quoteRequests()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
