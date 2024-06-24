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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKey
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyTest extends TestCase
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
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->stagedQuotes()
                        ->withKey("test_key")
                        ->get();
                },
                'get',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->stagedQuotes()
                        ->withKey("test_key")
                        ->head();
                },
                'head',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->stagedQuotes()
                        ->withKey("test_key")
                        ->post(null);
                },
                'post',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_withDataErasure' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withDataErasure('dataErasure');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key?dataErasure=dataErasure',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_withVersion' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withVersion('version');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key?version=version',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->inStoreKeyWithStoreKeyValue('test_storeKey')
                        ->stagedQuotes()
                        ->withKey('test_key')
                        ->delete()
                        ->withExpand('expand');
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key?expand=expand',
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->stagedQuotes()
                        ->withKey("test_key")
                        ->delete();
                },
                'delete',
                'test_projectKey/in-store/key=test_storeKey/staged-quotes/key=test_key',
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
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                }
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
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
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->get();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->head();
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                409
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                400
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                401
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                403
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                500
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                502
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                503
            ],
            'ByProjectKeyInStoreKeyByStoreKeyStagedQuotesKeyByKeyDelete_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey")
                        ->stagedQuotes()
                        ->withKey("key")
                        ->delete();
                },
                599
            ]
        ];
    }
}
