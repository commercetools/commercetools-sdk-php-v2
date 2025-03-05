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
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyExtensionsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensions
 */
class ResourceByProjectKeyExtensionsTest extends TestCase
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
            'ByProjectKeyExtensionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/extensions?sort=sort',
            ],
            'ByProjectKeyExtensionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/extensions?limit=limit',
            ],
            'ByProjectKeyExtensionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/extensions?offset=offset',
            ],
            'ByProjectKeyExtensionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/extensions?withTotal=withTotal',
            ],
            'ByProjectKeyExtensionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/extensions?where=where',
            ],
            'ByProjectKeyExtensionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/extensions?var.varName=var.varName',
            ],
            'ByProjectKeyExtensionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->get();
                },
                'get',
                'test_projectKey/extensions',
            ],
            'ByProjectKeyExtensionsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->extensions()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/extensions?where=where',
            ],
            'ByProjectKeyExtensionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->head();
                },
                'head',
                'test_projectKey/extensions',
            ],
            'ByProjectKeyExtensionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->post(null);
                },
                'post',
                'test_projectKey/extensions',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyExtensionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyExtensionsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyExtensionsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/extensions/key={key}'
            ],
            'ResourceByProjectKeyExtensionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyExtensionsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyExtensionsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/extensions/{ID}'
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
            'ByProjectKeyExtensionsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
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
            'ByProjectKeyExtensionsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                502
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
            'ByProjectKeyExtensionsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->get();
                },
                599
            ],
            'ByProjectKeyExtensionsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                400
            ],
            'ByProjectKeyExtensionsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                401
            ],
            'ByProjectKeyExtensionsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                403
            ],
            'ByProjectKeyExtensionsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                404
            ],
            'ByProjectKeyExtensionsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                500
            ],
            'ByProjectKeyExtensionsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                502
            ],
            'ByProjectKeyExtensionsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                503
            ],
            'ByProjectKeyExtensionsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                200
            ],
            'ByProjectKeyExtensionsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->head();
                },
                599
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
            'ByProjectKeyExtensionsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                502
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
            'ByProjectKeyExtensionsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
