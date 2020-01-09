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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyStoresByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyStoresByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->stores()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/stores/{ID}?expand=expand',
            ],
            'ByProjectKeyStoresByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->stores()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/stores/{ID}',
            ],
            'ByProjectKeyStoresByIDPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->stores()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/stores/{ID}?expand=expand',
            ],
            'ByProjectKeyStoresByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->stores()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/stores/{ID}',
            ],
            'ByProjectKeyStoresByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->stores()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/stores/{ID}?version=version',
            ],
            'ByProjectKeyStoresByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->stores()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/stores/{ID}?expand=expand',
            ],
            'ByProjectKeyStoresByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->stores()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/stores/{ID}',
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
