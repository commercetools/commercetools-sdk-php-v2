<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantsBulk;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyVariants
 */
class ResourceByProjectKeyVariantsTest extends TestCase
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
            'ByProjectKeyVariantsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/variants?where=where',
            ],
            'ByProjectKeyVariantsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/variants?expand=expand',
            ],
            'ByProjectKeyVariantsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/variants?sort=sort',
            ],
            'ByProjectKeyVariantsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/variants?limit=limit',
            ],
            'ByProjectKeyVariantsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/variants?offset=offset',
            ],
            'ByProjectKeyVariantsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/variants?withTotal=withTotal',
            ],
            'ByProjectKeyVariantsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/variants?var.varName=var.varName',
            ],
            'ByProjectKeyVariantsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->get();
                },
                'get',
                'test_projectKey/variants',
            ],
            'ByProjectKeyVariantsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/variants?expand=expand',
            ],
            'ByProjectKeyVariantsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->post(null);
                },
                'post',
                'test_projectKey/variants',
            ],
            'ByProjectKeyVariantsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/variants?where=where',
            ],
            'ByProjectKeyVariantsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->head();
                },
                'head',
                'test_projectKey/variants',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyVariantsBulk' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyVariantsBulk {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->bulk();
                },
                ResourceByProjectKeyVariantsBulk::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/variants/bulk'
            ],
            'ResourceByProjectKeyVariantsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyVariantsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyVariantsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/variants/key={key}'
            ],
            'ResourceByProjectKeyVariantsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyVariantsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyVariantsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/variants/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyVariantsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                }
            ],
            'ByProjectKeyVariantsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                }
            ],
            'ByProjectKeyVariantsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyVariantsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                200
            ],
            'ByProjectKeyVariantsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                400
            ],
            'ByProjectKeyVariantsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                401
            ],
            'ByProjectKeyVariantsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                403
            ],
            'ByProjectKeyVariantsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                404
            ],
            'ByProjectKeyVariantsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                500
            ],
            'ByProjectKeyVariantsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                502
            ],
            'ByProjectKeyVariantsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                503
            ],
            'ByProjectKeyVariantsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->get();
                },
                599
            ],
            'ByProjectKeyVariantsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyVariantsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyVariantsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyVariantsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyVariantsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyVariantsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyVariantsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyVariantsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyVariantsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyVariantsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                200
            ],
            'ByProjectKeyVariantsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                404
            ],
            'ByProjectKeyVariantsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                400
            ],
            'ByProjectKeyVariantsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                401
            ],
            'ByProjectKeyVariantsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                403
            ],
            'ByProjectKeyVariantsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                500
            ],
            'ByProjectKeyVariantsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                502
            ],
            'ByProjectKeyVariantsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                503
            ],
            'ByProjectKeyVariantsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->head();
                },
                599
            ]
        ];
    }
}
