<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotes
 */
class ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesTest extends TestCase
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
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?expand=expand',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?sort=sort',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?limit=limit',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?offset=offset',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?withTotal=withTotal',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?where=where',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?var.varName=var.varName',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quotes()
                        ->get();
                },
                'get',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->asAssociate()
                        ->withAssociateIdValue('test_associateId')
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue('test_businessUnitKey')
                        ->quotes()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes?where=where',
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quotes()
                        ->head();
                },
                'head',
                'test_projectKey/as-associate/test_associateId/in-business-unit/key=test_businessUnitKey/quotes',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quotes()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'associateId' => 'test_associateId', 'businessUnitKey' => 'test_businessUnitKey', 'key' => 'test_key'],
                '/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/quotes/key={key}'
            ],
            'ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("test_associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey")
                        ->quotes()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesByID::class,
                ['projectKey' => 'test_projectKey', 'associateId' => 'test_associateId', 'businessUnitKey' => 'test_businessUnitKey', 'ID' => 'test_ID'],
                '/{projectKey}/as-associate/{associateId}/in-business-unit/key={businessUnitKey}/quotes/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                }
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->get();
                },
                599
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                200
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                404
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                400
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                401
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                403
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                500
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                502
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                503
            ],
            'ByProjectKeyAsAssociateByAssociateIdInBusinessUnitKeyByBusinessUnitKeyQuotesHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->asAssociate()
                        ->withAssociateIdValue("associateId")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("businessUnitKey")
                        ->quotes()
                        ->head();
                },
                599
            ]
        ];
    }
}
