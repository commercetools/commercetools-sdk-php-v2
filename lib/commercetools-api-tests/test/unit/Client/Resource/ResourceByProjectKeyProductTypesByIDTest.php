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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTypesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypesByID
 */
class ResourceByProjectKeyProductTypesByIDTest extends TestCase
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
            'ByProjectKeyProductTypesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTypes()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-types/test_ID?expand=expand',
            ],
            'ByProjectKeyProductTypesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTypes()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/product-types/test_ID',
            ],
            'ByProjectKeyProductTypesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTypes()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-types/test_ID?expand=expand',
            ],
            'ByProjectKeyProductTypesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTypes()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/product-types/test_ID',
            ],
            'ByProjectKeyProductTypesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTypes()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/product-types/test_ID?version=version',
            ],
            'ByProjectKeyProductTypesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTypes()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/product-types/test_ID?expand=expand',
            ],
            'ByProjectKeyProductTypesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTypes()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-types/test_ID',
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
            'ByProjectKeyProductTypesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyProductTypesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductTypesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductTypesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductTypesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductTypesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductTypesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductTypesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductTypesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductTypesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductTypesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductTypesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductTypesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductTypesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductTypesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductTypesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductTypesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductTypesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductTypesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductTypesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductTypesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductTypesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductTypesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductTypesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductTypesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductTypesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductTypesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductTypesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductTypesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
