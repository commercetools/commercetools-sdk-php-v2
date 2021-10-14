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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCategoriesKeyByKey
 */
class ResourceByProjectKeyCategoriesKeyByKeyTest extends TestCase
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
            'ByProjectKeyCategoriesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/categories/key=test_key?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/categories/key=test_key',
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/categories/key=test_key?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/categories/key=test_key',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/categories/key=test_key?version=version',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/categories/key=test_key?expand=expand',
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/categories/key=test_key',
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
            'ByProjectKeyCategoriesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyCategoriesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCategoriesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCategoriesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCategoriesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCategoriesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
