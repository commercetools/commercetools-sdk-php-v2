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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsPost
 */
class ResourceByProjectKeyCustomObjectsTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomObjectsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/custom-objects?sort=sort',
            ],
            'ByProjectKeyCustomObjectsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/custom-objects?limit=limit',
            ],
            'ByProjectKeyCustomObjectsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/custom-objects?offset=offset',
            ],
            'ByProjectKeyCustomObjectsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/custom-objects?withTotal=withTotal',
            ],
            'ByProjectKeyCustomObjectsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/custom-objects?where=where',
            ],
            'ByProjectKeyCustomObjectsGet_withPredicateParam' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withPredicateParam('paramName', 'paramName');
                },
                'get',
                '{projectKey}/custom-objects?paramName=paramName',
            ],
            'ByProjectKeyCustomObjectsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                'get',
                '{projectKey}/custom-objects',
            ],
            'ByProjectKeyCustomObjectsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                'post',
                '{projectKey}/custom-objects',
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
            'ByProjectKeyCustomObjectsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                }
            ],
            'ByProjectKeyCustomObjectsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
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
