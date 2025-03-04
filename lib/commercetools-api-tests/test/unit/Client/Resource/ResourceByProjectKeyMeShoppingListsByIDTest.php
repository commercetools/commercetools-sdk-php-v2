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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeShoppingListsByID
 */
class ResourceByProjectKeyMeShoppingListsByIDTest extends TestCase
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
            'ByProjectKeyMeShoppingListsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/shopping-lists/test_ID?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/me/shopping-lists/test_ID',
            ],
            'ByProjectKeyMeShoppingListsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/me/shopping-lists/test_ID',
            ],
            'ByProjectKeyMeShoppingListsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/shopping-lists/test_ID?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/shopping-lists/test_ID',
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/me/shopping-lists/test_ID?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/me/shopping-lists/test_ID?version=version',
            ],
            'ByProjectKeyMeShoppingListsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/me/shopping-lists/test_ID',
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
            'ByProjectKeyMeShoppingListsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyMeShoppingListsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyMeShoppingListsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyMeShoppingListsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeShoppingListsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeShoppingListsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeShoppingListsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeShoppingListsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeShoppingListsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeShoppingListsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeShoppingListsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeShoppingListsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeShoppingListsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeShoppingListsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyMeShoppingListsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyMeShoppingListsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyMeShoppingListsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyMeShoppingListsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyMeShoppingListsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyMeShoppingListsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyMeShoppingListsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyMeShoppingListsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyMeShoppingListsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeShoppingListsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeShoppingListsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeShoppingListsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeShoppingListsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeShoppingListsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeShoppingListsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeShoppingListsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeShoppingListsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeShoppingListsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
