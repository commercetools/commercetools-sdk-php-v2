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
                function (ApiRequestBuilder $builder): RequestInterface {
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
                function (ApiRequestBuilder $builder): RequestInterface {
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
                function (ApiRequestBuilder $builder): RequestInterface {
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
                function (ApiRequestBuilder $builder): RequestInterface {
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
                function (ApiRequestBuilder $builder): RequestInterface {
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
                function (ApiRequestBuilder $builder): RequestInterface {
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
                function (ApiRequestBuilder $builder): RequestInterface {
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
            'ByProjectKeyProductProjectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->withId('ID')
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
