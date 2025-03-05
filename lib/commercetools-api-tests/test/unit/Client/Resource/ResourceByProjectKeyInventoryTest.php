<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInventoryByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInventoryKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInventory
 */
class ResourceByProjectKeyInventoryTest extends TestCase
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
            'ByProjectKeyInventoryGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/inventory?expand=expand',
            ],
            'ByProjectKeyInventoryGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/inventory?sort=sort',
            ],
            'ByProjectKeyInventoryGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/inventory?limit=limit',
            ],
            'ByProjectKeyInventoryGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/inventory?offset=offset',
            ],
            'ByProjectKeyInventoryGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/inventory?withTotal=withTotal',
            ],
            'ByProjectKeyInventoryGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/inventory?where=where',
            ],
            'ByProjectKeyInventoryGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/inventory?var.varName=var.varName',
            ],
            'ByProjectKeyInventoryGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->get();
                },
                'get',
                'test_projectKey/inventory',
            ],
            'ByProjectKeyInventoryHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/inventory?where=where',
            ],
            'ByProjectKeyInventoryHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->head();
                },
                'head',
                'test_projectKey/inventory',
            ],
            'ByProjectKeyInventoryPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inventory()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/inventory?expand=expand',
            ],
            'ByProjectKeyInventoryPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->post(null);
                },
                'post',
                'test_projectKey/inventory',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInventoryByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInventoryByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyInventoryByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/inventory/{ID}'
            ],
            'ResourceByProjectKeyInventoryKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInventoryKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyInventoryKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/inventory/key={key}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInventoryGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                }
            ],
            'ByProjectKeyInventoryHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                }
            ],
            'ByProjectKeyInventoryPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInventoryGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInventoryGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInventoryGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInventoryGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInventoryGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInventoryGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInventoryGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInventoryGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInventoryGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInventoryHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                200
            ],
            'ByProjectKeyInventoryHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                404
            ],
            'ByProjectKeyInventoryHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                400
            ],
            'ByProjectKeyInventoryHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                401
            ],
            'ByProjectKeyInventoryHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                403
            ],
            'ByProjectKeyInventoryHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                500
            ],
            'ByProjectKeyInventoryHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                502
            ],
            'ByProjectKeyInventoryHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                503
            ],
            'ByProjectKeyInventoryHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->head();
                },
                599
            ],
            'ByProjectKeyInventoryPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyInventoryPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInventoryPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInventoryPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInventoryPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInventoryPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInventoryPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInventoryPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInventoryPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
