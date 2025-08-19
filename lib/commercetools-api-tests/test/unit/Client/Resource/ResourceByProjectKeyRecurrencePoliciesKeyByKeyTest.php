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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyRecurrencePoliciesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyRecurrencePoliciesKeyByKey
 */
class ResourceByProjectKeyRecurrencePoliciesKeyByKeyTest extends TestCase
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
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/recurrence-policies/key=test_key?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/recurrence-policies/key=test_key',
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/recurrence-policies/key=test_key',
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/recurrence-policies/key=test_key?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/recurrence-policies/key=test_key',
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/recurrence-policies/key=test_key?version=version',
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->recurrencePolicies()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/recurrence-policies/key=test_key?expand=expand',
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->recurrencePolicies()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/recurrence-policies/key=test_key',
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
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyRecurrencePoliciesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->recurrencePolicies()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
