<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscountsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscountsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscounts
 */
class ResourceByProjectKeyCartDiscountsTest extends TestCase
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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyCartDiscountsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/cart-discounts?expand=expand',
            ],
            'ByProjectKeyCartDiscountsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/cart-discounts?sort=sort',
            ],
            'ByProjectKeyCartDiscountsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/cart-discounts?limit=limit',
            ],
            'ByProjectKeyCartDiscountsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/cart-discounts?offset=offset',
            ],
            'ByProjectKeyCartDiscountsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/cart-discounts?withTotal=withTotal',
            ],
            'ByProjectKeyCartDiscountsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/cart-discounts?where=where',
            ],
            'ByProjectKeyCartDiscountsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/cart-discounts?var.varName=var.varName',
            ],
            'ByProjectKeyCartDiscountsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                'get',
                'test_projectKey/cart-discounts',
            ],
            'ByProjectKeyCartDiscountsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->cartDiscounts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/cart-discounts?expand=expand',
            ],
            'ByProjectKeyCartDiscountsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                'post',
                'test_projectKey/cart-discounts',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCartDiscountsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCartDiscountsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyCartDiscountsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/cart-discounts/key={key}'
            ],
            'ResourceByProjectKeyCartDiscountsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCartDiscountsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyCartDiscountsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/cart-discounts/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCartDiscountsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                }
            ],
            'ByProjectKeyCartDiscountsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCartDiscountsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                200
            ],
            'ByProjectKeyCartDiscountsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                400
            ],
            'ByProjectKeyCartDiscountsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                401
            ],
            'ByProjectKeyCartDiscountsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                403
            ],
            'ByProjectKeyCartDiscountsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                404
            ],
            'ByProjectKeyCartDiscountsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                500
            ],
            'ByProjectKeyCartDiscountsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                503
            ],
            'ByProjectKeyCartDiscountsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                599
            ],
            'ByProjectKeyCartDiscountsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyCartDiscountsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCartDiscountsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCartDiscountsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCartDiscountsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCartDiscountsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCartDiscountsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCartDiscountsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCartDiscountsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
