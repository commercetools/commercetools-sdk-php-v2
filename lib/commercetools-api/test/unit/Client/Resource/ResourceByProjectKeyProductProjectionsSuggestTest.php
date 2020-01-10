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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsSuggestGet
 *
 * @internal
 */
class ResourceByProjectKeyProductProjectionsSuggestTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyProductProjectionsSuggestGet_withFuzzy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withFuzzy('fuzzy')
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest?fuzzy=fuzzy',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withStaged('staged')
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest?staged=staged',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withSearchKeywords' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withSearchKeywords('locale', 'searchKeywords.locale')
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest?searchKeywords.locale=searchKeywords.locale',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest?sort=sort',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest?limit=limit',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest?offset=offset',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest?withTotal=withTotal',
            ],
            'ByProjectKeyProductProjectionsSuggestGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/product-projections/suggest',
            ],
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
        }
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductProjectionsSuggestGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                    ;
                },
            ],
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

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
