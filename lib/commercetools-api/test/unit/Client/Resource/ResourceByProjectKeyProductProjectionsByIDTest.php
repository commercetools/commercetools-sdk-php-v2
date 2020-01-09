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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsByIDGet
 *
 * @internal
 */
class ResourceByProjectKeyProductProjectionsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductProjectionsByIDGet_withStaged' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
                        ->get()
                        ->withStaged('staged')
                    ;
                },
                'get',
                '{projectKey}/product-projections/{ID}?staged=staged',
            ],
            'ByProjectKeyProductProjectionsByIDGet_withPriceCurrency' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
                        ->get()
                        ->withPriceCurrency('priceCurrency')
                    ;
                },
                'get',
                '{projectKey}/product-projections/{ID}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductProjectionsByIDGet_withPriceCountry' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
                        ->get()
                        ->withPriceCountry('priceCountry')
                    ;
                },
                'get',
                '{projectKey}/product-projections/{ID}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductProjectionsByIDGet_withPriceCustomerGroup' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup')
                    ;
                },
                'get',
                '{projectKey}/product-projections/{ID}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductProjectionsByIDGet_withPriceChannel' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
                        ->get()
                        ->withPriceChannel('priceChannel')
                    ;
                },
                'get',
                '{projectKey}/product-projections/{ID}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductProjectionsByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/product-projections/{ID}?expand=expand',
            ],
            'ByProjectKeyProductProjectionsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/product-projections/{ID}',
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
