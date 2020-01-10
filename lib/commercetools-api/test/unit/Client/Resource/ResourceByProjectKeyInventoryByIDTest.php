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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInventoryByIDPost
 *
 * @internal
 */
class ResourceByProjectKeyInventoryByIDTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyInventoryByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/inventory/{ID}?expand=expand',
            ],
            'ByProjectKeyInventoryByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/inventory/{ID}',
            ],
            'ByProjectKeyInventoryByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand')
                    ;
                },
                'post',
                '{projectKey}/inventory/{ID}?expand=expand',
            ],
            'ByProjectKeyInventoryByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
                'post',
                '{projectKey}/inventory/{ID}',
            ],
            'ByProjectKeyInventoryByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/inventory/{ID}?version=version',
            ],
            'ByProjectKeyInventoryByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/inventory/{ID}?expand=expand',
            ],
            'ByProjectKeyInventoryByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/inventory/{ID}',
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
            'ByProjectKeyInventoryByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyInventoryByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
                        ->withId('ID')
                        ->post(null)
                    ;
                },
            ],
            'ByProjectKeyInventoryByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inventory()
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
