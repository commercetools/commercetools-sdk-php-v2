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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAssociateRolesByID
 */
class ResourceByProjectKeyAssociateRolesByIDTest extends TestCase
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
            'ByProjectKeyAssociateRolesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/associate-roles/test_ID?expand=expand',
            ],
            'ByProjectKeyAssociateRolesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/associate-roles/test_ID',
            ],
            'ByProjectKeyAssociateRolesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/associate-roles/test_ID?expand=expand',
            ],
            'ByProjectKeyAssociateRolesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/associate-roles/test_ID',
            ],
            'ByProjectKeyAssociateRolesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/associate-roles/test_ID?version=version',
            ],
            'ByProjectKeyAssociateRolesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/associate-roles/test_ID?expand=expand',
            ],
            'ByProjectKeyAssociateRolesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/associate-roles/test_ID',
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
            'ByProjectKeyAssociateRolesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyAssociateRolesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyAssociateRolesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAssociateRolesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAssociateRolesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAssociateRolesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAssociateRolesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAssociateRolesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAssociateRolesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAssociateRolesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAssociateRolesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAssociateRolesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAssociateRolesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAssociateRolesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAssociateRolesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAssociateRolesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAssociateRolesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAssociateRolesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAssociateRolesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAssociateRolesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAssociateRolesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAssociateRolesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyAssociateRolesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyAssociateRolesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyAssociateRolesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyAssociateRolesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyAssociateRolesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyAssociateRolesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyAssociateRolesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyAssociateRolesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyAssociateRolesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyAssociateRolesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
