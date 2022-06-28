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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStandalonePricesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStandalonePricesByID
 */
class ResourceByProjectKeyStandalonePricesByIDTest extends TestCase
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
            'ByProjectKeyStandalonePricesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/standalone-prices/test_ID?expand=expand',
            ],
            'ByProjectKeyStandalonePricesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/standalone-prices/test_ID',
            ],
            'ByProjectKeyStandalonePricesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/standalone-prices/test_ID?expand=expand',
            ],
            'ByProjectKeyStandalonePricesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/standalone-prices/test_ID',
            ],
            'ByProjectKeyStandalonePricesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/standalone-prices/test_ID?version=version',
            ],
            'ByProjectKeyStandalonePricesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->standalonePrices()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/standalone-prices/test_ID?expand=expand',
            ],
            'ByProjectKeyStandalonePricesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/standalone-prices/test_ID',
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
            'ByProjectKeyStandalonePricesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyStandalonePricesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyStandalonePricesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStandalonePricesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyStandalonePricesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyStandalonePricesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyStandalonePricesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyStandalonePricesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyStandalonePricesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyStandalonePricesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyStandalonePricesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyStandalonePricesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyStandalonePricesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStandalonePricesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyStandalonePricesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStandalonePricesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStandalonePricesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStandalonePricesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStandalonePricesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStandalonePricesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStandalonePricesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStandalonePricesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyStandalonePricesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyStandalonePricesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyStandalonePricesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyStandalonePricesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyStandalonePricesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyStandalonePricesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyStandalonePricesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyStandalonePricesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyStandalonePricesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyStandalonePricesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->standalonePrices()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
