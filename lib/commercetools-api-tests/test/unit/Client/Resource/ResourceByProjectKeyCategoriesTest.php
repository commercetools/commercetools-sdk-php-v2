<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCategoriesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCategoriesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCategories
 */
class ResourceByProjectKeyCategoriesTest extends TestCase
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
            'ByProjectKeyCategoriesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/categories?expand=expand',
            ],
            'ByProjectKeyCategoriesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/categories?sort=sort',
            ],
            'ByProjectKeyCategoriesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/categories?limit=limit',
            ],
            'ByProjectKeyCategoriesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/categories?offset=offset',
            ],
            'ByProjectKeyCategoriesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/categories?withTotal=withTotal',
            ],
            'ByProjectKeyCategoriesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/categories?where=where',
            ],
            'ByProjectKeyCategoriesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/categories?var.varName=var.varName',
            ],
            'ByProjectKeyCategoriesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                'get',
                '{projectKey}/categories',
            ],
            'ByProjectKeyCategoriesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/categories?expand=expand',
            ],
            'ByProjectKeyCategoriesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                'post',
                '{projectKey}/categories',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCategoriesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCategoriesKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key");
                },
                ResourceByProjectKeyCategoriesKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/categories/key={key}'
            ],
            'ResourceByProjectKeyCategoriesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCategoriesByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID");
                },
                ResourceByProjectKeyCategoriesByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/categories/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCategoriesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                }
            ],
            'ByProjectKeyCategoriesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCategoriesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                200
            ],
            'ByProjectKeyCategoriesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                400
            ],
            'ByProjectKeyCategoriesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                401
            ],
            'ByProjectKeyCategoriesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                403
            ],
            'ByProjectKeyCategoriesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                404
            ],
            'ByProjectKeyCategoriesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                500
            ],
            'ByProjectKeyCategoriesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->get();
                },
                503
            ],
            'ByProjectKeyCategoriesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyCategoriesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCategoriesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCategoriesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCategoriesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCategoriesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCategoriesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCategoriesPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
