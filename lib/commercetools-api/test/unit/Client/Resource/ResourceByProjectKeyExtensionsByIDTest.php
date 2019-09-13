<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensionsByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyExtensionsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyExtensionsByIDGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '/{projectKey}/extensions/{ID}',
            ],
            'ByProjectKeyExtensionsByIDPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '/{projectKey}/extensions/{ID}',
            ],
            'ByProjectKeyExtensionsByIDDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '/{projectKey}/extensions/{ID}?version=version',
            ],
            'ByProjectKeyExtensionsByIDDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '/{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '/{projectKey}/extensions/{ID}',
            ]
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
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}