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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByIDGet
 *
 * @internal
 */
class ResourceByProjectKeyCustomObjectsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomObjectsByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/custom-objects/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/custom-objects/{ID}',
            ],
            'ByProjectKeyCustomObjectsByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{ID}?version=version',
            ],
            'ByProjectKeyCustomObjectsByIDDelete_withDataErasure' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withId('ID')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyCustomObjectsByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{ID}?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{ID}',
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
