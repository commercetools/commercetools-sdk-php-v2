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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyChannelsByID
 */
class ResourceByProjectKeyChannelsByIDTest extends TestCase
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
            'ByProjectKeyChannelsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/channels/{ID}',
            ],
            'ByProjectKeyChannelsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/channels/{ID}',
            ],
            'ByProjectKeyChannelsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/channels/{ID}?version=version',
            ],
            'ByProjectKeyChannelsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/channels/{ID}?expand=expand',
            ],
            'ByProjectKeyChannelsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/channels/{ID}',
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
            'ByProjectKeyChannelsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
