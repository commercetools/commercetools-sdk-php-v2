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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesPost
 *
 * @internal
 */
class ResourceByProjectKeyDiscountCodesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyDiscountCodesGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/discount-codes?where=where',
            ],
            'ByProjectKeyDiscountCodesGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/discount-codes?sort=sort',
            ],
            'ByProjectKeyDiscountCodesGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/discount-codes?limit=limit',
            ],
            'ByProjectKeyDiscountCodesGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/discount-codes?offset=offset',
            ],
            'ByProjectKeyDiscountCodesGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/discount-codes?withTotal=withTotal',
            ],
            'ByProjectKeyDiscountCodesGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/discount-codes',
            ],
            'ByProjectKeyDiscountCodesPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/discount-codes',
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
