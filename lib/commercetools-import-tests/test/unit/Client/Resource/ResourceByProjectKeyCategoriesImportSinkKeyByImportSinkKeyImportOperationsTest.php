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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsById;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperations
 */
class ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ImportRequestBuilder();
        $request = $builderFunction($builder);
        $this->assertSame(strtolower($method), strtolower($request->getMethod()));
        $this->assertStringContainsString(str_replace(['{', '}'], '', $relativeUri), (string) $request->getUri());
        if (!is_null($body)) {
            $this->assertJsonStringEqualsJsonString($body, (string) $request->getBody());
        };
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
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet_withLimit' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withLimit('limit');
                },
                'get',
                '{projectKey}/categories/importSinkKey={importSinkKey}/import-operations?limit=limit',
            ],
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet_withOffset' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withOffset('offset');
                },
                'get',
                '{projectKey}/categories/importSinkKey={importSinkKey}/import-operations?offset=offset',
            ],
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet_withResourceKey' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withResourceKey('resourceKey');
                },
                'get',
                '{projectKey}/categories/importSinkKey={importSinkKey}/import-operations?resourceKey=resourceKey',
            ],
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet_withState' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue('projectKey')
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue('importSinkKey')
                        ->importOperations()
                        ->get()
                        ->withState('state');
                },
                'get',
                '{projectKey}/categories/importSinkKey={importSinkKey}/import-operations?state=state',
            ],
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->get();
                },
                'get',
                '{projectKey}/categories/importSinkKey={importSinkKey}/import-operations',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsById' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsById {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->withIdValue("id");
                },
                ResourceByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsById::class,
                ['projectKey' => 'projectKey', 'importSinkKey' => 'importSinkKey', 'id' => 'id'],
                '/{projectKey}/categories/importSinkKey={importSinkKey}/import-operations/{id}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->categories()
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
            'ByProjectKeyCategoriesImportSinkKeyByImportSinkKeyImportOperationsGet_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->categories()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->importOperations()
                        ->get();
                },
                200
            ]
        ];
    }
}
