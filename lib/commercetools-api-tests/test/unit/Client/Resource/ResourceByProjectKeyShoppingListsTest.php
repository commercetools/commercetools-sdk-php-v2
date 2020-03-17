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
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsGet
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
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        };
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class)
    {
        $builder = new ApiRequestBuilder();
        $this->assertInstanceOf($class, $builderFunction($builder));
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
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyShoppingListsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/shopping-lists?sort=sort',
            ],
            'ByProjectKeyShoppingListsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/shopping-lists?limit=limit',
            ],
            'ByProjectKeyShoppingListsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/shopping-lists?offset=offset',
            ],
            'ByProjectKeyShoppingListsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyShoppingListsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/shopping-lists?where=where',
            ],
            'ByProjectKeyShoppingListsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/shopping-lists?var.varName=var.varName',
            ],
            'ByProjectKeyShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                'get',
                '{projectKey}/shopping-lists',
            ],
            'ByProjectKeyShoppingListsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                'post',
                '{projectKey}/shopping-lists',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyShoppingListsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShoppingListsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key");
                },
                ResourceByProjectKeyShoppingListsKeyByKey::class
            ],
            'ResourceByProjectKeyShoppingListsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShoppingListsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID");
                },
                ResourceByProjectKeyShoppingListsByID::class
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
            'ByProjectKeyShoppingListsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->get();
                },
                503
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
            'ByProjectKeyShoppingListsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyShoppingListsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
