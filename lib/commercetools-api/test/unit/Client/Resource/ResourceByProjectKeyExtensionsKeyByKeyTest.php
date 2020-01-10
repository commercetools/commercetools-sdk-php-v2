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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyExtensionsKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyExtensionsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/extensions/key={key}?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/extensions/key={key}',
            ],
            'ByProjectKeyExtensionsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/extensions/key={key}?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/extensions/key={key}',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/extensions/key={key}?version=version',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/extensions/key={key}?expand=expand',
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/extensions/key={key}',
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
            'ByProjectKeyExtensionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyExtensionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyExtensionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withKey('key')
                        ->delete()
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
