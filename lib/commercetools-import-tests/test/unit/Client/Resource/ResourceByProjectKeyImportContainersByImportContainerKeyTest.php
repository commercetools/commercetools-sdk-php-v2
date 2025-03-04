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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportContainersByImportContainerKeyImportOperations;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportContainersByImportContainerKeyImportSummaries;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportContainersByImportContainerKeyPut
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportContainersByImportContainerKeyGet
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportContainersByImportContainerKeyDelete
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyImportContainersByImportContainerKey
 */
class ResourceByProjectKeyImportContainersByImportContainerKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, ?string $body = null)
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
            'ByProjectKeyImportContainersByImportContainerKeyPut' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey")
                        ->put(null);
                },
                'put',
                'test_projectKey/import-containers/test_importContainerKey',
            ],
            'ByProjectKeyImportContainersByImportContainerKeyGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey")
                        ->get();
                },
                'get',
                'test_projectKey/import-containers/test_importContainerKey',
            ],
            'ByProjectKeyImportContainersByImportContainerKeyDelete' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey")
                        ->delete();
                },
                'delete',
                'test_projectKey/import-containers/test_importContainerKey',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyImportContainersByImportContainerKeyImportSummaries' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportContainersByImportContainerKeyImportSummaries {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey")
                        ->importSummaries();
                },
                ResourceByProjectKeyImportContainersByImportContainerKeyImportSummaries::class,
                ['projectKey' => 'test_projectKey', 'importContainerKey' => 'test_importContainerKey'],
                '/{projectKey}/import-containers/{importContainerKey}/import-summaries'
            ],
            'ResourceByProjectKeyImportContainersByImportContainerKeyImportOperations' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportContainersByImportContainerKeyImportOperations {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey")
                        ->importOperations();
                },
                ResourceByProjectKeyImportContainersByImportContainerKeyImportOperations::class,
                ['projectKey' => 'test_projectKey', 'importContainerKey' => 'test_importContainerKey'],
                '/{projectKey}/import-containers/{importContainerKey}/import-operations'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyImportContainersByImportContainerKeyPut' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->put(null);
                }
            ],
            'ByProjectKeyImportContainersByImportContainerKeyGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->get();
                }
            ],
            'ByProjectKeyImportContainersByImportContainerKeyDelete' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyImportContainersByImportContainerKeyPut_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->put(null);
                },
                200
            ],
            'ByProjectKeyImportContainersByImportContainerKeyPut_409' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->put(null);
                },
                409
            ],
            'ByProjectKeyImportContainersByImportContainerKeyPut_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->put(null);
                },
                599
            ],
            'ByProjectKeyImportContainersByImportContainerKeyGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->get();
                },
                200
            ],
            'ByProjectKeyImportContainersByImportContainerKeyGet_404' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->get();
                },
                404
            ],
            'ByProjectKeyImportContainersByImportContainerKeyGet_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->get();
                },
                599
            ],
            'ByProjectKeyImportContainersByImportContainerKeyDelete_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyImportContainersByImportContainerKeyDelete_404' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyImportContainersByImportContainerKeyDelete_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("importContainerKey")
                        ->delete();
                },
                599
            ]
        ];
    }
}
