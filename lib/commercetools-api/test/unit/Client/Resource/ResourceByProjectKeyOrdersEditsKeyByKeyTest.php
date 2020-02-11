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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsKeyByKeyDelete
 */
class ResourceByProjectKeyOrdersEditsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersEditsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/orders/edits/key={key}?expand=expand',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/orders/edits/key={key}',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/orders/edits/key={key}?expand=expand',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/orders/edits/key={key}',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/orders/edits/key={key}?version=version',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->edits()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/orders/edits/key={key}?expand=expand',
            ],
            'ByProjectKeyOrdersEditsKeyByKeyDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/orders/edits/key={key}',
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
            'ByProjectKeyOrdersEditsKeyByKeyGet' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyOrdersEditsKeyByKeyPost' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyOrdersEditsKeyByKeyDelete' => [
                function(ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withKey("key")
                        ->delete();
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
