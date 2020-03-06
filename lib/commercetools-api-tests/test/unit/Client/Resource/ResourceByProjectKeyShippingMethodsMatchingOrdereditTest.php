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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsMatchingOrdereditGet
 */
class ResourceByProjectKeyShippingMethodsMatchingOrdereditTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsMatchingOrdereditGet_withOrderEditId' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchingOrderedit()
                        ->get()
                        ->withOrderEditId('orderEditId');
                },
                'get',
                '{projectKey}/shipping-methods/matching-orderedit?orderEditId=orderEditId',
            ],
            'ByProjectKeyShippingMethodsMatchingOrdereditGet_withCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchingOrderedit()
                        ->get()
                        ->withCountry('country');
                },
                'get',
                '{projectKey}/shipping-methods/matching-orderedit?country=country',
            ],
            'ByProjectKeyShippingMethodsMatchingOrdereditGet_withState' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchingOrderedit()
                        ->get()
                        ->withState('state');
                },
                'get',
                '{projectKey}/shipping-methods/matching-orderedit?state=state',
            ],
            'ByProjectKeyShippingMethodsMatchingOrdereditGet_withCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->matchingOrderedit()
                        ->get()
                        ->withCurrency('currency');
                },
                'get',
                '{projectKey}/shipping-methods/matching-orderedit?currency=currency',
            ],
            'ByProjectKeyShippingMethodsMatchingOrdereditGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingOrderedit()
                        ->get();
                },
                'get',
                '{projectKey}/shipping-methods/matching-orderedit',
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
            'ByProjectKeyShippingMethodsMatchingOrdereditGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingOrderedit()
                        ->get();
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
