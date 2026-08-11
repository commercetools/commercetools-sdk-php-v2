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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsKeyByKeyVariantAttributes
 */
class ResourceByProjectKeyProductProjectionsKeyByKeyVariantAttributesTest extends TestCase
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
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/product-projections/key=test_key/variant-attributes?staged=staged',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/product-projections/key=test_key/variant-attributes?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/product-projections/key=test_key/variant-attributes?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_withFilterSupplyChannels' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withKey('test_key')
                        ->variantAttributes()
                        ->get()
                        ->withFilterSupplyChannels('filter[supplyChannels]');
                },
                'get',
                'test_projectKey/product-projections/key=test_key/variant-attributes?filter%5BsupplyChannels%5D=filter%5BsupplyChannels%5D',
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->withKey("test_key")
                        ->variantAttributes()
                        ->get();
                },
                'get',
                'test_projectKey/product-projections/key=test_key/variant-attributes',
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
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withKey("key")
                        ->variantAttributes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductProjectionsKeyByKeyVariantAttributesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
