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
use Commercetools\History\Client\Resource\ResourceByProjectKeyByResourceType;

/**
 * @covers \Commercetools\History\Client\Resource\ByProjectKeyGet
 * @covers \Commercetools\History\Client\Resource\ResourceByProjectKey
 */
class ResourceByProjectKeyTest extends TestCase
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
            'ByProjectKeyGet_withResourceType' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withResourceType('resourceType');
                },
                'get',
                'test_projectKey?resourceType=resourceType',
            ],
            'ByProjectKeyGet_withDateFrom' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withDateFrom('date.from');
                },
                'get',
                'test_projectKey?date.from=date.from',
            ],
            'ByProjectKeyGet_withDateTo' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withDateTo('date.to');
                },
                'get',
                'test_projectKey?date.to=date.to',
            ],
            'ByProjectKeyGet_withLimit' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey?limit=limit',
            ],
            'ByProjectKeyGet_withOffset' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey?offset=offset',
            ],
            'ByProjectKeyGet_withUserId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withUserId('userId');
                },
                'get',
                'test_projectKey?userId=userId',
            ],
            'ByProjectKeyGet_withType' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withType('type');
                },
                'get',
                'test_projectKey?type=type',
            ],
            'ByProjectKeyGet_withClientId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withClientId('clientId');
                },
                'get',
                'test_projectKey?clientId=clientId',
            ],
            'ByProjectKeyGet_withResourceId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withResourceId('resourceId');
                },
                'get',
                'test_projectKey?resourceId=resourceId',
            ],
            'ByProjectKeyGet_withSource' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withSource('source');
                },
                'get',
                'test_projectKey?source=source',
            ],
            'ByProjectKeyGet_withChanges' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withChanges('changes');
                },
                'get',
                'test_projectKey?changes=changes',
            ],
            'ByProjectKeyGet_withStores' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withStores('stores');
                },
                'get',
                'test_projectKey?stores=stores',
            ],
            'ByProjectKeyGet_withCustomerId' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withCustomerId('customerId');
                },
                'get',
                'test_projectKey?customerId=customerId',
            ],
            'ByProjectKeyGet_withExcludePlatformInitiatedChanges' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withExcludePlatformInitiatedChanges('excludePlatformInitiatedChanges');
                },
                'get',
                'test_projectKey?excludePlatformInitiatedChanges=excludePlatformInitiatedChanges',
            ],
            'ByProjectKeyGet_withExpand' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey?expand=expand',
            ],
            'ByProjectKeyGet' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->get();
                },
                'get',
                'test_projectKey',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyByResourceType' => [
                function (HistoryRequestBuilder $builder): ResourceByProjectKeyByResourceType {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->withResourceTypeValue("test_resourceType");
                },
                ResourceByProjectKeyByResourceType::class,
                ['projectKey' => 'test_projectKey', 'resourceType' => 'test_resourceType'],
                '/{projectKey}/{resourceType}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyGet' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyGet_200' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                },
                200
            ],
            'ByProjectKeyGet_400' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                },
                400
            ],
            'ByProjectKeyGet_401' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                },
                401
            ],
            'ByProjectKeyGet_403' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                },
                403
            ],
            'ByProjectKeyGet_500' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                },
                500
            ],
            'ByProjectKeyGet_503' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                },
                503
            ],
            'ByProjectKeyGet_599' => [
                function (HistoryRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->get();
                },
                599
            ]
        ];
    }
}
