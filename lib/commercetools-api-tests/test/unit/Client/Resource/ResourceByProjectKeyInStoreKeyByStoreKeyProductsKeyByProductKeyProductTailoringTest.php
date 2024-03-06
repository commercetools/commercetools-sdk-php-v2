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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoring
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductKey('test_productKey')
                        ->productTailoring()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/products/key=test_productKey/product-tailoring?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products()
                        ->withProductKey("test_productKey")
                        ->productTailoring()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/products/key=test_productKey/product-tailoring',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductKey('test_productKey')
                        ->productTailoring()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/key=test_productKey/product-tailoring?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products()
                        ->withProductKey("test_productKey")
                        ->productTailoring()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/key=test_productKey/product-tailoring',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductKey('test_productKey')
                        ->productTailoring()
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/products/key=test_productKey/product-tailoring?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductKey('test_productKey')
                        ->productTailoring()
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/products/key=test_productKey/product-tailoring?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products()
                        ->withProductKey("test_productKey")
                        ->productTailoring()
                        ->delete();
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/products/key=test_productKey/product-tailoring',
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
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsKeyByProductKeyProductTailoringDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductKey("productKey")
                        ->productTailoring()
                        ->delete();
                },
                599
            ]
        ];
    }
}
