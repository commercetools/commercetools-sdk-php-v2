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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsPost
 */
class ResourceByProjectKeyShippingMethodsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsGet_withCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withCountry('country');
                },
                'get',
                '{projectKey}/shipping-methods?country=country',
            ],
            'ByProjectKeyShippingMethodsGet_withState' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withState('state');
                },
                'get',
                '{projectKey}/shipping-methods?state=state',
            ],
            'ByProjectKeyShippingMethodsGet_withCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withCurrency('currency');
                },
                'get',
                '{projectKey}/shipping-methods?currency=currency',
            ],
            'ByProjectKeyShippingMethodsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/shipping-methods?where=where',
            ],
            'ByProjectKeyShippingMethodsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/shipping-methods?sort=sort',
            ],
            'ByProjectKeyShippingMethodsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/shipping-methods?limit=limit',
            ],
            'ByProjectKeyShippingMethodsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/shipping-methods?offset=offset',
            ],
            'ByProjectKeyShippingMethodsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/shipping-methods?withTotal=withTotal',
            ],
            'ByProjectKeyShippingMethodsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                'get',
                '{projectKey}/shipping-methods',
            ],
            'ByProjectKeyShippingMethodsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                'post',
                '{projectKey}/shipping-methods',
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
            'ByProjectKeyShippingMethodsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                }
            ],
            'ByProjectKeyShippingMethodsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
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
