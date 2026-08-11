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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributes
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/key=test_key/variant-attributes?staged=staged',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/key=test_key/variant-attributes?localeProjection=localeProjection',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/key=test_key/variant-attributes?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_withFilterSupplyChannels' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withFilterSupplyChannels('filter[supplyChannels]');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/key=test_key/variant-attributes?filter%5BsupplyChannels%5D=filter%5BsupplyChannels%5D',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->productProjections()
                        ->withKey("test_key")
                        ->variantAttributes()
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/product-projections/key=test_key/variant-attributes',
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
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyProductProjectionsKeyByKeyVariantAttributesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                599
            ]
        ];
    }
}
