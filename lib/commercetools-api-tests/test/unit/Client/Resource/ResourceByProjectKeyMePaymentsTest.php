<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMePaymentsByID;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMePayments
 */
class ResourceByProjectKeyMePaymentsTest extends TestCase
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
            'ByProjectKeyMePaymentsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/payments?expand=expand',
            ],
            'ByProjectKeyMePaymentsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/me/payments?sort=sort',
            ],
            'ByProjectKeyMePaymentsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/me/payments?limit=limit',
            ],
            'ByProjectKeyMePaymentsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/me/payments?offset=offset',
            ],
            'ByProjectKeyMePaymentsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/me/payments?withTotal=withTotal',
            ],
            'ByProjectKeyMePaymentsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/me/payments?where=where',
            ],
            'ByProjectKeyMePaymentsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/me/payments?var.varName=var.varName',
            ],
            'ByProjectKeyMePaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                'get',
                'test_projectKey/me/payments',
            ],
            'ByProjectKeyMePaymentsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/me/payments?where=where',
            ],
            'ByProjectKeyMePaymentsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                'head',
                'test_projectKey/me/payments',
            ],
            'ByProjectKeyMePaymentsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->payments()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/payments?expand=expand',
            ],
            'ByProjectKeyMePaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                'post',
                'test_projectKey/me/payments',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMePaymentsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMePaymentsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->payments()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyMePaymentsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/me/payments/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMePaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                }
            ],
            'ByProjectKeyMePaymentsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                }
            ],
            'ByProjectKeyMePaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMePaymentsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                200
            ],
            'ByProjectKeyMePaymentsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                400
            ],
            'ByProjectKeyMePaymentsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                401
            ],
            'ByProjectKeyMePaymentsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                403
            ],
            'ByProjectKeyMePaymentsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                404
            ],
            'ByProjectKeyMePaymentsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                500
            ],
            'ByProjectKeyMePaymentsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                502
            ],
            'ByProjectKeyMePaymentsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                503
            ],
            'ByProjectKeyMePaymentsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                599
            ],
            'ByProjectKeyMePaymentsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                200
            ],
            'ByProjectKeyMePaymentsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                404
            ],
            'ByProjectKeyMePaymentsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                400
            ],
            'ByProjectKeyMePaymentsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                401
            ],
            'ByProjectKeyMePaymentsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                403
            ],
            'ByProjectKeyMePaymentsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                500
            ],
            'ByProjectKeyMePaymentsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                502
            ],
            'ByProjectKeyMePaymentsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                503
            ],
            'ByProjectKeyMePaymentsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->head();
                },
                599
            ],
            'ByProjectKeyMePaymentsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyMePaymentsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMePaymentsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMePaymentsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMePaymentsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMePaymentsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMePaymentsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMePaymentsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMePaymentsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
