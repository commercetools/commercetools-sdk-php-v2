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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKey
 */
class ResourceByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyTest extends TestCase
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
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units/key=test_key?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/business-units/key=test_key',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/as-associate/test_associateId/business-units/key=test_key',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->businessUnits()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/as-associate/test_associateId/business-units/key=test_key?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->businessUnits()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/as-associate/test_associateId/business-units/key=test_key',
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
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdBusinessUnitsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
