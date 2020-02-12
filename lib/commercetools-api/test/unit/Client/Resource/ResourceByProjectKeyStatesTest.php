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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesPost
 */
class ResourceByProjectKeyStatesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyStatesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/states?expand=expand',
            ],
            'ByProjectKeyStatesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/states?where=where',
            ],
            'ByProjectKeyStatesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/states?sort=sort',
            ],
            'ByProjectKeyStatesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/states?limit=limit',
            ],
            'ByProjectKeyStatesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/states?offset=offset',
            ],
            'ByProjectKeyStatesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/states?withTotal=withTotal',
            ],
            'ByProjectKeyStatesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                'get',
                '{projectKey}/states',
            ],
            'ByProjectKeyStatesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/states?expand=expand',
            ],
            'ByProjectKeyStatesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                'post',
                '{projectKey}/states',
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
            'ByProjectKeyStatesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                }
            ],
            'ByProjectKeyStatesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
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
