<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountCodesByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyDiscountCodesByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyDiscountCodesByIDGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/discount-codes/{ID}?expand=expand',
           ],
           'ByProjectKeyDiscountCodesByIDGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->get();
               },
               'get',
               '/{projectKey}/discount-codes/{ID}',
           ],
           'ByProjectKeyDiscountCodesByIDPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/discount-codes/{ID}?expand=expand',
           ],
           'ByProjectKeyDiscountCodesByIDPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->post(null);
               },
               'post',
               '/{projectKey}/discount-codes/{ID}',
           ],
           'ByProjectKeyDiscountCodesByIDDelete_withDataErasure' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->delete()
                       ->withDataErasure('dataErasure');
               },
               'delete',
               '/{projectKey}/discount-codes/{ID}?dataErasure=dataErasure',
           ],
           'ByProjectKeyDiscountCodesByIDDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/discount-codes/{ID}?version=version',
           ],
           'ByProjectKeyDiscountCodesByIDDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/discount-codes/{ID}?expand=expand',
           ],
           'ByProjectKeyDiscountCodesByIDDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->discountCodes()
                       ->withId("ID")
                       ->delete();
               },
               'delete',
               '/{projectKey}/discount-codes/{ID}',
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