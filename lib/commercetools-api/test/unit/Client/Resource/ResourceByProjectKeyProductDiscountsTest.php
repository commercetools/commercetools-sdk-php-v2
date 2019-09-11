<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscounts;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductDiscountsTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyProductDiscountsGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/product-discounts?expand=expand',
           ],
           'ByProjectKeyProductDiscountsGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/product-discounts?where=where',
           ],
           'ByProjectKeyProductDiscountsGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/product-discounts?sort=sort',
           ],
           'ByProjectKeyProductDiscountsGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/product-discounts?limit=limit',
           ],
           'ByProjectKeyProductDiscountsGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/product-discounts?offset=offset',
           ],
           'ByProjectKeyProductDiscountsGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/product-discounts?withTotal=withTotal',
           ],
           'ByProjectKeyProductDiscountsGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->get();
               },
               'get',
               '/{projectKey}/product-discounts',
           ],
           'ByProjectKeyProductDiscountsPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/product-discounts?expand=expand',
           ],
           'ByProjectKeyProductDiscountsPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productDiscounts()
                       ->post(null);
               },
               'post',
               '/{projectKey}/product-discounts',
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