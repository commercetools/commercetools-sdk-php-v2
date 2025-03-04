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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductTailoringByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTailoringByID
 */
class ResourceByProjectKeyProductTailoringByIDTest extends TestCase
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
            'ByProjectKeyProductTailoringByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-tailoring/test_ID?expand=expand',
            ],
            'ByProjectKeyProductTailoringByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/product-tailoring/test_ID',
            ],
            'ByProjectKeyProductTailoringByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-tailoring/test_ID?expand=expand',
            ],
            'ByProjectKeyProductTailoringByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/product-tailoring/test_ID',
            ],
            'ByProjectKeyProductTailoringByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/product-tailoring/test_ID?version=version',
            ],
            'ByProjectKeyProductTailoringByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productTailoring()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/product-tailoring/test_ID?expand=expand',
            ],
            'ByProjectKeyProductTailoringByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTailoring()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-tailoring/test_ID',
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
            'ByProjectKeyProductTailoringByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyProductTailoringByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductTailoringByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductTailoringByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductTailoringByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductTailoringByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductTailoringByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductTailoringByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductTailoringByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductTailoringByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductTailoringByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductTailoringByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductTailoringByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductTailoringByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductTailoringByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductTailoringByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductTailoringByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductTailoringByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductTailoringByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductTailoringByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyProductTailoringByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductTailoringByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductTailoringByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductTailoringByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductTailoringByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductTailoringByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductTailoringByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductTailoringByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductTailoringByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductTailoringByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyProductTailoringByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductTailoringByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTailoring()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
