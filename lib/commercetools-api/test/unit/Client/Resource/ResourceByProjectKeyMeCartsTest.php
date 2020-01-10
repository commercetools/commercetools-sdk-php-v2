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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsPost
 *
 * @internal
 */
class ResourceByProjectKeyMeCartsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMeCartsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyMeCartsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/me/carts?where=where',
            ],
            'ByProjectKeyMeCartsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/me/carts?sort=sort',
            ],
            'ByProjectKeyMeCartsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/me/carts?limit=limit',
            ],
            'ByProjectKeyMeCartsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/me/carts?offset=offset',
            ],
            'ByProjectKeyMeCartsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/me/carts?withTotal=withTotal',
            ],
            'ByProjectKeyMeCartsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/me/carts',
            ],
            'ByProjectKeyMeCartsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyMeCartsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/me/carts',
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
            'ByProjectKeyMeCartsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyMeCartsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
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
