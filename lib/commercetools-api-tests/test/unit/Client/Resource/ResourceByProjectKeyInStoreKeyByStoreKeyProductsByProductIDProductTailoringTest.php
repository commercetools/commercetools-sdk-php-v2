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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoring
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products()
                        ->withProductId("test_productID")
                        ->productTailoring()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products()
                        ->withProductId("test_productID")
                        ->productTailoring()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products()
                        ->withProductId("test_productID")
                        ->productTailoring()
                        ->delete();
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring',
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
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->delete();
                },
                599
            ]
        ];
    }
}
