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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeySubscriptionsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeySubscriptionsKeyByKeyGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/subscriptions/key={key}?expand=expand',
            ],
            'ByProjectKeySubscriptionsKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/subscriptions/key={key}',
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/subscriptions/key={key}?expand=expand',
            ],
            'ByProjectKeySubscriptionsKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/subscriptions/key={key}',
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/subscriptions/key={key}?version=version',
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/subscriptions/key={key}?expand=expand',
            ],
            'ByProjectKeySubscriptionsKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/subscriptions/key={key}',
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
