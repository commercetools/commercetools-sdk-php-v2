<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStoresByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStoresKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStoresPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStores
 */
class ResourceByProjectKeyStoresTest extends TestCase
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
            'ByProjectKeyStoresGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/stores?expand=expand',
            ],
            'ByProjectKeyStoresGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/stores?sort=sort',
            ],
            'ByProjectKeyStoresGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/stores?limit=limit',
            ],
            'ByProjectKeyStoresGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/stores?offset=offset',
            ],
            'ByProjectKeyStoresGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/stores?withTotal=withTotal',
            ],
            'ByProjectKeyStoresGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/stores?where=where',
            ],
            'ByProjectKeyStoresGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/stores?var.varName=var.varName',
            ],
            'ByProjectKeyStoresGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->get();
                },
                'get',
                'test_projectKey/stores',
            ],
            'ByProjectKeyStoresPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stores()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/stores?expand=expand',
            ],
            'ByProjectKeyStoresPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->post(null);
                },
                'post',
                'test_projectKey/stores',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyStoresKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStoresKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyStoresKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/stores/key={key}'
            ],
            'ResourceByProjectKeyStoresByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStoresByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyStoresByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/stores/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyStoresGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                }
            ],
            'ByProjectKeyStoresPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStoresGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                200
            ],
            'ByProjectKeyStoresGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                400
            ],
            'ByProjectKeyStoresGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                401
            ],
            'ByProjectKeyStoresGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                403
            ],
            'ByProjectKeyStoresGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                404
            ],
            'ByProjectKeyStoresGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                500
            ],
            'ByProjectKeyStoresGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                502
            ],
            'ByProjectKeyStoresGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                503
            ],
            'ByProjectKeyStoresGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->get();
                },
                599
            ],
            'ByProjectKeyStoresPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyStoresPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStoresPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStoresPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStoresPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStoresPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStoresPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStoresPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStoresPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
