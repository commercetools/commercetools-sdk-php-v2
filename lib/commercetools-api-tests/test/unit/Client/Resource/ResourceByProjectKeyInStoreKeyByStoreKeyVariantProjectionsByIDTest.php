<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByID
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withPriceRecurrencePolicy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceRecurrencePolicy('priceRecurrencePolicy');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceRecurrencePolicy=priceRecurrencePolicy',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?localeProjection=localeProjection',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->variantProjections()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withStaged('staged');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceCurrency('priceCurrency');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceCountry('priceCountry');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceChannel('priceChannel');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withLocaleProjection('localeProjection');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?localeProjection=localeProjection',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withFilterAttributes('filter[attributes]');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->variantProjections()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/variant-projections/test_ID',
            ]
        ];
    }

    public function getResources()
    {
        return [
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyVariantProjectionsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                599
            ]
        ];
    }
}
