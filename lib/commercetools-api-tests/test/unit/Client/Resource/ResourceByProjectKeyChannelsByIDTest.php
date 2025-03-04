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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyChannelsByID
 */
class ResourceByProjectKeyChannelsByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, ?string $body = null)
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
            'ByProjectKeyChannelsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->channels()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/channels/test_ID?expand=expand',
            ],
            'ByProjectKeyChannelsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->channels()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/channels/test_ID',
            ],
            'ByProjectKeyChannelsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->channels()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/channels/test_ID',
            ],
            'ByProjectKeyChannelsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->channels()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/channels/test_ID?expand=expand',
            ],
            'ByProjectKeyChannelsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->channels()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/channels/test_ID',
            ],
            'ByProjectKeyChannelsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->channels()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/channels/test_ID?version=version',
            ],
            'ByProjectKeyChannelsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->channels()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/channels/test_ID?expand=expand',
            ],
            'ByProjectKeyChannelsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->channels()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/channels/test_ID',
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
            'ByProjectKeyChannelsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyChannelsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyChannelsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyChannelsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyChannelsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyChannelsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyChannelsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyChannelsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyChannelsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyChannelsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyChannelsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyChannelsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyChannelsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyChannelsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyChannelsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyChannelsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyChannelsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyChannelsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyChannelsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyChannelsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyChannelsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyChannelsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyChannelsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyChannelsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyChannelsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyChannelsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyChannelsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyChannelsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyChannelsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyChannelsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyChannelsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyChannelsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyChannelsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyChannelsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyChannelsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyChannelsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyChannelsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyChannelsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyChannelsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyChannelsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyChannelsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyChannelsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
