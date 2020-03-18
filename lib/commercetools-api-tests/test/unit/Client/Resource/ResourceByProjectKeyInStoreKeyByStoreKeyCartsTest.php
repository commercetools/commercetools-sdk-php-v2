<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCartsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyCartsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCarts
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyCartsTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withCustomerId' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withCustomerId('customerId');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?customerId=customerId',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?sort=sort',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?limit=limit',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?offset=offset',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?withTotal=withTotal',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?where=where',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts?var.varName=var.varName',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                'get',
                '{projectKey}/in-store/key={storeKey}/carts',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->inStoreKeyWithStoreKeyValue('storeKey')
                        ->carts()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/carts?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                'post',
                '{projectKey}/in-store/key={storeKey}/carts',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->withCustomerId("customerId");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCartsCustomerIdByCustomerId::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey', 'customerId' => 'customerId'],
                '/{projectKey}/in-store/key={storeKey}/carts/customer-id={customerId}'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->withId("ID");
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCartsByID::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey', 'ID' => 'ID'],
                '/{projectKey}/in-store/key={storeKey}/carts/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyCartsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->carts()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
