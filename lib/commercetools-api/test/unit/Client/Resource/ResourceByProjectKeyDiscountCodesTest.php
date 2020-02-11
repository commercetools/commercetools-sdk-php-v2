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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesPost
 */
class ResourceByProjectKeyDiscountCodesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyDiscountCodesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/discount-codes?where=where',
            ],
            'ByProjectKeyDiscountCodesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/discount-codes?sort=sort',
            ],
            'ByProjectKeyDiscountCodesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/discount-codes?limit=limit',
            ],
            'ByProjectKeyDiscountCodesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/discount-codes?offset=offset',
            ],
            'ByProjectKeyDiscountCodesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/discount-codes?withTotal=withTotal',
            ],
            'ByProjectKeyDiscountCodesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                'get',
                '{projectKey}/discount-codes',
            ],
            'ByProjectKeyDiscountCodesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                'post',
                '{projectKey}/discount-codes',
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
            'ByProjectKeyDiscountCodesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                }
            ],
            'ByProjectKeyDiscountCodesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
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
