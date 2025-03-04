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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImages
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost_withFilename' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->images()
                        ->post(null)
                        ->withFilename('filename');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring/images?filename=filename',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost_withVariant' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->images()
                        ->post(null)
                        ->withVariant('variant');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring/images?variant=variant',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost_withSku' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->images()
                        ->post(null)
                        ->withSku('sku');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring/images?sku=sku',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->products()
                        ->withProductId('test_productID')
                        ->productTailoring()
                        ->images()
                        ->post(null)
                        ->withStaged('staged');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring/images?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products()
                        ->withProductId("test_productID")
                        ->productTailoring()
                        ->images()
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/products/test_productID/product-tailoring/images',
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
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->images()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->images()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost_202' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->images()
                        ->post(null);
                },
                202
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductsByProductIDProductTailoringImagesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->products()
                        ->withProductId("productID")
                        ->productTailoring()
                        ->images()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
