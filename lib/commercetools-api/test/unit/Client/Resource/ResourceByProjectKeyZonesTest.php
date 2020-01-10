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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesPost
 *
 * @internal
 */
class ResourceByProjectKeyZonesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyZonesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/zones?expand=expand',
            ],
            'ByProjectKeyZonesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/zones?where=where',
            ],
            'ByProjectKeyZonesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/zones?sort=sort',
            ],
            'ByProjectKeyZonesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/zones?limit=limit',
            ],
            'ByProjectKeyZonesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/zones?offset=offset',
            ],
            'ByProjectKeyZonesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/zones?withTotal=withTotal',
            ],
            'ByProjectKeyZonesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/zones',
            ],
            'ByProjectKeyZonesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/zones?expand=expand',
            ],
            'ByProjectKeyZonesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/zones',
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
            'ByProjectKeyZonesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyZonesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
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
