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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurrencePoliciesByID
 */
class ResourceByProjectKeyRecurrencePoliciesByIDTest extends TestCase
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
            'ByProjectKeyRecurrencePoliciesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/recurrence-policies/test_ID?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/recurrence-policies/test_ID',
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/recurrence-policies/test_ID',
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/recurrence-policies/test_ID?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/recurrence-policies/test_ID',
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/recurrence-policies/test_ID?version=version',
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/recurrence-policies/test_ID?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/recurrence-policies/test_ID',
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
            'ByProjectKeyRecurrencePoliciesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecurrencePoliciesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
