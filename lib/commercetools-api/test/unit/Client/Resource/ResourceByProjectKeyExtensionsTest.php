<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensions;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyExtensionsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyExtensionsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/extensions?where=where',
            ],
            'ByProjectKeyExtensionsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/extensions?sort=sort',
            ],
            'ByProjectKeyExtensionsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/extensions?limit=limit',
            ],
            'ByProjectKeyExtensionsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/extensions?offset=offset',
            ],
            'ByProjectKeyExtensionsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/extensions?withTotal=withTotal',
            ],
            'ByProjectKeyExtensionsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                'get',
                '{projectKey}/extensions',
            ],
            'ByProjectKeyExtensionsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                'post',
                '{projectKey}/extensions',
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