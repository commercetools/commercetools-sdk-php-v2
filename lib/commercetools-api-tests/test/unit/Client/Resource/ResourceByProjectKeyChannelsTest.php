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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsPost
 */
class ResourceByProjectKeyChannelsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyChannelsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/channels?sort=sort',
            ],
            'ByProjectKeyChannelsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/channels?limit=limit',
            ],
            'ByProjectKeyChannelsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/channels?offset=offset',
            ],
            'ByProjectKeyChannelsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/channels?withTotal=withTotal',
            ],
            'ByProjectKeyChannelsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/channels?where=where',
            ],
            'ByProjectKeyChannelsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/channels?var.varName=var.varName',
            ],
            'ByProjectKeyChannelsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                'get',
                '{projectKey}/channels',
            ],
            'ByProjectKeyChannelsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                'post',
                '{projectKey}/channels',
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
            'ByProjectKeyChannelsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                }
            ],
            'ByProjectKeyChannelsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
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
