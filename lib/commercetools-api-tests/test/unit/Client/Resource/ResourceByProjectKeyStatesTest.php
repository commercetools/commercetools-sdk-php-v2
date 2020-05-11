<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStatesByID;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStatesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStates
 */
class ResourceByProjectKeyStatesTest extends TestCase
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
            'ByProjectKeyStatesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/states?expand=expand',
            ],
            'ByProjectKeyStatesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/states?sort=sort',
            ],
            'ByProjectKeyStatesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/states?limit=limit',
            ],
            'ByProjectKeyStatesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/states?offset=offset',
            ],
            'ByProjectKeyStatesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/states?withTotal=withTotal',
            ],
            'ByProjectKeyStatesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/states?where=where',
            ],
            'ByProjectKeyStatesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/states?var.varName=var.varName',
            ],
            'ByProjectKeyStatesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->states()
                        ->get();
                },
                'get',
                'test_projectKey/states',
            ],
            'ByProjectKeyStatesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->states()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/states?expand=expand',
            ],
            'ByProjectKeyStatesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->states()
                        ->post(null);
                },
                'post',
                'test_projectKey/states',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyStatesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStatesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->states()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyStatesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/states/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyStatesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                }
            ],
            'ByProjectKeyStatesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStatesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                200
            ],
            'ByProjectKeyStatesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                400
            ],
            'ByProjectKeyStatesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                401
            ],
            'ByProjectKeyStatesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                403
            ],
            'ByProjectKeyStatesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                404
            ],
            'ByProjectKeyStatesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                500
            ],
            'ByProjectKeyStatesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                503
            ],
            'ByProjectKeyStatesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->get();
                },
                599
            ],
            'ByProjectKeyStatesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyStatesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStatesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStatesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStatesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStatesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStatesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStatesPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStatesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
