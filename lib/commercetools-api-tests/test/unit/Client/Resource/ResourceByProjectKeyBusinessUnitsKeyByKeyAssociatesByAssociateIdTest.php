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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateId
 */
class ResourceByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdTest extends TestCase
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
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("test_key", "test_associateId")
                        ->get();
                },
                'get',
                'test_projectKey/business-units/key=test_key/associates/test_associateId',
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
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                200
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                400
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                401
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                403
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                404
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                500
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                502
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                503
            ],
            'ByProjectKeyBusinessUnitsKeyByKeyAssociatesByAssociateIdGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->businessUnits()
                        ->keyWithKeyValueAssociatesWithAssociateIdValue("key", "associateId")
                        ->get();
                },
                599
            ]
        ];
    }
}
