<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Ml\Client\MlRequestBuilder;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataPricesStatus;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Ml\Client\Resource\ByProjectKeyMissingDataPricesPost
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataPrices
 */
class ResourceByProjectKeyMissingDataPricesTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new MlRequestBuilder();
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
        $builder = new MlRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new MlRequestBuilder();
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

        $builder = new MlRequestBuilder($client);
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

        $builder = new MlRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyMissingDataPricesPost' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->prices()
                        ->post(null);
                },
                'post',
                'test_projectKey/missing-data/prices',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMissingDataPricesStatus' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataPricesStatus {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->prices()
                        ->status();
                },
                ResourceByProjectKeyMissingDataPricesStatus::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data/prices/status'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyMissingDataPricesPost' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->missingData()
                        ->prices()
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyMissingDataPricesPost_202' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->missingData()
                        ->prices()
                        ->post(null);
                },
                202
            ],
            'ByProjectKeyMissingDataPricesPost_599' => [
                function (MlRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->missingData()
                        ->prices()
                        ->post(null);
                },
                599
            ]
        ];
    }
}
