<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjections
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceCountry=priceCountry',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceChannel=priceChannel',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withPriceRecurrencePolicy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withPriceRecurrencePolicy('priceRecurrencePolicy');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceRecurrencePolicy=priceRecurrencePolicy',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?localeProjection=localeProjection',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->variantProjections()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withStaged('staged');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceCurrency('priceCurrency');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceCountry('priceCountry');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceCountry=priceCountry',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withPriceChannel('priceChannel');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?priceChannel=priceChannel',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withLocaleProjection('localeProjection');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?localeProjection=localeProjection',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->head()
                        ->withFilterAttributes('filter[attributes]');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->variantProjections()
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->variantProjections()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'key' => 'test_key'],
                '/{projectKey}/in-store/key={storeKey}/variant-projections/key={key}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->variantProjections()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByID::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'ID' => 'test_ID'],
                '/{projectKey}/in-store/key={storeKey}/variant-projections/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->head();
                },
                599
            ]
        ];
    }
}
