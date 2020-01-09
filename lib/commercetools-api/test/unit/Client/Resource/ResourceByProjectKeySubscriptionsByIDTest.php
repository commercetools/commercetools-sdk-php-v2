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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeySubscriptionsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeySubscriptionsByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/subscriptions/{ID}?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/subscriptions/{ID}',
            ],
            'ByProjectKeySubscriptionsByIDPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/subscriptions/{ID}?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/subscriptions/{ID}',
            ],
            'ByProjectKeySubscriptionsByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/subscriptions/{ID}?version=version',
            ],
            'ByProjectKeySubscriptionsByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/subscriptions/{ID}?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/subscriptions/{ID}',
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
