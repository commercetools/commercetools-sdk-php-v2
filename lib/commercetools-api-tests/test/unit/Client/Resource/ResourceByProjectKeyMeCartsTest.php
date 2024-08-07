<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeCartsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeCartsReplicate;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeCarts
 */
class ResourceByProjectKeyMeCartsTest extends TestCase
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
            'ByProjectKeyMeCartsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/carts?expand=expand',
            ],
            'ByProjectKeyMeCartsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/me/carts?sort=sort',
            ],
            'ByProjectKeyMeCartsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/me/carts?limit=limit',
            ],
            'ByProjectKeyMeCartsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/me/carts?offset=offset',
            ],
            'ByProjectKeyMeCartsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/me/carts?withTotal=withTotal',
            ],
            'ByProjectKeyMeCartsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/me/carts?where=where',
            ],
            'ByProjectKeyMeCartsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/me/carts?var.varName=var.varName',
            ],
            'ByProjectKeyMeCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                'get',
                'test_projectKey/me/carts',
            ],
            'ByProjectKeyMeCartsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/me/carts?where=where',
            ],
            'ByProjectKeyMeCartsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                'head',
                'test_projectKey/me/carts',
            ],
            'ByProjectKeyMeCartsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->carts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/carts?expand=expand',
            ],
            'ByProjectKeyMeCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                'post',
                'test_projectKey/me/carts',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMeCartsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeCartsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyMeCartsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/me/carts/{ID}'
            ],
            'ResourceByProjectKeyMeCartsReplicate' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeCartsReplicate {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->carts()
                        ->replicate();
                },
                ResourceByProjectKeyMeCartsReplicate::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me/carts/replicate'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMeCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                }
            ],
            'ByProjectKeyMeCartsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                }
            ],
            'ByProjectKeyMeCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeCartsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeCartsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeCartsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeCartsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeCartsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeCartsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeCartsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeCartsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeCartsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeCartsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                200
            ],
            'ByProjectKeyMeCartsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                404
            ],
            'ByProjectKeyMeCartsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                400
            ],
            'ByProjectKeyMeCartsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                401
            ],
            'ByProjectKeyMeCartsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                403
            ],
            'ByProjectKeyMeCartsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                500
            ],
            'ByProjectKeyMeCartsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                502
            ],
            'ByProjectKeyMeCartsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                503
            ],
            'ByProjectKeyMeCartsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->head();
                },
                599
            ],
            'ByProjectKeyMeCartsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyMeCartsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeCartsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeCartsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeCartsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeCartsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeCartsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeCartsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeCartsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
