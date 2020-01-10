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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryPost
 *
 * @internal
 */
class ResourceByProjectKeyInventoryTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInventoryGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/inventory?expand=expand',
            ],
            'ByProjectKeyInventoryGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/inventory?where=where',
            ],
            'ByProjectKeyInventoryGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/inventory?sort=sort',
            ],
            'ByProjectKeyInventoryGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/inventory?limit=limit',
            ],
            'ByProjectKeyInventoryGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/inventory?offset=offset',
            ],
            'ByProjectKeyInventoryGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/inventory?withTotal=withTotal',
            ],
            'ByProjectKeyInventoryGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/inventory',
            ],
            'ByProjectKeyInventoryPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/inventory?expand=expand',
            ],
            'ByProjectKeyInventoryPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/inventory',
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
            'ByProjectKeyInventoryGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyInventoryPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
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
