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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsPost
 *
 * @internal
 */
class ResourceByProjectKeyCustomObjectsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomObjectsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/custom-objects?where=where',
            ],
            'ByProjectKeyCustomObjectsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/custom-objects?sort=sort',
            ],
            'ByProjectKeyCustomObjectsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/custom-objects?limit=limit',
            ],
            'ByProjectKeyCustomObjectsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/custom-objects?offset=offset',
            ],
            'ByProjectKeyCustomObjectsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/custom-objects?withTotal=withTotal',
            ],
            'ByProjectKeyCustomObjectsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/custom-objects',
            ],
            'ByProjectKeyCustomObjectsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/custom-objects',
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
