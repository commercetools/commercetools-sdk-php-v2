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
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsSearch;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProducts
 */
class ResourceByProjectKeyProductsTest extends TestCase
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
            'ByProjectKeyProductsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/products?where=where',
            ],
            'ByProjectKeyProductsGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/products?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/products?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/products?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsGet_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'get',
                'test_projectKey/products?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyProductsGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/products?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/products?expand=expand',
            ],
            'ByProjectKeyProductsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/products?sort=sort',
            ],
            'ByProjectKeyProductsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/products?limit=limit',
            ],
            'ByProjectKeyProductsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/products?offset=offset',
            ],
            'ByProjectKeyProductsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/products?withTotal=withTotal',
            ],
            'ByProjectKeyProductsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/products?var.varName=var.varName',
            ],
            'ByProjectKeyProductsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->get();
                },
                'get',
                'test_projectKey/products',
            ],
            'ByProjectKeyProductsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/products?where=where',
            ],
            'ByProjectKeyProductsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->head();
                },
                'head',
                'test_projectKey/products',
            ],
            'ByProjectKeyProductsPost_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCurrency('priceCurrency');
                },
                'post',
                'test_projectKey/products?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsPost_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCountry('priceCountry');
                },
                'post',
                'test_projectKey/products?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsPost_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'post',
                'test_projectKey/products?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsPost_withPriceCustomerGroupAssignments' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCustomerGroupAssignments('priceCustomerGroupAssignments');
                },
                'post',
                'test_projectKey/products?priceCustomerGroupAssignments=priceCustomerGroupAssignments',
            ],
            'ByProjectKeyProductsPost_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceChannel('priceChannel');
                },
                'post',
                'test_projectKey/products?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/products?expand=expand',
            ],
            'ByProjectKeyProductsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->post(null);
                },
                'post',
                'test_projectKey/products',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyProductsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/products/key={key}'
            ],
            'ResourceByProjectKeyProductsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyProductsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/products/{ID}'
            ],
            'ResourceByProjectKeyProductsSearch' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsSearch {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->search();
                },
                ResourceByProjectKeyProductsSearch::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/products/search'
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
            'ByProjectKeyProductsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
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
            'ByProjectKeyProductsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                502
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
            'ByProjectKeyProductsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                200
            ],
            'ByProjectKeyProductsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                404
            ],
            'ByProjectKeyProductsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                400
            ],
            'ByProjectKeyProductsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                401
            ],
            'ByProjectKeyProductsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                403
            ],
            'ByProjectKeyProductsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                500
            ],
            'ByProjectKeyProductsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                502
            ],
            'ByProjectKeyProductsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                503
            ],
            'ByProjectKeyProductsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->head();
                },
                599
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
            'ByProjectKeyProductsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                502
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
            'ByProjectKeyProductsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
