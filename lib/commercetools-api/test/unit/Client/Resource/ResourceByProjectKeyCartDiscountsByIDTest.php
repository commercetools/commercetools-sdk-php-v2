<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscountsByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCartDiscountsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyCartDiscountsByIDGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->withId("ID")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/cart-discounts/{ID}?expand=expand',
           ],
           'ByProjectKeyCartDiscountsByIDGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->withId("ID")
                       ->get();
               },
               'get',
               '/{projectKey}/cart-discounts/{ID}',
           ],
           'ByProjectKeyCartDiscountsByIDPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->withId("ID")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/cart-discounts/{ID}?expand=expand',
           ],
           'ByProjectKeyCartDiscountsByIDPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->withId("ID")
                       ->post(null);
               },
               'post',
               '/{projectKey}/cart-discounts/{ID}',
           ],
           'ByProjectKeyCartDiscountsByIDDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->withId("ID")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/cart-discounts/{ID}?version=version',
           ],
           'ByProjectKeyCartDiscountsByIDDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->withId("ID")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/cart-discounts/{ID}?expand=expand',
           ],
           'ByProjectKeyCartDiscountsByIDDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->withId("ID")
                       ->delete();
               },
               'delete',
               '/{projectKey}/cart-discounts/{ID}',
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