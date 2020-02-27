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
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsPost
 */
class ResourceByProjectKeyCartDiscountsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCartDiscountsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/cart-discounts?expand=expand',
            ],
            'ByProjectKeyCartDiscountsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/cart-discounts?sort=sort',
            ],
            'ByProjectKeyCartDiscountsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/cart-discounts?limit=limit',
            ],
            'ByProjectKeyCartDiscountsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/cart-discounts?offset=offset',
            ],
            'ByProjectKeyCartDiscountsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/cart-discounts?withTotal=withTotal',
            ],
            'ByProjectKeyCartDiscountsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/cart-discounts?where=where',
            ],
            'ByProjectKeyCartDiscountsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/cart-discounts?var.varName=var.varName',
            ],
            'ByProjectKeyCartDiscountsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->get();
                },
                'get',
                '{projectKey}/cart-discounts',
            ],
            'ByProjectKeyCartDiscountsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/cart-discounts?expand=expand',
            ],
            'ByProjectKeyCartDiscountsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->post(null);
                },
                'post',
                '{projectKey}/cart-discounts',
            ]
        ];
    }

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

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
