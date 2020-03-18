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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPaymentsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyPaymentsByID
 */
class ResourceByProjectKeyPaymentsByIDTest extends TestCase
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
            'ByProjectKeyPaymentsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/payments/{ID}?expand=expand',
            ],
            'ByProjectKeyPaymentsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/payments/{ID}',
            ],
            'ByProjectKeyPaymentsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/payments/{ID}?expand=expand',
            ],
            'ByProjectKeyPaymentsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/payments/{ID}',
            ],
            'ByProjectKeyPaymentsByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withId('ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                '{projectKey}/payments/{ID}?dataErasure=dataErasure',
            ],
            'ByProjectKeyPaymentsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/payments/{ID}?version=version',
            ],
            'ByProjectKeyPaymentsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->payments()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/payments/{ID}?expand=expand',
            ],
            'ByProjectKeyPaymentsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/payments/{ID}',
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
            'ByProjectKeyPaymentsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyPaymentsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyPaymentsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPaymentsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyPaymentsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyPaymentsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyPaymentsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyPaymentsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyPaymentsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyPaymentsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyPaymentsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyPaymentsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyPaymentsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyPaymentsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyPaymentsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyPaymentsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyPaymentsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyPaymentsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyPaymentsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyPaymentsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyPaymentsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyPaymentsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyPaymentsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyPaymentsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyPaymentsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyPaymentsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
