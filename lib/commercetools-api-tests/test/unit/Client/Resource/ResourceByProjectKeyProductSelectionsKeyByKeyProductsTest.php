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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsKeyByKeyProductsGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsKeyByKeyProducts
 */
class ResourceByProjectKeyProductSelectionsKeyByKeyProductsTest extends TestCase
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
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->products()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/product-selections/key=test_key/products?where=where',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->products()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/product-selections/key=test_key/products?withTotal=withTotal',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->products()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-selections/key=test_key/products?expand=expand',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->products()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/product-selections/key=test_key/products?limit=limit',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->products()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/product-selections/key=test_key/products?offset=offset',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->withKey('test_key')
                        ->products()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/product-selections/key=test_key/products?sort=sort',
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withKey("test_key")
                        ->products()
                        ->get();
                },
                'get',
                'test_projectKey/product-selections/key=test_key/products',
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
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductSelectionsKeyByKeyProductsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->withKey("key")
                        ->products()
                        ->get();
                },
                599
            ]
        ];
    }
}
