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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersPost
 *
 * @internal
 */
class ResourceByProjectKeyOrdersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/orders?expand=expand',
            ],
            'ByProjectKeyOrdersGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/orders?where=where',
            ],
            'ByProjectKeyOrdersGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/orders?sort=sort',
            ],
            'ByProjectKeyOrdersGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/orders?limit=limit',
            ],
            'ByProjectKeyOrdersGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/orders?offset=offset',
            ],
            'ByProjectKeyOrdersGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/orders?withTotal=withTotal',
            ],
            'ByProjectKeyOrdersGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/orders',
            ],
            'ByProjectKeyOrdersPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/orders?expand=expand',
            ],
            'ByProjectKeyOrdersPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/orders',
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
