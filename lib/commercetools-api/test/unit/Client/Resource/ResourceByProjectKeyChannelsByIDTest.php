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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyChannelsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyChannelsByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/channels/{ID}',
            ],
            'ByProjectKeyChannelsByIDPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/channels/{ID}',
            ],
            'ByProjectKeyChannelsByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/channels/{ID}?version=version',
            ],
            'ByProjectKeyChannelsByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/channels/{ID}',
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
