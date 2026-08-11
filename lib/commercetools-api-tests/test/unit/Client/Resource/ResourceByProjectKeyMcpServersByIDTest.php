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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMcpServersByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMcpServersByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMcpServersByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMcpServersByID
 */
class ResourceByProjectKeyMcpServersByIDTest extends TestCase
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
            'ByProjectKeyMcpServersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/mcp-servers/test_ID',
            ],
            'ByProjectKeyMcpServersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/mcp-servers/test_ID',
            ],
            'ByProjectKeyMcpServersByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->mcpServers()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/mcp-servers/test_ID?version=version',
            ],
            'ByProjectKeyMcpServersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/mcp-servers/test_ID',
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
            'ByProjectKeyMcpServersByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyMcpServersByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyMcpServersByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMcpServersByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMcpServersByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMcpServersByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMcpServersByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMcpServersByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMcpServersByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMcpServersByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMcpServersByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMcpServersByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMcpServersByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMcpServersByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMcpServersByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMcpServersByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMcpServersByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMcpServersByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMcpServersByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMcpServersByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMcpServersByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMcpServersByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyMcpServersByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMcpServersByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMcpServersByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMcpServersByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMcpServersByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMcpServersByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMcpServersByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMcpServersByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMcpServersByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMcpServersByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
