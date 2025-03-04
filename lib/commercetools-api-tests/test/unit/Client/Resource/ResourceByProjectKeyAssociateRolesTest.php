<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAssociateRolesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAssociateRolesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAssociateRolesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAssociateRoles
 */
class ResourceByProjectKeyAssociateRolesTest extends TestCase
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
            'ByProjectKeyAssociateRolesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/associate-roles?expand=expand',
            ],
            'ByProjectKeyAssociateRolesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/associate-roles?sort=sort',
            ],
            'ByProjectKeyAssociateRolesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/associate-roles?limit=limit',
            ],
            'ByProjectKeyAssociateRolesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/associate-roles?offset=offset',
            ],
            'ByProjectKeyAssociateRolesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/associate-roles?withTotal=withTotal',
            ],
            'ByProjectKeyAssociateRolesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/associate-roles?where=where',
            ],
            'ByProjectKeyAssociateRolesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/associate-roles?var.varName=var.varName',
            ],
            'ByProjectKeyAssociateRolesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->get();
                },
                'get',
                'test_projectKey/associate-roles',
            ],
            'ByProjectKeyAssociateRolesHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/associate-roles?where=where',
            ],
            'ByProjectKeyAssociateRolesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->head();
                },
                'head',
                'test_projectKey/associate-roles',
            ],
            'ByProjectKeyAssociateRolesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->associateRoles()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/associate-roles?expand=expand',
            ],
            'ByProjectKeyAssociateRolesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                'post',
                'test_projectKey/associate-roles',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyAssociateRolesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAssociateRolesKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyAssociateRolesKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/associate-roles/key={key}'
            ],
            'ResourceByProjectKeyAssociateRolesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAssociateRolesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyAssociateRolesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/associate-roles/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyAssociateRolesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                }
            ],
            'ByProjectKeyAssociateRolesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                }
            ],
            'ByProjectKeyAssociateRolesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAssociateRolesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                200
            ],
            'ByProjectKeyAssociateRolesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                400
            ],
            'ByProjectKeyAssociateRolesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                401
            ],
            'ByProjectKeyAssociateRolesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                403
            ],
            'ByProjectKeyAssociateRolesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                404
            ],
            'ByProjectKeyAssociateRolesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                500
            ],
            'ByProjectKeyAssociateRolesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                502
            ],
            'ByProjectKeyAssociateRolesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                503
            ],
            'ByProjectKeyAssociateRolesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->get();
                },
                599
            ],
            'ByProjectKeyAssociateRolesHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                200
            ],
            'ByProjectKeyAssociateRolesHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                404
            ],
            'ByProjectKeyAssociateRolesHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                400
            ],
            'ByProjectKeyAssociateRolesHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                401
            ],
            'ByProjectKeyAssociateRolesHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                403
            ],
            'ByProjectKeyAssociateRolesHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                500
            ],
            'ByProjectKeyAssociateRolesHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                502
            ],
            'ByProjectKeyAssociateRolesHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                503
            ],
            'ByProjectKeyAssociateRolesHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->head();
                },
                599
            ],
            'ByProjectKeyAssociateRolesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyAssociateRolesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAssociateRolesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAssociateRolesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAssociateRolesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAssociateRolesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAssociateRolesPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAssociateRolesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAssociateRolesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->associateRoles()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
