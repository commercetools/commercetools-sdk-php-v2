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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyShippingMethodsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/shipping-methods/{ID}',
            ],
            'ByProjectKeyShippingMethodsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/shipping-methods/{ID}',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}?version=version',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}',
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
            'ByProjectKeyShippingMethodsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyShippingMethodsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyShippingMethodsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
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
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
