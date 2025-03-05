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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsSearchIndexingStatusGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnitsSearchIndexingStatus
 */
class ResourceByProjectKeyBusinessUnitsSearchIndexingStatusTest extends TestCase
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
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                'get',
                'test_projectKey/business-units/search/indexing-status',
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
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsSearchIndexingStatusGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->searchIndexingStatus()
                        ->get();
                },
                599
            ]
        ];
    }
}
