<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyChannelsByID;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyChannelsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyChannels
 */
class ResourceByProjectKeyChannelsTest extends TestCase
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
            'ByProjectKeyChannelsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/channels?sort=sort',
            ],
            'ByProjectKeyChannelsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/channels?limit=limit',
            ],
            'ByProjectKeyChannelsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/channels?offset=offset',
            ],
            'ByProjectKeyChannelsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/channels?withTotal=withTotal',
            ],
            'ByProjectKeyChannelsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/channels?where=where',
            ],
            'ByProjectKeyChannelsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/channels?var.varName=var.varName',
            ],
            'ByProjectKeyChannelsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                'get',
                '{projectKey}/channels',
            ],
            'ByProjectKeyChannelsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->channels()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/channels?expand=expand',
            ],
            'ByProjectKeyChannelsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                'post',
                '{projectKey}/channels',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyChannelsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyChannelsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->withId("ID");
                },
                ResourceByProjectKeyChannelsByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/channels/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyChannelsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                }
            ],
            'ByProjectKeyChannelsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyChannelsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                200
            ],
            'ByProjectKeyChannelsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                400
            ],
            'ByProjectKeyChannelsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                401
            ],
            'ByProjectKeyChannelsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                403
            ],
            'ByProjectKeyChannelsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                404
            ],
            'ByProjectKeyChannelsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                500
            ],
            'ByProjectKeyChannelsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->get();
                },
                503
            ],
            'ByProjectKeyChannelsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyChannelsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyChannelsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyChannelsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyChannelsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyChannelsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyChannelsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyChannelsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
