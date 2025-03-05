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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCategoriesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCategoriesByID
 */
class ResourceByProjectKeyCategoriesByIDTest extends TestCase
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
            'ByProjectKeyCategoriesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/categories/test_ID?expand=expand',
            ],
            'ByProjectKeyCategoriesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/categories/test_ID',
            ],
            'ByProjectKeyCategoriesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/categories/test_ID',
            ],
            'ByProjectKeyCategoriesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/categories/test_ID?expand=expand',
            ],
            'ByProjectKeyCategoriesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/categories/test_ID',
            ],
            'ByProjectKeyCategoriesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/categories/test_ID?version=version',
            ],
            'ByProjectKeyCategoriesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->categories()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/categories/test_ID?expand=expand',
            ],
            'ByProjectKeyCategoriesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/categories/test_ID',
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
            'ByProjectKeyCategoriesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyCategoriesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyCategoriesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyCategoriesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCategoriesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCategoriesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCategoriesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCategoriesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCategoriesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCategoriesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCategoriesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCategoriesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCategoriesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCategoriesByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyCategoriesByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyCategoriesByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyCategoriesByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyCategoriesByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyCategoriesByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyCategoriesByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyCategoriesByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyCategoriesByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyCategoriesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCategoriesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCategoriesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCategoriesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCategoriesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCategoriesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCategoriesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCategoriesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyCategoriesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCategoriesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyCategoriesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCategoriesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCategoriesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCategoriesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCategoriesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCategoriesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCategoriesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCategoriesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyCategoriesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCategoriesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
