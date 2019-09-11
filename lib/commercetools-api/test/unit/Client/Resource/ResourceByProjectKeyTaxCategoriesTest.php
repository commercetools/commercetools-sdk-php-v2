<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategories;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyTaxCategoriesTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyTaxCategoriesGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/tax-categories?expand=expand',
           ],
           'ByProjectKeyTaxCategoriesGet_withWhere' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->get()
                       ->withWhere('where');
               },
               'get',
               '/{projectKey}/tax-categories?where=where',
           ],
           'ByProjectKeyTaxCategoriesGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/tax-categories?sort=sort',
           ],
           'ByProjectKeyTaxCategoriesGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/tax-categories?limit=limit',
           ],
           'ByProjectKeyTaxCategoriesGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/tax-categories?offset=offset',
           ],
           'ByProjectKeyTaxCategoriesGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/tax-categories?withTotal=withTotal',
           ],
           'ByProjectKeyTaxCategoriesGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->get();
               },
               'get',
               '/{projectKey}/tax-categories',
           ],
           'ByProjectKeyTaxCategoriesPost_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->post(null)
                       ->withExpand('expand');
               },
               'post',
               '/{projectKey}/tax-categories?expand=expand',
           ],
           'ByProjectKeyTaxCategoriesPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->taxCategories()
                       ->post(null);
               },
               'post',
               '/{projectKey}/tax-categories',
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