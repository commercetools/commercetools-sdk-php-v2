<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscountsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscountsKeyByKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscountsMatching;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscounts
 */
class ResourceByProjectKeyProductDiscountsTest extends TestCase
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
            'ByProjectKeyProductDiscountsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/product-discounts?expand=expand',
            ],
            'ByProjectKeyProductDiscountsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/product-discounts?sort=sort',
            ],
            'ByProjectKeyProductDiscountsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/product-discounts?limit=limit',
            ],
            'ByProjectKeyProductDiscountsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/product-discounts?offset=offset',
            ],
            'ByProjectKeyProductDiscountsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/product-discounts?withTotal=withTotal',
            ],
            'ByProjectKeyProductDiscountsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/product-discounts?where=where',
            ],
            'ByProjectKeyProductDiscountsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/product-discounts?var.varName=var.varName',
            ],
            'ByProjectKeyProductDiscountsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                'get',
                '{projectKey}/product-discounts',
            ],
            'ByProjectKeyProductDiscountsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/product-discounts?expand=expand',
            ],
            'ByProjectKeyProductDiscountsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                'post',
                '{projectKey}/product-discounts',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductDiscountsMatching' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductDiscountsMatching {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->matching();
                },
                ResourceByProjectKeyProductDiscountsMatching::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/product-discounts/matching'
            ],
            'ResourceByProjectKeyProductDiscountsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductDiscountsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withKey("key");
                },
                ResourceByProjectKeyProductDiscountsKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/product-discounts/key={key}'
            ],
            'ResourceByProjectKeyProductDiscountsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductDiscountsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->withId("ID");
                },
                ResourceByProjectKeyProductDiscountsByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/product-discounts/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductDiscountsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                }
            ],
            'ByProjectKeyProductDiscountsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductDiscountsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductDiscountsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductDiscountsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductDiscountsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductDiscountsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductDiscountsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductDiscountsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductDiscountsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyProductDiscountsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductDiscountsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductDiscountsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductDiscountsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductDiscountsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductDiscountsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductDiscountsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
