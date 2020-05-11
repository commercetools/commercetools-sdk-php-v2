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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensionsByID
 */
class ResourceByProjectKeyExtensionsByIDTest extends TestCase
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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyExtensionsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/extensions/test_ID?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/extensions/test_ID',
            ],
            'ByProjectKeyExtensionsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/extensions/test_ID?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/extensions/test_ID',
            ],
            'ByProjectKeyExtensionsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/extensions/test_ID?version=version',
            ],
            'ByProjectKeyExtensionsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/extensions/test_ID?expand=expand',
            ],
            'ByProjectKeyExtensionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/extensions/test_ID',
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
            'ByProjectKeyExtensionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyExtensionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyExtensionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyExtensionsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyExtensionsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyExtensionsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyExtensionsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyExtensionsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyExtensionsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyExtensionsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyExtensionsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyExtensionsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyExtensionsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyExtensionsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyExtensionsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyExtensionsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyExtensionsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyExtensionsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyExtensionsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyExtensionsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyExtensionsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyExtensionsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyExtensionsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyExtensionsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyExtensionsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyExtensionsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyExtensionsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyExtensionsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyExtensionsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
