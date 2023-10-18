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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesByIDGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesByIDHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesByIDPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesByIDDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStagedQuotesByID
 */
class ResourceByProjectKeyStagedQuotesByIDTest extends TestCase
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
            'ByProjectKeyStagedQuotesByIDGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withId('test_ID')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/staged-quotes/test_ID?expand=expand',
            ],
            'ByProjectKeyStagedQuotesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withId("test_ID")
                        ->get();
                },
                'get',
                'test_projectKey/staged-quotes/test_ID',
            ],
            'ByProjectKeyStagedQuotesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withId("test_ID")
                        ->head();
                },
                'head',
                'test_projectKey/staged-quotes/test_ID',
            ],
            'ByProjectKeyStagedQuotesByIDPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withId('test_ID')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/staged-quotes/test_ID?expand=expand',
            ],
            'ByProjectKeyStagedQuotesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withId("test_ID")
                        ->post(null);
                },
                'post',
                'test_projectKey/staged-quotes/test_ID',
            ],
            'ByProjectKeyStagedQuotesByIDDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withId('test_ID')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/staged-quotes/test_ID?dataErasure=dataErasure',
            ],
            'ByProjectKeyStagedQuotesByIDDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withId('test_ID')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/staged-quotes/test_ID?version=version',
            ],
            'ByProjectKeyStagedQuotesByIDDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withId('test_ID')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/staged-quotes/test_ID?expand=expand',
            ],
            'ByProjectKeyStagedQuotesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withId("test_ID")
                        ->delete();
                },
                'delete',
                'test_projectKey/staged-quotes/test_ID',
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
            'ByProjectKeyStagedQuotesByIDGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                }
            ],
            'ByProjectKeyStagedQuotesByIDHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                }
            ],
            'ByProjectKeyStagedQuotesByIDPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                }
            ],
            'ByProjectKeyStagedQuotesByIDDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStagedQuotesByIDGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                200
            ],
            'ByProjectKeyStagedQuotesByIDGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                400
            ],
            'ByProjectKeyStagedQuotesByIDGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                401
            ],
            'ByProjectKeyStagedQuotesByIDGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                403
            ],
            'ByProjectKeyStagedQuotesByIDGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                404
            ],
            'ByProjectKeyStagedQuotesByIDGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                500
            ],
            'ByProjectKeyStagedQuotesByIDGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                502
            ],
            'ByProjectKeyStagedQuotesByIDGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                503
            ],
            'ByProjectKeyStagedQuotesByIDGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->get();
                },
                599
            ],
            'ByProjectKeyStagedQuotesByIDHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                200
            ],
            'ByProjectKeyStagedQuotesByIDHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                404
            ],
            'ByProjectKeyStagedQuotesByIDHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                400
            ],
            'ByProjectKeyStagedQuotesByIDHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                401
            ],
            'ByProjectKeyStagedQuotesByIDHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                403
            ],
            'ByProjectKeyStagedQuotesByIDHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                500
            ],
            'ByProjectKeyStagedQuotesByIDHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                502
            ],
            'ByProjectKeyStagedQuotesByIDHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                503
            ],
            'ByProjectKeyStagedQuotesByIDHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->head();
                },
                599
            ],
            'ByProjectKeyStagedQuotesByIDPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStagedQuotesByIDPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyStagedQuotesByIDPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStagedQuotesByIDPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStagedQuotesByIDPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStagedQuotesByIDPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStagedQuotesByIDPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStagedQuotesByIDPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStagedQuotesByIDPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStagedQuotesByIDPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyStagedQuotesByIDDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyStagedQuotesByIDDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyStagedQuotesByIDDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyStagedQuotesByIDDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyStagedQuotesByIDDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyStagedQuotesByIDDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyStagedQuotesByIDDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyStagedQuotesByIDDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyStagedQuotesByIDDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyStagedQuotesByIDDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withId("ID")
                        ->delete();
                },
                599
            ]
        ];
    }
}
