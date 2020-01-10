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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductDiscountsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyProductDiscountsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductDiscountsByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/product-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/product-discounts/{ID}',
            ],
            'ByProjectKeyProductDiscountsByIDPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/product-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/product-discounts/{ID}',
            ],
            'ByProjectKeyProductDiscountsByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/product-discounts/{ID}?version=version',
            ],
            'ByProjectKeyProductDiscountsByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/product-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyProductDiscountsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/product-discounts/{ID}',
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
            'ByProjectKeyProductDiscountsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyProductDiscountsByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyProductDiscountsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productDiscounts()
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
