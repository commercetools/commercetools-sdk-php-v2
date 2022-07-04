<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStagedQuotesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStagedQuotesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStagedQuotes
 */
class ResourceByProjectKeyStagedQuotesTest extends TestCase
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
            'ByProjectKeyStagedQuotesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/staged-quotes?expand=expand',
            ],
            'ByProjectKeyStagedQuotesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/staged-quotes?sort=sort',
            ],
            'ByProjectKeyStagedQuotesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/staged-quotes?limit=limit',
            ],
            'ByProjectKeyStagedQuotesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/staged-quotes?offset=offset',
            ],
            'ByProjectKeyStagedQuotesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/staged-quotes?withTotal=withTotal',
            ],
            'ByProjectKeyStagedQuotesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/staged-quotes?where=where',
            ],
            'ByProjectKeyStagedQuotesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/staged-quotes?var.varName=var.varName',
            ],
            'ByProjectKeyStagedQuotesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                'get',
                'test_projectKey/staged-quotes',
            ],
            'ByProjectKeyStagedQuotesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/staged-quotes?expand=expand',
            ],
            'ByProjectKeyStagedQuotesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                'post',
                'test_projectKey/staged-quotes',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyStagedQuotesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStagedQuotesKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyStagedQuotesKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/staged-quotes/key={key}'
            ],
            'ResourceByProjectKeyStagedQuotesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStagedQuotesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyStagedQuotesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/staged-quotes/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyStagedQuotesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                }
            ],
            'ByProjectKeyStagedQuotesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStagedQuotesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyStagedQuotesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyStagedQuotesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyStagedQuotesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyStagedQuotesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyStagedQuotesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyStagedQuotesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                502
            ],
            'ByProjectKeyStagedQuotesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyStagedQuotesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->get();
                },
                599
            ],
            'ByProjectKeyStagedQuotesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyStagedQuotesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStagedQuotesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStagedQuotesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStagedQuotesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStagedQuotesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStagedQuotesPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStagedQuotesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStagedQuotesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
