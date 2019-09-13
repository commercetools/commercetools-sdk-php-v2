<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeCarts;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyInStoreKeyByStoreKeyMeCartsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/me/carts?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/me/carts?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/me/carts?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/me/carts?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/me/carts?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->get();
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/me/carts',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/in-store/key={storeKey}/me/carts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeCartsPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->carts()
                        ->post(null);
                },
                'post',
                '/{projectKey}/in-store/key={storeKey}/me/carts',
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