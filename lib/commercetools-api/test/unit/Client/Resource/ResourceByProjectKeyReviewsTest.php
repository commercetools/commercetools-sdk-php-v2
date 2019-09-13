<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyReviews;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyReviewsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyReviewsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '/{projectKey}/reviews?where=where',
            ],
            'ByProjectKeyReviewsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '/{projectKey}/reviews?sort=sort',
            ],
            'ByProjectKeyReviewsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/reviews?limit=limit',
            ],
            'ByProjectKeyReviewsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/reviews?offset=offset',
            ],
            'ByProjectKeyReviewsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/reviews?withTotal=withTotal',
            ],
            'ByProjectKeyReviewsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                'get',
                '/{projectKey}/reviews',
            ],
            'ByProjectKeyReviewsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                'post',
                '/{projectKey}/reviews',
            ]
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
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string)$request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string)$request->getBody());
        };
    }
}