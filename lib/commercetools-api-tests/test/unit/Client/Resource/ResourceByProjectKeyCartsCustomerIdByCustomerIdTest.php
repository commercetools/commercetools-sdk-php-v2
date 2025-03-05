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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsCustomerIdByCustomerIdGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartsCustomerIdByCustomerIdHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCartsCustomerIdByCustomerId
 */
class ResourceByProjectKeyCartsCustomerIdByCustomerIdTest extends TestCase
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
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->carts()
                        ->withCustomerId('test_customerId')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/carts/customer-id=test_customerId?expand=expand',
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->carts()
                        ->withCustomerId("test_customerId")
                        ->get();
                },
                'get',
                'test_projectKey/carts/customer-id=test_customerId',
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->carts()
                        ->withCustomerId("test_customerId")
                        ->head();
                },
                'head',
                'test_projectKey/carts/customer-id=test_customerId',
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
            'ByProjectKeyCartsCustomerIdByCustomerIdGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                }
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                200
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                404
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                400
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                401
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                403
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                500
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                502
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                503
            ],
            'ByProjectKeyCartsCustomerIdByCustomerIdHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts()
                        ->withCustomerId("customerId")
                        ->head();
                },
                599
            ]
        ];
    }
}
