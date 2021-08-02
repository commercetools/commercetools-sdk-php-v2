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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsById;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperations
 */
class ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsTest extends TestCase
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
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withLimit' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('test_importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/product-variants/importSinkKey=test_importSinkKey/import-operations?limit=limit',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withOffset' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('test_importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/product-variants/importSinkKey=test_importSinkKey/import-operations?offset=offset',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withSort' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('test_importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/product-variants/importSinkKey=test_importSinkKey/import-operations?sort=sort',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withResourceKey' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('test_importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withResourceKey('resourceKey');
                },
                'get',
                'test_projectKey/product-variants/importSinkKey=test_importSinkKey/import-operations?resourceKey=resourceKey',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withState' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('test_importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withState('state');
                },
                'get',
                'test_projectKey/product-variants/importSinkKey=test_importSinkKey/import-operations?state=state',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_withDebug' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue('test_importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withDebug('debug');
                },
                'get',
                'test_projectKey/product-variants/importSinkKey=test_importSinkKey/import-operations?debug=debug',
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->importOperations()
                        ->get();
                },
                'get',
                'test_projectKey/product-variants/importSinkKey=test_importSinkKey/import-operations',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsById' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsById {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->importOperations()
                        ->withIdValue("test_id");
                },
                ResourceByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsById::class,
                ['projectKey' => 'test_projectKey', 'importSinkKey' => 'test_importSinkKey', 'id' => 'test_id'],
                '/{projectKey}/product-variants/importSinkKey={importSinkKey}/import-operations/{id}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->get();
                },
                200
            ],
            'ByProjectKeyProductVariantsImportSinkKeyByImportSinkKeyImportOperationsGet_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariants()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->get();
                },
                599
            ]
        ];
    }
}
