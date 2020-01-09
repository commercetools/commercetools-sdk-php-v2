<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsPost
 *
 * @internal
 */
class ResourceByProjectKeyShoppingListsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShoppingListsGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/shopping-lists?where=where',
            ],
            'ByProjectKeyShoppingListsGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/shopping-lists?sort=sort',
            ],
            'ByProjectKeyShoppingListsGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/shopping-lists?limit=limit',
            ],
            'ByProjectKeyShoppingListsGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/shopping-lists?offset=offset',
            ],
            'ByProjectKeyShoppingListsGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyShoppingListsGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/shopping-lists',
            ],
            'ByProjectKeyShoppingListsPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/shopping-lists?expand=expand',
            ],
            'ByProjectKeyShoppingListsPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/shopping-lists',
            ],
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
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        }
    }
}
