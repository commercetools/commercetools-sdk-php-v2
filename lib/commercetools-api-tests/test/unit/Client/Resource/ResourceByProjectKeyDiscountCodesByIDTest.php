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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountCodesByID
 */
class ResourceByProjectKeyDiscountCodesByIDTest extends TestCase
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
            'ByProjectKeyDiscountCodesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/discount-codes/test_ID?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/discount-codes/test_ID',
            ],
            'ByProjectKeyDiscountCodesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/discount-codes/test_ID',
            ],
            'ByProjectKeyDiscountCodesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/discount-codes/test_ID?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/discount-codes/test_ID',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/discount-codes/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/discount-codes/test_ID?version=version',
            ],
            'ByProjectKeyDiscountCodesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/discount-codes/test_ID?expand=expand',
            ],
            'ByProjectKeyDiscountCodesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/discount-codes/test_ID',
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
            'ByProjectKeyDiscountCodesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyDiscountCodesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyDiscountCodesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyDiscountCodesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyDiscountCodesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyDiscountCodesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyDiscountCodesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyDiscountCodesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyDiscountCodesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyDiscountCodesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyDiscountCodesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyDiscountCodesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyDiscountCodesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyDiscountCodesByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyDiscountCodesByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyDiscountCodesByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyDiscountCodesByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyDiscountCodesByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyDiscountCodesByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyDiscountCodesByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyDiscountCodesByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyDiscountCodesByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyDiscountCodesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyDiscountCodesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyDiscountCodesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyDiscountCodesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyDiscountCodesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyDiscountCodesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyDiscountCodesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyDiscountCodesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyDiscountCodesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyDiscountCodesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyDiscountCodesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyDiscountCodesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyDiscountCodesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyDiscountCodesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyDiscountCodesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyDiscountCodesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyDiscountCodesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyDiscountCodesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyDiscountCodesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyDiscountCodesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
