<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsKeyByKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsSearch;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsSuggest;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjections
 */
class ResourceByProjectKeyProductProjectionsTest extends TestCase
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
            'ByProjectKeyProductProjectionsGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                '{projectKey}/product-projections?staged=staged',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                '{projectKey}/product-projections?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                '{projectKey}/product-projections?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                '{projectKey}/product-projections?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                '{projectKey}/product-projections?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductProjectionsGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                '{projectKey}/product-projections?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductProjectionsGet_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withStoreProjection('storeProjection');
                },
                'get',
                '{projectKey}/product-projections?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductProjectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/product-projections?expand=expand',
            ],
            'ByProjectKeyProductProjectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/product-projections?sort=sort',
            ],
            'ByProjectKeyProductProjectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/product-projections?limit=limit',
            ],
            'ByProjectKeyProductProjectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/product-projections?offset=offset',
            ],
            'ByProjectKeyProductProjectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/product-projections?withTotal=withTotal',
            ],
            'ByProjectKeyProductProjectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/product-projections?where=where',
            ],
            'ByProjectKeyProductProjectionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/product-projections?var.varName=var.varName',
            ],
            'ByProjectKeyProductProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                'get',
                '{projectKey}/product-projections',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductProjectionsSearch' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsSearch {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->search();
                },
                ResourceByProjectKeyProductProjectionsSearch::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/product-projections/search'
            ],
            'ResourceByProjectKeyProductProjectionsSuggest' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsSuggest {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest();
                },
                ResourceByProjectKeyProductProjectionsSuggest::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/product-projections/suggest'
            ],
            'ResourceByProjectKeyProductProjectionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key");
                },
                ResourceByProjectKeyProductProjectionsKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/product-projections/key={key}'
            ],
            'ResourceByProjectKeyProductProjectionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID");
                },
                ResourceByProjectKeyProductProjectionsByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/product-projections/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductProjectionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductProjectionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductProjectionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductProjectionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductProjectionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductProjectionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductProjectionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                503
            ]
        ];
    }
}
