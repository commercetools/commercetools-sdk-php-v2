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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscountsKeyByKey
 */
class ResourceByProjectKeyCartDiscountsKeyByKeyTest extends TestCase
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
            'ByProjectKeyCartDiscountsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/cart-discounts/key=test_key?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/cart-discounts/key=test_key',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/cart-discounts/key=test_key',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/cart-discounts/key=test_key?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/cart-discounts/key=test_key',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/cart-discounts/key=test_key?version=version',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/cart-discounts/key=test_key?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/cart-discounts/key=test_key',
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
            'ByProjectKeyCartDiscountsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCartDiscountsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyCartDiscountsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
