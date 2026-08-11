<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMcpServersByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMcpServersKeyByKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMcpServersTypes;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMcpServersGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMcpServersPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMcpServers
 */
class ResourceByProjectKeyMcpServersTest extends TestCase
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
            'ByProjectKeyMcpServersGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->mcpServers()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/mcp-servers?sort=sort',
            ],
            'ByProjectKeyMcpServersGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->mcpServers()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/mcp-servers?limit=limit',
            ],
            'ByProjectKeyMcpServersGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->mcpServers()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/mcp-servers?offset=offset',
            ],
            'ByProjectKeyMcpServersGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->mcpServers()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/mcp-servers?withTotal=withTotal',
            ],
            'ByProjectKeyMcpServersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->get();
                },
                'get',
                'test_projectKey/mcp-servers',
            ],
            'ByProjectKeyMcpServersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                'post',
                'test_projectKey/mcp-servers',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMcpServersTypes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMcpServersTypes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->types();
                },
                ResourceByProjectKeyMcpServersTypes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/mcp-servers/types'
            ],
            'ResourceByProjectKeyMcpServersKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMcpServersKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyMcpServersKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/mcp-servers/key={key}'
            ],
            'ResourceByProjectKeyMcpServersByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMcpServersByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->mcpServers()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyMcpServersByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/mcp-servers/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMcpServersGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                }
            ],
            'ByProjectKeyMcpServersPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMcpServersGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                200
            ],
            'ByProjectKeyMcpServersGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                400
            ],
            'ByProjectKeyMcpServersGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                401
            ],
            'ByProjectKeyMcpServersGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                403
            ],
            'ByProjectKeyMcpServersGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                404
            ],
            'ByProjectKeyMcpServersGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                500
            ],
            'ByProjectKeyMcpServersGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                502
            ],
            'ByProjectKeyMcpServersGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                503
            ],
            'ByProjectKeyMcpServersGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->get();
                },
                599
            ],
            'ByProjectKeyMcpServersPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyMcpServersPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMcpServersPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMcpServersPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMcpServersPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMcpServersPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMcpServersPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMcpServersPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMcpServersPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->mcpServers()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
