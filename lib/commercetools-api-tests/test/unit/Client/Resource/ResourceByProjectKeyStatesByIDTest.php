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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStatesByID
 */
class ResourceByProjectKeyStatesByIDTest extends TestCase
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
            'ByProjectKeyStatesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/states/test_ID?expand=expand',
            ],
            'ByProjectKeyStatesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->states()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/states/test_ID',
            ],
            'ByProjectKeyStatesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/states/test_ID?expand=expand',
            ],
            'ByProjectKeyStatesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->states()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/states/test_ID',
            ],
            'ByProjectKeyStatesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/states/test_ID?version=version',
            ],
            'ByProjectKeyStatesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/states/test_ID?expand=expand',
            ],
            'ByProjectKeyStatesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->states()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/states/test_ID',
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
            'ByProjectKeyStatesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyStatesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyStatesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStatesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyStatesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyStatesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyStatesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyStatesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyStatesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyStatesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyStatesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyStatesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyStatesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStatesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyStatesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStatesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStatesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStatesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStatesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStatesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStatesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStatesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyStatesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyStatesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyStatesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyStatesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyStatesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyStatesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyStatesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyStatesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyStatesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyStatesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
