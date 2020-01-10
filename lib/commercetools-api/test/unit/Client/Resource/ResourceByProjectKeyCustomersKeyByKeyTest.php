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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomersKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomersKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomersKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyCustomersKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomersKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/customers/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomersKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/customers/key={key}',
            ],
            'ByProjectKeyCustomersKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/customers/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomersKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/customers/key={key}',
            ],
            'ByProjectKeyCustomersKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/customers/key={key}?dataErasure=dataErasure',
            ],
            'ByProjectKeyCustomersKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/customers/key={key}?version=version',
            ],
            'ByProjectKeyCustomersKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/customers/key={key}?expand=expand',
            ],
            'ByProjectKeyCustomersKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/customers/key={key}',
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
            'ByProjectKeyCustomersKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCustomersKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyCustomersKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customers()
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
