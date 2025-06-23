<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountGroupsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountGroupsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountGroups
 */
class ResourceByProjectKeyDiscountGroupsTest extends TestCase
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
            'ByProjectKeyDiscountGroupsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/discount-groups?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/discount-groups?sort=sort',
            ],
            'ByProjectKeyDiscountGroupsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/discount-groups?limit=limit',
            ],
            'ByProjectKeyDiscountGroupsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/discount-groups?offset=offset',
            ],
            'ByProjectKeyDiscountGroupsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/discount-groups?withTotal=withTotal',
            ],
            'ByProjectKeyDiscountGroupsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/discount-groups?where=where',
            ],
            'ByProjectKeyDiscountGroupsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/discount-groups?var.varName=var.varName',
            ],
            'ByProjectKeyDiscountGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->get();
                },
                'get',
                'test_projectKey/discount-groups',
            ],
            'ByProjectKeyDiscountGroupsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/discount-groups?where=where',
            ],
            'ByProjectKeyDiscountGroupsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->head();
                },
                'head',
                'test_projectKey/discount-groups',
            ],
            'ByProjectKeyDiscountGroupsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/discount-groups?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                'post',
                'test_projectKey/discount-groups',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyDiscountGroupsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyDiscountGroupsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyDiscountGroupsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/discount-groups/key={key}'
            ],
            'ResourceByProjectKeyDiscountGroupsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyDiscountGroupsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyDiscountGroupsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/discount-groups/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyDiscountGroupsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                }
            ],
            'ByProjectKeyDiscountGroupsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                }
            ],
            'ByProjectKeyDiscountGroupsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyDiscountGroupsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->get();
                },
                599
            ],
            'ByProjectKeyDiscountGroupsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->head();
                },
                599
            ],
            'ByProjectKeyDiscountGroupsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyDiscountGroupsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyDiscountGroupsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyDiscountGroupsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyDiscountGroupsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyDiscountGroupsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyDiscountGroupsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyDiscountGroupsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyDiscountGroupsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
