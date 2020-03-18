<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategoriesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategoriesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategories
 */
class ResourceByProjectKeyTaxCategoriesTest extends TestCase
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
            'ByProjectKeyTaxCategoriesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/tax-categories?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/tax-categories?sort=sort',
            ],
            'ByProjectKeyTaxCategoriesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/tax-categories?limit=limit',
            ],
            'ByProjectKeyTaxCategoriesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/tax-categories?offset=offset',
            ],
            'ByProjectKeyTaxCategoriesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/tax-categories?withTotal=withTotal',
            ],
            'ByProjectKeyTaxCategoriesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/tax-categories?where=where',
            ],
            'ByProjectKeyTaxCategoriesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/tax-categories?var.varName=var.varName',
            ],
            'ByProjectKeyTaxCategoriesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                'get',
                '{projectKey}/tax-categories',
            ],
            'ByProjectKeyTaxCategoriesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/tax-categories?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                'post',
                '{projectKey}/tax-categories',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyTaxCategoriesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTaxCategoriesKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key");
                },
                ResourceByProjectKeyTaxCategoriesKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/tax-categories/key={key}'
            ],
            'ResourceByProjectKeyTaxCategoriesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTaxCategoriesByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID");
                },
                ResourceByProjectKeyTaxCategoriesByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/tax-categories/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyTaxCategoriesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                }
            ],
            'ByProjectKeyTaxCategoriesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyTaxCategoriesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                200
            ],
            'ByProjectKeyTaxCategoriesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                400
            ],
            'ByProjectKeyTaxCategoriesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                401
            ],
            'ByProjectKeyTaxCategoriesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                403
            ],
            'ByProjectKeyTaxCategoriesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                404
            ],
            'ByProjectKeyTaxCategoriesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                500
            ],
            'ByProjectKeyTaxCategoriesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->get();
                },
                503
            ],
            'ByProjectKeyTaxCategoriesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyTaxCategoriesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyTaxCategoriesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyTaxCategoriesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyTaxCategoriesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyTaxCategoriesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyTaxCategoriesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyTaxCategoriesPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
