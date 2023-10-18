<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnits
 */
class ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsTest extends TestCase
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
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units?sort=sort',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units?limit=limit',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units?offset=offset',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units?withTotal=withTotal',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units?where=where',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units?var.varName=var.varName',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/as-associate/test_associateId/business-units?where=where',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->head();
                },
                'head',
                'test_projectKey/as-associate/test_associateId/business-units',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/as-associate/test_associateId/business-units?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->post(null);
                },
                'post',
                'test_projectKey/as-associate/test_associateId/business-units',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'associateId' => 'test_associateId', 'key' => 'test_key'],
                '/{projectKey}/as-associate/{associateId}/business-units/key={key}'
            ],
            'ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID::class,
                ['projectKey' => 'test_projectKey', 'associateId' => 'test_associateId', 'ID' => 'test_ID'],
                '/{projectKey}/as-associate/{associateId}/business-units/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->head();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
