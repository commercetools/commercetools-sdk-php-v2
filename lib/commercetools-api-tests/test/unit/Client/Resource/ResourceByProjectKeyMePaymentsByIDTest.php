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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMePaymentsByID
 */
class ResourceByProjectKeyMePaymentsByIDTest extends TestCase
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
            'ByProjectKeyMePaymentsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/payments/test_ID?expand=expand',
            ],
            'ByProjectKeyMePaymentsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/me/payments/test_ID',
            ],
            'ByProjectKeyMePaymentsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/payments/test_ID?expand=expand',
            ],
            'ByProjectKeyMePaymentsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/payments/test_ID',
            ],
            'ByProjectKeyMePaymentsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/me/payments/test_ID?version=version',
            ],
            'ByProjectKeyMePaymentsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/me/payments/test_ID?expand=expand',
            ],
            'ByProjectKeyMePaymentsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/me/payments/test_ID',
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
            'ByProjectKeyMePaymentsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyMePaymentsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyMePaymentsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMePaymentsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMePaymentsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMePaymentsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMePaymentsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMePaymentsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMePaymentsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMePaymentsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMePaymentsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMePaymentsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMePaymentsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMePaymentsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMePaymentsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMePaymentsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMePaymentsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMePaymentsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMePaymentsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMePaymentsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMePaymentsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMePaymentsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyMePaymentsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMePaymentsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMePaymentsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMePaymentsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMePaymentsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMePaymentsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMePaymentsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMePaymentsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMePaymentsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMePaymentsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
