<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantsByIDImages;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyVariantsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyVariantsByID
 */
class ResourceByProjectKeyVariantsByIDTest extends TestCase
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
            'ByProjectKeyVariantsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/variants/test_ID?expand=expand',
            ],
            'ByProjectKeyVariantsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/variants/test_ID',
            ],
            'ByProjectKeyVariantsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/variants/test_ID',
            ],
            'ByProjectKeyVariantsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/variants/test_ID?expand=expand',
            ],
            'ByProjectKeyVariantsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/variants/test_ID',
            ],
            'ByProjectKeyVariantsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/variants/test_ID?version=version',
            ],
            'ByProjectKeyVariantsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->variants()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/variants/test_ID?expand=expand',
            ],
            'ByProjectKeyVariantsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/variants/test_ID',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyVariantsByIDImages' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyVariantsByIDImages {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->variants()
                        ->withId("test_ID")
                        ->images();
                },
                ResourceByProjectKeyVariantsByIDImages::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/variants/{ID}/images'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyVariantsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyVariantsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyVariantsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyVariantsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyVariantsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyVariantsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyVariantsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyVariantsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyVariantsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyVariantsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyVariantsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyVariantsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyVariantsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyVariantsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyVariantsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyVariantsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyVariantsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyVariantsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyVariantsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyVariantsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyVariantsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyVariantsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyVariantsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyVariantsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyVariantsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyVariantsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyVariantsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyVariantsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyVariantsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyVariantsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyVariantsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyVariantsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyVariantsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyVariantsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyVariantsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyVariantsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyVariantsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyVariantsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyVariantsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyVariantsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyVariantsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyVariantsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->variants()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
