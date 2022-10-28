<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnitsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnitsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnits
 */
class ResourceByProjectKeyBusinessUnitsTest extends TestCase
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
            'ByProjectKeyBusinessUnitsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/business-units?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/business-units?sort=sort',
            ],
            'ByProjectKeyBusinessUnitsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/business-units?limit=limit',
            ],
            'ByProjectKeyBusinessUnitsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/business-units?offset=offset',
            ],
            'ByProjectKeyBusinessUnitsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/business-units?withTotal=withTotal',
            ],
            'ByProjectKeyBusinessUnitsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/business-units?where=where',
            ],
            'ByProjectKeyBusinessUnitsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/business-units?var.varName=var.varName',
            ],
            'ByProjectKeyBusinessUnitsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->get();
                },
                'get',
                'test_projectKey/business-units',
            ],
            'ByProjectKeyBusinessUnitsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/business-units?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                'post',
                'test_projectKey/business-units',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyBusinessUnitsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyBusinessUnitsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyBusinessUnitsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/business-units/key={key}'
            ],
            'ResourceByProjectKeyBusinessUnitsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyBusinessUnitsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyBusinessUnitsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/business-units/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyBusinessUnitsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                }
            ],
            'ByProjectKeyBusinessUnitsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyBusinessUnitsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->get();
                },
                599
            ],
            'ByProjectKeyBusinessUnitsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyBusinessUnitsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyBusinessUnitsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyBusinessUnitsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyBusinessUnitsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyBusinessUnitsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyBusinessUnitsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyBusinessUnitsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyBusinessUnitsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
