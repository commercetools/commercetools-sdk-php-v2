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
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyImportSinks' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportSinks {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importSinks();
                },
                ResourceByProjectKeyImportSinks::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/import-sinks'
            ],
            'ResourceByProjectKeyImportSummaries' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportSummaries {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importSummaries();
                },
                ResourceByProjectKeyImportSummaries::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/import-summaries'
            ],
            'ResourceByProjectKeyCategories' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyCategories {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->categories();
                },
                ResourceByProjectKeyCategories::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/categories'
            ],
            'ResourceByProjectKeyPrices' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyPrices {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->prices();
                },
                ResourceByProjectKeyPrices::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/prices'
            ],
            'ResourceByProjectKeyProducts' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProducts {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->products();
                },
                ResourceByProjectKeyProducts::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/products'
            ],
            'ResourceByProjectKeyProductDrafts' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductDrafts {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productDrafts();
                },
                ResourceByProjectKeyProductDrafts::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-drafts'
            ],
            'ResourceByProjectKeyProductTypes' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductTypes {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productTypes();
                },
                ResourceByProjectKeyProductTypes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-types'
            ],
            'ResourceByProjectKeyProductVariants' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductVariants {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productVariants();
                },
                ResourceByProjectKeyProductVariants::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-variants'
            ],
            'ResourceByProjectKeyProductVariantPatches' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductVariantPatches {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productVariantPatches();
                },
                ResourceByProjectKeyProductVariantPatches::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-variant-patches'
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
