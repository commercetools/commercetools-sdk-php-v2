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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsByIDProductsGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsByIDProducts
 */
class ResourceByProjectKeyProductSelectionsByIDProductsTest extends TestCase
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
            'ByProjectKeyProductSelectionsByIDProductsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->products()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/product-selections/test_ID/products?where=where',
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->products()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/product-selections/test_ID/products?withTotal=withTotal',
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->products()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-selections/test_ID/products?expand=expand',
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->products()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/product-selections/test_ID/products?limit=limit',
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->products()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/product-selections/test_ID/products?offset=offset',
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withId('test_ID')
                        ->products()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/product-selections/test_ID/products?sort=sort',
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withId("test_ID")
                        ->products()
                        ->get();
                },
                'get',
                'test_projectKey/product-selections/test_ID/products',
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
            'ByProjectKeyProductSelectionsByIDProductsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductSelectionsByIDProductsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductSelectionsByIDProductsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withId("ID")
                        ->products()
                        ->get();
                },
                599
            ]
        ];
    }
}
