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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTypesKeyByKeyPost
 *
 * @internal
 */
class ResourceByProjectKeyTypesKeyByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyTypesKeyByKeyGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/types/key={key}?expand=expand',
            ],
            'ByProjectKeyTypesKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/types/key={key}',
            ],
            'ByProjectKeyTypesKeyByKeyPost_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/types/key={key}?expand=expand',
            ],
            'ByProjectKeyTypesKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/types/key={key}',
            ],
            'ByProjectKeyTypesKeyByKeyDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/types/key={key}?version=version',
            ],
            'ByProjectKeyTypesKeyByKeyDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/types/key={key}?expand=expand',
            ],
            'ByProjectKeyTypesKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/types/key={key}',
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
            'ByProjectKeyTypesKeyByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyTypesKeyByKeyPost' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
                        ->withKey('key')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyTypesKeyByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->types()
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
        $builder = new ApiRoot();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response(200, [], '{}');
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }
}
