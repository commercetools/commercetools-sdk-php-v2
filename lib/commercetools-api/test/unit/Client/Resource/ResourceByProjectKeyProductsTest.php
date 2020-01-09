<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsPost
 *
 * @internal
 */
class ResourceByProjectKeyProductsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductsGet_withPriceCurrency' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceCurrency('priceCurrency')
                    ;
                },
                'get',
                '{projectKey}/products?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsGet_withPriceCountry' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceCountry('priceCountry')
                    ;
                },
                'get',
                '{projectKey}/products?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsGet_withPriceCustomerGroup' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup')
                    ;
                },
                'get',
                '{projectKey}/products?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsGet_withPriceChannel' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withPriceChannel('priceChannel')
                    ;
                },
                'get',
                '{projectKey}/products?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/products?expand=expand',
            ],
            'ByProjectKeyProductsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/products?where=where',
            ],
            'ByProjectKeyProductsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/products?sort=sort',
            ],
            'ByProjectKeyProductsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/products?limit=limit',
            ],
            'ByProjectKeyProductsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/products?offset=offset',
            ],
            'ByProjectKeyProductsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/products?withTotal=withTotal',
            ],
            'ByProjectKeyProductsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/products',
            ],
            'ByProjectKeyProductsPost_withPriceCurrency' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCurrency('priceCurrency')
                    ;
                },
                'post',
                '{projectKey}/products?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsPost_withPriceCountry' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCountry('priceCountry')
                    ;
                },
                'post',
                '{projectKey}/products?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsPost_withPriceCustomerGroup' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup')
                    ;
                },
                'post',
                '{projectKey}/products?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsPost_withPriceChannel' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withPriceChannel('priceChannel')
                    ;
                },
                'post',
                '{projectKey}/products?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/products?expand=expand',
            ],
            'ByProjectKeyProductsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/products',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }
}
