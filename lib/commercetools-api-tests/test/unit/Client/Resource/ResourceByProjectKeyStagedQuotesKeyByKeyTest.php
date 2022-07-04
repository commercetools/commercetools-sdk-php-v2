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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyStagedQuotesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyStagedQuotesKeyByKey
 */
class ResourceByProjectKeyStagedQuotesKeyByKeyTest extends TestCase
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
            'ByProjectKeyStagedQuotesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/staged-quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/staged-quotes/key=test_key',
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/staged-quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/staged-quotes/key=test_key',
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/staged-quotes/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/staged-quotes/key=test_key?version=version',
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/staged-quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/staged-quotes/key=test_key',
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
            'ByProjectKeyStagedQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyStagedQuotesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyStagedQuotesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyStagedQuotesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyStagedQuotesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
