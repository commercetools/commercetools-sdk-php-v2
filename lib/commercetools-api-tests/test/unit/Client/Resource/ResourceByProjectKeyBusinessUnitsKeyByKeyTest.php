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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnitsKeyByKey
 */
class ResourceByProjectKeyBusinessUnitsKeyByKeyTest extends TestCase
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
            'ByProjectKeyBusinessUnitsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/business-units/key=test_key?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/business-units/key=test_key',
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/business-units/key=test_key',
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/business-units/key=test_key?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/business-units/key=test_key',
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/business-units/key=test_key?version=version',
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->businessUnits()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/business-units/key=test_key?expand=expand',
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/business-units/key=test_key',
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
            'ByProjectKeyBusinessUnitsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyBusinessUnitsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
