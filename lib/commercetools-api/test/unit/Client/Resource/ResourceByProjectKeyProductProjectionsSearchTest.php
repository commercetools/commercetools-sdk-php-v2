<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsSearch;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductProjectionsSearchTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyProductProjectionsSearchPost' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->post();
               },
               'post',
               '/{projectKey}/product-projections/search',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withFuzzy' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withFuzzy('fuzzy');
               },
               'get',
               '/{projectKey}/product-projections/search?fuzzy=fuzzy',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withFuzzyLevel' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withFuzzyLevel('fuzzyLevel');
               },
               'get',
               '/{projectKey}/product-projections/search?fuzzyLevel=fuzzyLevel',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withStaged' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withStaged('staged');
               },
               'get',
               '/{projectKey}/product-projections/search?staged=staged',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withFilter' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withFilter('filter');
               },
               'get',
               '/{projectKey}/product-projections/search?filter=filter',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withFilterFacets' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withFilterFacets('filter.facets');
               },
               'get',
               '/{projectKey}/product-projections/search?filter.facets=filter.facets',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withFilterQuery' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withFilterQuery('filter.query');
               },
               'get',
               '/{projectKey}/product-projections/search?filter.query=filter.query',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withFacet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withFacet('facet');
               },
               'get',
               '/{projectKey}/product-projections/search?facet=facet',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withText' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withText('locale', 'text.locale');
               },
               'get',
               '/{projectKey}/product-projections/search?text.locale=text.locale',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withSort' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withSort('sort');
               },
               'get',
               '/{projectKey}/product-projections/search?sort=sort',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withLimit' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withLimit('limit');
               },
               'get',
               '/{projectKey}/product-projections/search?limit=limit',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withOffset' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withOffset('offset');
               },
               'get',
               '/{projectKey}/product-projections/search?offset=offset',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withWithTotal' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withWithTotal('withTotal');
               },
               'get',
               '/{projectKey}/product-projections/search?withTotal=withTotal',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withPriceCurrency' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withPriceCurrency('priceCurrency');
               },
               'get',
               '/{projectKey}/product-projections/search?priceCurrency=priceCurrency',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withPriceCountry' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withPriceCountry('priceCountry');
               },
               'get',
               '/{projectKey}/product-projections/search?priceCountry=priceCountry',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withPriceCustomerGroup' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withPriceCustomerGroup('priceCustomerGroup');
               },
               'get',
               '/{projectKey}/product-projections/search?priceCustomerGroup=priceCustomerGroup',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withPriceChannel' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withPriceChannel('priceChannel');
               },
               'get',
               '/{projectKey}/product-projections/search?priceChannel=priceChannel',
           ],
           'ByProjectKeyProductProjectionsSearchGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/product-projections/search?expand=expand',
           ],
           'ByProjectKeyProductProjectionsSearchGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->search()
                       ->get();
               },
               'get',
               '/{projectKey}/product-projections/search',
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