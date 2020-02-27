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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersPost
 */
class ResourceByProjectKeyOrdersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/orders?expand=expand',
            ],
            'ByProjectKeyOrdersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/orders?sort=sort',
            ],
            'ByProjectKeyOrdersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/orders?limit=limit',
            ],
            'ByProjectKeyOrdersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/orders?offset=offset',
            ],
            'ByProjectKeyOrdersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/orders?withTotal=withTotal',
            ],
            'ByProjectKeyOrdersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/orders?where=where',
            ],
            'ByProjectKeyOrdersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/orders?var.varName=var.varName',
            ],
            'ByProjectKeyOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                },
                'get',
                '{projectKey}/orders',
            ],
            'ByProjectKeyOrdersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/orders?expand=expand',
            ],
            'ByProjectKeyOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->post(null);
                },
                'post',
                '{projectKey}/orders',
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
            'ByProjectKeyOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->get();
                }
            ],
            'ByProjectKeyOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
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
