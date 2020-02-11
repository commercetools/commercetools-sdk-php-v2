<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Client\ApiRequestBuilder;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Response;
use Commercetools\Base\JsonObject;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersOrderNumberByOrderNumberGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersOrderNumberByOrderNumberPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersOrderNumberByOrderNumberDelete
 */
class ResourceByProjectKeyOrdersOrderNumberByOrderNumberTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withOrderNumber('orderNumber')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/orders/order-number={orderNumber}?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                },
                'get',
                '{projectKey}/orders/order-number={orderNumber}',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withOrderNumber('orderNumber')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/orders/order-number={orderNumber}?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                },
                'post',
                '{projectKey}/orders/order-number={orderNumber}',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withOrderNumber('orderNumber')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '{projectKey}/orders/order-number={orderNumber}?dataErasure=dataErasure',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withOrderNumber('orderNumber')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/orders/order-number={orderNumber}?version=version',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withOrderNumber('orderNumber')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/orders/order-number={orderNumber}?expand=expand',
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
                },
                'delete',
                '{projectKey}/orders/order-number={orderNumber}',
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
            'ByProjectKeyOrdersOrderNumberByOrderNumberGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->get();
                }
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->post(null);
                }
            ],
            'ByProjectKeyOrdersOrderNumberByOrderNumberDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->withOrderNumber("orderNumber")
                        ->delete();
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
