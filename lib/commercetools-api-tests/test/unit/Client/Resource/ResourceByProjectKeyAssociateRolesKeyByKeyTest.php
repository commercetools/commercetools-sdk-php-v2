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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAssociateRolesKeyByKey
 */
class ResourceByProjectKeyAssociateRolesKeyByKeyTest extends TestCase
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
            'ByProjectKeyAssociateRolesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/associate-roles/key=test_key?expand=expand',
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/associate-roles/key=test_key',
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/associate-roles/key=test_key?expand=expand',
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/associate-roles/key=test_key',
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/associate-roles/key=test_key?version=version',
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/associate-roles/key=test_key?expand=expand',
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/associate-roles/key=test_key',
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
            'ByProjectKeyAssociateRolesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAssociateRolesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAssociateRolesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAssociateRolesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyAssociateRolesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
