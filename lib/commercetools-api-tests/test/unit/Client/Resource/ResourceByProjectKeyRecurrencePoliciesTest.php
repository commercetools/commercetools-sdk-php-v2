<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurrencePoliciesByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurrencePoliciesKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurrencePolicies
 */
class ResourceByProjectKeyRecurrencePoliciesTest extends TestCase
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
            'ByProjectKeyRecurrencePoliciesGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/recurrence-policies?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/recurrence-policies?sort=sort',
            ],
            'ByProjectKeyRecurrencePoliciesGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/recurrence-policies?limit=limit',
            ],
            'ByProjectKeyRecurrencePoliciesGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/recurrence-policies?offset=offset',
            ],
            'ByProjectKeyRecurrencePoliciesGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/recurrence-policies?withTotal=withTotal',
            ],
            'ByProjectKeyRecurrencePoliciesGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/recurrence-policies?where=where',
            ],
            'ByProjectKeyRecurrencePoliciesGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/recurrence-policies?var.varName=var.varName',
            ],
            'ByProjectKeyRecurrencePoliciesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                'get',
                'test_projectKey/recurrence-policies',
            ],
            'ByProjectKeyRecurrencePoliciesHead_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->head()
                        ->withWhere('where');
                },
                'head',
                'test_projectKey/recurrence-policies?where=where',
            ],
            'ByProjectKeyRecurrencePoliciesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                'head',
                'test_projectKey/recurrence-policies',
            ],
            'ByProjectKeyRecurrencePoliciesPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/recurrence-policies?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                'post',
                'test_projectKey/recurrence-policies',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyRecurrencePoliciesKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyRecurrencePoliciesKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyRecurrencePoliciesKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/recurrence-policies/key={key}'
            ],
            'ResourceByProjectKeyRecurrencePoliciesByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyRecurrencePoliciesByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyRecurrencePoliciesByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/recurrence-policies/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyRecurrencePoliciesGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                }
            ],
            'ByProjectKeyRecurrencePoliciesHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                }
            ],
            'ByProjectKeyRecurrencePoliciesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecurrencePoliciesGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->get();
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->head();
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyRecurrencePoliciesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
