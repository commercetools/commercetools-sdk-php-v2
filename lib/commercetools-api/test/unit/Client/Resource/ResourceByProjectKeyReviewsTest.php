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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsPost
 *
 * @internal
 */
class ResourceByProjectKeyReviewsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyReviewsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/reviews?where=where',
            ],
            'ByProjectKeyReviewsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/reviews?sort=sort',
            ],
            'ByProjectKeyReviewsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/reviews?limit=limit',
            ],
            'ByProjectKeyReviewsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/reviews?offset=offset',
            ],
            'ByProjectKeyReviewsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/reviews?withTotal=withTotal',
            ],
            'ByProjectKeyReviewsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/reviews',
            ],
            'ByProjectKeyReviewsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/reviews',
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
            'ByProjectKeyReviewsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyReviewsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
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
