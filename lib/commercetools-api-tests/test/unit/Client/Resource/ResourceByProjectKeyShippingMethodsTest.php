<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsKeyByKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsMatchingCart;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsMatchingLocation;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethodsMatchingOrderedit;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyShippingMethodsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethods
 */
class ResourceByProjectKeyShippingMethodsTest extends TestCase
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
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
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
            'ByProjectKeyShippingMethodsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/shipping-methods?sort=sort',
            ],
            'ByProjectKeyShippingMethodsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/shipping-methods?limit=limit',
            ],
            'ByProjectKeyShippingMethodsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/shipping-methods?offset=offset',
            ],
            'ByProjectKeyShippingMethodsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/shipping-methods?withTotal=withTotal',
            ],
            'ByProjectKeyShippingMethodsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/shipping-methods?where=where',
            ],
            'ByProjectKeyShippingMethodsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/shipping-methods?var.varName=var.varName',
            ],
            'ByProjectKeyShippingMethodsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->get();
                },
                'get',
                'test_projectKey/shipping-methods',
            ],
            'ByProjectKeyShippingMethodsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->shippingMethods()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                'post',
                'test_projectKey/shipping-methods',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyShippingMethodsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyShippingMethodsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/shipping-methods/key={key}'
            ],
            'ResourceByProjectKeyShippingMethodsMatchingCart' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsMatchingCart {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->matchingCart();
                },
                ResourceByProjectKeyShippingMethodsMatchingCart::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/shipping-methods/matching-cart'
            ],
            'ResourceByProjectKeyShippingMethodsMatchingOrderedit' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsMatchingOrderedit {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->matchingOrderedit();
                },
                ResourceByProjectKeyShippingMethodsMatchingOrderedit::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/shipping-methods/matching-orderedit'
            ],
            'ResourceByProjectKeyShippingMethodsMatchingLocation' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsMatchingLocation {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->matchingLocation();
                },
                ResourceByProjectKeyShippingMethodsMatchingLocation::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/shipping-methods/matching-location'
            ],
            'ResourceByProjectKeyShippingMethodsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyShippingMethodsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/shipping-methods/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyShippingMethodsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                }
            ],
            'ByProjectKeyShippingMethodsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyShippingMethodsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                200
            ],
            'ByProjectKeyShippingMethodsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                400
            ],
            'ByProjectKeyShippingMethodsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                401
            ],
            'ByProjectKeyShippingMethodsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                403
            ],
            'ByProjectKeyShippingMethodsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                404
            ],
            'ByProjectKeyShippingMethodsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                500
            ],
            'ByProjectKeyShippingMethodsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                502
            ],
            'ByProjectKeyShippingMethodsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                503
            ],
            'ByProjectKeyShippingMethodsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                599
            ],
            'ByProjectKeyShippingMethodsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyShippingMethodsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyShippingMethodsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyShippingMethodsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyShippingMethodsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyShippingMethodsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyShippingMethodsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyShippingMethodsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyShippingMethodsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
