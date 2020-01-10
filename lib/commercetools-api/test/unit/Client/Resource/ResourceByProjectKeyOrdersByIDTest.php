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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyOrdersByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/orders/{ID}',
            ],
            'ByProjectKeyOrdersByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/orders/{ID}',
            ],
            'ByProjectKeyOrdersByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/orders/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyOrdersByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/orders/{ID}?version=version',
            ],
            'ByProjectKeyOrdersByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/orders/{ID}?expand=expand',
            ],
            'ByProjectKeyOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/orders/{ID}',
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
            'ByProjectKeyOrdersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyOrdersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyOrdersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->orders()
                        ->withId('ID')
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
