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
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdGet
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsById
 */
class ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdTest extends TestCase
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
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->importOperations()
                        ->withIdValue("test_id")
                        ->get();
                },
                'get',
                'test_projectKey/product-drafts/importSinkKey=test_importSinkKey/import-operations/test_id',
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
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdGet_404' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdGet_503' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyImportOperationsByIdGet_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                },
                599
            ]
        ];
    }
}
