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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsPost
 *
 * @internal
 */
class ResourceByProjectKeyMePaymentsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMePaymentsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/me/payments?expand=expand',
            ],
            'ByProjectKeyMePaymentsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/me/payments?where=where',
            ],
            'ByProjectKeyMePaymentsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/me/payments?sort=sort',
            ],
            'ByProjectKeyMePaymentsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/me/payments?limit=limit',
            ],
            'ByProjectKeyMePaymentsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/me/payments?offset=offset',
            ],
            'ByProjectKeyMePaymentsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/me/payments?withTotal=withTotal',
            ],
            'ByProjectKeyMePaymentsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/me/payments',
            ],
            'ByProjectKeyMePaymentsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/me/payments?expand=expand',
            ],
            'ByProjectKeyMePaymentsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/me/payments',
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
