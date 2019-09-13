<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyOrders;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyInStoreKeyByStoreKeyOrdersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyOrdersGet_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/orders?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersGet_withWhere' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/orders?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/orders?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/orders?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/orders?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/orders?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->get();
                },
                'get',
                '/{projectKey}/in-store/key={storeKey}/orders',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersPost_withExpand' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '/{projectKey}/in-store/key={storeKey}/orders?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyOrdersPost' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->orders()
                        ->post(null);
                },
                'post',
                '/{projectKey}/in-store/key={storeKey}/orders',
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