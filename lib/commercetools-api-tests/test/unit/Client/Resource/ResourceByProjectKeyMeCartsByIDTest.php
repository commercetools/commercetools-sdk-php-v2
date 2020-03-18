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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeCartsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeCartsByID
 */
class ResourceByProjectKeyMeCartsByIDTest extends TestCase
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
            'ByProjectKeyMeCartsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/me/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyMeCartsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/me/carts/{ID}',
            ],
            'ByProjectKeyMeCartsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/me/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyMeCartsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/me/carts/{ID}',
            ],
            'ByProjectKeyMeCartsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/me/carts/{ID}?version=version',
            ],
            'ByProjectKeyMeCartsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->me()
                        ->carts()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/me/carts/{ID}?expand=expand',
            ],
            'ByProjectKeyMeCartsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/me/carts/{ID}',
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
            'ByProjectKeyMeCartsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyMeCartsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyMeCartsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeCartsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeCartsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeCartsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeCartsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeCartsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeCartsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeCartsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeCartsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeCartsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeCartsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeCartsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeCartsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeCartsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeCartsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeCartsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeCartsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMeCartsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMeCartsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMeCartsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMeCartsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMeCartsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMeCartsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMeCartsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
