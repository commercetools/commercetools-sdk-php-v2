<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsPost
 *
 * @internal
 */
class ResourceByProjectKeyCustomerGroupsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomerGroupsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/customer-groups?where=where',
            ],
            'ByProjectKeyCustomerGroupsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/customer-groups?sort=sort',
            ],
            'ByProjectKeyCustomerGroupsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/customer-groups?limit=limit',
            ],
            'ByProjectKeyCustomerGroupsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/customer-groups?offset=offset',
            ],
            'ByProjectKeyCustomerGroupsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/customer-groups?withTotal=withTotal',
            ],
            'ByProjectKeyCustomerGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/customer-groups',
            ],
            'ByProjectKeyCustomerGroupsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/customer-groups',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
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
            'ByProjectKeyCustomerGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCustomerGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customerGroups()
                        ->post(null)
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
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
