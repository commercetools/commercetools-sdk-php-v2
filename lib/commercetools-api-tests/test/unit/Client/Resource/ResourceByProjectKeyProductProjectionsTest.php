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
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjections
 */
class ResourceByProjectKeyProductProjectionsTest extends TestCase
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
            'ByProjectKeyProductProjectionsGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/product-projections?staged=staged',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/product-projections?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/product-projections?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/product-projections?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'get',
                'test_projectKey/product-projections?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/product-projections?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceRecurrencePolicy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceRecurrencePolicy('priceRecurrencePolicy');
                },
                'get',
                'test_projectKey/product-projections?priceRecurrencePolicy=priceRecurrencePolicy',
            ],
            'ByProjectKeyProductProjectionsGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/product-projections?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductProjectionsGet_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withStoreProjection('storeProjection');
                },
                'get',
                'test_projectKey/product-projections?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductProjectionsGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/product-projections?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyProductProjectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-projections?expand=expand',
            ],
            'ByProjectKeyProductProjectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/product-projections?sort=sort',
            ],
            'ByProjectKeyProductProjectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/product-projections?limit=limit',
            ],
            'ByProjectKeyProductProjectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/product-projections?offset=offset',
            ],
            'ByProjectKeyProductProjectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/product-projections?withTotal=withTotal',
            ],
            'ByProjectKeyProductProjectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/product-projections?where=where',
            ],
            'ByProjectKeyProductProjectionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/product-projections?var.varName=var.varName',
            ],
            'ByProjectKeyProductProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->get();
                },
                'get',
                'test_projectKey/product-projections',
            ],
            'ByProjectKeyProductProjectionsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/product-projections?where=where',
            ],
            'ByProjectKeyProductProjectionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->head();
                },
                'head',
                'test_projectKey/product-projections',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductProjectionsSearch' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsSearch {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->search();
                },
                ResourceByProjectKeyProductProjectionsSearch::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-projections/search'
            ],
            'ResourceByProjectKeyProductProjectionsSuggest' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsSuggest {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->suggest();
                },
                ResourceByProjectKeyProductProjectionsSuggest::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-projections/suggest'
            ],
            'ResourceByProjectKeyProductProjectionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyProductProjectionsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/product-projections/key={key}'
            ],
            'ResourceByProjectKeyProductProjectionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjectionsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyProductProjectionsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
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
            ],
            'ByProjectKeyProductProjectionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
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
            'ByProjectKeyProductProjectionsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductProjectionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductProjectionsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductProjectionsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                200
            ],
            'ByProjectKeyProductProjectionsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                404
            ],
            'ByProjectKeyProductProjectionsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                400
            ],
            'ByProjectKeyProductProjectionsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                401
            ],
            'ByProjectKeyProductProjectionsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                403
            ],
            'ByProjectKeyProductProjectionsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                500
            ],
            'ByProjectKeyProductProjectionsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                502
            ],
            'ByProjectKeyProductProjectionsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                503
            ],
            'ByProjectKeyProductProjectionsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->head();
                },
                599
            ]
        ];
    }
}
