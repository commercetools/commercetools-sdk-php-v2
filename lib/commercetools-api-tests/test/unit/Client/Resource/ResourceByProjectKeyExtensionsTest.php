<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensionsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensionsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensions
 */
class ResourceByProjectKeyExtensionsTest extends TestCase
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
            'ByProjectKeyExtensionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/extensions?sort=sort',
            ],
            'ByProjectKeyExtensionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/extensions?limit=limit',
            ],
            'ByProjectKeyExtensionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/extensions?offset=offset',
            ],
            'ByProjectKeyExtensionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/extensions?withTotal=withTotal',
            ],
            'ByProjectKeyExtensionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/extensions?where=where',
            ],
            'ByProjectKeyExtensionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/extensions?var.varName=var.varName',
            ],
            'ByProjectKeyExtensionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                'get',
                '{projectKey}/extensions',
            ],
            'ByProjectKeyExtensionsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->extensions()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/extensions?expand=expand',
            ],
            'ByProjectKeyExtensionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                'post',
                '{projectKey}/extensions',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyExtensionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyExtensionsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withKey("key");
                },
                ResourceByProjectKeyExtensionsKeyByKey::class
            ],
            'ResourceByProjectKeyExtensionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyExtensionsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->withId("ID");
                },
                ResourceByProjectKeyExtensionsByID::class
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyExtensionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                }
            ],
            'ByProjectKeyExtensionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyExtensionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                200
            ],
            'ByProjectKeyExtensionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                400
            ],
            'ByProjectKeyExtensionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                401
            ],
            'ByProjectKeyExtensionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                403
            ],
            'ByProjectKeyExtensionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                404
            ],
            'ByProjectKeyExtensionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                500
            ],
            'ByProjectKeyExtensionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                503
            ],
            'ByProjectKeyExtensionsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyExtensionsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyExtensionsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyExtensionsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyExtensionsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyExtensionsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyExtensionsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyExtensionsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
