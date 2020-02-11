<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Client\ApiRequest;
use Commercetools\Api\Client\ApiRequestBuilder;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Psr7\Response;
use Commercetools\Base\JsonObject;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsPost
 */
class ResourceByProjectKeyPaymentsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyPaymentsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/payments?where=where',
            ],
            'ByProjectKeyPaymentsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/payments?sort=sort',
            ],
            'ByProjectKeyPaymentsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/payments?limit=limit',
            ],
            'ByProjectKeyPaymentsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/payments?offset=offset',
            ],
            'ByProjectKeyPaymentsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/payments?withTotal=withTotal',
            ],
            'ByProjectKeyPaymentsGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                },
                'get',
                '{projectKey}/payments',
            ],
            'ByProjectKeyPaymentsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/payments?expand=expand',
            ],
            'ByProjectKeyPaymentsPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->post(null);
                },
                'post',
                '{projectKey}/payments',
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
            'ByProjectKeyPaymentsGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->get();
                }
            ],
            'ByProjectKeyPaymentsPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
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
