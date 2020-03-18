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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsByID
 */
class ResourceByProjectKeyShippingMethodsByIDTest extends TestCase
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
            'ByProjectKeyShippingMethodsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/shipping-methods/{ID}',
            ],
            'ByProjectKeyShippingMethodsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/shipping-methods/{ID}',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}?version=version',
            ],
            'ByProjectKeyShippingMethodsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}?expand=expand',
            ],
            'ByProjectKeyShippingMethodsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/shipping-methods/{ID}',
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
            'ByProjectKeyShippingMethodsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyShippingMethodsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyShippingMethodsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyShippingMethodsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyShippingMethodsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyShippingMethodsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyShippingMethodsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyShippingMethodsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyShippingMethodsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyShippingMethodsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyShippingMethodsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyShippingMethodsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyShippingMethodsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyShippingMethodsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyShippingMethodsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyShippingMethodsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyShippingMethodsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyShippingMethodsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyShippingMethodsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyShippingMethodsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyShippingMethodsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyShippingMethodsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyShippingMethodsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyShippingMethodsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyShippingMethodsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyShippingMethodsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
