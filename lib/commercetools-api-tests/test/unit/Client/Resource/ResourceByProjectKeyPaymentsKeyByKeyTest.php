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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentsKeyByKey
 */
class ResourceByProjectKeyPaymentsKeyByKeyTest extends TestCase
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
            'ByProjectKeyPaymentsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/payments/key={key}?expand=expand',
            ],
            'ByProjectKeyPaymentsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/payments/key={key}',
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/payments/key={key}?expand=expand',
            ],
            'ByProjectKeyPaymentsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/payments/key={key}',
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withKey('key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '{projectKey}/payments/key={key}?dataErasure=dataErasure',
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/payments/key={key}?version=version',
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/payments/key={key}?expand=expand',
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/payments/key={key}',
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
            'ByProjectKeyPaymentsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyPaymentsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPaymentsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyPaymentsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyPaymentsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyPaymentsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyPaymentsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyPaymentsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyPaymentsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyPaymentsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyPaymentsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
