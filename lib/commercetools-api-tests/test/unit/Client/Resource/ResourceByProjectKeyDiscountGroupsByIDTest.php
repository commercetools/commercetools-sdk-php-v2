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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyDiscountGroupsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountGroupsByID
 */
class ResourceByProjectKeyDiscountGroupsByIDTest extends TestCase
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
            'ByProjectKeyDiscountGroupsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/discount-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/discount-groups/test_ID',
            ],
            'ByProjectKeyDiscountGroupsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/discount-groups/test_ID',
            ],
            'ByProjectKeyDiscountGroupsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/discount-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/discount-groups/test_ID',
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/discount-groups/test_ID?version=version',
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->discountGroups()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/discount-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyDiscountGroupsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountGroups()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/discount-groups/test_ID',
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
            'ByProjectKeyDiscountGroupsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyDiscountGroupsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyDiscountGroupsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyDiscountGroupsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyDiscountGroupsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyDiscountGroupsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyDiscountGroupsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyDiscountGroupsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyDiscountGroupsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyDiscountGroupsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyDiscountGroupsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyDiscountGroupsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyDiscountGroupsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyDiscountGroupsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyDiscountGroupsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyDiscountGroupsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyDiscountGroupsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountGroups()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
