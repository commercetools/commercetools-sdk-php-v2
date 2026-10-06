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
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyAgentsIntakeV1ResponsesPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyAgentsIntakeV1Responses
 */
class ResourceByProjectKeyAgentsIntakeV1ResponsesTest extends TestCase
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
            'ByProjectKeyAgentsIntakeV1ResponsesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                'post',
                'test_projectKey/agents/intake/v1/responses',
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
            'ByProjectKeyAgentsIntakeV1ResponsesPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyAgentsIntakeV1ResponsesPost_201' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                401
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                403
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                409
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_413' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                413
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                500
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                502
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                503
            ],
            'ByProjectKeyAgentsIntakeV1ResponsesPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->agents()
                        ->intake()
                        ->v1()
                        ->responses()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
