<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroupsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCustomerGroupsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomerGroupsKeyByKeyGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/customer-groups/key={key}',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/customer-groups/key={key}',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/customer-groups/key={key}?version=version',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/customer-groups/key={key}',
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