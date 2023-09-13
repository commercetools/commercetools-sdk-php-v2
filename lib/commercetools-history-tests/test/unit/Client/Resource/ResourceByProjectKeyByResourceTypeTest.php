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
use Commercetools\History\Client\Resource\ResourceByProjectKeyByResourceTypeByID;

/**
 * @covers \Commercetools\History\Client\Resource\ByProjectKeyByResourceTypeGet
 * @covers \Commercetools\History\Client\Resource\ResourceByProjectKeyByResourceType
 */
class ResourceByProjectKeyByResourceTypeTest extends TestCase
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
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new HistoryRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
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
            'ByProjectKeyByResourceTypeGet_withDateFrom' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withDateFrom('date.from');
                },
                'get',
                'test_projectKey/test_resourceType?date.from=date.from',
            ],
            'ByProjectKeyByResourceTypeGet_withDateTo' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withDateTo('date.to');
                },
                'get',
                'test_projectKey/test_resourceType?date.to=date.to',
            ],
            'ByProjectKeyByResourceTypeGet_withLimit' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/test_resourceType?limit=limit',
            ],
            'ByProjectKeyByResourceTypeGet_withOffset' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/test_resourceType?offset=offset',
            ],
            'ByProjectKeyByResourceTypeGet_withUserId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withUserId('userId');
                },
                'get',
                'test_projectKey/test_resourceType?userId=userId',
            ],
            'ByProjectKeyByResourceTypeGet_withClientId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withClientId('clientId');
                },
                'get',
                'test_projectKey/test_resourceType?clientId=clientId',
            ],
            'ByProjectKeyByResourceTypeGet_withCustomerId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withCustomerId('customerId');
                },
                'get',
                'test_projectKey/test_resourceType?customerId=customerId',
            ],
            'ByProjectKeyByResourceTypeGet_withAssociateId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withAssociateId('associateId');
                },
                'get',
                'test_projectKey/test_resourceType?associateId=associateId',
            ],
            'ByProjectKeyByResourceTypeGet_withBusinessUnit' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withBusinessUnit('businessUnit');
                },
                'get',
                'test_projectKey/test_resourceType?businessUnit=businessUnit',
            ],
            'ByProjectKeyByResourceTypeGet_withType' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withType('type');
                },
                'get',
                'test_projectKey/test_resourceType?type=type',
            ],
            'ByProjectKeyByResourceTypeGet_withResourceKey' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withResourceKey('resourceKey');
                },
                'get',
                'test_projectKey/test_resourceType?resourceKey=resourceKey',
            ],
            'ByProjectKeyByResourceTypeGet_withSource' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withSource('source');
                },
                'get',
                'test_projectKey/test_resourceType?source=source',
            ],
            'ByProjectKeyByResourceTypeGet_withChanges' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withChanges('changes');
                },
                'get',
                'test_projectKey/test_resourceType?changes=changes',
            ],
            'ByProjectKeyByResourceTypeGet_withStores' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withStores('stores');
                },
                'get',
                'test_projectKey/test_resourceType?stores=stores',
            ],
            'ByProjectKeyByResourceTypeGet_withExcludePlatformInitiatedChanges' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withExcludePlatformInitiatedChanges('excludePlatformInitiatedChanges');
                },
                'get',
                'test_projectKey/test_resourceType?excludePlatformInitiatedChanges=excludePlatformInitiatedChanges',
            ],
            'ByProjectKeyByResourceTypeGet_withExpand' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->withResourceTypeValue('test_resourceType')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/test_resourceType?expand=expand',
            ],
            'ByProjectKeyByResourceTypeGet' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->withResourceTypeValue("test_resourceType")
                        ->get();
                },
                'get',
                'test_projectKey/test_resourceType',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyByResourceTypeByID' => [
                function (HistoryRequestBuilder $builder): ResourceByProjectKeyByResourceTypeByID {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->withResourceTypeValue("test_resourceType")
                        ->withIDValue("test_ID");
                },
                ResourceByProjectKeyByResourceTypeByID::class,
                ['projectKey' => 'test_projectKey', 'resourceType' => 'test_resourceType', 'ID' => 'test_ID'],
                '/{projectKey}/{resourceType}/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyByResourceTypeGet' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyByResourceTypeGet_200' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                },
                200
            ],
            'ByProjectKeyByResourceTypeGet_400' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                },
                400
            ],
            'ByProjectKeyByResourceTypeGet_401' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                },
                401
            ],
            'ByProjectKeyByResourceTypeGet_403' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                },
                403
            ],
            'ByProjectKeyByResourceTypeGet_500' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                },
                500
            ],
            'ByProjectKeyByResourceTypeGet_503' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                },
                503
            ],
            'ByProjectKeyByResourceTypeGet_599' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->withResourceTypeValue("resourceType")
                        ->get();
                },
                599
            ]
        ];
    }
}
