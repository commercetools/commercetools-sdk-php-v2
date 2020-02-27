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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsPost
 */
class ResourceByProjectKeyExtensionsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyExtensionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/extensions?sort=sort',
            ],
            'ByProjectKeyExtensionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/extensions?limit=limit',
            ],
            'ByProjectKeyExtensionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/extensions?offset=offset',
            ],
            'ByProjectKeyExtensionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/extensions?withTotal=withTotal',
            ],
            'ByProjectKeyExtensionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/extensions?where=where',
            ],
            'ByProjectKeyExtensionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/extensions?var.varName=var.varName',
            ],
            'ByProjectKeyExtensionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                'get',
                '{projectKey}/extensions',
            ],
            'ByProjectKeyExtensionsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                'post',
                '{projectKey}/extensions',
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
            'ByProjectKeyExtensionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                }
            ],
            'ByProjectKeyExtensionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
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
