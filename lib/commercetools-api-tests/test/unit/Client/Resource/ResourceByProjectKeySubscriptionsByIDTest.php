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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeySubscriptionsByID
 */
class ResourceByProjectKeySubscriptionsByIDTest extends TestCase
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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeySubscriptionsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->subscriptions()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/subscriptions/test_ID?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/subscriptions/test_ID',
            ],
            'ByProjectKeySubscriptionsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->subscriptions()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/subscriptions/test_ID?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/subscriptions/test_ID',
            ],
            'ByProjectKeySubscriptionsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->subscriptions()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/subscriptions/test_ID?version=version',
            ],
            'ByProjectKeySubscriptionsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->subscriptions()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/subscriptions/test_ID?expand=expand',
            ],
            'ByProjectKeySubscriptionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/subscriptions/test_ID',
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
            'ByProjectKeySubscriptionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeySubscriptionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeySubscriptionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeySubscriptionsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeySubscriptionsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeySubscriptionsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeySubscriptionsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeySubscriptionsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeySubscriptionsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeySubscriptionsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeySubscriptionsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeySubscriptionsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeySubscriptionsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeySubscriptionsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeySubscriptionsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeySubscriptionsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeySubscriptionsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeySubscriptionsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeySubscriptionsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeySubscriptionsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeySubscriptionsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeySubscriptionsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeySubscriptionsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeySubscriptionsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeySubscriptionsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeySubscriptionsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeySubscriptionsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeySubscriptionsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeySubscriptionsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
