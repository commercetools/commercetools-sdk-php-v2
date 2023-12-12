<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsByIDProducts;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsByID
 */
class ResourceByProjectKeyProductSelectionsByIDTest extends TestCase
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
            'ByProjectKeyProductSelectionsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-selections/test_ID?expand=expand',
            ],
            'ByProjectKeyProductSelectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/product-selections/test_ID',
            ],
            'ByProjectKeyProductSelectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/product-selections/test_ID',
            ],
            'ByProjectKeyProductSelectionsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-selections/test_ID?expand=expand',
            ],
            'ByProjectKeyProductSelectionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/product-selections/test_ID',
            ],
            'ByProjectKeyProductSelectionsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/product-selections/test_ID?version=version',
            ],
            'ByProjectKeyProductSelectionsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/product-selections/test_ID?expand=expand',
            ],
            'ByProjectKeyProductSelectionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-selections/test_ID',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductSelectionsByIDProducts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductSelectionsByIDProducts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withId("test_ID")
                        ->products();
                },
                ResourceByProjectKeyProductSelectionsByIDProducts::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/product-selections/{ID}/products'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductSelectionsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyProductSelectionsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyProductSelectionsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductSelectionsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductSelectionsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductSelectionsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductSelectionsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductSelectionsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductSelectionsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductSelectionsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductSelectionsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductSelectionsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductSelectionsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductSelectionsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyProductSelectionsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyProductSelectionsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyProductSelectionsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyProductSelectionsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyProductSelectionsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyProductSelectionsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyProductSelectionsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyProductSelectionsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyProductSelectionsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductSelectionsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductSelectionsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductSelectionsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductSelectionsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductSelectionsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductSelectionsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductSelectionsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyProductSelectionsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductSelectionsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductSelectionsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductSelectionsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductSelectionsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductSelectionsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductSelectionsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductSelectionsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductSelectionsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductSelectionsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyProductSelectionsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductSelectionsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
