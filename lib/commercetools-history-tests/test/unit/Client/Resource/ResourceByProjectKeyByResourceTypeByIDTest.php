<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;
use Commercetools\History\Client\HistoryRequestBuilder;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;

/**
 * @covers \Commercetools\History\Client\Resource\ByProjectKeyByResourceTypeByIDGet
 * @covers \Commercetools\History\Client\Resource\ResourceByProjectKeyByResourceTypeByID
 */
class ResourceByProjectKeyByResourceTypeByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new HistoryRequestBuilder();
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
        $builder = new HistoryRequestBuilder();
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

        $builder = new HistoryRequestBuilder($client);
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

        $builder = new HistoryRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request, new Response(500)));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyByResourceTypeByIDGet_withDateFrom' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withDateFrom('date.from');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?date.from=date.from',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withDateTo' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withDateTo('date.to');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?date.to=date.to',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withLimit' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?limit=limit',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withOffset' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?offset=offset',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withUserId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withUserId('userId');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?userId=userId',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withClientId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withClientId('clientId');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?clientId=clientId',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withCustomerId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withCustomerId('customerId');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?customerId=customerId',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withAssociateId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withAssociateId('associateId');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?associateId=associateId',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withBusinessUnit' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withBusinessUnit('businessUnit');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?businessUnit=businessUnit',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withType' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withType('type');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?type=type',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withSource' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withSource('source');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?source=source',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withChanges' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withChanges('changes');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?changes=changes',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withStores' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withStores('stores');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?stores=stores',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withExcludePlatformInitiatedChanges' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withExcludePlatformInitiatedChanges('excludePlatformInitiatedChanges');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?excludePlatformInitiatedChanges=excludePlatformInitiatedChanges',
            ],
            'ByProjectKeyByResourceTypeByIDGet_withExpand' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->withIDValue('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/test_resourceType/test_ID?expand=expand',
            ],
            'ByProjectKeyByResourceTypeByIDGet' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->withResourceTypeValue("test_resourceType")
                        ->withIDValue("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/test_resourceType/test_ID',
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
            'ByProjectKeyByResourceTypeByIDGet' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyByResourceTypeByIDGet_200' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyByResourceTypeByIDGet_400' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyByResourceTypeByIDGet_401' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyByResourceTypeByIDGet_403' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyByResourceTypeByIDGet_500' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyByResourceTypeByIDGet_503' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyByResourceTypeByIDGet_599' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->withIDValue("ID")
                        ->get();
                },
                599
            ]
        ];
    }
}
