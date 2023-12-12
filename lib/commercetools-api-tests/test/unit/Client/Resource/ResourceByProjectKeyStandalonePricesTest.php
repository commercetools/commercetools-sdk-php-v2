<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStandalonePricesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStandalonePricesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStandalonePrices
 */
class ResourceByProjectKeyStandalonePricesTest extends TestCase
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
            'ByProjectKeyStandalonePricesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/standalone-prices?expand=expand',
            ],
            'ByProjectKeyStandalonePricesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/standalone-prices?sort=sort',
            ],
            'ByProjectKeyStandalonePricesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/standalone-prices?limit=limit',
            ],
            'ByProjectKeyStandalonePricesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/standalone-prices?offset=offset',
            ],
            'ByProjectKeyStandalonePricesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/standalone-prices?withTotal=withTotal',
            ],
            'ByProjectKeyStandalonePricesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/standalone-prices?where=where',
            ],
            'ByProjectKeyStandalonePricesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/standalone-prices?var.varName=var.varName',
            ],
            'ByProjectKeyStandalonePricesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->get();
                },
                'get',
                'test_projectKey/standalone-prices',
            ],
            'ByProjectKeyStandalonePricesHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/standalone-prices?where=where',
            ],
            'ByProjectKeyStandalonePricesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->head();
                },
                'head',
                'test_projectKey/standalone-prices',
            ],
            'ByProjectKeyStandalonePricesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/standalone-prices?expand=expand',
            ],
            'ByProjectKeyStandalonePricesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                'post',
                'test_projectKey/standalone-prices',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyStandalonePricesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStandalonePricesKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyStandalonePricesKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/standalone-prices/key={key}'
            ],
            'ResourceByProjectKeyStandalonePricesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStandalonePricesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyStandalonePricesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/standalone-prices/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyStandalonePricesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                }
            ],
            'ByProjectKeyStandalonePricesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                }
            ],
            'ByProjectKeyStandalonePricesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStandalonePricesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                200
            ],
            'ByProjectKeyStandalonePricesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                400
            ],
            'ByProjectKeyStandalonePricesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                401
            ],
            'ByProjectKeyStandalonePricesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                403
            ],
            'ByProjectKeyStandalonePricesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                404
            ],
            'ByProjectKeyStandalonePricesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                500
            ],
            'ByProjectKeyStandalonePricesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                502
            ],
            'ByProjectKeyStandalonePricesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                503
            ],
            'ByProjectKeyStandalonePricesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->get();
                },
                599
            ],
            'ByProjectKeyStandalonePricesHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                200
            ],
            'ByProjectKeyStandalonePricesHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                404
            ],
            'ByProjectKeyStandalonePricesHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                400
            ],
            'ByProjectKeyStandalonePricesHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                401
            ],
            'ByProjectKeyStandalonePricesHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                403
            ],
            'ByProjectKeyStandalonePricesHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                500
            ],
            'ByProjectKeyStandalonePricesHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                502
            ],
            'ByProjectKeyStandalonePricesHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                503
            ],
            'ByProjectKeyStandalonePricesHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->head();
                },
                599
            ],
            'ByProjectKeyStandalonePricesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyStandalonePricesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStandalonePricesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStandalonePricesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStandalonePricesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStandalonePricesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStandalonePricesPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStandalonePricesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStandalonePricesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
