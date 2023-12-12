<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyPayments
 */
class ResourceByProjectKeyPaymentsTest extends TestCase
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
            'ByProjectKeyPaymentsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/payments?sort=sort',
            ],
            'ByProjectKeyPaymentsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/payments?limit=limit',
            ],
            'ByProjectKeyPaymentsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/payments?offset=offset',
            ],
            'ByProjectKeyPaymentsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/payments?withTotal=withTotal',
            ],
            'ByProjectKeyPaymentsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/payments?where=where',
            ],
            'ByProjectKeyPaymentsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/payments?var.varName=var.varName',
            ],
            'ByProjectKeyPaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->payments()
                        ->get();
                },
                'get',
                'test_projectKey/payments',
            ],
            'ByProjectKeyPaymentsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/payments?where=where',
            ],
            'ByProjectKeyPaymentsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->payments()
                        ->head();
                },
                'head',
                'test_projectKey/payments',
            ],
            'ByProjectKeyPaymentsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->payments()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->payments()
                        ->post(null);
                },
                'post',
                'test_projectKey/payments',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyPaymentsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPaymentsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->payments()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyPaymentsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/payments/key={key}'
            ],
            'ResourceByProjectKeyPaymentsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPaymentsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->payments()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyPaymentsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/payments/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyPaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                }
            ],
            'ByProjectKeyPaymentsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                }
            ],
            'ByProjectKeyPaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPaymentsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                200
            ],
            'ByProjectKeyPaymentsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                400
            ],
            'ByProjectKeyPaymentsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                401
            ],
            'ByProjectKeyPaymentsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                403
            ],
            'ByProjectKeyPaymentsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                404
            ],
            'ByProjectKeyPaymentsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                500
            ],
            'ByProjectKeyPaymentsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                502
            ],
            'ByProjectKeyPaymentsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                503
            ],
            'ByProjectKeyPaymentsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                599
            ],
            'ByProjectKeyPaymentsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                200
            ],
            'ByProjectKeyPaymentsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                404
            ],
            'ByProjectKeyPaymentsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                400
            ],
            'ByProjectKeyPaymentsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                401
            ],
            'ByProjectKeyPaymentsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                403
            ],
            'ByProjectKeyPaymentsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                500
            ],
            'ByProjectKeyPaymentsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                502
            ],
            'ByProjectKeyPaymentsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                503
            ],
            'ByProjectKeyPaymentsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->head();
                },
                599
            ],
            'ByProjectKeyPaymentsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyPaymentsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyPaymentsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyPaymentsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyPaymentsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyPaymentsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyPaymentsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyPaymentsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyPaymentsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
