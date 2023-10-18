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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAttributeGroupsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAttributeGroupsByID
 */
class ResourceByProjectKeyAttributeGroupsByIDTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
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
            'ByProjectKeyAttributeGroupsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/attribute-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/attribute-groups/test_ID',
            ],
            'ByProjectKeyAttributeGroupsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/attribute-groups/test_ID',
            ],
            'ByProjectKeyAttributeGroupsByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/attribute-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/attribute-groups/test_ID',
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/attribute-groups/test_ID?version=version',
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->attributeGroups()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/attribute-groups/test_ID?expand=expand',
            ],
            'ByProjectKeyAttributeGroupsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/attribute-groups/test_ID',
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
            'ByProjectKeyAttributeGroupsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyAttributeGroupsByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyAttributeGroupsByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyAttributeGroupsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAttributeGroupsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyAttributeGroupsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyAttributeGroupsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyAttributeGroupsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyAttributeGroupsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyAttributeGroupsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyAttributeGroupsByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyAttributeGroupsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyAttributeGroupsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyAttributeGroupsByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyAttributeGroupsByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyAttributeGroupsByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyAttributeGroupsByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyAttributeGroupsByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyAttributeGroupsByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyAttributeGroupsByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyAttributeGroupsByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyAttributeGroupsByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyAttributeGroupsByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyAttributeGroupsByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAttributeGroupsByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAttributeGroupsByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAttributeGroupsByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAttributeGroupsByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyAttributeGroupsByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAttributeGroupsByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAttributeGroupsByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAttributeGroupsByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyAttributeGroupsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->attributeGroups()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
