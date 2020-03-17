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
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscountsByID
 */
class ResourceByProjectKeyCartDiscountsByIDTest extends TestCase
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
        };
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
            'ByProjectKeyCartDiscountsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/cart-discounts/{ID}',
            ],
            'ByProjectKeyCartDiscountsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/cart-discounts/{ID}',
            ],
            'ByProjectKeyCartDiscountsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/cart-discounts/{ID}?version=version',
            ],
            'ByProjectKeyCartDiscountsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/cart-discounts/{ID}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/cart-discounts/{ID}',
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
            'ByProjectKeyCartDiscountsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyCartDiscountsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyCartDiscountsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCartDiscountsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCartDiscountsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCartDiscountsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCartDiscountsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCartDiscountsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCartDiscountsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCartDiscountsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCartDiscountsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCartDiscountsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCartDiscountsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCartDiscountsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCartDiscountsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCartDiscountsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCartDiscountsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCartDiscountsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCartDiscountsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCartDiscountsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCartDiscountsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCartDiscountsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCartDiscountsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCartDiscountsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCartDiscountsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCartDiscountsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
