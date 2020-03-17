<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountCodesByID;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountCodesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountCodes
 */
class ResourceByProjectKeyDiscountCodesTest extends TestCase
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
    public function testResources(callable $builderFunction, string $class)
    {
        $builder = new ApiRequestBuilder();
        $this->assertInstanceOf($class, $builderFunction($builder));
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
            'ByProjectKeyDiscountCodesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/discount-codes?sort=sort',
            ],
            'ByProjectKeyDiscountCodesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/discount-codes?limit=limit',
            ],
            'ByProjectKeyDiscountCodesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/discount-codes?offset=offset',
            ],
            'ByProjectKeyDiscountCodesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/discount-codes?withTotal=withTotal',
            ],
            'ByProjectKeyDiscountCodesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/discount-codes?where=where',
            ],
            'ByProjectKeyDiscountCodesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/discount-codes?var.varName=var.varName',
            ],
            'ByProjectKeyDiscountCodesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                'get',
                '{projectKey}/discount-codes',
            ],
            'ByProjectKeyDiscountCodesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->discountCodes()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                'post',
                '{projectKey}/discount-codes',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyDiscountCodesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyDiscountCodesByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->withId("ID");
                },
                ResourceByProjectKeyDiscountCodesByID::class
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyDiscountCodesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                }
            ],
            'ByProjectKeyDiscountCodesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyDiscountCodesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                200
            ],
            'ByProjectKeyDiscountCodesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                400
            ],
            'ByProjectKeyDiscountCodesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                401
            ],
            'ByProjectKeyDiscountCodesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                403
            ],
            'ByProjectKeyDiscountCodesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                404
            ],
            'ByProjectKeyDiscountCodesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                500
            ],
            'ByProjectKeyDiscountCodesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                503
            ],
            'ByProjectKeyDiscountCodesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyDiscountCodesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyDiscountCodesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyDiscountCodesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyDiscountCodesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyDiscountCodesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyDiscountCodesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyDiscountCodesPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
