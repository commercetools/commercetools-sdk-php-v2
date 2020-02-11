<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Client\ApiRequestBuilder;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Response;
use Commercetools\Base\JsonObject;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsPost
 */
class ResourceByProjectKeyOrdersEditsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersEditsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/orders/edits?expand=expand',
            ],
            'ByProjectKeyOrdersEditsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/orders/edits?where=where',
            ],
            'ByProjectKeyOrdersEditsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/orders/edits?sort=sort',
            ],
            'ByProjectKeyOrdersEditsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/orders/edits?limit=limit',
            ],
            'ByProjectKeyOrdersEditsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/orders/edits?offset=offset',
            ],
            'ByProjectKeyOrdersEditsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/orders/edits?withTotal=withTotal',
            ],
            'ByProjectKeyOrdersEditsGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                },
                'get',
                '{projectKey}/orders/edits',
            ],
            'ByProjectKeyOrdersEditsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/orders/edits?expand=expand',
            ],
            'ByProjectKeyOrdersEditsPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                },
                'post',
                '{projectKey}/orders/edits',
            ]
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
        };
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyOrdersEditsGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->get();
                }
            ],
            'ByProjectKeyOrdersEditsPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->post(null);
                }
            ]
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

        $response = new Response(200, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
