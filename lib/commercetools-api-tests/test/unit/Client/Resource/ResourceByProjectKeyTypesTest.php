<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTypesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTypesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyTypes
 */
class ResourceByProjectKeyTypesTest extends TestCase
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
            'ByProjectKeyTypesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/types?expand=expand',
            ],
            'ByProjectKeyTypesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/types?sort=sort',
            ],
            'ByProjectKeyTypesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/types?limit=limit',
            ],
            'ByProjectKeyTypesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/types?offset=offset',
            ],
            'ByProjectKeyTypesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/types?withTotal=withTotal',
            ],
            'ByProjectKeyTypesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/types?where=where',
            ],
            'ByProjectKeyTypesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/types?var.varName=var.varName',
            ],
            'ByProjectKeyTypesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->types()
                        ->get();
                },
                'get',
                'test_projectKey/types',
            ],
            'ByProjectKeyTypesHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/types?where=where',
            ],
            'ByProjectKeyTypesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->types()
                        ->head();
                },
                'head',
                'test_projectKey/types',
            ],
            'ByProjectKeyTypesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->types()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/types?expand=expand',
            ],
            'ByProjectKeyTypesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->types()
                        ->post(null);
                },
                'post',
                'test_projectKey/types',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyTypesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTypesKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->types()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyTypesKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/types/key={key}'
            ],
            'ResourceByProjectKeyTypesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTypesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->types()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyTypesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/types/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyTypesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                }
            ],
            'ByProjectKeyTypesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                }
            ],
            'ByProjectKeyTypesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyTypesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                200
            ],
            'ByProjectKeyTypesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                400
            ],
            'ByProjectKeyTypesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                401
            ],
            'ByProjectKeyTypesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                403
            ],
            'ByProjectKeyTypesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                404
            ],
            'ByProjectKeyTypesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                500
            ],
            'ByProjectKeyTypesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                502
            ],
            'ByProjectKeyTypesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                503
            ],
            'ByProjectKeyTypesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                599
            ],
            'ByProjectKeyTypesHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                200
            ],
            'ByProjectKeyTypesHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                404
            ],
            'ByProjectKeyTypesHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                400
            ],
            'ByProjectKeyTypesHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                401
            ],
            'ByProjectKeyTypesHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                403
            ],
            'ByProjectKeyTypesHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                500
            ],
            'ByProjectKeyTypesHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                502
            ],
            'ByProjectKeyTypesHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                503
            ],
            'ByProjectKeyTypesHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->head();
                },
                599
            ],
            'ByProjectKeyTypesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyTypesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyTypesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyTypesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyTypesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyTypesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyTypesPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyTypesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyTypesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
