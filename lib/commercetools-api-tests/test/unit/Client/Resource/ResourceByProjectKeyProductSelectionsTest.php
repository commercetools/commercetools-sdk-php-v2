<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsByID;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelectionsKeyByKey;
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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyProductSelectionsPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelections
 */
class ResourceByProjectKeyProductSelectionsTest extends TestCase
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
            'ByProjectKeyProductSelectionsGet_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->get()
                        ->withExpand('expand');
                },
                'get',
                'test_projectKey/product-selections?expand=expand',
            ],
            'ByProjectKeyProductSelectionsGet_withSort' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/product-selections?sort=sort',
            ],
            'ByProjectKeyProductSelectionsGet_withLimit' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/product-selections?limit=limit',
            ],
            'ByProjectKeyProductSelectionsGet_withOffset' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/product-selections?offset=offset',
            ],
            'ByProjectKeyProductSelectionsGet_withWithTotal' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->get()
                        ->withWithTotal('withTotal');
                },
                'get',
                'test_projectKey/product-selections?withTotal=withTotal',
            ],
            'ByProjectKeyProductSelectionsGet_withWhere' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->get()
                        ->withWhere('where');
                },
                'get',
                'test_projectKey/product-selections?where=where',
            ],
            'ByProjectKeyProductSelectionsGet_withPredicateVar' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->get()
                        ->withPredicateVar('varName', 'var.varName');
                },
                'get',
                'test_projectKey/product-selections?var.varName=var.varName',
            ],
            'ByProjectKeyProductSelectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->get();
                },
                'get',
                'test_projectKey/product-selections',
            ],
            'ByProjectKeyProductSelectionsPost_withExpand' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey('test_projectKey')
                        ->productSelections()
                        ->post(null)
                        ->withExpand('expand');
                },
                'post',
                'test_projectKey/product-selections?expand=expand',
            ],
            'ByProjectKeyProductSelectionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->post(null);
                },
                'post',
                'test_projectKey/product-selections',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductSelectionsKeyByKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductSelectionsKeyByKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withKey("test_key");
                },
                ResourceByProjectKeyProductSelectionsKeyByKey::class,
                ['projectKey' => 'test_projectKey', 'key' => 'test_key'],
                '/{projectKey}/product-selections/key={key}'
            ],
            'ResourceByProjectKeyProductSelectionsByID' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductSelectionsByID {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections()
                        ->withId("test_ID");
                },
                ResourceByProjectKeyProductSelectionsByID::class,
                ['projectKey' => 'test_projectKey', 'ID' => 'test_ID'],
                '/{projectKey}/product-selections/{ID}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductSelectionsGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                }
            ],
            'ByProjectKeyProductSelectionsPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductSelectionsGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductSelectionsGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                400
            ],
            'ByProjectKeyProductSelectionsGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                401
            ],
            'ByProjectKeyProductSelectionsGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                403
            ],
            'ByProjectKeyProductSelectionsGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductSelectionsGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                500
            ],
            'ByProjectKeyProductSelectionsGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                502
            ],
            'ByProjectKeyProductSelectionsGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductSelectionsGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->get();
                },
                599
            ],
            'ByProjectKeyProductSelectionsPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyProductSelectionsPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyProductSelectionsPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyProductSelectionsPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyProductSelectionsPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyProductSelectionsPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyProductSelectionsPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyProductSelectionsPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyProductSelectionsPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productSelections()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
