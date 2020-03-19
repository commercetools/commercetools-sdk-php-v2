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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStoresByID
 */
class ResourceByProjectKeyStoresByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertSame($relativeUri, (string) $request->getUri());
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
            'ByProjectKeyStoresByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/stores/test_ID?expand=expand',
            ],
            'ByProjectKeyStoresByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/stores/test_ID',
            ],
            'ByProjectKeyStoresByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/stores/test_ID?expand=expand',
            ],
            'ByProjectKeyStoresByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/stores/test_ID',
            ],
            'ByProjectKeyStoresByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/stores/test_ID?version=version',
            ],
            'ByProjectKeyStoresByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/stores/test_ID?expand=expand',
            ],
            'ByProjectKeyStoresByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/stores/test_ID',
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
            'ByProjectKeyStoresByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyStoresByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyStoresByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStoresByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyStoresByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyStoresByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyStoresByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyStoresByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyStoresByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyStoresByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyStoresByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyStoresByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStoresByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyStoresByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStoresByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStoresByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStoresByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStoresByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStoresByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStoresByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyStoresByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyStoresByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyStoresByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyStoresByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyStoresByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyStoresByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyStoresByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyStoresByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyStoresByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
