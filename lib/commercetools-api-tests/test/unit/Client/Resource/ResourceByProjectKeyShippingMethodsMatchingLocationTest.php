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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsMatchingLocationGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsMatchingLocationHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsMatchingLocation
 */
class ResourceByProjectKeyShippingMethodsMatchingLocationTest extends TestCase
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
            'ByProjectKeyShippingMethodsMatchingLocationGet_withCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get()
                        ->withCountry('country');
                },
                'get',
                'test_projectKey/shipping-methods/matching-location?country=country',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_withState' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get()
                        ->withState('state');
                },
                'get',
                'test_projectKey/shipping-methods/matching-location?state=state',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_withCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get()
                        ->withCurrency('currency');
                },
                'get',
                'test_projectKey/shipping-methods/matching-location?currency=currency',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/shipping-methods/matching-location?expand=expand',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/shipping-methods/matching-location?sort=sort',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                'get',
                'test_projectKey/shipping-methods/matching-location',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_withCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head()
                        ->withCountry('country');
                },
                'head',
                'test_projectKey/shipping-methods/matching-location?country=country',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_withState' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head()
                        ->withState('state');
                },
                'head',
                'test_projectKey/shipping-methods/matching-location?state=state',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_withCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head()
                        ->withCurrency('currency');
                },
                'head',
                'test_projectKey/shipping-methods/matching-location?currency=currency',
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                'head',
                'test_projectKey/shipping-methods/matching-location',
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
            'ByProjectKeyShippingMethodsMatchingLocationGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                }
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyShippingMethodsMatchingLocationGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                200
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                400
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                401
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                403
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                404
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                500
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                502
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                503
            ],
            'ByProjectKeyShippingMethodsMatchingLocationGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->get();
                },
                599
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                400
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                401
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                403
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                404
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                500
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                502
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                503
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                200
            ],
            'ByProjectKeyShippingMethodsMatchingLocationHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation()
                        ->head();
                },
                599
            ]
        ];
    }
}
