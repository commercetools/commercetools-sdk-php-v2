<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Test\Client\Resource;

use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use Commercetools\Import\Client\ImportRequestBuilder;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperations;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyPricesImportSinkKeyByImportSinkKeyPost
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyPricesImportSinkKeyByImportSinkKey
 */
class ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRequestBuilder();
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
        $builder = new ImportRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ImportRequestBuilder();
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

        $builder = new ImportRequestBuilder($client->reveal());
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

        $builder = new ImportRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyPricesImportSinkKeyByImportSinkKeyPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->prices()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->post(null);
                },
                'post',
                'test_projectKey/prices/importSinkKey=test_importSinkKey',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->prices()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->resourceKeyWithResourceKeyValue("test_resourceKey");
                },
                ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyResourceKeyByResourceKey::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey', 'resourceKey' => 'test_resourceKey'],
                '/{projectKey}/prices/importSinkKey={importSinkKey}/resourceKey={resourceKey}'
            ],
            'ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperations' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperations {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->prices()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->importOperations();
                },
                ResourceByProjectKeyPricesImportSinkKeyByImportSinkKeyImportOperations::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey'],
                '/{projectKey}/prices/importSinkKey={importSinkKey}/import-operations'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyPricesImportSinkKeyByImportSinkKeyPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->prices()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyPricesImportSinkKeyByImportSinkKeyPost_201' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->prices()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyPricesImportSinkKeyByImportSinkKeyPost_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->prices()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
