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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategoriesByID
 */
class ResourceByProjectKeyTaxCategoriesByIDTest extends TestCase
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
            'ByProjectKeyTaxCategoriesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->taxCategories()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/tax-categories/test_ID?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->taxCategories()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/tax-categories/test_ID',
            ],
            'ByProjectKeyTaxCategoriesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->taxCategories()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/tax-categories/test_ID',
            ],
            'ByProjectKeyTaxCategoriesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->taxCategories()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/tax-categories/test_ID?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->taxCategories()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/tax-categories/test_ID',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->taxCategories()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/tax-categories/test_ID?version=version',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->taxCategories()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/tax-categories/test_ID?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->taxCategories()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/tax-categories/test_ID',
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
            'ByProjectKeyTaxCategoriesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyTaxCategoriesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyTaxCategoriesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyTaxCategoriesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyTaxCategoriesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyTaxCategoriesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyTaxCategoriesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyTaxCategoriesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyTaxCategoriesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyTaxCategoriesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyTaxCategoriesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyTaxCategoriesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyTaxCategoriesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyTaxCategoriesByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyTaxCategoriesByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyTaxCategoriesByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyTaxCategoriesByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyTaxCategoriesByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyTaxCategoriesByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyTaxCategoriesByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyTaxCategoriesByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyTaxCategoriesByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyTaxCategoriesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyTaxCategoriesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyTaxCategoriesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyTaxCategoriesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyTaxCategoriesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyTaxCategoriesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyTaxCategoriesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyTaxCategoriesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyTaxCategoriesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyTaxCategoriesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyTaxCategoriesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
