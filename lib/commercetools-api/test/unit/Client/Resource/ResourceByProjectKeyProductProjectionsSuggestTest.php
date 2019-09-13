<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
*/
namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Api\Client\ApiRoot;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsSuggest;
use Psr\Http\Message\RequestInterface;

class ResourceByProjectKeyProductProjectionsSuggestTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductProjectionsSuggestGet_withFuzzy' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withFuzzy('fuzzy');
                },
                'get',
                '/{projectKey}/product-projections/suggest?fuzzy=fuzzy',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withStaged' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                '/{projectKey}/product-projections/suggest?staged=staged',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withSearchKeywords' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withSearchKeywords('locale', 'searchKeywords.locale');
                },
                'get',
                '/{projectKey}/product-projections/suggest?searchKeywords.locale=searchKeywords.locale',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withSort' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '/{projectKey}/product-projections/suggest?sort=sort',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withLimit' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '/{projectKey}/product-projections/suggest?limit=limit',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withOffset' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '/{projectKey}/product-projections/suggest?offset=offset',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withWithTotal' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '/{projectKey}/product-projections/suggest?withTotal=withTotal',
            ],
            'ByProjectKeyProductProjectionsSuggestGet' => [
                function(ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                'get',
                '/{projectKey}/product-projections/suggest',
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