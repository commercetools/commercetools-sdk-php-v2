<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCarts;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyInStoreKeyByStoreKeyCartsTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withCustomerId' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get()
                       ->withCustomerId('customerId');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts?customerId=customerId',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts?where=where',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts?sort=sort',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts?limit=limit',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts?offset=offset',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts?withTotal=withTotal',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->get();
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/carts',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/in-store/key={storeKey}/carts?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyCartsPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->carts()
                       ->post(null);
               },
               'post',
               '/{projectKey}/in-store/key={storeKey}/carts',
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