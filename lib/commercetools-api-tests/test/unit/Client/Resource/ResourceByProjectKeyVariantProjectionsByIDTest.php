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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantProjectionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantProjectionsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantProjectionsByID
 */
class ResourceByProjectKeyVariantProjectionsByIDTest extends TestCase
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
            'ByProjectKeyVariantProjectionsByIDGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?staged=staged',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withPriceRecurrencePolicy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceRecurrencePolicy('priceRecurrencePolicy');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?priceRecurrencePolicy=priceRecurrencePolicy',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?localeProjection=localeProjection',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyVariantProjectionsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/variant-projections/test_ID?expand=expand',
            ],
            'ByProjectKeyVariantProjectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/variant-projections/test_ID',
            ],
            'ByProjectKeyVariantProjectionsByIDHead_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withStaged('staged');
                },
                'head',
                'test_projectKey/variant-projections/test_ID?staged=staged',
            ],
            'ByProjectKeyVariantProjectionsByIDHead_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceCurrency('priceCurrency');
                },
                'head',
                'test_projectKey/variant-projections/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyVariantProjectionsByIDHead_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceCountry('priceCountry');
                },
                'head',
                'test_projectKey/variant-projections/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyVariantProjectionsByIDHead_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'head',
                'test_projectKey/variant-projections/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyVariantProjectionsByIDHead_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withPriceChannel('priceChannel');
                },
                'head',
                'test_projectKey/variant-projections/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyVariantProjectionsByIDHead_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withLocaleProjection('localeProjection');
                },
                'head',
                'test_projectKey/variant-projections/test_ID?localeProjection=localeProjection',
            ],
            'ByProjectKeyVariantProjectionsByIDHead_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withId('test_ID')
                        ->head()
                        ->withFilterAttributes('filter[attributes]');
                },
                'head',
                'test_projectKey/variant-projections/test_ID?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyVariantProjectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/variant-projections/test_ID',
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
            'ByProjectKeyVariantProjectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyVariantProjectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
            'ByProjectKeyVariantProjectionsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyVariantProjectionsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyVariantProjectionsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyVariantProjectionsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyVariantProjectionsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyVariantProjectionsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyVariantProjectionsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyVariantProjectionsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyVariantProjectionsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyVariantProjectionsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyVariantProjectionsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyVariantProjectionsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyVariantProjectionsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyVariantProjectionsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyVariantProjectionsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyVariantProjectionsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyVariantProjectionsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyVariantProjectionsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withId("ID")
                        ->head();
                },
                599
            ]
        ];
    }
}
