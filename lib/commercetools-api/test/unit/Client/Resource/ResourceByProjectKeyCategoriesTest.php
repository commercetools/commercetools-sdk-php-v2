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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesPost
 *
 * @internal
 */
class ResourceByProjectKeyCategoriesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCategoriesGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/categories?expand=expand',
            ],
            'ByProjectKeyCategoriesGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/categories?where=where',
            ],
            'ByProjectKeyCategoriesGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/categories?sort=sort',
            ],
            'ByProjectKeyCategoriesGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/categories?limit=limit',
            ],
            'ByProjectKeyCategoriesGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/categories?offset=offset',
            ],
            'ByProjectKeyCategoriesGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/categories?withTotal=withTotal',
            ],
            'ByProjectKeyCategoriesGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/categories',
            ],
            'ByProjectKeyCategoriesPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/categories?expand=expand',
            ],
            'ByProjectKeyCategoriesPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/categories',
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
            'ByProjectKeyCategoriesGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCategoriesPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
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
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
