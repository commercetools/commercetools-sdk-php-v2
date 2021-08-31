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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportContainersByImportContainerKey;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportContainersPost
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyImportContainersGet
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyImportContainers
 */
class ResourceByProjectKeyImportContainersTest extends TestCase
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
            'ByProjectKeyImportContainersPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->post(null);
                },
                'post',
                'test_projectKey/import-containers',
            ],
            'ByProjectKeyImportContainersGet_withLimit' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->importContainers()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                'test_projectKey/import-containers?limit=limit',
            ],
            'ByProjectKeyImportContainersGet_withOffset' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->importContainers()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                'test_projectKey/import-containers?offset=offset',
            ],
            'ByProjectKeyImportContainersGet_withSort' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('test_projectKey')
                        ->importContainers()
                        ->get()
                        ->withSort('sort');
                },
                'get',
                'test_projectKey/import-containers?sort=sort',
            ],
            'ByProjectKeyImportContainersGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->get();
                },
                'get',
                'test_projectKey/import-containers',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyImportContainersByImportContainerKey' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportContainersByImportContainerKey {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers()
                        ->withImportContainerKeyValue("test_importContainerKey");
                },
                ResourceByProjectKeyImportContainersByImportContainerKey::class,
                ['projectKey' => 'test_projectKey', 'importContainerKey' => 'test_importContainerKey'],
                '/{projectKey}/import-containers/{importContainerKey}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyImportContainersPost' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->post(null);
                }
            ],
            'ByProjectKeyImportContainersGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->get();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyImportContainersPost_201' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->post(null);
                },
                201
            ],
            'ByProjectKeyImportContainersPost_400' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->post(null);
                },
                400
            ],
            'ByProjectKeyImportContainersPost_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->post(null);
                },
                599
            ],
            'ByProjectKeyImportContainersGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->get();
                },
                200
            ],
            'ByProjectKeyImportContainersGet_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importContainers()
                        ->get();
                },
                599
            ]
        ];
    }
}
