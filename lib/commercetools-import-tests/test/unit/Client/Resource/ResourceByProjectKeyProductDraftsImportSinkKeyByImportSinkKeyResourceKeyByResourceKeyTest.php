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
 * @covers \Commercetools\Import\Client\Resource\ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKey
 */
class ResourceByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyTest extends TestCase
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
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("test_importSinkKey")
                        ->resourceKeyWithResourceKeyValue("test_resourceKey")
                        ->delete();
                },
                'delete',
                'test_projectKey/product-drafts/importSinkKey=test_importSinkKey/resourceKey=test_resourceKey',
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
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->resourceKeyWithResourceKeyValue("resourceKey")
                        ->delete();
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete_200' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->resourceKeyWithResourceKeyValue("resourceKey")
                        ->delete();
                },
                200
            ],
            'ByProjectKeyProductDraftsImportSinkKeyByImportSinkKeyResourceKeyByResourceKeyDelete_599' => [
                function (ImportRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts()
                        ->importSinkKeyWithImportSinkKeyValue("importSinkKey")
                        ->resourceKeyWithResourceKeyValue("resourceKey")
                        ->delete();
                },
                599
            ]
        ];
    }
}
