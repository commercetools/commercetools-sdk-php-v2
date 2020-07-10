<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEditsByIDApply;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyOrdersEditsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyOrdersEditsByID
 */
class ResourceByProjectKeyOrdersEditsByIDTest extends TestCase
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
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ClientException("Oops!", $request, new Response(400)));

        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request, new Response(500)));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyOrdersEditsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/orders/edits/test_ID?expand=expand',
            ],
            'ByProjectKeyOrdersEditsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/orders/edits/test_ID',
            ],
            'ByProjectKeyOrdersEditsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/orders/edits/test_ID?expand=expand',
            ],
            'ByProjectKeyOrdersEditsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/orders/edits/test_ID',
            ],
            'ByProjectKeyOrdersEditsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/orders/edits/test_ID?version=version',
            ],
            'ByProjectKeyOrdersEditsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->orders()
                        ->edits()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/orders/edits/test_ID?expand=expand',
            ],
            'ByProjectKeyOrdersEditsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/orders/edits/test_ID',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyOrdersEditsByIDApply' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrdersEditsByIDApply {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders()
                        ->edits()
                        ->withId("test_ID")
                        ->apply();
                },
                ResourceByProjectKeyOrdersEditsByIDApply::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/orders/edits/{ID}/apply'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyOrdersEditsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyOrdersEditsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyOrdersEditsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyOrdersEditsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyOrdersEditsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyOrdersEditsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyOrdersEditsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyOrdersEditsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyOrdersEditsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyOrdersEditsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyOrdersEditsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyOrdersEditsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyOrdersEditsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyOrdersEditsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyOrdersEditsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyOrdersEditsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyOrdersEditsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyOrdersEditsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyOrdersEditsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyOrdersEditsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyOrdersEditsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyOrdersEditsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyOrdersEditsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyOrdersEditsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyOrdersEditsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyOrdersEditsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyOrdersEditsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyOrdersEditsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyOrdersEditsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders()
                        ->edits()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
