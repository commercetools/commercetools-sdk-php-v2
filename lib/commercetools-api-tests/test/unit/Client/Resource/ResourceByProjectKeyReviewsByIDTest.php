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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyReviewsByID
 */
class ResourceByProjectKeyReviewsByIDTest extends TestCase
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
            'ByProjectKeyReviewsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/reviews/test_ID?expand=expand',
            ],
            'ByProjectKeyReviewsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/reviews/test_ID',
            ],
            'ByProjectKeyReviewsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/reviews/test_ID?expand=expand',
            ],
            'ByProjectKeyReviewsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/reviews/test_ID',
            ],
            'ByProjectKeyReviewsByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/reviews/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyReviewsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/reviews/test_ID?version=version',
            ],
            'ByProjectKeyReviewsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->reviews()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/reviews/test_ID?expand=expand',
            ],
            'ByProjectKeyReviewsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/reviews/test_ID',
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
            'ByProjectKeyReviewsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyReviewsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyReviewsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyReviewsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyReviewsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyReviewsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyReviewsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyReviewsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyReviewsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyReviewsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyReviewsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyReviewsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyReviewsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyReviewsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyReviewsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyReviewsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyReviewsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyReviewsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyReviewsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyReviewsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyReviewsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyReviewsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyReviewsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyReviewsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyReviewsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyReviewsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyReviewsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyReviewsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyReviewsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
