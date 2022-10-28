<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeBusinessUnitsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMeBusinessUnitsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeBusinessUnits
 */
class ResourceByProjectKeyMeBusinessUnitsTest extends TestCase
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
            'ByProjectKeyMeBusinessUnitsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/business-units?expand=expand',
            ],
            'ByProjectKeyMeBusinessUnitsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/me/business-units?sort=sort',
            ],
            'ByProjectKeyMeBusinessUnitsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/me/business-units?limit=limit',
            ],
            'ByProjectKeyMeBusinessUnitsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/me/business-units?offset=offset',
            ],
            'ByProjectKeyMeBusinessUnitsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/me/business-units?withTotal=withTotal',
            ],
            'ByProjectKeyMeBusinessUnitsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/me/business-units?where=where',
            ],
            'ByProjectKeyMeBusinessUnitsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/me/business-units?var.varName=var.varName',
            ],
            'ByProjectKeyMeBusinessUnitsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                'get',
                'test_projectKey/me/business-units',
            ],
            'ByProjectKeyMeBusinessUnitsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/business-units?expand=expand',
            ],
            'ByProjectKeyMeBusinessUnitsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                'post',
                'test_projectKey/me/business-units',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMeBusinessUnitsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeBusinessUnitsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyMeBusinessUnitsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/me/business-units/{ID}'
            ],
            'ResourceByProjectKeyMeBusinessUnitsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMeBusinessUnitsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyMeBusinessUnitsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/me/business-units/key={key}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMeBusinessUnitsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                }
            ],
            'ByProjectKeyMeBusinessUnitsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeBusinessUnitsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeBusinessUnitsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeBusinessUnitsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyMeBusinessUnitsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
