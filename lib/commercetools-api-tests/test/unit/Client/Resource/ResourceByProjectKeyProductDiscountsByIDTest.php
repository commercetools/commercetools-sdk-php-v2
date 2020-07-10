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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscountsByID
 */
class ResourceByProjectKeyProductDiscountsByIDTest extends TestCase
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
            'ByProjectKeyProductDiscountsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-discounts/test_ID?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productDiscounts()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/product-discounts/test_ID',
            ],
            'ByProjectKeyProductDiscountsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-discounts/test_ID?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productDiscounts()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/product-discounts/test_ID',
            ],
            'ByProjectKeyProductDiscountsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/product-discounts/test_ID?version=version',
            ],
            'ByProjectKeyProductDiscountsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productDiscounts()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/product-discounts/test_ID?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productDiscounts()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-discounts/test_ID',
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
            'ByProjectKeyProductDiscountsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyProductDiscountsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductDiscountsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductDiscountsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductDiscountsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductDiscountsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductDiscountsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductDiscountsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductDiscountsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductDiscountsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductDiscountsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductDiscountsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductDiscountsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductDiscountsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductDiscountsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductDiscountsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductDiscountsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductDiscountsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductDiscountsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductDiscountsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductDiscountsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductDiscountsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductDiscountsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductDiscountsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductDiscountsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductDiscountsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductDiscountsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductDiscountsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductDiscountsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
