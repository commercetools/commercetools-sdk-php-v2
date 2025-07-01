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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentMethodsByID
 */
class ResourceByProjectKeyPaymentMethodsByIDTest extends TestCase
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
            'ByProjectKeyPaymentMethodsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/payment-methods/test_ID?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/payment-methods/test_ID',
            ],
            'ByProjectKeyPaymentMethodsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/payment-methods/test_ID',
            ],
            'ByProjectKeyPaymentMethodsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/payment-methods/test_ID?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/payment-methods/test_ID',
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/payment-methods/test_ID?version=version',
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/payment-methods/test_ID?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/payment-methods/test_ID',
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
            'ByProjectKeyPaymentMethodsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyPaymentMethodsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyPaymentMethodsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyPaymentMethodsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPaymentMethodsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyPaymentMethodsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyPaymentMethodsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyPaymentMethodsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyPaymentMethodsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyPaymentMethodsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyPaymentMethodsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyPaymentMethodsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyPaymentMethodsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyPaymentMethodsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyPaymentMethodsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyPaymentMethodsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
