<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypes;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductTypesTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyProductTypesGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/product-types?expand=expand',
           ],
           'ByProjectKeyProductTypesGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/product-types?where=where',
           ],
           'ByProjectKeyProductTypesGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/product-types?sort=sort',
           ],
           'ByProjectKeyProductTypesGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/product-types?limit=limit',
           ],
           'ByProjectKeyProductTypesGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/product-types?offset=offset',
           ],
           'ByProjectKeyProductTypesGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/product-types?withTotal=withTotal',
           ],
           'ByProjectKeyProductTypesGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->get();
               },
               'get',
               '/{projectKey}/product-types',
           ],
           'ByProjectKeyProductTypesPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/product-types?expand=expand',
           ],
           'ByProjectKeyProductTypesPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productTypes()
                       ->post(null);
               },
               'post',
               '/{projectKey}/product-types',
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