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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyCartDiscountsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCartDiscountsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/cart-discounts/{ID}',
            ],
            'ByProjectKeyCartDiscountsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/cart-discounts/{ID}',
            ],
            'ByProjectKeyCartDiscountsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/cart-discounts/{ID}?version=version',
            ],
            'ByProjectKeyCartDiscountsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/cart-discounts/{ID}',
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
            'ByProjectKeyCartDiscountsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCartDiscountsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyCartDiscountsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
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
