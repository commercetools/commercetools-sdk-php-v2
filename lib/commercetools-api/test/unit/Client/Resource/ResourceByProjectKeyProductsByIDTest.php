<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyProductsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductsByIDGet_withPriceCurrency' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceCurrency('priceCurrency')
                    ;
                },
                'get',
                '{projectKey}/products/{ID}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDGet_withPriceCountry' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceCountry('priceCountry')
                    ;
                },
                'get',
                '{projectKey}/products/{ID}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDGet_withPriceCustomerGroup' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup')
                    ;
                },
                'get',
                '{projectKey}/products/{ID}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDGet_withPriceChannel' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceChannel('priceChannel')
                    ;
                },
                'get',
                '{projectKey}/products/{ID}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/products/{ID}',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCurrency' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceCurrency('priceCurrency')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCountry' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceCountry('priceCountry')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCustomerGroup' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDPost_withPriceChannel' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceChannel('priceChannel')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/products/{ID}',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCurrency' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceCurrency('priceCurrency')
                    ;
                },
                'delete',
                '{projectKey}/products/{ID}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCountry' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceCountry('priceCountry')
                    ;
                },
                'delete',
                '{projectKey}/products/{ID}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCustomerGroup' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceCustomerGroup('priceCustomerGroup')
                    ;
                },
                'delete',
                '{projectKey}/products/{ID}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceChannel' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceChannel('priceChannel')
                    ;
                },
                'delete',
                '{projectKey}/products/{ID}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/products/{ID}?version=version',
            ],
            'ByProjectKeyProductsByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/products/{ID}',
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

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyProductsByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyProductsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
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
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
