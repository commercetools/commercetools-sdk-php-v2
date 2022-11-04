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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAttributeGroupsKeyByKey
 */
class ResourceByProjectKeyAttributeGroupsKeyByKeyTest extends TestCase
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
            'ByProjectKeyAttributeGroupsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/attribute-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/attribute-groups/key=test_key',
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/attribute-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/attribute-groups/key=test_key',
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/attribute-groups/key=test_key?version=version',
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/attribute-groups/key=test_key?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/attribute-groups/key=test_key',
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
            'ByProjectKeyAttributeGroupsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAttributeGroupsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyAttributeGroupsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
