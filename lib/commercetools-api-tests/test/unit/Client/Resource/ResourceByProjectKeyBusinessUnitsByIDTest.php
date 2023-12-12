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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnitsByID
 */
class ResourceByProjectKeyBusinessUnitsByIDTest extends TestCase
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
            'ByProjectKeyBusinessUnitsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/business-units/test_ID',
            ],
            'ByProjectKeyBusinessUnitsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/business-units/test_ID',
            ],
            'ByProjectKeyBusinessUnitsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/business-units/test_ID',
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/business-units/test_ID?version=version',
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/business-units/test_ID',
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
            'ByProjectKeyBusinessUnitsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyBusinessUnitsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyBusinessUnitsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyBusinessUnitsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyBusinessUnitsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyBusinessUnitsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyBusinessUnitsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyBusinessUnitsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyBusinessUnitsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyBusinessUnitsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyBusinessUnitsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyBusinessUnitsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyBusinessUnitsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyBusinessUnitsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyBusinessUnitsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyBusinessUnitsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
