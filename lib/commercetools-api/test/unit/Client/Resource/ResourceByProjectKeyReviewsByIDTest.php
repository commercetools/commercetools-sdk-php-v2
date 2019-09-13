<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyReviewsByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyReviewsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyReviewsByIDGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '/{projectKey}/reviews/{ID}',
            ],
            'ByProjectKeyReviewsByIDPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '/{projectKey}/reviews/{ID}',
            ],
            'ByProjectKeyReviewsByIDDelete_withDataErasure' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '/{projectKey}/reviews/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyReviewsByIDDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '/{projectKey}/reviews/{ID}?version=version',
            ],
            'ByProjectKeyReviewsByIDDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '/{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '/{projectKey}/reviews/{ID}',
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