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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByContainerByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByContainerByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomObjectsByContainerByKey
 */
class ResourceByProjectKeyCustomObjectsByContainerByKeyTest extends TestCase
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
            'ByProjectKeyCustomObjectsByContainerByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withContainerAndKey('test_container', 'test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/custom-objects/test_container/test_key?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customObjects()
                        ->withContainerAndKey("test_container", "test_key")
                        ->get();
                },
                'get',
                'test_projectKey/custom-objects/test_container/test_key',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withContainerAndKey('test_container', 'test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/custom-objects/test_container/test_key?version=version',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withContainerAndKey('test_container', 'test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/custom-objects/test_container/test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withContainerAndKey('test_container', 'test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/custom-objects/test_container/test_key?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customObjects()
                        ->withContainerAndKey("test_container", "test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/custom-objects/test_container/test_key',
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
            'ByProjectKeyCustomObjectsByContainerByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                }
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCustomObjectsByContainerByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCustomObjectsByContainerByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withContainerAndKey("container", "key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
