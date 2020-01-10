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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeCartsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeCartsPost
 *
 * @internal
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeCartsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/carts?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/carts?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/carts?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/carts?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/carts?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/carts',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/me/carts',
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
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->carts()
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
