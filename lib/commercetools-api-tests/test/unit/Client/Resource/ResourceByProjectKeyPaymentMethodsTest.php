<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentMethodsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentMethodsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentMethodsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentMethods
 */
class ResourceByProjectKeyPaymentMethodsTest extends TestCase
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
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
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
            'ByProjectKeyPaymentMethodsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/payment-methods?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/payment-methods?sort=sort',
            ],
            'ByProjectKeyPaymentMethodsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/payment-methods?limit=limit',
            ],
            'ByProjectKeyPaymentMethodsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/payment-methods?offset=offset',
            ],
            'ByProjectKeyPaymentMethodsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/payment-methods?withTotal=withTotal',
            ],
            'ByProjectKeyPaymentMethodsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/payment-methods?where=where',
            ],
            'ByProjectKeyPaymentMethodsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/payment-methods?var.varName=var.varName',
            ],
            'ByProjectKeyPaymentMethodsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->get();
                },
                'get',
                'test_projectKey/payment-methods',
            ],
            'ByProjectKeyPaymentMethodsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/payment-methods?where=where',
            ],
            'ByProjectKeyPaymentMethodsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->head();
                },
                'head',
                'test_projectKey/payment-methods',
            ],
            'ByProjectKeyPaymentMethodsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->paymentMethods()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/payment-methods?expand=expand',
            ],
            'ByProjectKeyPaymentMethodsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                'post',
                'test_projectKey/payment-methods',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyPaymentMethodsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPaymentMethodsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyPaymentMethodsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/payment-methods/key={key}'
            ],
            'ResourceByProjectKeyPaymentMethodsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPaymentMethodsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->paymentMethods()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyPaymentMethodsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/payment-methods/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyPaymentMethodsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                }
            ],
            'ByProjectKeyPaymentMethodsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                }
            ],
            'ByProjectKeyPaymentMethodsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPaymentMethodsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->get();
                },
                599
            ],
            'ByProjectKeyPaymentMethodsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                200
            ],
            'ByProjectKeyPaymentMethodsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                404
            ],
            'ByProjectKeyPaymentMethodsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                400
            ],
            'ByProjectKeyPaymentMethodsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                401
            ],
            'ByProjectKeyPaymentMethodsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                403
            ],
            'ByProjectKeyPaymentMethodsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                500
            ],
            'ByProjectKeyPaymentMethodsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                502
            ],
            'ByProjectKeyPaymentMethodsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                503
            ],
            'ByProjectKeyPaymentMethodsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->head();
                },
                599
            ],
            'ByProjectKeyPaymentMethodsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyPaymentMethodsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyPaymentMethodsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyPaymentMethodsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyPaymentMethodsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyPaymentMethodsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyPaymentMethodsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyPaymentMethodsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyPaymentMethodsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->paymentMethods()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
