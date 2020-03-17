<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProducts
 */
class ResourceByProjectKeyProductsTest extends TestCase
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
        };
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
            'ByProjectKeyProductsGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                '{projectKey}/products?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                '{projectKey}/products?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                '{projectKey}/products?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                '{projectKey}/products?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                '{projectKey}/products?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsGet_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withStoreProjection('storeProjection');
                },
                'get',
                '{projectKey}/products?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/products?expand=expand',
            ],
            'ByProjectKeyProductsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/products?sort=sort',
            ],
            'ByProjectKeyProductsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/products?limit=limit',
            ],
            'ByProjectKeyProductsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/products?offset=offset',
            ],
            'ByProjectKeyProductsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/products?withTotal=withTotal',
            ],
            'ByProjectKeyProductsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/products?where=where',
            ],
            'ByProjectKeyProductsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/products?var.varName=var.varName',
            ],
            'ByProjectKeyProductsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                'get',
                '{projectKey}/products',
            ],
            'ByProjectKeyProductsPost_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCurrency('priceCurrency');
                },
                'post',
                '{projectKey}/products?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsPost_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCountry('priceCountry');
                },
                'post',
                '{projectKey}/products?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsPost_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'post',
                '{projectKey}/products?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsPost_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceChannel('priceChannel');
                },
                'post',
                '{projectKey}/products?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsPost_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withLocaleProjection('localeProjection');
                },
                'post',
                '{projectKey}/products?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsPost_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withStoreProjection('storeProjection');
                },
                'post',
                '{projectKey}/products?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/products?expand=expand',
            ],
            'ByProjectKeyProductsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                'post',
                '{projectKey}/products',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key");
                },
                ResourceByProjectKeyProductsKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/products/key={key}'
            ],
            'ResourceByProjectKeyProductsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID");
                },
                ResourceByProjectKeyProductsByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/products/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                }
            ],
            'ByProjectKeyProductsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyProductsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
