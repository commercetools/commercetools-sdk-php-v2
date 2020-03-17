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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyCategories;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSinks;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportSummaries;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyPrices;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductDrafts;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProducts;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductTypes;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantPatches;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariants;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKey
 */
class ResourceByProjectKeyTest extends TestCase
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
    public function testResources(callable $builderFunction, string $class)
    {
        $builder = new ImportRequestBuilder();
        $this->assertInstanceOf($class, $builderFunction($builder));
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
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyImportSinks' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportSinks {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSinks();
                },
                ResourceByProjectKeyImportSinks::class
            ],
            'ResourceByProjectKeyImportSummaries' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportSummaries {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->importSummaries();
                },
                ResourceByProjectKeyImportSummaries::class
            ],
            'ResourceByProjectKeyCategories' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyCategories {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->categories();
                },
                ResourceByProjectKeyCategories::class
            ],
            'ResourceByProjectKeyPrices' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyPrices {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->prices();
                },
                ResourceByProjectKeyPrices::class
            ],
            'ResourceByProjectKeyProducts' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProducts {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->products();
                },
                ResourceByProjectKeyProducts::class
            ],
            'ResourceByProjectKeyProductDrafts' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductDrafts {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productDrafts();
                },
                ResourceByProjectKeyProductDrafts::class
            ],
            'ResourceByProjectKeyProductTypes' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductTypes {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productTypes();
                },
                ResourceByProjectKeyProductTypes::class
            ],
            'ResourceByProjectKeyProductVariants' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductVariants {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariants();
                },
                ResourceByProjectKeyProductVariants::class
            ],
            'ResourceByProjectKeyProductVariantPatches' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductVariantPatches {
                    return $builder
                        ->withProjectKeyValue("projectKey")
                        ->productVariantPatches();
                },
                ResourceByProjectKeyProductVariantPatches::class
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
        ];
    }
}
