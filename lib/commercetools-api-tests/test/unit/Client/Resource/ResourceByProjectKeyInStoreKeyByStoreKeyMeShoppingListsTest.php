<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingLists
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'key' => 'test_key'],
                '/{projectKey}/in-store/key={storeKey}/me/shopping-lists/key={key}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsByID::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'ID' => 'test_ID'],
                '/{projectKey}/in-store/key={storeKey}/me/shopping-lists/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->head();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
