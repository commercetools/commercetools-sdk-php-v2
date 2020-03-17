<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomObjectsByContainerByKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomObjectsByID;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomObjects
 */
class ResourceByProjectKeyCustomObjectsTest extends TestCase
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
        };
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class)
    {
        $builder = new ApiRequestBuilder();
        $this->assertInstanceOf($class, $builderFunction($builder));
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
            'ByProjectKeyCustomObjectsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/custom-objects?sort=sort',
            ],
            'ByProjectKeyCustomObjectsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/custom-objects?limit=limit',
            ],
            'ByProjectKeyCustomObjectsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/custom-objects?offset=offset',
            ],
            'ByProjectKeyCustomObjectsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/custom-objects?withTotal=withTotal',
            ],
            'ByProjectKeyCustomObjectsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/custom-objects?where=where',
            ],
            'ByProjectKeyCustomObjectsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/custom-objects?var.varName=var.varName',
            ],
            'ByProjectKeyCustomObjectsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                'get',
                '{projectKey}/custom-objects',
            ],
            'ByProjectKeyCustomObjectsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->customObjects()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/custom-objects?expand=expand',
            ],
            'ByProjectKeyCustomObjectsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                'post',
                '{projectKey}/custom-objects',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCustomObjectsByContainerByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomObjectsByContainerByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key");
                },
                ResourceByProjectKeyCustomObjectsByContainerByKey::class
            ],
            'ResourceByProjectKeyCustomObjectsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomObjectsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID");
                },
                ResourceByProjectKeyCustomObjectsByID::class
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCustomObjectsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                }
            ],
            'ByProjectKeyCustomObjectsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCustomObjectsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                200
            ],
            'ByProjectKeyCustomObjectsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                400
            ],
            'ByProjectKeyCustomObjectsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                401
            ],
            'ByProjectKeyCustomObjectsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                403
            ],
            'ByProjectKeyCustomObjectsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                404
            ],
            'ByProjectKeyCustomObjectsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                500
            ],
            'ByProjectKeyCustomObjectsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->get();
                },
                503
            ],
            'ByProjectKeyCustomObjectsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyCustomObjectsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCustomObjectsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCustomObjectsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCustomObjectsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCustomObjectsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCustomObjectsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCustomObjectsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
