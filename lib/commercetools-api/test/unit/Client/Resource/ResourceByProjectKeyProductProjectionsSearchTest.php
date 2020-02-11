<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsSearchPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsSearchGet
 */
class ResourceByProjectKeyProductProjectionsSearchTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductProjectionsSearchPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->search()
                        ->post();
                },
                'post',
                '{projectKey}/product-projections/search',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withFuzzy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withFuzzy('fuzzy');
                },
                'get',
                '{projectKey}/product-projections/search?fuzzy=fuzzy',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withFuzzyLevel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withFuzzyLevel('fuzzyLevel');
                },
                'get',
                '{projectKey}/product-projections/search?fuzzyLevel=fuzzyLevel',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withMarkMatchingVariants' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withMarkMatchingVariants('markMatchingVariants');
                },
                'get',
                '{projectKey}/product-projections/search?markMatchingVariants=markMatchingVariants',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                '{projectKey}/product-projections/search?staged=staged',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withFilter' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withFilter('filter');
                },
                'get',
                '{projectKey}/product-projections/search?filter=filter',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withFilterFacets' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withFilterFacets('filter.facets');
                },
                'get',
                '{projectKey}/product-projections/search?filter.facets=filter.facets',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withFilterQuery' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withFilterQuery('filter.query');
                },
                'get',
                '{projectKey}/product-projections/search?filter.query=filter.query',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withFacet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withFacet('facet');
                },
                'get',
                '{projectKey}/product-projections/search?facet=facet',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withText' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withText('locale', 'text.locale');
                },
                'get',
                '{projectKey}/product-projections/search?text.locale=text.locale',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/product-projections/search?sort=sort',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/product-projections/search?limit=limit',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/product-projections/search?offset=offset',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/product-projections/search?withTotal=withTotal',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                '{projectKey}/product-projections/search?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                '{projectKey}/product-projections/search?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                '{projectKey}/product-projections/search?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                '{projectKey}/product-projections/search?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductProjectionsSearchGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->search()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/product-projections/search?expand=expand',
            ],
            'ByProjectKeyProductProjectionsSearchGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->search()
                        ->get();
                },
                'get',
                '{projectKey}/product-projections/search',
            ]
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        };
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductProjectionsSearchPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->search()
                        ->post();
                }
            ],
            'ByProjectKeyProductProjectionsSearchGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->search()
                        ->get();
                }
            ]
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testMapFromResponse(callable $builderFunction)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
