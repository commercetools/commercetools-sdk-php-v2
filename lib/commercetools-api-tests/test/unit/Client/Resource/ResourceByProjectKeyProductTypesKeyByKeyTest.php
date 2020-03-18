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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypesKeyByKey
 */
class ResourceByProjectKeyProductTypesKeyByKeyTest extends TestCase
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
            'ByProjectKeyProductTypesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/product-types/key={key}',
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/product-types/key={key}',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/product-types/key={key}?version=version',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productTypes()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/product-types/key={key}?expand=expand',
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/product-types/key={key}',
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
            'ByProjectKeyProductTypesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyProductTypesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductTypesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductTypesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductTypesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductTypesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductTypesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductTypesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductTypesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductTypesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductTypesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
