<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStores;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyStoresTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyStoresGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/stores?expand=expand',
           ],
           'ByProjectKeyStoresGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/stores?where=where',
           ],
           'ByProjectKeyStoresGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/stores?sort=sort',
           ],
           'ByProjectKeyStoresGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/stores?limit=limit',
           ],
           'ByProjectKeyStoresGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/stores?offset=offset',
           ],
           'ByProjectKeyStoresGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/stores?withTotal=withTotal',
           ],
           'ByProjectKeyStoresGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->get();
               },
               'get',
               '/{projectKey}/stores',
           ],
           'ByProjectKeyStoresPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/stores?expand=expand',
           ],
           'ByProjectKeyStoresPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->stores()
                       ->post(null);
               },
               'post',
               '/{projectKey}/stores',
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