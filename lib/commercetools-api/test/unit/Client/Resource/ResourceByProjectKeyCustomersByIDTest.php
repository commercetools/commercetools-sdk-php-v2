<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomersByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyCustomersByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyCustomersByIDGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/customers/{ID}?expand=expand',
           ],
           'ByProjectKeyCustomersByIDGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->get();
               },
               'get',
               '/{projectKey}/customers/{ID}',
           ],
           'ByProjectKeyCustomersByIDPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/customers/{ID}?expand=expand',
           ],
           'ByProjectKeyCustomersByIDPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->post(null);
               },
               'post',
               '/{projectKey}/customers/{ID}',
           ],
           'ByProjectKeyCustomersByIDDelete_withDataErasure' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->delete()
                       ->withDataErasure('dataErasure');
               },
               'delete',
               '/{projectKey}/customers/{ID}?dataErasure=dataErasure',
           ],
           'ByProjectKeyCustomersByIDDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/customers/{ID}?version=version',
           ],
           'ByProjectKeyCustomersByIDDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/customers/{ID}?expand=expand',
           ],
           'ByProjectKeyCustomersByIDDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->customers()
                       ->withId("ID")
                       ->delete();
               },
               'delete',
               '/{projectKey}/customers/{ID}',
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