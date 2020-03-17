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
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensionsByID
 */
class ResourceByProjectKeyExtensionsByIDTest extends TestCase
{
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

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertInstanceOf(ApiRequest::class, $request);

        $response = new Response($statusCode, [], "{}");
        $this->assertInstanceOf(JsonObject::class, $request->mapFromResponse($response));
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteClientException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyExtensionsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/extensions/{ID}',
            ],
            'ByProjectKeyExtensionsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/extensions/{ID}',
            ],
            'ByProjectKeyExtensionsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/extensions/{ID}?version=version',
            ],
            'ByProjectKeyExtensionsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/extensions/{ID}?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/extensions/{ID}',
            ]
        ];
    }

    public function getResources()
    {
        return [
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyExtensionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyExtensionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyExtensionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyExtensionsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyExtensionsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyExtensionsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyExtensionsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyExtensionsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyExtensionsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyExtensionsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyExtensionsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyExtensionsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyExtensionsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyExtensionsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyExtensionsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyExtensionsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyExtensionsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyExtensionsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyExtensionsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyExtensionsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyExtensionsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyExtensionsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyExtensionsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyExtensionsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyExtensionsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyExtensionsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
