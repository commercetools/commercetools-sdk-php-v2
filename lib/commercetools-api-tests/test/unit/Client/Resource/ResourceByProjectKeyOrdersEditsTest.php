<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEditsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEditsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEdits
 */
class ResourceByProjectKeyOrdersEditsTest extends TestCase
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
            'ByProjectKeyOrdersEditsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/orders/edits?expand=expand',
            ],
            'ByProjectKeyOrdersEditsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/orders/edits?sort=sort',
            ],
            'ByProjectKeyOrdersEditsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/orders/edits?limit=limit',
            ],
            'ByProjectKeyOrdersEditsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/orders/edits?offset=offset',
            ],
            'ByProjectKeyOrdersEditsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/orders/edits?withTotal=withTotal',
            ],
            'ByProjectKeyOrdersEditsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/orders/edits?where=where',
            ],
            'ByProjectKeyOrdersEditsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/orders/edits?var.varName=var.varName',
            ],
            'ByProjectKeyOrdersEditsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                'get',
                'test_projectKey/orders/edits',
            ],
            'ByProjectKeyOrdersEditsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/orders/edits?where=where',
            ],
            'ByProjectKeyOrdersEditsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                'head',
                'test_projectKey/orders/edits',
            ],
            'ByProjectKeyOrdersEditsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/orders/edits?expand=expand',
            ],
            'ByProjectKeyOrdersEditsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                'post',
                'test_projectKey/orders/edits',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyOrdersEditsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrdersEditsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyOrdersEditsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/orders/edits/key={key}'
            ],
            'ResourceByProjectKeyOrdersEditsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrdersEditsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyOrdersEditsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/orders/edits/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyOrdersEditsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                }
            ],
            'ByProjectKeyOrdersEditsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                }
            ],
            'ByProjectKeyOrdersEditsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyOrdersEditsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                200
            ],
            'ByProjectKeyOrdersEditsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                400
            ],
            'ByProjectKeyOrdersEditsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                401
            ],
            'ByProjectKeyOrdersEditsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                403
            ],
            'ByProjectKeyOrdersEditsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                404
            ],
            'ByProjectKeyOrdersEditsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                500
            ],
            'ByProjectKeyOrdersEditsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                502
            ],
            'ByProjectKeyOrdersEditsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                503
            ],
            'ByProjectKeyOrdersEditsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                599
            ],
            'ByProjectKeyOrdersEditsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                200
            ],
            'ByProjectKeyOrdersEditsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                404
            ],
            'ByProjectKeyOrdersEditsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                400
            ],
            'ByProjectKeyOrdersEditsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                401
            ],
            'ByProjectKeyOrdersEditsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                403
            ],
            'ByProjectKeyOrdersEditsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                500
            ],
            'ByProjectKeyOrdersEditsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                502
            ],
            'ByProjectKeyOrdersEditsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                503
            ],
            'ByProjectKeyOrdersEditsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->head();
                },
                599
            ],
            'ByProjectKeyOrdersEditsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyOrdersEditsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyOrdersEditsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyOrdersEditsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyOrdersEditsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyOrdersEditsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyOrdersEditsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyOrdersEditsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyOrdersEditsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
