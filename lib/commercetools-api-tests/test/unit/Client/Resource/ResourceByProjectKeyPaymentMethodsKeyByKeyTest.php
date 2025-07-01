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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentMethodsKeyByKey
 */
class ResourceByProjectKeyPaymentMethodsKeyByKeyTest extends TestCase
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
            'ByProjectKeyPaymentMethodsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/payment-methods/key=test_key?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/payment-methods/key=test_key',
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/payment-methods/key=test_key',
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/payment-methods/key=test_key?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/payment-methods/key=test_key',
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/payment-methods/key=test_key?version=version',
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/payment-methods/key=test_key?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/payment-methods/key=test_key',
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
            'ByProjectKeyPaymentMethodsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPaymentMethodsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
