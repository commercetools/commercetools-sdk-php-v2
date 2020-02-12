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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMessagesGet
 */
class ResourceByProjectKeyMessagesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyMessagesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->messages()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/messages?expand=expand',
            ],
            'ByProjectKeyMessagesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->messages()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/messages?where=where',
            ],
            'ByProjectKeyMessagesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->messages()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/messages?sort=sort',
            ],
            'ByProjectKeyMessagesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->messages()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/messages?limit=limit',
            ],
            'ByProjectKeyMessagesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->messages()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/messages?offset=offset',
            ],
            'ByProjectKeyMessagesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->messages()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/messages?withTotal=withTotal',
            ],
            'ByProjectKeyMessagesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->messages()
                        ->get();
                },
                'get',
                '{projectKey}/messages',
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
            'ByProjectKeyMessagesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->messages()
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
