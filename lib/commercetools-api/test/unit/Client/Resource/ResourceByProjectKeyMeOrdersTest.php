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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeOrdersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeOrdersPost
 *
 * @internal
 */
class ResourceByProjectKeyMeOrdersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMeOrdersGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/me/orders?expand=expand',
            ],
            'ByProjectKeyMeOrdersGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/me/orders?where=where',
            ],
            'ByProjectKeyMeOrdersGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/me/orders?sort=sort',
            ],
            'ByProjectKeyMeOrdersGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/me/orders?limit=limit',
            ],
            'ByProjectKeyMeOrdersGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/me/orders?offset=offset',
            ],
            'ByProjectKeyMeOrdersGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/me/orders?withTotal=withTotal',
            ],
            'ByProjectKeyMeOrdersGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/me/orders',
            ],
            'ByProjectKeyMeOrdersPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/me/orders?expand=expand',
            ],
            'ByProjectKeyMeOrdersPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->orders()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/me/orders',
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
