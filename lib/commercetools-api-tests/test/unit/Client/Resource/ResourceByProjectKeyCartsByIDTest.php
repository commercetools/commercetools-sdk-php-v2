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
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCartsByID
 */
class ResourceByProjectKeyCartsByIDTest extends TestCase
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
            'ByProjectKeyCartsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->carts()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/carts/test_ID?expand=expand',
            ],
            'ByProjectKeyCartsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->carts()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/carts/test_ID',
            ],
            'ByProjectKeyCartsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->carts()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/carts/test_ID',
            ],
            'ByProjectKeyCartsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->carts()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/carts/test_ID?expand=expand',
            ],
            'ByProjectKeyCartsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->carts()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/carts/test_ID',
            ],
            'ByProjectKeyCartsByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->carts()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/carts/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyCartsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->carts()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/carts/test_ID?version=version',
            ],
            'ByProjectKeyCartsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->carts()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/carts/test_ID?expand=expand',
            ],
            'ByProjectKeyCartsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->carts()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/carts/test_ID',
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
            'ByProjectKeyCartsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyCartsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyCartsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyCartsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
            'ByProjectKeyCartsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCartsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCartsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCartsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCartsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCartsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCartsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCartsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCartsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCartsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyCartsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyCartsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyCartsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyCartsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyCartsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyCartsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyCartsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyCartsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyCartsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCartsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCartsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCartsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCartsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCartsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCartsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCartsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyCartsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCartsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyCartsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCartsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCartsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCartsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCartsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCartsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCartsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCartsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyCartsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCartsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
