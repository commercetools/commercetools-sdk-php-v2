<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRoot;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesPost
 *
 * @internal
 */
class ResourceByProjectKeyStatesTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyStatesGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/states?expand=expand',
            ],
            'ByProjectKeyStatesGet_withWhere' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withWhere('where')
                    ;
                },
                'get',
                '{projectKey}/states?where=where',
            ],
            'ByProjectKeyStatesGet_withSort' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withSort('sort')
                    ;
                },
                'get',
                '{projectKey}/states?sort=sort',
            ],
            'ByProjectKeyStatesGet_withLimit' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withLimit('limit')
                    ;
                },
                'get',
                '{projectKey}/states?limit=limit',
            ],
            'ByProjectKeyStatesGet_withOffset' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withOffset('offset')
                    ;
                },
                'get',
                '{projectKey}/states?offset=offset',
            ],
            'ByProjectKeyStatesGet_withWithTotal' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                        ->withWithTotal('withTotal')
                    ;
                },
                'get',
                '{projectKey}/states?withTotal=withTotal',
            ],
            'ByProjectKeyStatesGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/states',
            ],
            'ByProjectKeyStatesPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/states?expand=expand',
            ],
            'ByProjectKeyStatesPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/states',
            ],
        ];
    }

    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRoot();
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
            'ByProjectKeyStatesGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyStatesPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->states()
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
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
