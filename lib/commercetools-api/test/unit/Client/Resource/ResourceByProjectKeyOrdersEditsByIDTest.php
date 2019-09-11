<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEditsByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyOrdersEditsByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyOrdersEditsByIDGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->orders()
                       ->edits()
                       ->withId("ID")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/orders/edits/{ID}?expand=expand',
           ],
           'ByProjectKeyOrdersEditsByIDGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->orders()
                       ->edits()
                       ->withId("ID")
                       ->get();
               },
               'get',
               '/{projectKey}/orders/edits/{ID}',
           ],
           'ByProjectKeyOrdersEditsByIDPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->orders()
                       ->edits()
                       ->withId("ID")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/orders/edits/{ID}?expand=expand',
           ],
           'ByProjectKeyOrdersEditsByIDPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->orders()
                       ->edits()
                       ->withId("ID")
                       ->post(null);
               },
               'post',
               '/{projectKey}/orders/edits/{ID}',
           ],
           'ByProjectKeyOrdersEditsByIDDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->orders()
                       ->edits()
                       ->withId("ID")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/orders/edits/{ID}?version=version',
           ],
           'ByProjectKeyOrdersEditsByIDDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->orders()
                       ->edits()
                       ->withId("ID")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/orders/edits/{ID}?expand=expand',
           ],
           'ByProjectKeyOrdersEditsByIDDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->orders()
                       ->edits()
                       ->withId("ID")
                       ->delete();
               },
               'delete',
               '/{projectKey}/orders/edits/{ID}',
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