<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyZonesByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyZonesByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyZonesByIDGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/zones/{ID}',
            ],
            'ByProjectKeyZonesByIDPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/zones/{ID}',
            ],
            'ByProjectKeyZonesByIDDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/zones/{ID}?version=version',
            ],
            'ByProjectKeyZonesByIDDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/zones/{ID}?expand=expand',
            ],
            'ByProjectKeyZonesByIDDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/zones/{ID}',
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