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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsPost
 *
 * @internal
 */
class ResourceByProjectKeyMeShoppingListsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMeShoppingListsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists?where=where',
            ],
            'ByProjectKeyMeShoppingListsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists?sort=sort',
            ],
            'ByProjectKeyMeShoppingListsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists?limit=limit',
            ],
            'ByProjectKeyMeShoppingListsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists?offset=offset',
            ],
            'ByProjectKeyMeShoppingListsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyMeShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists',
            ],
            'ByProjectKeyMeShoppingListsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/me/shopping-lists',
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
            'ByProjectKeyMeShoppingListsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyMeShoppingListsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
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
