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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributes
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID/variant-attributes?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID/variant-attributes?localeProjection=localeProjection',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID/variant-attributes?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_withFilterSupplyChannels' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withFilterSupplyChannels('filter[supplyChannels]');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID/variant-attributes?filter%5BsupplyChannels%5D=filter%5BsupplyChannels%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->productProjections()
                        ->withId("test_ID")
                        ->variantAttributes()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/test_ID/variant-attributes',
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
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsByIDVariantAttributesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                599
            ]
        ];
    }
}
