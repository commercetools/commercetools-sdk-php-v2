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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeShoppingListsByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyMeShoppingListsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMeShoppingListsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/me/shopping-lists/{ID}',
            ],
            'ByProjectKeyMeShoppingListsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/me/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/me/shopping-lists/{ID}',
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/me/shopping-lists/{ID}?version=version',
            ],
            'ByProjectKeyMeShoppingListsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/me/shopping-lists/{ID}?expand=expand',
            ],
            'ByProjectKeyMeShoppingListsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/me/shopping-lists/{ID}',
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
            'ByProjectKeyMeShoppingListsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyMeShoppingListsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyMeShoppingListsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->shoppingLists()
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
