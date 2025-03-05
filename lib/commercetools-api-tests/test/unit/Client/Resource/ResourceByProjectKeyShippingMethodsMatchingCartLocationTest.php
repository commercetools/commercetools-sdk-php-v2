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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsMatchingCartLocationGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsMatchingCartLocationHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsMatchingCartLocation
 */
class ResourceByProjectKeyShippingMethodsMatchingCartLocationTest extends TestCase
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
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_withCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get()
                        ->withCountry('country');
                },
                'get',
                'test_projectKey/shipping-methods/matching-cart-location?country=country',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_withState' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get()
                        ->withState('state');
                },
                'get',
                'test_projectKey/shipping-methods/matching-cart-location?state=state',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_withCartId' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get()
                        ->withCartId('cartId');
                },
                'get',
                'test_projectKey/shipping-methods/matching-cart-location?cartId=cartId',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/shipping-methods/matching-cart-location?expand=expand',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                'get',
                'test_projectKey/shipping-methods/matching-cart-location',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_withCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head()
                        ->withCountry('country');
                },
                'head',
                'test_projectKey/shipping-methods/matching-cart-location?country=country',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_withState' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head()
                        ->withState('state');
                },
                'head',
                'test_projectKey/shipping-methods/matching-cart-location?state=state',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_withCartId' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head()
                        ->withCartId('cartId');
                },
                'head',
                'test_projectKey/shipping-methods/matching-cart-location?cartId=cartId',
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                'head',
                'test_projectKey/shipping-methods/matching-cart-location',
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
            'ByProjectKeyShippingMethodsMatchingCartLocationGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                }
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                200
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                400
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                401
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                403
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                404
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                500
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                502
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                503
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->get();
                },
                599
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                400
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                401
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                403
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                404
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                500
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                502
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                503
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                200
            ],
            'ByProjectKeyShippingMethodsMatchingCartLocationHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCartLocation()
                        ->head();
                },
                599
            ]
        ];
    }
}
