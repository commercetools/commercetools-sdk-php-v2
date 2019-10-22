<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMe;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyMeTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMeGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/me?where=where',
            ],
            'ByProjectKeyMeGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/me?sort=sort',
            ],
            'ByProjectKeyMeGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/me?limit=limit',
            ],
            'ByProjectKeyMeGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/me?offset=offset',
            ],
            'ByProjectKeyMeGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/me?withTotal=withTotal',
            ],
            'ByProjectKeyMeGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/me?expand=expand',
            ],
            'ByProjectKeyMeGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->get();
                },
                'get',
                '{projectKey}/me',
            ],
            'ByProjectKeyMePost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->post(null);
                },
                'post',
                '{projectKey}/me',
            ],
            'ByProjectKeyMeDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/me?version=version',
            ],
            'ByProjectKeyMeDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->delete();
                },
                'delete',
                '{projectKey}/me',
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