<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTypesByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyTypesByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyTypesByIDGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '/{projectKey}/types/{ID}',
            ],
            'ByProjectKeyTypesByIDPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '/{projectKey}/types/{ID}',
            ],
            'ByProjectKeyTypesByIDDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '/{projectKey}/types/{ID}?version=version',
            ],
            'ByProjectKeyTypesByIDDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '/{projectKey}/types/{ID}?expand=expand',
            ],
            'ByProjectKeyTypesByIDDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '/{projectKey}/types/{ID}',
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