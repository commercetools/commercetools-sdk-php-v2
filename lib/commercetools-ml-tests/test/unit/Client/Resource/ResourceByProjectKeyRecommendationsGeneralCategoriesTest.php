<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;
use Commercetools\Ml\Client\MlRequestBuilder;
use Psr\Http\Message\RequestInterface;
use Prophecy\Argument;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;

/**
 * @covers \Commercetools\Ml\Client\Resource\ByProjectKeyRecommendationsGeneralCategoriesGet
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendationsGeneralCategories
 */
class ResourceByProjectKeyRecommendationsGeneralCategoriesTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new MlRequestBuilder();
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
        $builder = new MlRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new MlRequestBuilder();
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

        $builder = new MlRequestBuilder($client->reveal());
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

        $builder = new MlRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyRecommendationsGeneralCategoriesGet_withProductImageUrl' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->generalCategories()
                        ->get()
                        ->withProductImageUrl('productImageUrl');
                },
                'get',
                'test_projectKey/recommendations/general-categories?productImageUrl=productImageUrl',
            ],
            'ByProjectKeyRecommendationsGeneralCategoriesGet_withProductName' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->generalCategories()
                        ->get()
                        ->withProductName('productName');
                },
                'get',
                'test_projectKey/recommendations/general-categories?productName=productName',
            ],
            'ByProjectKeyRecommendationsGeneralCategoriesGet_withLimit' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->generalCategories()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/recommendations/general-categories?limit=limit',
            ],
            'ByProjectKeyRecommendationsGeneralCategoriesGet_withOffset' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->generalCategories()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/recommendations/general-categories?offset=offset',
            ],
            'ByProjectKeyRecommendationsGeneralCategoriesGet_withConfidenceMin' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->generalCategories()
                        ->get()
                        ->withConfidenceMin('confidenceMin');
                },
                'get',
                'test_projectKey/recommendations/general-categories?confidenceMin=confidenceMin',
            ],
            'ByProjectKeyRecommendationsGeneralCategoriesGet_withConfidenceMax' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->generalCategories()
                        ->get()
                        ->withConfidenceMax('confidenceMax');
                },
                'get',
                'test_projectKey/recommendations/general-categories?confidenceMax=confidenceMax',
            ],
            'ByProjectKeyRecommendationsGeneralCategoriesGet' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recommendations()
                        ->generalCategories()
                        ->get();
                },
                'get',
                'test_projectKey/recommendations/general-categories',
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
            'ByProjectKeyRecommendationsGeneralCategoriesGet' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recommendations()
                        ->generalCategories()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecommendationsGeneralCategoriesGet_200' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recommendations()
                        ->generalCategories()
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecommendationsGeneralCategoriesGet_599' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recommendations()
                        ->generalCategories()
                        ->get();
                },
                599
            ]
        ];
    }
}
