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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsGet
 *
 * @internal
 */
class ResourceByProjectKeyProductProjectionsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductProjectionsGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withStaged('staged')
                    ;
                },
                'get',
                '{projectKey}/product-projections?staged=staged',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCurrency('priceCurrency')
                    ;
                },
                'get',
                '{projectKey}/product-projections?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCountry('priceCountry')
                    ;
                },
                'get',
                '{projectKey}/product-projections?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup')
                    ;
                },
                'get',
                '{projectKey}/product-projections?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductProjectionsGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withPriceChannel('priceChannel')
                    ;
                },
                'get',
                '{projectKey}/product-projections?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductProjectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/product-projections?expand=expand',
            ],
            'ByProjectKeyProductProjectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/product-projections?where=where',
            ],
            'ByProjectKeyProductProjectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/product-projections?sort=sort',
            ],
            'ByProjectKeyProductProjectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/product-projections?limit=limit',
            ],
            'ByProjectKeyProductProjectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/product-projections?offset=offset',
            ],
            'ByProjectKeyProductProjectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/product-projections?withTotal=withTotal',
            ],
            'ByProjectKeyProductProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/product-projections',
            ],
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
        }
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductProjectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->get()
                    ;
                },
            ],
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

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
