<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsKeyByKeyProducts;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsKeyByKey
 */
class ResourceByProjectKeyProductSelectionsKeyByKeyTest extends TestCase
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
            'ByProjectKeyProductSelectionsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-selections/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/product-selections/key=test_key',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/product-selections/key=test_key',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-selections/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/product-selections/key=test_key',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/product-selections/key=test_key?version=version',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/product-selections/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-selections/key=test_key',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductSelectionsKeyByKeyProducts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductSelectionsKeyByKeyProducts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withKey("test_key")
                        ->products();
                },
                ResourceByProjectKeyProductSelectionsKeyByKeyProducts::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/product-selections/key={key}/products'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductSelectionsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductSelectionsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductSelectionsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyProductSelectionsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductSelectionsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductSelectionsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
