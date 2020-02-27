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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyMeOrdersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/me/orders',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->me()
                        ->orders()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/me/orders?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/me/orders',
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
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyMeOrdersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->me()
                        ->orders()
                        ->post(null);
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
