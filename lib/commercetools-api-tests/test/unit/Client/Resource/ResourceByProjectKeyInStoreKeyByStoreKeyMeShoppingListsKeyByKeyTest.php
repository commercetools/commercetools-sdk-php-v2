<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKey
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->me()
                        ->shoppingLists()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/me/shopping-lists/key=test_key',
            ]
        ];
    }

    public function getResources()
    {
        return [
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeShoppingListsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
