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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMePaymentsPost
 */
class ResourceByProjectKeyMePaymentsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMePaymentsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/me/payments?expand=expand',
            ],
            'ByProjectKeyMePaymentsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/me/payments?sort=sort',
            ],
            'ByProjectKeyMePaymentsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/me/payments?limit=limit',
            ],
            'ByProjectKeyMePaymentsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/me/payments?offset=offset',
            ],
            'ByProjectKeyMePaymentsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/me/payments?withTotal=withTotal',
            ],
            'ByProjectKeyMePaymentsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/me/payments?where=where',
            ],
            'ByProjectKeyMePaymentsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/me/payments?var.varName=var.varName',
            ],
            'ByProjectKeyMePaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                },
                'get',
                '{projectKey}/me/payments',
            ],
            'ByProjectKeyMePaymentsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->payments()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/me/payments?expand=expand',
            ],
            'ByProjectKeyMePaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->post(null);
                },
                'post',
                '{projectKey}/me/payments',
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
            'ByProjectKeyMePaymentsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->payments()
                        ->get();
                }
            ],
            'ByProjectKeyMePaymentsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
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
