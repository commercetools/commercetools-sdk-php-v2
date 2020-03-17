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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCartDiscountsKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscountsKeyByKey
 */
class ResourceByProjectKeyCartDiscountsKeyByKeyTest extends TestCase
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
            'ByProjectKeyCartDiscountsKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/cart-discounts/key={key}',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/cart-discounts/key={key}',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}?version=version',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->cartDiscounts()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}?expand=expand',
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/cart-discounts/key={key}',
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
            'ByProjectKeyCartDiscountsKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCartDiscountsKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCartDiscountsKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCartDiscountsKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCartDiscountsKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
