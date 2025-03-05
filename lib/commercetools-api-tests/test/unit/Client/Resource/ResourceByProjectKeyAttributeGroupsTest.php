<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAttributeGroupsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAttributeGroupsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAttributeGroups
 */
class ResourceByProjectKeyAttributeGroupsTest extends TestCase
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
            'ByProjectKeyAttributeGroupsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/attribute-groups?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/attribute-groups?sort=sort',
            ],
            'ByProjectKeyAttributeGroupsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/attribute-groups?limit=limit',
            ],
            'ByProjectKeyAttributeGroupsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/attribute-groups?offset=offset',
            ],
            'ByProjectKeyAttributeGroupsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/attribute-groups?withTotal=withTotal',
            ],
            'ByProjectKeyAttributeGroupsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/attribute-groups?where=where',
            ],
            'ByProjectKeyAttributeGroupsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/attribute-groups?var.varName=var.varName',
            ],
            'ByProjectKeyAttributeGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->get();
                },
                'get',
                'test_projectKey/attribute-groups',
            ],
            'ByProjectKeyAttributeGroupsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/attribute-groups?where=where',
            ],
            'ByProjectKeyAttributeGroupsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->head();
                },
                'head',
                'test_projectKey/attribute-groups',
            ],
            'ByProjectKeyAttributeGroupsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/attribute-groups?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                'post',
                'test_projectKey/attribute-groups',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyAttributeGroupsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAttributeGroupsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyAttributeGroupsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/attribute-groups/key={key}'
            ],
            'ResourceByProjectKeyAttributeGroupsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAttributeGroupsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyAttributeGroupsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/attribute-groups/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyAttributeGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                }
            ],
            'ByProjectKeyAttributeGroupsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                }
            ],
            'ByProjectKeyAttributeGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAttributeGroupsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                200
            ],
            'ByProjectKeyAttributeGroupsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                400
            ],
            'ByProjectKeyAttributeGroupsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                401
            ],
            'ByProjectKeyAttributeGroupsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                403
            ],
            'ByProjectKeyAttributeGroupsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                404
            ],
            'ByProjectKeyAttributeGroupsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                500
            ],
            'ByProjectKeyAttributeGroupsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                502
            ],
            'ByProjectKeyAttributeGroupsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                503
            ],
            'ByProjectKeyAttributeGroupsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->get();
                },
                599
            ],
            'ByProjectKeyAttributeGroupsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                200
            ],
            'ByProjectKeyAttributeGroupsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                404
            ],
            'ByProjectKeyAttributeGroupsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                400
            ],
            'ByProjectKeyAttributeGroupsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                401
            ],
            'ByProjectKeyAttributeGroupsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                403
            ],
            'ByProjectKeyAttributeGroupsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                500
            ],
            'ByProjectKeyAttributeGroupsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                502
            ],
            'ByProjectKeyAttributeGroupsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                503
            ],
            'ByProjectKeyAttributeGroupsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->head();
                },
                599
            ],
            'ByProjectKeyAttributeGroupsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyAttributeGroupsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAttributeGroupsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAttributeGroupsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAttributeGroupsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAttributeGroupsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAttributeGroupsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAttributeGroupsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAttributeGroupsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
