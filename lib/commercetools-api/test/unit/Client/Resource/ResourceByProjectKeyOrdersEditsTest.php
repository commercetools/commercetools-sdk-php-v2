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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsPost
 *
 * @internal
 */
class ResourceByProjectKeyOrdersEditsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersEditsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/orders/edits?expand=expand',
            ],
            'ByProjectKeyOrdersEditsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/orders/edits?where=where',
            ],
            'ByProjectKeyOrdersEditsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/orders/edits?sort=sort',
            ],
            'ByProjectKeyOrdersEditsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/orders/edits?limit=limit',
            ],
            'ByProjectKeyOrdersEditsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/orders/edits?offset=offset',
            ],
            'ByProjectKeyOrdersEditsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/orders/edits?withTotal=withTotal',
            ],
            'ByProjectKeyOrdersEditsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/orders/edits',
            ],
            'ByProjectKeyOrdersEditsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/orders/edits?expand=expand',
            ],
            'ByProjectKeyOrdersEditsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/orders/edits',
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
