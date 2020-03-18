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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyZonesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyZonesKeyByKey
 */
class ResourceByProjectKeyZonesKeyByKeyTest extends TestCase
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
        } else {
            $this->assertSame("", (string) $request->getBody());
        }
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
            'ByProjectKeyZonesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/zones/key={key}?expand=expand',
            ],
            'ByProjectKeyZonesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/zones/key={key}',
            ],
            'ByProjectKeyZonesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/zones/key={key}?expand=expand',
            ],
            'ByProjectKeyZonesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/zones/key={key}',
            ],
            'ByProjectKeyZonesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/zones/key={key}?version=version',
            ],
            'ByProjectKeyZonesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->zones()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/zones/key={key}?expand=expand',
            ],
            'ByProjectKeyZonesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/zones/key={key}',
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
            'ByProjectKeyZonesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyZonesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyZonesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyZonesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyZonesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyZonesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyZonesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyZonesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyZonesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyZonesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyZonesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyZonesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyZonesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyZonesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyZonesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyZonesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyZonesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyZonesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyZonesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyZonesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyZonesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyZonesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyZonesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyZonesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyZonesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyZonesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
