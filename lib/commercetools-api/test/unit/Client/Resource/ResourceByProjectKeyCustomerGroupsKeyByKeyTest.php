<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyCustomerGroupsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomerGroupsKeyByKeyGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/customer-groups/key={key}',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/customer-groups/key={key}',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/customer-groups/key={key}?version=version',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/customer-groups/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/customer-groups/key={key}',
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

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCustomerGroupsKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->withKey('key')
                        ->delete()
                    ;
                },
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
