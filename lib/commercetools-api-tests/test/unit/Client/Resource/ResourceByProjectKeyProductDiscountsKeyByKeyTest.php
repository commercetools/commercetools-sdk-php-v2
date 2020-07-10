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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscountsKeyByKey
 */
class ResourceByProjectKeyProductDiscountsKeyByKeyTest extends TestCase
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
            'ByProjectKeyProductDiscountsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-discounts/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productDiscounts()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/product-discounts/key=test_key',
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-discounts/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productDiscounts()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/product-discounts/key=test_key',
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/product-discounts/key=test_key?version=version',
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/product-discounts/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productDiscounts()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-discounts/key=test_key',
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
            'ByProjectKeyProductDiscountsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductDiscountsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductDiscountsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductDiscountsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductDiscountsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
