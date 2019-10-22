<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomers;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCustomersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomersGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/customers?expand=expand',
            ],
            'ByProjectKeyCustomersGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/customers?where=where',
            ],
            'ByProjectKeyCustomersGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/customers?sort=sort',
            ],
            'ByProjectKeyCustomersGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/customers?limit=limit',
            ],
            'ByProjectKeyCustomersGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/customers?offset=offset',
            ],
            'ByProjectKeyCustomersGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/customers?withTotal=withTotal',
            ],
            'ByProjectKeyCustomersGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                'get',
                '{projectKey}/customers',
            ],
            'ByProjectKeyCustomersPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/customers?expand=expand',
            ],
            'ByProjectKeyCustomersPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                'post',
                '{projectKey}/customers',
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