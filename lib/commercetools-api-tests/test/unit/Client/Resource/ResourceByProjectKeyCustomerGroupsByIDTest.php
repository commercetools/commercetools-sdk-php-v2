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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomerGroupsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroupsByID
 */
class ResourceByProjectKeyCustomerGroupsByIDTest extends TestCase
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
            'ByProjectKeyCustomerGroupsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/customer-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/customer-groups/test_ID',
            ],
            'ByProjectKeyCustomerGroupsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/customer-groups/test_ID',
            ],
            'ByProjectKeyCustomerGroupsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/customer-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/customer-groups/test_ID',
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/customer-groups/test_ID?version=version',
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customerGroups()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/customer-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyCustomerGroupsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/customer-groups/test_ID',
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
            'ByProjectKeyCustomerGroupsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyCustomerGroupsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyCustomerGroupsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyCustomerGroupsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCustomerGroupsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCustomerGroupsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCustomerGroupsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCustomerGroupsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCustomerGroupsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCustomerGroupsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCustomerGroupsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCustomerGroupsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCustomerGroupsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCustomerGroupsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyCustomerGroupsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyCustomerGroupsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyCustomerGroupsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyCustomerGroupsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyCustomerGroupsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyCustomerGroupsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyCustomerGroupsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyCustomerGroupsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyCustomerGroupsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyCustomerGroupsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyCustomerGroupsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyCustomerGroupsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyCustomerGroupsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyCustomerGroupsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyCustomerGroupsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyCustomerGroupsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyCustomerGroupsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyCustomerGroupsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCustomerGroupsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
