<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyQuotesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyQuotesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyQuotes
 */
class ResourceByProjectKeyQuotesTest extends TestCase
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
            'ByProjectKeyQuotesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/quotes?expand=expand',
            ],
            'ByProjectKeyQuotesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/quotes?sort=sort',
            ],
            'ByProjectKeyQuotesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/quotes?limit=limit',
            ],
            'ByProjectKeyQuotesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/quotes?offset=offset',
            ],
            'ByProjectKeyQuotesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/quotes?withTotal=withTotal',
            ],
            'ByProjectKeyQuotesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/quotes?where=where',
            ],
            'ByProjectKeyQuotesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/quotes?var.varName=var.varName',
            ],
            'ByProjectKeyQuotesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->get();
                },
                'get',
                'test_projectKey/quotes',
            ],
            'ByProjectKeyQuotesHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/quotes?where=where',
            ],
            'ByProjectKeyQuotesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->head();
                },
                'head',
                'test_projectKey/quotes',
            ],
            'ByProjectKeyQuotesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/quotes?expand=expand',
            ],
            'ByProjectKeyQuotesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->post(null);
                },
                'post',
                'test_projectKey/quotes',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyQuotesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyQuotesKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyQuotesKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/quotes/key={key}'
            ],
            'ResourceByProjectKeyQuotesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyQuotesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyQuotesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/quotes/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyQuotesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                }
            ],
            'ByProjectKeyQuotesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                }
            ],
            'ByProjectKeyQuotesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyQuotesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyQuotesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyQuotesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyQuotesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyQuotesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyQuotesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyQuotesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                502
            ],
            'ByProjectKeyQuotesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyQuotesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->get();
                },
                599
            ],
            'ByProjectKeyQuotesHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                200
            ],
            'ByProjectKeyQuotesHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                404
            ],
            'ByProjectKeyQuotesHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                400
            ],
            'ByProjectKeyQuotesHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                401
            ],
            'ByProjectKeyQuotesHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                403
            ],
            'ByProjectKeyQuotesHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                500
            ],
            'ByProjectKeyQuotesHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                502
            ],
            'ByProjectKeyQuotesHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                503
            ],
            'ByProjectKeyQuotesHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->head();
                },
                599
            ],
            'ByProjectKeyQuotesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyQuotesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyQuotesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyQuotesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyQuotesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyQuotesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyQuotesPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyQuotesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyQuotesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
