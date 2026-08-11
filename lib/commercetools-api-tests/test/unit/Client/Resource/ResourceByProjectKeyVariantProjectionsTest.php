<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantProjectionsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantProjectionsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantProjectionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantProjectionsHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantProjections
 */
class ResourceByProjectKeyVariantProjectionsTest extends TestCase
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
            'ByProjectKeyVariantProjectionsGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/variant-projections?staged=staged',
            ],
            'ByProjectKeyVariantProjectionsGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/variant-projections?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyVariantProjectionsGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/variant-projections?priceCountry=priceCountry',
            ],
            'ByProjectKeyVariantProjectionsGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/variant-projections?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyVariantProjectionsGet_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'get',
                'test_projectKey/variant-projections?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyVariantProjectionsGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/variant-projections?priceChannel=priceChannel',
            ],
            'ByProjectKeyVariantProjectionsGet_withPriceRecurrencePolicy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceRecurrencePolicy('priceRecurrencePolicy');
                },
                'get',
                'test_projectKey/variant-projections?priceRecurrencePolicy=priceRecurrencePolicy',
            ],
            'ByProjectKeyVariantProjectionsGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/variant-projections?localeProjection=localeProjection',
            ],
            'ByProjectKeyVariantProjectionsGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/variant-projections?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyVariantProjectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/variant-projections?expand=expand',
            ],
            'ByProjectKeyVariantProjectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/variant-projections?sort=sort',
            ],
            'ByProjectKeyVariantProjectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/variant-projections?limit=limit',
            ],
            'ByProjectKeyVariantProjectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/variant-projections?offset=offset',
            ],
            'ByProjectKeyVariantProjectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/variant-projections?withTotal=withTotal',
            ],
            'ByProjectKeyVariantProjectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/variant-projections?where=where',
            ],
            'ByProjectKeyVariantProjectionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/variant-projections?var.varName=var.varName',
            ],
            'ByProjectKeyVariantProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->get();
                },
                'get',
                'test_projectKey/variant-projections',
            ],
            'ByProjectKeyVariantProjectionsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/variant-projections?where=where',
            ],
            'ByProjectKeyVariantProjectionsHead_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withStaged('staged');
                },
                'head',
                'test_projectKey/variant-projections?staged=staged',
            ],
            'ByProjectKeyVariantProjectionsHead_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceCurrency('priceCurrency');
                },
                'head',
                'test_projectKey/variant-projections?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyVariantProjectionsHead_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceCountry('priceCountry');
                },
                'head',
                'test_projectKey/variant-projections?priceCountry=priceCountry',
            ],
            'ByProjectKeyVariantProjectionsHead_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'head',
                'test_projectKey/variant-projections?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyVariantProjectionsHead_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceChannel('priceChannel');
                },
                'head',
                'test_projectKey/variant-projections?priceChannel=priceChannel',
            ],
            'ByProjectKeyVariantProjectionsHead_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withLocaleProjection('localeProjection');
                },
                'head',
                'test_projectKey/variant-projections?localeProjection=localeProjection',
            ],
            'ByProjectKeyVariantProjectionsHead_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->head()
                        ->withFilterAttributes('filter[attributes]');
                },
                'head',
                'test_projectKey/variant-projections?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyVariantProjectionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->head();
                },
                'head',
                'test_projectKey/variant-projections',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyVariantProjectionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyVariantProjectionsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyVariantProjectionsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/variant-projections/key={key}'
            ],
            'ResourceByProjectKeyVariantProjectionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyVariantProjectionsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyVariantProjectionsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/variant-projections/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyVariantProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                }
            ],
            'ByProjectKeyVariantProjectionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyVariantProjectionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                200
            ],
            'ByProjectKeyVariantProjectionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                400
            ],
            'ByProjectKeyVariantProjectionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                401
            ],
            'ByProjectKeyVariantProjectionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                403
            ],
            'ByProjectKeyVariantProjectionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                404
            ],
            'ByProjectKeyVariantProjectionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                500
            ],
            'ByProjectKeyVariantProjectionsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                502
            ],
            'ByProjectKeyVariantProjectionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                503
            ],
            'ByProjectKeyVariantProjectionsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->get();
                },
                599
            ],
            'ByProjectKeyVariantProjectionsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                200
            ],
            'ByProjectKeyVariantProjectionsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                404
            ],
            'ByProjectKeyVariantProjectionsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                400
            ],
            'ByProjectKeyVariantProjectionsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                401
            ],
            'ByProjectKeyVariantProjectionsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                403
            ],
            'ByProjectKeyVariantProjectionsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                500
            ],
            'ByProjectKeyVariantProjectionsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                502
            ],
            'ByProjectKeyVariantProjectionsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                503
            ],
            'ByProjectKeyVariantProjectionsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->head();
                },
                599
            ]
        ];
    }
}
