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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDProductSelectionsGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsByIDProductSelections
 */
class ResourceByProjectKeyProductsByIDProductSelectionsTest extends TestCase
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
            'ByProjectKeyProductsByIDProductSelectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->productSelections()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/products/test_ID/product-selections?withTotal=withTotal',
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->productSelections()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/products/test_ID/product-selections?expand=expand',
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->productSelections()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/products/test_ID/product-selections?sort=sort',
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->productSelections()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/products/test_ID/product-selections?limit=limit',
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->productSelections()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/products/test_ID/product-selections?offset=offset',
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->productSelections()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/products/test_ID/product-selections?where=where',
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->productSelections()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/products/test_ID/product-selections?var.varName=var.varName',
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID")
                        ->productSelections()
                        ->get();
                },
                'get',
                'test_projectKey/products/test_ID/product-selections',
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
            'ByProjectKeyProductsByIDProductSelectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductsByIDProductSelectionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductsByIDProductSelectionsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->productSelections()
                        ->get();
                },
                599
            ]
        ];
    }
}
