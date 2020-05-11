<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Ml\Client\MlRequestBuilder;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Ml\Client\Resource\ByProjectKeyRecommendationsProjectCategoriesByProductIdGet
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKeyRecommendationsProjectCategoriesByProductId
 */
class ResourceByProjectKeyRecommendationsProjectCategoriesByProductIdTest extends TestCase
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
        $client = $this->createMock(ClientInterface::class);

        $builder = new MlRequestBuilder($client);
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

        $builder = new MlRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet_withLimit' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId('test_productId')
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/recommendations/project-categories/test_productId?limit=limit',
            ],
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet_withOffset' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId('test_productId')
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/recommendations/project-categories/test_productId?offset=offset',
            ],
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet_withStaged' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId('test_productId')
                        ->get()
                        ->withStaged('staged');
                },
                'get',
                'test_projectKey/recommendations/project-categories/test_productId?staged=staged',
            ],
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet_withConfidenceMin' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId('test_productId')
                        ->get()
                        ->withConfidenceMin('confidenceMin');
                },
                'get',
                'test_projectKey/recommendations/project-categories/test_productId?confidenceMin=confidenceMin',
            ],
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet_withConfidenceMax' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId('test_productId')
                        ->get()
                        ->withConfidenceMax('confidenceMax');
                },
                'get',
                'test_projectKey/recommendations/project-categories/test_productId?confidenceMax=confidenceMax',
            ],
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId("test_productId")
                        ->get();
                },
                'get',
                'test_projectKey/recommendations/project-categories/test_productId',
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
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId("productId")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet_200' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId("productId")
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecommendationsProjectCategoriesByProductIdGet_599' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recommendations()
                        ->projectCategories()
                        ->withProductId("productId")
                        ->get();
                },
                599
            ]
        ];
    }
}
