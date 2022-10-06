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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeBusinessUnitsByID
 */
class ResourceByProjectKeyMeBusinessUnitsByIDTest extends TestCase
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
            'ByProjectKeyMeBusinessUnitsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/me/business-units/test_ID',
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/business-units/test_ID',
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/me/business-units/test_ID?version=version',
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/me/business-units/test_ID?expand=expand',
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/me/business-units/test_ID',
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
            'ByProjectKeyMeBusinessUnitsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
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
            'ByProjectKeyMeBusinessUnitsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
