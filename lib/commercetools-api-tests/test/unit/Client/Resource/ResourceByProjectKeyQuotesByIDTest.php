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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyQuotesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyQuotesByID
 */
class ResourceByProjectKeyQuotesByIDTest extends TestCase
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
            'ByProjectKeyQuotesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/quotes/test_ID?expand=expand',
            ],
            'ByProjectKeyQuotesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/quotes/test_ID',
            ],
            'ByProjectKeyQuotesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/quotes/test_ID?expand=expand',
            ],
            'ByProjectKeyQuotesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/quotes/test_ID',
            ],
            'ByProjectKeyQuotesByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/quotes/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyQuotesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/quotes/test_ID?version=version',
            ],
            'ByProjectKeyQuotesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->quotes()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/quotes/test_ID?expand=expand',
            ],
            'ByProjectKeyQuotesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/quotes/test_ID',
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
            'ByProjectKeyQuotesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyQuotesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyQuotesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyQuotesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyQuotesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyQuotesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyQuotesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyQuotesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyQuotesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyQuotesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyQuotesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyQuotesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyQuotesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyQuotesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyQuotesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyQuotesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyQuotesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyQuotesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyQuotesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyQuotesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyQuotesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyQuotesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyQuotesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyQuotesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyQuotesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyQuotesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyQuotesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyQuotesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyQuotesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyQuotesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyQuotesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyQuotesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->quotes()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
