<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroups;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCustomerGroupsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomerGroupsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/customer-groups?where=where',
            ],
            'ByProjectKeyCustomerGroupsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/customer-groups?sort=sort',
            ],
            'ByProjectKeyCustomerGroupsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/customer-groups?limit=limit',
            ],
            'ByProjectKeyCustomerGroupsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/customer-groups?offset=offset',
            ],
            'ByProjectKeyCustomerGroupsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/customer-groups?withTotal=withTotal',
            ],
            'ByProjectKeyCustomerGroupsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                'get',
                '{projectKey}/customer-groups',
            ],
            'ByProjectKeyCustomerGroupsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                'post',
                '{projectKey}/customer-groups',
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