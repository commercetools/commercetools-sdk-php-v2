<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShoppingListsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyShoppingListsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShoppingListsKeyByKeyGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shopping-lists/key={key}?expand=expand',
            ],
            'ByProjectKeyShoppingListsKeyByKeyGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/shopping-lists/key={key}',
            ],
            'ByProjectKeyShoppingListsKeyByKeyPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shopping-lists/key={key}?expand=expand',
            ],
            'ByProjectKeyShoppingListsKeyByKeyPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/shopping-lists/key={key}',
            ],
            'ByProjectKeyShoppingListsKeyByKeyDelete_withDataErasure' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '{projectKey}/shopping-lists/key={key}?dataErasure=dataErasure',
            ],
            'ByProjectKeyShoppingListsKeyByKeyDelete_withVersion' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/shopping-lists/key={key}?version=version',
            ],
            'ByProjectKeyShoppingListsKeyByKeyDelete_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/shopping-lists/key={key}?expand=expand',
            ],
            'ByProjectKeyShoppingListsKeyByKeyDelete' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/shopping-lists/key={key}',
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