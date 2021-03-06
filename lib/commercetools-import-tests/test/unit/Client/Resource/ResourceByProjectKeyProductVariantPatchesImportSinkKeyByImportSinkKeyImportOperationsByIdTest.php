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
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsById
 */
class ResourceByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdTest extends TestCase
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

        $builder = new ImportRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request, new Response(500)));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productVariantPatches()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->importOperations()
                        ->withIdValue("test_id")
                        ->get();
                },
                'get',
                'test_projectKey/product-variant-patches/importSinkKey=test_importSinkKey/import-operations/test_id',
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
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
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
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet_404' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                },
                404
            ],
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet_503' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id")
                        ->get();
                },
                503
            ],
            'ByProjectKeyProductVariantPatchesImportSinkKeyByImportSinkKeyImportOperationsByIdGet_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches()
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
