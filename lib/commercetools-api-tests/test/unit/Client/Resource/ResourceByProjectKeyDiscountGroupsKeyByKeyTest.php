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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountGroupsKeyByKey
 */
class ResourceByProjectKeyDiscountGroupsKeyByKeyTest extends TestCase
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
            'ByProjectKeyDiscountGroupsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/discount-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/discount-groups/key=test_key',
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/discount-groups/key=test_key',
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/discount-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/discount-groups/key=test_key',
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/discount-groups/key=test_key?version=version',
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/discount-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/discount-groups/key=test_key',
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
            'ByProjectKeyDiscountGroupsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyDiscountGroupsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
