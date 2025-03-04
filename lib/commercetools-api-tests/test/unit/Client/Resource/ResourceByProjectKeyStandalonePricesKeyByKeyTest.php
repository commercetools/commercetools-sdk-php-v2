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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStandalonePricesKeyByKey
 */
class ResourceByProjectKeyStandalonePricesKeyByKeyTest extends TestCase
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
            'ByProjectKeyStandalonePricesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/standalone-prices/key=test_key?expand=expand',
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/standalone-prices/key=test_key',
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/standalone-prices/key=test_key',
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/standalone-prices/key=test_key?expand=expand',
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/standalone-prices/key=test_key',
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/standalone-prices/key=test_key?version=version',
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/standalone-prices/key=test_key?expand=expand',
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/standalone-prices/key=test_key',
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
            'ByProjectKeyStandalonePricesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStandalonePricesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyStandalonePricesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyStandalonePricesKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStandalonePricesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyStandalonePricesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
