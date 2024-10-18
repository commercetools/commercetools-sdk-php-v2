<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTailoringByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTailoringKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTailoring
 */
class ResourceByProjectKeyProductTailoringTest extends TestCase
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
            'ByProjectKeyProductTailoringGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-tailoring?expand=expand',
            ],
            'ByProjectKeyProductTailoringGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/product-tailoring?sort=sort',
            ],
            'ByProjectKeyProductTailoringGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/product-tailoring?limit=limit',
            ],
            'ByProjectKeyProductTailoringGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/product-tailoring?offset=offset',
            ],
            'ByProjectKeyProductTailoringGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/product-tailoring?withTotal=withTotal',
            ],
            'ByProjectKeyProductTailoringGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/product-tailoring?where=where',
            ],
            'ByProjectKeyProductTailoringGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/product-tailoring?var.varName=var.varName',
            ],
            'ByProjectKeyProductTailoringGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->get();
                },
                'get',
                'test_projectKey/product-tailoring',
            ],
            'ByProjectKeyProductTailoringHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/product-tailoring?where=where',
            ],
            'ByProjectKeyProductTailoringHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->head();
                },
                'head',
                'test_projectKey/product-tailoring',
            ],
            'ByProjectKeyProductTailoringPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-tailoring?expand=expand',
            ],
            'ByProjectKeyProductTailoringPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                'post',
                'test_projectKey/product-tailoring',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductTailoringKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductTailoringKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyProductTailoringKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/product-tailoring/key={key}'
            ],
            'ResourceByProjectKeyProductTailoringByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductTailoringByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyProductTailoringByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/product-tailoring/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductTailoringGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                }
            ],
            'ByProjectKeyProductTailoringHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                }
            ],
            'ByProjectKeyProductTailoringPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductTailoringGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductTailoringGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductTailoringGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductTailoringGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductTailoringGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductTailoringGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductTailoringGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductTailoringGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductTailoringGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductTailoringHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                200
            ],
            'ByProjectKeyProductTailoringHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                404
            ],
            'ByProjectKeyProductTailoringHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                400
            ],
            'ByProjectKeyProductTailoringHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                401
            ],
            'ByProjectKeyProductTailoringHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                403
            ],
            'ByProjectKeyProductTailoringHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                500
            ],
            'ByProjectKeyProductTailoringHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                502
            ],
            'ByProjectKeyProductTailoringHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                503
            ],
            'ByProjectKeyProductTailoringHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->head();
                },
                599
            ],
            'ByProjectKeyProductTailoringPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyProductTailoringPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductTailoringPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductTailoringPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductTailoringPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductTailoringPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductTailoringPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyProductTailoringPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductTailoringPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
