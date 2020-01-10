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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyReviewsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyReviewsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/reviews/{ID}',
            ],
            'ByProjectKeyReviewsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/reviews/{ID}',
            ],
            'ByProjectKeyReviewsByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/reviews/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyReviewsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/reviews/{ID}?version=version',
            ],
            'ByProjectKeyReviewsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/reviews/{ID}?expand=expand',
            ],
            'ByProjectKeyReviewsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/reviews/{ID}',
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
            'ByProjectKeyReviewsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyReviewsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyReviewsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->withId('ID')
                        ->delete()
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
