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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductsImportSinkKeyByImportSinkKeyPost
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductsImportSinkKeyByImportSinkKey
 */
class ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyTest extends TestCase
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
        $client = $this->createMock(ClientInterface::class);

        $builder = new ImportRequestBuilder($client);
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

        $builder = new ImportRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->post(null);
                },
                'post',
                'test_projectKey/products/importSinkKey=test_importSinkKey',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->resourceKeyWithResourceKeyValue("test_resourceKey");
                },
                ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey', 'resourceKey' => 'test_resourceKey'],
                '/{projectKey}/products/importSinkKey={importSinkKey}/resourceKey={resourceKey}'
            ],
            'ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->importOperations();
                },
                ResourceByProjectKeyProductsImportSinkKeyByImportSinkKeyImportOperations::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey'],
                '/{projectKey}/products/importSinkKey={importSinkKey}/import-operations'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyPost_201' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyProductsImportSinkKeyByImportSinkKeyPost_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->products()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
