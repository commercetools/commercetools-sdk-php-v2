<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Test\Client\Resource;

use PHPUnit\Framework\TestCase;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Client\ApiRequest;
use Commercetools\Base\JsonObject;
use Commercetools\Ml\Client\MlRequestBuilder;
use Psr\Http\Message\RequestInterface;
use Prophecy\Argument;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Response;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataAttributes;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataImages;
use Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingDataPrices;

/**
 * @covers \Commercetools\Ml\Client\Resource\ResourceByProjectKeyMissingData
 */
class ResourceByProjectKeyMissingDataTest extends TestCase
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
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ClientException::class);

        $builder = new MlRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiClientException::class);
        $request->execute();
    }

    /**
     * @dataProvider getRequestBuilders()
     */
    public function testExecuteServerException(callable $builderFunction)
    {
        $client = $this->prophesize(ClientInterface::class);
        $client->send(Argument::any(), Argument::any())->willThrow(ServerException::class);

        $builder = new MlRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyMissingDataAttributes' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataAttributes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->attributes();
                },
                ResourceByProjectKeyMissingDataAttributes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data/attributes'
            ],
            'ResourceByProjectKeyMissingDataImages' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataImages {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->images();
                },
                ResourceByProjectKeyMissingDataImages::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data/images'
            ],
            'ResourceByProjectKeyMissingDataPrices' => [
                function (MlRequestBuilder $builder): ResourceByProjectKeyMissingDataPrices {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->missingData()
                        ->prices();
                },
                ResourceByProjectKeyMissingDataPrices::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/missing-data/prices'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
        ];
    }
}
