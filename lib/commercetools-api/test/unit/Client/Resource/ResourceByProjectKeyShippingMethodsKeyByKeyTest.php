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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsKeyByKeyDelete
 */
class ResourceByProjectKeyShippingMethodsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/shipping-methods/key={key}',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/shipping-methods/key={key}',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/shipping-methods/key={key}?version=version',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/shipping-methods/key={key}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/shipping-methods/key={key}',
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
            'ByProjectKeyShippingMethodsKeyByKeyGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyShippingMethodsKeyByKeyPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyShippingMethodsKeyByKeyDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key")
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
