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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsByIDVariantAttributesGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsByIDVariantAttributes
 */
class ResourceByProjectKeyProductProjectionsByIDVariantAttributesTest extends TestCase
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
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/product-projections/test_ID/variant-attributes?staged=staged',
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                'test_projectKey/product-projections/test_ID/variant-attributes?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_withFilterAttributes' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withFilterAttributes('filter[attributes]');
                },
                'get',
                'test_projectKey/product-projections/test_ID/variant-attributes?filter%5Battributes%5D=filter%5Battributes%5D',
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_withFilterSupplyChannels' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productProjections()
                        ->withId('test_ID')
                        ->variantAttributes()
                        ->get()
                        ->withFilterSupplyChannels('filter[supplyChannels]');
                },
                'get',
                'test_projectKey/product-projections/test_ID/variant-attributes?filter%5BsupplyChannels%5D=filter%5BsupplyChannels%5D',
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections()
                        ->withId("test_ID")
                        ->variantAttributes()
                        ->get();
                },
                'get',
                'test_projectKey/product-projections/test_ID/variant-attributes',
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
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->withId("ID")
                        ->variantAttributes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductProjectionsByIDVariantAttributesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
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
