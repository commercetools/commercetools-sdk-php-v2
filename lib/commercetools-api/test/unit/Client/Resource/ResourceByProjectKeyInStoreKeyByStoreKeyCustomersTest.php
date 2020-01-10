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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCustomersPost
 *
 * @internal
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCustomersTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/customers',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/customers?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/customers',
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
            'ByProjectKeyInStoreKeyByStoreKeyCustomersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCustomersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->customers()
                        ->post(null)
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
