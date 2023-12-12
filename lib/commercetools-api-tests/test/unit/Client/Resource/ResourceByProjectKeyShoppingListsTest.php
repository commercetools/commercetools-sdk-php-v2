<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShoppingListsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShoppingListsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyShoppingLists
 */
class ResourceByProjectKeyShoppingListsTest extends TestCase
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
            'ByProjectKeyShoppingListsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/shopping-lists?sort=sort',
            ],
            'ByProjectKeyShoppingListsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/shopping-lists?limit=limit',
            ],
            'ByProjectKeyShoppingListsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/shopping-lists?offset=offset',
            ],
            'ByProjectKeyShoppingListsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyShoppingListsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/shopping-lists?where=where',
            ],
            'ByProjectKeyShoppingListsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/shopping-lists?var.varName=var.varName',
            ],
            'ByProjectKeyShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->get();
                },
                'get',
                'test_projectKey/shopping-lists',
            ],
            'ByProjectKeyShoppingListsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/shopping-lists?where=where',
            ],
            'ByProjectKeyShoppingListsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->head();
                },
                'head',
                'test_projectKey/shopping-lists',
            ],
            'ByProjectKeyShoppingListsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                'post',
                'test_projectKey/shopping-lists',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyShoppingListsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShoppingListsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyShoppingListsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/shopping-lists/key={key}'
            ],
            'ResourceByProjectKeyShoppingListsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShoppingListsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyShoppingListsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/shopping-lists/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                }
            ],
            'ByProjectKeyShoppingListsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                }
            ],
            'ByProjectKeyShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyShoppingListsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                200
            ],
            'ByProjectKeyShoppingListsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                400
            ],
            'ByProjectKeyShoppingListsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                401
            ],
            'ByProjectKeyShoppingListsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                403
            ],
            'ByProjectKeyShoppingListsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                404
            ],
            'ByProjectKeyShoppingListsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                500
            ],
            'ByProjectKeyShoppingListsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                502
            ],
            'ByProjectKeyShoppingListsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                503
            ],
            'ByProjectKeyShoppingListsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                599
            ],
            'ByProjectKeyShoppingListsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                200
            ],
            'ByProjectKeyShoppingListsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                404
            ],
            'ByProjectKeyShoppingListsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                400
            ],
            'ByProjectKeyShoppingListsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                401
            ],
            'ByProjectKeyShoppingListsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                403
            ],
            'ByProjectKeyShoppingListsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                500
            ],
            'ByProjectKeyShoppingListsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                502
            ],
            'ByProjectKeyShoppingListsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                503
            ],
            'ByProjectKeyShoppingListsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->head();
                },
                599
            ],
            'ByProjectKeyShoppingListsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyShoppingListsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyShoppingListsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyShoppingListsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyShoppingListsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyShoppingListsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyShoppingListsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyShoppingListsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyShoppingListsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
