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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKey
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyTest extends TestCase
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
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests/key=test_key',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests/key=test_key',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests/key=test_key?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests/key=test_key',
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
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
