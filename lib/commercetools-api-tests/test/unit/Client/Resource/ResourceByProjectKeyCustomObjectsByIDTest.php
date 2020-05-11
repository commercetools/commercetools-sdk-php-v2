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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyCustomObjectsByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomObjectsByID
 */
class ResourceByProjectKeyCustomObjectsByIDTest extends TestCase
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
        $client->method("send")->willThrowException(new ClientException("Oops!", $request));

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
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyCustomObjectsByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/custom-objects/test_ID?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customObjects()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/custom-objects/test_ID',
            ],
            'ByProjectKeyCustomObjectsByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/custom-objects/test_ID?version=version',
            ],
            'ByProjectKeyCustomObjectsByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/custom-objects/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyCustomObjectsByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->customObjects()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/custom-objects/test_ID?expand=expand',
            ],
            'ByProjectKeyCustomObjectsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customObjects()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/custom-objects/test_ID',
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
            'ByProjectKeyCustomObjectsByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyCustomObjectsByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyCustomObjectsByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyCustomObjectsByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyCustomObjectsByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyCustomObjectsByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyCustomObjectsByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyCustomObjectsByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyCustomObjectsByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyCustomObjectsByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyCustomObjectsByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyCustomObjectsByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyCustomObjectsByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyCustomObjectsByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyCustomObjectsByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyCustomObjectsByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyCustomObjectsByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyCustomObjectsByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyCustomObjectsByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
