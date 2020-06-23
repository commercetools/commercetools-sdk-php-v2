<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeShoppingListsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeShoppingListsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeShoppingLists
 */
class ResourceByProjectKeyMeShoppingListsTest extends TestCase
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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyMeShoppingListsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/me/shopping-lists?sort=sort',
            ],
            'ByProjectKeyMeShoppingListsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/me/shopping-lists?limit=limit',
            ],
            'ByProjectKeyMeShoppingListsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/me/shopping-lists?offset=offset',
            ],
            'ByProjectKeyMeShoppingListsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/me/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyMeShoppingListsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/me/shopping-lists?where=where',
            ],
            'ByProjectKeyMeShoppingListsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/me/shopping-lists?var.varName=var.varName',
            ],
            'ByProjectKeyMeShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                'get',
                'test_projectKey/me/shopping-lists',
            ],
            'ByProjectKeyMeShoppingListsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                'post',
                'test_projectKey/me/shopping-lists',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMeShoppingListsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeShoppingListsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyMeShoppingListsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/me/shopping-lists/{ID}'
            ],
            'ResourceByProjectKeyMeShoppingListsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeShoppingListsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyMeShoppingListsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/me/shopping-lists/key={key}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMeShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                }
            ],
            'ByProjectKeyMeShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
            'ByProjectKeyMeShoppingListsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeShoppingListsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeShoppingListsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeShoppingListsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeShoppingListsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeShoppingListsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeShoppingListsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeShoppingListsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeShoppingListsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyMeShoppingListsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeShoppingListsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeShoppingListsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeShoppingListsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeShoppingListsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeShoppingListsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeShoppingListsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeShoppingListsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
