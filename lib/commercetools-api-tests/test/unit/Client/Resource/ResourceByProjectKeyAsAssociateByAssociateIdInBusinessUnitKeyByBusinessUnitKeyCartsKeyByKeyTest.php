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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKey
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyTest extends TestCase
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
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->carts()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->carts()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->carts()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->carts()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->carts()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->carts()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->carts()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key?version=version',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->carts()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->carts()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/carts/key=test_key',
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
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyCartsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->carts()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
