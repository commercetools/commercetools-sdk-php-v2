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
use Prophecy\Argument;
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
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
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
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyShippingMethodsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/shipping-methods?sort=sort',
            ],
            'ByProjectKeyShippingMethodsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/shipping-methods?limit=limit',
            ],
            'ByProjectKeyShippingMethodsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/shipping-methods?offset=offset',
            ],
            'ByProjectKeyShippingMethodsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/shipping-methods?withTotal=withTotal',
            ],
            'ByProjectKeyShippingMethodsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/shipping-methods?where=where',
            ],
            'ByProjectKeyShippingMethodsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/shipping-methods?var.varName=var.varName',
            ],
            'ByProjectKeyShippingMethodsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                'get',
                '{projectKey}/shipping-methods',
            ],
            'ByProjectKeyShippingMethodsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->shippingMethods()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/shipping-methods?expand=expand',
            ],
            'ByProjectKeyShippingMethodsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                'post',
                '{projectKey}/shipping-methods',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyShippingMethodsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withKey("key");
                },
                ResourceByProjectKeyShippingMethodsKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/shipping-methods/key={key}'
            ],
            'ResourceByProjectKeyShippingMethodsMatchingCart' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsMatchingCart {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingCart();
                },
                ResourceByProjectKeyShippingMethodsMatchingCart::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/shipping-methods/matching-cart'
            ],
            'ResourceByProjectKeyShippingMethodsMatchingOrderedit' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsMatchingOrderedit {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingOrderedit();
                },
                ResourceByProjectKeyShippingMethodsMatchingOrderedit::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/shipping-methods/matching-orderedit'
            ],
            'ResourceByProjectKeyShippingMethodsMatchingLocation' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsMatchingLocation {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->matchingLocation();
                },
                ResourceByProjectKeyShippingMethodsMatchingLocation::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/shipping-methods/matching-location'
            ],
            'ResourceByProjectKeyShippingMethodsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethodsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->withId("ID");
                },
                ResourceByProjectKeyShippingMethodsByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
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
            'ByProjectKeyShippingMethodsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->get();
                },
                503
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
            'ByProjectKeyShippingMethodsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyShippingMethodsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
