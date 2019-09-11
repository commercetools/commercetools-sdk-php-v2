<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMeCartsByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyInStoreKeyByStoreKeyMeCartsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->me()
                       ->carts()
                       ->withId("ID")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/me/carts/{ID}?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->me()
                       ->carts()
                       ->withId("ID")
                       ->get();
               },
               'get',
               '/{projectKey}/in-store/key={storeKey}/me/carts/{ID}',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->me()
                       ->carts()
                       ->withId("ID")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/in-store/key={storeKey}/me/carts/{ID}?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->me()
                       ->carts()
                       ->withId("ID")
                       ->post(null);
               },
               'post',
               '/{projectKey}/in-store/key={storeKey}/me/carts/{ID}',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->me()
                       ->carts()
                       ->withId("ID")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/in-store/key={storeKey}/me/carts/{ID}?version=version',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->me()
                       ->carts()
                       ->withId("ID")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/in-store/key={storeKey}/me/carts/{ID}?expand=expand',
           ],
           'ByProjectKeyInStoreKeyByStoreKeyMeCartsByIDDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inStoreKeyWithStoreKeyValue("storeKey")
                       ->me()
                       ->carts()
                       ->withId("ID")
                       ->delete();
               },
               'delete',
               '/{projectKey}/in-store/key={storeKey}/me/carts/{ID}',
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