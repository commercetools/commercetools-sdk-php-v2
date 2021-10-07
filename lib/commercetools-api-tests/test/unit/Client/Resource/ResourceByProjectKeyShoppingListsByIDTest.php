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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyShoppingListsByID
 */
class ResourceByProjectKeyShoppingListsByIDTest extends TestCase
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
            'ByProjectKeyShoppingListsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/shopping-lists/test_ID?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/shopping-lists/test_ID',
            ],
            'ByProjectKeyShoppingListsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/shopping-lists/test_ID?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/shopping-lists/test_ID',
            ],
            'ByProjectKeyShoppingListsByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/shopping-lists/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyShoppingListsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/shopping-lists/test_ID?version=version',
            ],
            'ByProjectKeyShoppingListsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shoppingLists()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/shopping-lists/test_ID?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/shopping-lists/test_ID',
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
            'ByProjectKeyShoppingListsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyShoppingListsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyShoppingListsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
            'ByProjectKeyShoppingListsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyShoppingListsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyShoppingListsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyShoppingListsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyShoppingListsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyShoppingListsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyShoppingListsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyShoppingListsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyShoppingListsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyShoppingListsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyShoppingListsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyShoppingListsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyShoppingListsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyShoppingListsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyShoppingListsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyShoppingListsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyShoppingListsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyShoppingListsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyShoppingListsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyShoppingListsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyShoppingListsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyShoppingListsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyShoppingListsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyShoppingListsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyShoppingListsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyShoppingListsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyShoppingListsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyShoppingListsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyShoppingListsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
