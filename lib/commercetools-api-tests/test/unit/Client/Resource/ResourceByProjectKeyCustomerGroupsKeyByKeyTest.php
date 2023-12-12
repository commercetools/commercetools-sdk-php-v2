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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroupsKeyByKey
 */
class ResourceByProjectKeyCustomerGroupsKeyByKeyTest extends TestCase
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
            'ByProjectKeyCustomerGroupsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/customer-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/customer-groups/key=test_key',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/customer-groups/key=test_key',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/customer-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/customer-groups/key=test_key',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/customer-groups/key=test_key?version=version',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/customer-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/customer-groups/key=test_key',
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
            'ByProjectKeyCustomerGroupsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCustomerGroupsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCustomerGroupsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
