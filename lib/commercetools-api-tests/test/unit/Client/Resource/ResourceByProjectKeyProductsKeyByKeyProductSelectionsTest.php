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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsKeyByKeyProductSelectionsGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsKeyByKeyProductSelections
 */
class ResourceByProjectKeyProductsKeyByKeyProductSelectionsTest extends TestCase
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
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->productSelections()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections?expand=expand',
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->productSelections()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections?sort=sort',
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->productSelections()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections?limit=limit',
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->productSelections()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections?offset=offset',
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->productSelections()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections?withTotal=withTotal',
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->productSelections()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections?where=where',
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withKey('test_key')
                        ->productSelections()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections?var.varName=var.varName',
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withKey("test_key")
                        ->productSelections()
                        ->get();
                },
                'get',
                'test_projectKey/products/key=test_key/product-selections',
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
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductsKeyByKeyProductSelectionsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withKey("key")
                        ->productSelections()
                        ->get();
                },
                599
            ]
        ];
    }
}
