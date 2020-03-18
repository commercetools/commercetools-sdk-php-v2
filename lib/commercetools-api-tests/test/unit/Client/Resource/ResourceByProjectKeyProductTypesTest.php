<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypesKeyByKey;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypes
 */
class ResourceByProjectKeyProductTypesTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
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
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyProductTypesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/product-types?expand=expand',
            ],
            'ByProjectKeyProductTypesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/product-types?sort=sort',
            ],
            'ByProjectKeyProductTypesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/product-types?limit=limit',
            ],
            'ByProjectKeyProductTypesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/product-types?offset=offset',
            ],
            'ByProjectKeyProductTypesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/product-types?withTotal=withTotal',
            ],
            'ByProjectKeyProductTypesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/product-types?where=where',
            ],
            'ByProjectKeyProductTypesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/product-types?var.varName=var.varName',
            ],
            'ByProjectKeyProductTypesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                'get',
                '{projectKey}/product-types',
            ],
            'ByProjectKeyProductTypesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/product-types?expand=expand',
            ],
            'ByProjectKeyProductTypesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                'post',
                '{projectKey}/product-types',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductTypesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductTypesKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key");
                },
                ResourceByProjectKeyProductTypesKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/product-types/key={key}'
            ],
            'ResourceByProjectKeyProductTypesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductTypesByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID");
                },
                ResourceByProjectKeyProductTypesByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/product-types/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductTypesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                }
            ],
            'ByProjectKeyProductTypesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductTypesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductTypesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductTypesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductTypesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductTypesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductTypesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductTypesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductTypesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyProductTypesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductTypesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductTypesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductTypesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductTypesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductTypesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductTypesPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
