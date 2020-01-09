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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShoppingListsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyShoppingListsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyShoppingListsByIDGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/shopping-lists/{ID}',
            ],
            'ByProjectKeyShoppingListsByIDPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/shopping-lists/{ID}',
            ],
            'ByProjectKeyShoppingListsByIDDelete_withDataErasure' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/shopping-lists/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyShoppingListsByIDDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/shopping-lists/{ID}?version=version',
            ],
            'ByProjectKeyShoppingListsByIDDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyShoppingListsByIDDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shoppingLists()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/shopping-lists/{ID}',
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
