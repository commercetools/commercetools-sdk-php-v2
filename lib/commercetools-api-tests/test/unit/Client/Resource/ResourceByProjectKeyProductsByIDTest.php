<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsByIDImages;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsByIDProductSelections;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsByID
 */
class ResourceByProjectKeyProductsByIDTest extends TestCase
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
            'ByProjectKeyProductsByIDGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                'test_projectKey/products/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                'test_projectKey/products/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                'test_projectKey/products/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                'test_projectKey/products/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/products/test_ID?expand=expand',
            ],
            'ByProjectKeyProductsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/products/test_ID',
            ],
            'ByProjectKeyProductsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/products/test_ID',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->post(null)
                        ->withPriceCurrency('priceCurrency');
                },
                'post',
                'test_projectKey/products/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->post(null)
                        ->withPriceCountry('priceCountry');
                },
                'post',
                'test_projectKey/products/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'post',
                'test_projectKey/products/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDPost_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->post(null)
                        ->withPriceChannel('priceChannel');
                },
                'post',
                'test_projectKey/products/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/products/test_ID?expand=expand',
            ],
            'ByProjectKeyProductsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/products/test_ID',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->delete()
                        ->withPriceCurrency('priceCurrency');
                },
                'delete',
                'test_projectKey/products/test_ID?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->delete()
                        ->withPriceCountry('priceCountry');
                },
                'delete',
                'test_projectKey/products/test_ID?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->delete()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'delete',
                'test_projectKey/products/test_ID?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->delete()
                        ->withPriceChannel('priceChannel');
                },
                'delete',
                'test_projectKey/products/test_ID?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/products/test_ID?version=version',
            ],
            'ByProjectKeyProductsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->products()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/products/test_ID?expand=expand',
            ],
            'ByProjectKeyProductsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/products/test_ID',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductsByIDImages' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsByIDImages {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID")
                        ->images();
                },
                ResourceByProjectKeyProductsByIDImages::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/products/{ID}/images'
            ],
            'ResourceByProjectKeyProductsByIDProductSelections' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsByIDProductSelections {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products()
                        ->withId("test_ID")
                        ->productSelections();
                },
                ResourceByProjectKeyProductsByIDProductSelections::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/products/{ID}/product-selections'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyProductsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyProductsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyProductsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyProductsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyProductsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyProductsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyProductsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyProductsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyProductsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyProductsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyProductsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyProductsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyProductsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyProductsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyProductsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyProductsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyProductsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyProductsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyProductsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyProductsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyProductsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyProductsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyProductsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyProductsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
