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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTailoringKeyByKey
 */
class ResourceByProjectKeyProductTailoringKeyByKeyTest extends TestCase
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
            'ByProjectKeyProductTailoringKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-tailoring/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/product-tailoring/key=test_key',
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-tailoring/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/product-tailoring/key=test_key',
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/product-tailoring/key=test_key?version=version',
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/product-tailoring/key=test_key?expand=expand',
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-tailoring/key=test_key',
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
            'ByProjectKeyProductTailoringKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductTailoringKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductTailoringKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductTailoringKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductTailoringKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
