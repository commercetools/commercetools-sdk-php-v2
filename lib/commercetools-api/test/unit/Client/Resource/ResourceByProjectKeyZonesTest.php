<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyZones;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyZonesTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyZonesGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/zones?expand=expand',
           ],
           'ByProjectKeyZonesGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/zones?where=where',
           ],
           'ByProjectKeyZonesGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/zones?sort=sort',
           ],
           'ByProjectKeyZonesGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/zones?limit=limit',
           ],
           'ByProjectKeyZonesGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/zones?offset=offset',
           ],
           'ByProjectKeyZonesGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/zones?withTotal=withTotal',
           ],
           'ByProjectKeyZonesGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->get();
               },
               'get',
               '/{projectKey}/zones',
           ],
           'ByProjectKeyZonesPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/zones?expand=expand',
           ],
           'ByProjectKeyZonesPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->zones()
                       ->post(null);
               },
               'post',
               '/{projectKey}/zones',
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