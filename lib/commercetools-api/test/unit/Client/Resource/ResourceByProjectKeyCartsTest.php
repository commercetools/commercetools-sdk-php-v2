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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsPost
 *
 * @internal
 */
class ResourceByProjectKeyCartsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCartsGet_withCustomerId' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withCustomerId('customerId')
                    ;
                },
                'get',
                '{projectKey}/carts?customerId=customerId',
            ],
            'ByProjectKeyCartsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/carts?expand=expand',
            ],
            'ByProjectKeyCartsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/carts?where=where',
            ],
            'ByProjectKeyCartsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/carts?sort=sort',
            ],
            'ByProjectKeyCartsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/carts?limit=limit',
            ],
            'ByProjectKeyCartsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/carts?offset=offset',
            ],
            'ByProjectKeyCartsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/carts?withTotal=withTotal',
            ],
            'ByProjectKeyCartsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/carts',
            ],
            'ByProjectKeyCartsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/carts?expand=expand',
            ],
            'ByProjectKeyCartsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/carts',
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
            'ByProjectKeyCartsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->carts()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCartsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
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
