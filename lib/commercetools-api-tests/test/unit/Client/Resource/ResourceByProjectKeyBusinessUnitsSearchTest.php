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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsSearchPost
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsSearchHead
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnitsSearch
 */
class ResourceByProjectKeyBusinessUnitsSearchTest extends TestCase
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
            'ByProjectKeyBusinessUnitsSearchPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                'post',
                'test_projectKey/business-units/search',
            ],
            'ByProjectKeyBusinessUnitsSearchHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                'head',
                'test_projectKey/business-units/search',
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
            'ByProjectKeyBusinessUnitsSearchPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                }
            ],
            'ByProjectKeyBusinessUnitsSearchHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyBusinessUnitsSearchPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyBusinessUnitsSearchPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyBusinessUnitsSearchPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyBusinessUnitsSearchPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyBusinessUnitsSearchPost_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                404
            ],
            'ByProjectKeyBusinessUnitsSearchPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyBusinessUnitsSearchPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyBusinessUnitsSearchPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyBusinessUnitsSearchPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyBusinessUnitsSearchHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsSearchHead_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                409
            ],
            'ByProjectKeyBusinessUnitsSearchHead_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsSearchHead_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsSearchHead_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsSearchHead_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsSearchHead_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsSearchHead_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsSearchHead_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsSearchHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->search()
                        ->head();
                },
                599
            ]
        ];
    }
}
