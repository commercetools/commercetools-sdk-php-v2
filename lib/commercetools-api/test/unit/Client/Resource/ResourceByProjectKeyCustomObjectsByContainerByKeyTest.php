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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByContainerByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByContainerByKeyGet
 *
 * @internal
 */
class ResourceByProjectKeyCustomObjectsByContainerByKeyTest extends TestCase
{
    public function getRequests()
    {
        return [
            'ByProjectKeyCustomObjectsByContainerByKeyGet_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
                        ->get()
                        ->withExpand('expand')
                    ;
                },
                'get',
                '{projectKey}/custom-objects/{container}/{key}?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
                        ->get()
                    ;
                },
                'get',
                '{projectKey}/custom-objects/{container}/{key}',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_withVersion' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
                        ->delete()
                        ->withVersion('version')
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{container}/{key}?version=version',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_withDataErasure' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
                        ->delete()
                        ->withDataErasure('dataErasure')
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{container}/{key}?dataErasure=dataErasure',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_withExpand' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
                        ->delete()
                        ->withExpand('expand')
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{container}/{key}?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
                        ->delete()
                    ;
                },
                'delete',
                '{projectKey}/custom-objects/{container}/{key}',
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
            'ByProjectKeyCustomObjectsByContainerByKeyGet' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
                        ->get()
                    ;
                },
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete' => [
                function (ApiRoot $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->withContainerAndKey('container', 'key')
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
