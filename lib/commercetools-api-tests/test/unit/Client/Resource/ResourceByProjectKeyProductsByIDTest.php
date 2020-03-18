<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsByIDImages;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductsByID
 */
class ResourceByProjectKeyProductsByIDTest extends TestCase
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
            'ByProjectKeyProductsByIDGet_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceCurrency('priceCurrency');
                },
                'get',
                '{projectKey}/products/{ID}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDGet_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceCountry('priceCountry');
                },
                'get',
                '{projectKey}/products/{ID}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDGet_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'get',
                '{projectKey}/products/{ID}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDGet_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withPriceChannel('priceChannel');
                },
                'get',
                '{projectKey}/products/{ID}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDGet_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withLocaleProjection('localeProjection');
                },
                'get',
                '{projectKey}/products/{ID}?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsByIDGet_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withStoreProjection('storeProjection');
                },
                'get',
                '{projectKey}/products/{ID}?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->get();
                },
                'get',
                '{projectKey}/products/{ID}',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceCurrency('priceCurrency');
                },
                'post',
                '{projectKey}/products/{ID}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceCountry('priceCountry');
                },
                'post',
                '{projectKey}/products/{ID}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDPost_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'post',
                '{projectKey}/products/{ID}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDPost_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withPriceChannel('priceChannel');
                },
                'post',
                '{projectKey}/products/{ID}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDPost_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withLocaleProjection('localeProjection');
                },
                'post',
                '{projectKey}/products/{ID}?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsByIDPost_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withStoreProjection('storeProjection');
                },
                'post',
                '{projectKey}/products/{ID}?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->post(null);
                },
                'post',
                '{projectKey}/products/{ID}',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCurrency' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceCurrency('priceCurrency');
                },
                'delete',
                '{projectKey}/products/{ID}?priceCurrency=priceCurrency',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCountry' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceCountry('priceCountry');
                },
                'delete',
                '{projectKey}/products/{ID}?priceCountry=priceCountry',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceCustomerGroup' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceCustomerGroup('priceCustomerGroup');
                },
                'delete',
                '{projectKey}/products/{ID}?priceCustomerGroup=priceCustomerGroup',
            ],
            'ByProjectKeyProductsByIDDelete_withPriceChannel' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withPriceChannel('priceChannel');
                },
                'delete',
                '{projectKey}/products/{ID}?priceChannel=priceChannel',
            ],
            'ByProjectKeyProductsByIDDelete_withLocaleProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withLocaleProjection('localeProjection');
                },
                'delete',
                '{projectKey}/products/{ID}?localeProjection=localeProjection',
            ],
            'ByProjectKeyProductsByIDDelete_withStoreProjection' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withStoreProjection('storeProjection');
                },
                'delete',
                '{projectKey}/products/{ID}?storeProjection=storeProjection',
            ],
            'ByProjectKeyProductsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/products/{ID}?version=version',
            ],
            'ByProjectKeyProductsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->products()
                        ->withId('ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/products/{ID}?expand=expand',
            ],
            'ByProjectKeyProductsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                'delete',
                '{projectKey}/products/{ID}',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductsByIDImages' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductsByIDImages {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->images();
                },
                ResourceByProjectKeyProductsByIDImages::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/products/{ID}/images'
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
            'ByProjectKeyProductsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products()
                        ->withId("ID")
                        ->delete();
                },
                503
            ]
        ];
    }
}
