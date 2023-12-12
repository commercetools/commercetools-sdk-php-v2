<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscounts
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
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
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->cartDiscounts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/cart-discounts',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->cartDiscounts()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'key' => 'test_key'],
                '/{projectKey}/in-store/key={storeKey}/cart-discounts/key={key}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->cartDiscounts()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscountsByID::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey', 'ID' => 'test_ID'],
                '/{projectKey}/in-store/key={storeKey}/cart-discounts/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->head();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartDiscountsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
