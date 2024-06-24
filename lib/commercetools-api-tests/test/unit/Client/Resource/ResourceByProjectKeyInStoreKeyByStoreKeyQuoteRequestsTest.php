<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequests
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->quoteRequests()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/quote-requests',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->quoteRequests()
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/quote-requests',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->quoteRequests()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/quote-requests?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/quote-requests',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->quoteRequests()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'key' => 'test_key'],
                '/{projectKey}/in-store/key={storeKey}/quote-requests/key={key}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->quoteRequests()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequestsByID::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'ID' => 'test_ID'],
                '/{projectKey}/in-store/key={storeKey}/quote-requests/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->head();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyQuoteRequestsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->quoteRequests()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
