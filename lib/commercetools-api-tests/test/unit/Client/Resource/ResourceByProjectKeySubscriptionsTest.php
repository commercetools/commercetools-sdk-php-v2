<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeySubscriptionsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeySubscriptionsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeySubscriptionsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeySubscriptions
 */
class ResourceByProjectKeySubscriptionsTest extends TestCase
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
        };
    }

    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class)
    {
        $builder = new ApiRequestBuilder();
        $this->assertInstanceOf($class, $builderFunction($builder));
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
            'ByProjectKeySubscriptionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/subscriptions?expand=expand',
            ],
            'ByProjectKeySubscriptionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                '{projectKey}/subscriptions?sort=sort',
            ],
            'ByProjectKeySubscriptionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/subscriptions?limit=limit',
            ],
            'ByProjectKeySubscriptionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/subscriptions?offset=offset',
            ],
            'ByProjectKeySubscriptionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                '{projectKey}/subscriptions?withTotal=withTotal',
            ],
            'ByProjectKeySubscriptionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                '{projectKey}/subscriptions?where=where',
            ],
            'ByProjectKeySubscriptionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                '{projectKey}/subscriptions?var.varName=var.varName',
            ],
            'ByProjectKeySubscriptionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                'get',
                '{projectKey}/subscriptions',
            ],
            'ByProjectKeySubscriptionsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->subscriptions()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/subscriptions?expand=expand',
            ],
            'ByProjectKeySubscriptionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                'post',
                '{projectKey}/subscriptions',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeySubscriptionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeySubscriptionsKeyByKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withKey("key");
                },
                ResourceByProjectKeySubscriptionsKeyByKey::class
            ],
            'ResourceByProjectKeySubscriptionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeySubscriptionsByID {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->withId("ID");
                },
                ResourceByProjectKeySubscriptionsByID::class
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeySubscriptionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                }
            ],
            'ByProjectKeySubscriptionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeySubscriptionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                200
            ],
            'ByProjectKeySubscriptionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                400
            ],
            'ByProjectKeySubscriptionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                401
            ],
            'ByProjectKeySubscriptionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                403
            ],
            'ByProjectKeySubscriptionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                404
            ],
            'ByProjectKeySubscriptionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                500
            ],
            'ByProjectKeySubscriptionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->get();
                },
                503
            ],
            'ByProjectKeySubscriptionsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeySubscriptionsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeySubscriptionsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeySubscriptionsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeySubscriptionsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeySubscriptionsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeySubscriptionsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeySubscriptionsPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions()
                        ->post(null);
                },
                200
            ]
        ];
    }
}
