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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyMeBusinessUnitsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyMeBusinessUnitsKeyByKey
 */
class ResourceByProjectKeyMeBusinessUnitsKeyByKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, ?string $body = null)
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
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/me/business-units/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/me/business-units/key=test_key',
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/me/business-units/key=test_key',
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->me()
                        ->businessUnits()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/me/business-units/key=test_key?expand=expand',
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/me/business-units/key=test_key',
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
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyMeBusinessUnitsKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me()
                        ->businessUnits()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
