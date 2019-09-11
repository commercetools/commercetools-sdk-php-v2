<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyPaymentsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyPaymentsKeyByKeyGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/payments/key={key}?expand=expand',
           ],
           'ByProjectKeyPaymentsKeyByKeyGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->get();
               },
               'get',
               '/{projectKey}/payments/key={key}',
           ],
           'ByProjectKeyPaymentsKeyByKeyPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/payments/key={key}?expand=expand',
           ],
           'ByProjectKeyPaymentsKeyByKeyPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->post(null);
               },
               'post',
               '/{projectKey}/payments/key={key}',
           ],
           'ByProjectKeyPaymentsKeyByKeyDelete_withDataErasure' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->delete()
                       ->withDataErasure('dataErasure');
               },
               'delete',
               '/{projectKey}/payments/key={key}?dataErasure=dataErasure',
           ],
           'ByProjectKeyPaymentsKeyByKeyDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/payments/key={key}?version=version',
           ],
           'ByProjectKeyPaymentsKeyByKeyDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/payments/key={key}?expand=expand',
           ],
           'ByProjectKeyPaymentsKeyByKeyDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->payments()
                       ->withKey("key")
                       ->delete();
               },
               'delete',
               '/{projectKey}/payments/key={key}',
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