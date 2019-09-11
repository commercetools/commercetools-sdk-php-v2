<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscounts;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCartDiscountsTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyCartDiscountsGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/cart-discounts?expand=expand',
           ],
           'ByProjectKeyCartDiscountsGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/cart-discounts?where=where',
           ],
           'ByProjectKeyCartDiscountsGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/cart-discounts?sort=sort',
           ],
           'ByProjectKeyCartDiscountsGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/cart-discounts?limit=limit',
           ],
           'ByProjectKeyCartDiscountsGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/cart-discounts?offset=offset',
           ],
           'ByProjectKeyCartDiscountsGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/cart-discounts?withTotal=withTotal',
           ],
           'ByProjectKeyCartDiscountsGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->get();
               },
               'get',
               '/{projectKey}/cart-discounts',
           ],
           'ByProjectKeyCartDiscountsPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/cart-discounts?expand=expand',
           ],
           'ByProjectKeyCartDiscountsPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->cartDiscounts()
                       ->post(null);
               },
               'post',
               '/{projectKey}/cart-discounts',
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