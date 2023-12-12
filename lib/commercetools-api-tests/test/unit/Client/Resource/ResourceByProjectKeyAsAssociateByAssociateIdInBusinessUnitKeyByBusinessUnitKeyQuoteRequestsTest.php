<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequests
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsTest extends TestCase
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
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?sort=sort',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?limit=limit',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?offset=offset',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?withTotal=withTotal',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?where=where',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?var.varName=var.varName',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?where=where',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                'head',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quoteRequests()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                'post',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quote-requests',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'associateId' => 'test_associateId', 'businessUnitKey' => 'test_businessUnitKey', 'key' => 'test_key'],
                '/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/quote-requests/key={key}'
            ],
            'ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quoteRequests()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsByID::class,
                ['projectKey' => 'test_projectKey', 'associateId' => 'test_associateId', 'businessUnitKey' => 'test_businessUnitKey', 'ID' => 'test_ID'],
                '/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/quote-requests/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->head();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuoteRequestsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quoteRequests()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
