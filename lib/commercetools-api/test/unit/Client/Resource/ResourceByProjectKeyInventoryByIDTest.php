<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInventoryByID;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyInventoryByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyInventoryByIDGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inventory()
                       ->withId("ID")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/inventory/{ID}?expand=expand',
           ],
           'ByProjectKeyInventoryByIDGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inventory()
                       ->withId("ID")
                       ->get();
               },
               'get',
               '/{projectKey}/inventory/{ID}',
           ],
           'ByProjectKeyInventoryByIDPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inventory()
                       ->withId("ID")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/inventory/{ID}?expand=expand',
           ],
           'ByProjectKeyInventoryByIDPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inventory()
                       ->withId("ID")
                       ->post(null);
               },
               'post',
               '/{projectKey}/inventory/{ID}',
           ],
           'ByProjectKeyInventoryByIDDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inventory()
                       ->withId("ID")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/inventory/{ID}?version=version',
           ],
           'ByProjectKeyInventoryByIDDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inventory()
                       ->withId("ID")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/inventory/{ID}?expand=expand',
           ],
           'ByProjectKeyInventoryByIDDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->inventory()
                       ->withId("ID")
                       ->delete();
               },
               'delete',
               '/{projectKey}/inventory/{ID}',
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