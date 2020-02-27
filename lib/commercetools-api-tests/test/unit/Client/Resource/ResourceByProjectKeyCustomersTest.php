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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomersPost
 */
class ResourceByProjectKeyCustomersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/customers?expand=expand',
            ],
            'ByProjectKeyCustomersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/customers?sort=sort',
            ],
            'ByProjectKeyCustomersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/customers?limit=limit',
            ],
            'ByProjectKeyCustomersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/customers?offset=offset',
            ],
            'ByProjectKeyCustomersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/customers?withTotal=withTotal',
            ],
            'ByProjectKeyCustomersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/customers?where=where',
            ],
            'ByProjectKeyCustomersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/customers?var.varName=var.varName',
            ],
            'ByProjectKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                },
                'get',
                '{projectKey}/customers',
            ],
            'ByProjectKeyCustomersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/customers?expand=expand',
            ],
            'ByProjectKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->post(null);
                },
                'post',
                '{projectKey}/customers',
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
            'ByProjectKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
                        ->get();
                }
            ],
            'ByProjectKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers()
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
