<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeShoppingLists;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyMeShoppingListsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMeShoppingListsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/me/shopping-lists?where=where',
            ],
            'ByProjectKeyMeShoppingListsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/me/shopping-lists?sort=sort',
            ],
            'ByProjectKeyMeShoppingListsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/me/shopping-lists?limit=limit',
            ],
            'ByProjectKeyMeShoppingListsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/me/shopping-lists?offset=offset',
            ],
            'ByProjectKeyMeShoppingListsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/me/shopping-lists?withTotal=withTotal',
            ],
            'ByProjectKeyMeShoppingListsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->get();
                },
                'get',
                '{projectKey}/me/shopping-lists',
            ],
            'ByProjectKeyMeShoppingListsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/me/shopping-lists?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->shoppingLists()
                        ->post(null);
                },
                'post',
                '{projectKey}/me/shopping-lists',
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