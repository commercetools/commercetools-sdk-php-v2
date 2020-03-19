<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroupsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroupsKeyByKey;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroups
 */
class ResourceByProjectKeyCustomerGroupsTest extends TestCase
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
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyCustomerGroupsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/customer-groups?sort=sort',
            ],
            'ByProjectKeyCustomerGroupsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/customer-groups?limit=limit',
            ],
            'ByProjectKeyCustomerGroupsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/customer-groups?offset=offset',
            ],
            'ByProjectKeyCustomerGroupsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/customer-groups?withTotal=withTotal',
            ],
            'ByProjectKeyCustomerGroupsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/customer-groups?where=where',
            ],
            'ByProjectKeyCustomerGroupsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/customer-groups?var.varName=var.varName',
            ],
            'ByProjectKeyCustomerGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->get();
                },
                'get',
                'test_projectKey/customer-groups',
            ],
            'ByProjectKeyCustomerGroupsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/customer-groups?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                'post',
                'test_projectKey/customer-groups',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCustomerGroupsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomerGroupsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyCustomerGroupsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/customer-groups/key={key}'
            ],
            'ResourceByProjectKeyCustomerGroupsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomerGroupsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyCustomerGroupsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/customer-groups/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCustomerGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                }
            ],
            'ByProjectKeyCustomerGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCustomerGroupsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                200
            ],
            'ByProjectKeyCustomerGroupsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                400
            ],
            'ByProjectKeyCustomerGroupsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                401
            ],
            'ByProjectKeyCustomerGroupsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                403
            ],
            'ByProjectKeyCustomerGroupsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                404
            ],
            'ByProjectKeyCustomerGroupsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                500
            ],
            'ByProjectKeyCustomerGroupsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                503
            ],
            'ByProjectKeyCustomerGroupsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->get();
                },
                599
            ],
            'ByProjectKeyCustomerGroupsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyCustomerGroupsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCustomerGroupsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCustomerGroupsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCustomerGroupsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCustomerGroupsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCustomerGroupsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCustomerGroupsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCustomerGroupsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
