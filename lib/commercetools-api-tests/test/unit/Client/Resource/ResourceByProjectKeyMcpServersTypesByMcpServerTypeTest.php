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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMcpServersTypesByMcpServerTypeGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMcpServersTypesByMcpServerType
 */
class ResourceByProjectKeyMcpServersTypesByMcpServerTypeTest extends TestCase
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
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_withMajorVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType('test_mcpServerType')
                        ->get()
                        ->withMajorVersion('majorVersion');
                },
                'get',
                'test_projectKey/mcp-servers/types/test_mcpServerType?majorVersion=majorVersion',
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("test_mcpServerType")
                        ->get();
                },
                'get',
                'test_projectKey/mcp-servers/types/test_mcpServerType',
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
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMcpServersTypesByMcpServerTypeGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->types()
                        ->withMcpServerType("mcpServerType")
                        ->get();
                },
                599
            ]
        ];
    }
}
