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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyDiscountCodesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/discount-codes?sort=sort',
            ],
            'ByProjectKeyDiscountCodesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/discount-codes?limit=limit',
            ],
            'ByProjectKeyDiscountCodesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/discount-codes?offset=offset',
            ],
            'ByProjectKeyDiscountCodesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/discount-codes?withTotal=withTotal',
            ],
            'ByProjectKeyDiscountCodesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/discount-codes?where=where',
            ],
            'ByProjectKeyDiscountCodesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/discount-codes?var.varName=var.varName',
            ],
            'ByProjectKeyDiscountCodesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->get();
                },
                'get',
                'test_projectKey/discount-codes',
            ],
            'ByProjectKeyDiscountCodesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountCodes()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/discount-codes?expand=expand',
            ],
            'ByProjectKeyDiscountCodesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                'post',
                'test_projectKey/discount-codes',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyDiscountCodesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyDiscountCodesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyDiscountCodesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/discount-codes/{ID}'
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
            'ByProjectKeyDiscountCodesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->get();
                },
                599
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
            ],
            'ByProjectKeyDiscountCodesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
