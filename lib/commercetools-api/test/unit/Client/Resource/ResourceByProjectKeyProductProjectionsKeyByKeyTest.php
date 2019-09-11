<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsKeyByKey;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductProjectionsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
           'ByProjectKeyProductProjectionsKeyByKeyGet_withStaged' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->withKey("key")
                       ->get()
                       ->withStaged('staged');
               },
               'get',
               '/{projectKey}/product-projections/key={key}?staged=staged',
           ],
           'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceCurrency' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->withKey("key")
                       ->get()
                       ->withPriceCurrency('priceCurrency');
               },
               'get',
               '/{projectKey}/product-projections/key={key}?priceCurrency=priceCurrency',
           ],
           'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceCountry' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->withKey("key")
                       ->get()
                       ->withPriceCountry('priceCountry');
               },
               'get',
               '/{projectKey}/product-projections/key={key}?priceCountry=priceCountry',
           ],
           'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceCustomerGroup' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->withKey("key")
                       ->get()
                       ->withPriceCustomerGroup('priceCustomerGroup');
               },
               'get',
               '/{projectKey}/product-projections/key={key}?priceCustomerGroup=priceCustomerGroup',
           ],
           'ByProjectKeyProductProjectionsKeyByKeyGet_withPriceChannel' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->withKey("key")
                       ->get()
                       ->withPriceChannel('priceChannel');
               },
               'get',
               '/{projectKey}/product-projections/key={key}?priceChannel=priceChannel',
           ],
           'ByProjectKeyProductProjectionsKeyByKeyGet_withExpand' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->withKey("key")
                       ->get()
                       ->withExpand('expand');
               },
               'get',
               '/{projectKey}/product-projections/key={key}?expand=expand',
           ],
           'ByProjectKeyProductProjectionsKeyByKeyGet' => [
               function(ApiRoot $builder): RequestInterface {
                   return $builder
                       ->withProjectKey("projectKey")
                       ->productProjections()
                       ->withKey("key")
                       ->get();
               },
               'get',
               '/{projectKey}/product-projections/key={key}',
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