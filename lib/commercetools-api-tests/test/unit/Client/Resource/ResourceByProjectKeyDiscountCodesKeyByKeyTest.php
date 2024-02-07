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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountCodesKeyByKey
 */
class ResourceByProjectKeyDiscountCodesKeyByKeyTest extends TestCase
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
            'ByProjectKeyDiscountCodesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/discount-codes/key=test_key?expand=expand',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/discount-codes/key=test_key',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/discount-codes/key=test_key',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/discount-codes/key=test_key?expand=expand',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/discount-codes/key=test_key',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/discount-codes/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/discount-codes/key=test_key?version=version',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/discount-codes/key=test_key?expand=expand',
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/discount-codes/key=test_key',
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
            'ByProjectKeyDiscountCodesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyDiscountCodesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyDiscountCodesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyDiscountCodesKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyDiscountCodesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyDiscountCodesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
