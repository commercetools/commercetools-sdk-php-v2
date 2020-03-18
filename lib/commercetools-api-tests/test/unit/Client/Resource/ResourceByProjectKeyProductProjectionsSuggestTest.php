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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductProjectionsSuggestGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjectionsSuggest
 */
class ResourceByProjectKeyProductProjectionsSuggestTest extends TestCase
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
            'ByProjectKeyProductProjectionsSuggestGet_withFuzzy' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withFuzzy('fuzzy');
                },
                'get',
                '{projectKey}/product-projections/suggest?fuzzy=fuzzy',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withStaged' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                '{projectKey}/product-projections/suggest?staged=staged',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withSearchKeywords' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withSearchKeywords('locale', 'searchKeywords.locale');
                },
                'get',
                '{projectKey}/product-projections/suggest?searchKeywords.locale=searchKeywords.locale',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/product-projections/suggest?sort=sort',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/product-projections/suggest?limit=limit',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/product-projections/suggest?offset=offset',
            ],
            'ByProjectKeyProductProjectionsSuggestGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->productProjections()
                        ->suggest()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/product-projections/suggest?withTotal=withTotal',
            ],
            'ByProjectKeyProductProjectionsSuggestGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                'get',
                '{projectKey}/product-projections/suggest',
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
            'ByProjectKeyProductProjectionsSuggestGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductProjectionsSuggestGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductProjectionsSuggestGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductProjectionsSuggestGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductProjectionsSuggestGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductProjectionsSuggestGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductProjectionsSuggestGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductProjectionsSuggestGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections()
                        ->suggest()
                        ->get();
                },
                503
            ]
        ];
    }
}
