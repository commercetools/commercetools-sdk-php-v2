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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByID
 */
class ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDTest extends TestCase
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
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units/test_ID',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/as-associate/test_associateId/business-units/test_ID',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/as-associate/test_associateId/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/as-associate/test_associateId/business-units/test_ID',
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
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
