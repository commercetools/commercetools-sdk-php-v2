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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyCategoriesKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCategoriesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/categories/key={key}?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/categories/key={key}',
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/categories/key={key}?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/categories/key={key}',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/categories/key={key}?version=version',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/categories/key={key}?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/categories/key={key}',
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
            'ByProjectKeyCategoriesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCategoriesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->categories()
                        ->withKey('key')
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
