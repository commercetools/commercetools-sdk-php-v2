<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTypes;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyTypesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyTypesGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/types?expand=expand',
            ],
            'ByProjectKeyTypesGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/types?where=where',
            ],
            'ByProjectKeyTypesGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/types?sort=sort',
            ],
            'ByProjectKeyTypesGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/types?limit=limit',
            ],
            'ByProjectKeyTypesGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/types?offset=offset',
            ],
            'ByProjectKeyTypesGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/types?withTotal=withTotal',
            ],
            'ByProjectKeyTypesGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->get();
                },
                'get',
                '{projectKey}/types',
            ],
            'ByProjectKeyTypesPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/types?expand=expand',
            ],
            'ByProjectKeyTypesPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types()
                        ->post(null);
                },
                'post',
                '{projectKey}/types',
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