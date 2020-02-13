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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyApiClientsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyApiClientsPost
 */
class ResourceByProjectKeyApiClientsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyApiClientsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/api-clients?expand=expand',
            ],
            'ByProjectKeyApiClientsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/api-clients?where=where',
            ],
            'ByProjectKeyApiClientsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/api-clients?sort=sort',
            ],
            'ByProjectKeyApiClientsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/api-clients?limit=limit',
            ],
            'ByProjectKeyApiClientsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/api-clients?offset=offset',
            ],
            'ByProjectKeyApiClientsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/api-clients?withTotal=withTotal',
            ],
            'ByProjectKeyApiClientsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                },
                'get',
                '{projectKey}/api-clients',
            ],
            'ByProjectKeyApiClientsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->apiClients()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/api-clients?expand=expand',
            ],
            'ByProjectKeyApiClientsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->post(null);
                },
                'post',
                '{projectKey}/api-clients',
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
            'ByProjectKeyApiClientsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
                        ->get();
                }
            ],
            'ByProjectKeyApiClientsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients()
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
