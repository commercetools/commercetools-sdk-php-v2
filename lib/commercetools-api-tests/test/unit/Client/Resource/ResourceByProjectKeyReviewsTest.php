<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyReviewsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyReviewsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyReviewsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyReviews
 */
class ResourceByProjectKeyReviewsTest extends TestCase
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
            'ByProjectKeyReviewsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/reviews?sort=sort',
            ],
            'ByProjectKeyReviewsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/reviews?limit=limit',
            ],
            'ByProjectKeyReviewsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/reviews?offset=offset',
            ],
            'ByProjectKeyReviewsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/reviews?withTotal=withTotal',
            ],
            'ByProjectKeyReviewsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/reviews?where=where',
            ],
            'ByProjectKeyReviewsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/reviews?var.varName=var.varName',
            ],
            'ByProjectKeyReviewsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                'get',
                '{projectKey}/reviews',
            ],
            'ByProjectKeyReviewsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->reviews()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/reviews?expand=expand',
            ],
            'ByProjectKeyReviewsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                'post',
                '{projectKey}/reviews',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyReviewsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyReviewsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withKey("key");
                },
                ResourceByProjectKeyReviewsKeyByKey::class,
                ['projectKey' => 'projectKey', 'key' => 'key'],
                '/{projectKey}/reviews/key={key}'
            ],
            'ResourceByProjectKeyReviewsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyReviewsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->withId("ID");
                },
                ResourceByProjectKeyReviewsByID::class,
                ['projectKey' => 'projectKey', 'ID' => 'ID'],
                '/{projectKey}/reviews/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyReviewsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                }
            ],
            'ByProjectKeyReviewsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyReviewsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                200
            ],
            'ByProjectKeyReviewsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                400
            ],
            'ByProjectKeyReviewsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                401
            ],
            'ByProjectKeyReviewsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                403
            ],
            'ByProjectKeyReviewsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                404
            ],
            'ByProjectKeyReviewsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                500
            ],
            'ByProjectKeyReviewsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->get();
                },
                503
            ],
            'ByProjectKeyReviewsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyReviewsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyReviewsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyReviewsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyReviewsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyReviewsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyReviewsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyReviewsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
