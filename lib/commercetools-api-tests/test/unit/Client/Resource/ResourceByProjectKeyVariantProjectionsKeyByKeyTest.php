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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantProjectionsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantProjectionsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantProjectionsKeyByKey
 */
class ResourceByProjectKeyVariantProjectionsKeyByKeyTest extends TestCase
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
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?staged=staged',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?priceCountry=priceCountry',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?priceChannel=priceChannel',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withPriceRecurrencePolicy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withPriceRecurrencePolicy('priceRecurrencePolicy');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?priceRecurrencePolicy=priceRecurrencePolicy',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?localeProjection=localeProjection',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/variant-projections/key=test_key?expand=expand',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/variant-projections/key=test_key',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->head()
                        ->withStaged('staged');
                },
                'head',
                'test_projectKey/variant-projections/key=test_key?staged=staged',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->head()
                        ->withPriceCurrency('priceCurrency');
                },
                'head',
                'test_projectKey/variant-projections/key=test_key?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->head()
                        ->withPriceCountry('priceCountry');
                },
                'head',
                'test_projectKey/variant-projections/key=test_key?priceCountry=priceCountry',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->head()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'head',
                'test_projectKey/variant-projections/key=test_key?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->head()
                        ->withPriceChannel('priceChannel');
                },
                'head',
                'test_projectKey/variant-projections/key=test_key?priceChannel=priceChannel',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->head()
                        ->withLocaleProjection('localeProjection');
                },
                'head',
                'test_projectKey/variant-projections/key=test_key?localeProjection=localeProjection',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variantProjections()
                        ->withKey('test_key')
                        ->head()
                        ->withFilterAttributes('filter[attributes]');
                },
                'head',
                'test_projectKey/variant-projections/key=test_key?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variantProjections()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/variant-projections/key=test_key',
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
            'ByProjectKeyVariantProjectionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyVariantProjectionsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyVariantProjectionsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variantProjections()
                        ->withKey("key")
                        ->head();
                },
                599
            ]
        ];
    }
}
