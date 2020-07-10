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
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportSinksByImportSinkKeyPut
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportSinksByImportSinkKeyGet
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportSinksByImportSinkKeyDelete
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSinksByImportSinkKey
 */
class ResourceByProjectKeyImportSinksByImportSinkKeyTest extends TestCase
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
            'ByProjectKeyImportSinksByImportSinkKeyPut' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("test_importSinkKey")
                        ->put(null);
                },
                'put',
                'test_projectKey/import-sinks/test_importSinkKey',
            ],
            'ByProjectKeyImportSinksByImportSinkKeyGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("test_importSinkKey")
                        ->get();
                },
                'get',
                'test_projectKey/import-sinks/test_importSinkKey',
            ],
            'ByProjectKeyImportSinksByImportSinkKeyDelete' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("test_importSinkKey")
                        ->delete();
                },
                'delete',
                'test_projectKey/import-sinks/test_importSinkKey',
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
            'ByProjectKeyImportSinksByImportSinkKeyPut' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->put(null);
                }
            ],
            'ByProjectKeyImportSinksByImportSinkKeyGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->get();
                }
            ],
            'ByProjectKeyImportSinksByImportSinkKeyDelete' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyImportSinksByImportSinkKeyPut_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->put(null);
                },
                200
            ],
            'ByProjectKeyImportSinksByImportSinkKeyPut_409' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->put(null);
                },
                409
            ],
            'ByProjectKeyImportSinksByImportSinkKeyPut_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->put(null);
                },
                599
            ],
            'ByProjectKeyImportSinksByImportSinkKeyGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->get();
                },
                200
            ],
            'ByProjectKeyImportSinksByImportSinkKeyGet_404' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->get();
                },
                404
            ],
            'ByProjectKeyImportSinksByImportSinkKeyGet_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->get();
                },
                599
            ],
            'ByProjectKeyImportSinksByImportSinkKeyDelete_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyImportSinksByImportSinkKeyDelete_404' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->delete();
                },
                404
            ],
            'ByProjectKeyImportSinksByImportSinkKeyDelete_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks()
                        ->withImportSinkKeyValue("importSinkKey")
                        ->delete();
                },
                599
            ]
        ];
    }
}
