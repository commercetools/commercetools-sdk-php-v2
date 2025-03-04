<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyQuoteRequestsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyQuoteRequestsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuoteRequestsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyQuoteRequests
 */
class ResourceByProjectKeyQuoteRequestsTest extends TestCase
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
            'ByProjectKeyQuoteRequestsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/quote-requests?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/quote-requests?sort=sort',
            ],
            'ByProjectKeyQuoteRequestsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/quote-requests?limit=limit',
            ],
            'ByProjectKeyQuoteRequestsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/quote-requests?offset=offset',
            ],
            'ByProjectKeyQuoteRequestsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/quote-requests?withTotal=withTotal',
            ],
            'ByProjectKeyQuoteRequestsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/quote-requests?where=where',
            ],
            'ByProjectKeyQuoteRequestsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/quote-requests?var.varName=var.varName',
            ],
            'ByProjectKeyQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->get();
                },
                'get',
                'test_projectKey/quote-requests',
            ],
            'ByProjectKeyQuoteRequestsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/quote-requests?where=where',
            ],
            'ByProjectKeyQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->head();
                },
                'head',
                'test_projectKey/quote-requests',
            ],
            'ByProjectKeyQuoteRequestsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quoteRequests()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/quote-requests?expand=expand',
            ],
            'ByProjectKeyQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                'post',
                'test_projectKey/quote-requests',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyQuoteRequestsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyQuoteRequestsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyQuoteRequestsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/quote-requests/key={key}'
            ],
            'ResourceByProjectKeyQuoteRequestsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyQuoteRequestsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyQuoteRequestsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/quote-requests/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                }
            ],
            'ByProjectKeyQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                }
            ],
            'ByProjectKeyQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyQuoteRequestsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                200
            ],
            'ByProjectKeyQuoteRequestsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                400
            ],
            'ByProjectKeyQuoteRequestsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                401
            ],
            'ByProjectKeyQuoteRequestsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                403
            ],
            'ByProjectKeyQuoteRequestsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                404
            ],
            'ByProjectKeyQuoteRequestsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                500
            ],
            'ByProjectKeyQuoteRequestsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                502
            ],
            'ByProjectKeyQuoteRequestsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                503
            ],
            'ByProjectKeyQuoteRequestsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->get();
                },
                599
            ],
            'ByProjectKeyQuoteRequestsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                200
            ],
            'ByProjectKeyQuoteRequestsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                404
            ],
            'ByProjectKeyQuoteRequestsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                400
            ],
            'ByProjectKeyQuoteRequestsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                401
            ],
            'ByProjectKeyQuoteRequestsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                403
            ],
            'ByProjectKeyQuoteRequestsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                500
            ],
            'ByProjectKeyQuoteRequestsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                502
            ],
            'ByProjectKeyQuoteRequestsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                503
            ],
            'ByProjectKeyQuoteRequestsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->head();
                },
                599
            ],
            'ByProjectKeyQuoteRequestsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyQuoteRequestsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyQuoteRequestsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyQuoteRequestsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyQuoteRequestsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyQuoteRequestsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyQuoteRequestsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyQuoteRequestsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyQuoteRequestsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quoteRequests()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
