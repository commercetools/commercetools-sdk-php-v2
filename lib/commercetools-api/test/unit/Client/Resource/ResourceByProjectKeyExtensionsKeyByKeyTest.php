<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensionsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyExtensionsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyExtensionsKeyByKeyGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->extensions()
                       ->withKey("key")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/extensions/key={key}?expand=expand',
           ],
           'ByProjectKeyExtensionsKeyByKeyGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->extensions()
                       ->withKey("key")
                       ->get();
               },
               'get',
               '/{projectKey}/extensions/key={key}',
           ],
           'ByProjectKeyExtensionsKeyByKeyPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->extensions()
                       ->withKey("key")
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/extensions/key={key}?expand=expand',
           ],
           'ByProjectKeyExtensionsKeyByKeyPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->extensions()
                       ->withKey("key")
                       ->post(null);
               },
               'post',
               '/{projectKey}/extensions/key={key}',
           ],
           'ByProjectKeyExtensionsKeyByKeyDelete_withVersion' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->extensions()
                       ->withKey("key")
                       ->delete()
                       ->withVersion('version');
               },
               'delete',
               '/{projectKey}/extensions/key={key}?version=version',
           ],
           'ByProjectKeyExtensionsKeyByKeyDelete_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->extensions()
                       ->withKey("key")
                       ->delete()
                       ->withExpand('expand');
               },
               'delete',
               '/{projectKey}/extensions/key={key}?expand=expand',
           ],
           'ByProjectKeyExtensionsKeyByKeyDelete' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->extensions()
                       ->withKey("key")
                       ->delete();
               },
               'delete',
               '/{projectKey}/extensions/key={key}',
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