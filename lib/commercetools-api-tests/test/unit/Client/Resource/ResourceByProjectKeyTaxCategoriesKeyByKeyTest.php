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
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyTaxCategoriesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategoriesKeyByKey
 */
class ResourceByProjectKeyTaxCategoriesKeyByKeyTest extends TestCase
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
            'ByProjectKeyTaxCategoriesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withKey('key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                '{projectKey}/tax-categories/key={key}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                'get',
                '{projectKey}/tax-categories/key={key}',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withKey('key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                '{projectKey}/tax-categories/key={key}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                'post',
                '{projectKey}/tax-categories/key={key}',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withKey('key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                '{projectKey}/tax-categories/key={key}?version=version',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('projectKey')
                        ->taxCategories()
                        ->withKey('key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                '{projectKey}/tax-categories/key={key}?expand=expand',
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                'delete',
                '{projectKey}/tax-categories/key={key}',
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
            'ByProjectKeyTaxCategoriesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyTaxCategoriesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyTaxCategoriesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories()
                        ->withKey("key")
                        ->delete();
                },
                503
            ]
        ];
    }
}
