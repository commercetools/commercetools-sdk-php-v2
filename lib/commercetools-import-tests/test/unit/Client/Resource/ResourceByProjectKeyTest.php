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
use Commercetools\Import\Client\Resource\ResourceByProjectKeyBusinessUnits;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyCategories;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyCustomers;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyDiscountCodes;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportContainers;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyImportOperations;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyInventories;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyOrderPatches;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyOrders;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyPrices;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductDrafts;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProducts;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductSelections;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductTypes;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariantPatches;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyProductVariants;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyStandalonePrices;
use Commercetools\Import\Client\Resource\ResourceByProjectKeyTypes;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Import\Client\Resource\ResourceByProjectKey
 */
class ResourceByProjectKeyTest extends TestCase
{
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







    public function getRequests()
    {
        return [
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyImportContainers' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportContainers {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importContainers();
                },
                ResourceByProjectKeyImportContainers::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/import-containers'
            ],
            'ResourceByProjectKeyImportOperations' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyImportOperations {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->importOperations();
                },
                ResourceByProjectKeyImportOperations::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/import-operations'
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
            'ResourceByProjectKeyStandalonePrices' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyStandalonePrices {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->standalonePrices();
                },
                ResourceByProjectKeyStandalonePrices::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/standalone-prices'
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
            ],
            'ResourceByProjectKeyOrders' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyOrders {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->orders();
                },
                ResourceByProjectKeyOrders::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/orders'
            ],
            'ResourceByProjectKeyOrderPatches' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyOrderPatches {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->orderPatches();
                },
                ResourceByProjectKeyOrderPatches::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/order-patches'
            ],
            'ResourceByProjectKeyCustomers' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyCustomers {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->customers();
                },
                ResourceByProjectKeyCustomers::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customers'
            ],
            'ResourceByProjectKeyInventories' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyInventories {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->inventories();
                },
                ResourceByProjectKeyInventories::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/inventories'
            ],
            'ResourceByProjectKeyTypes' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyTypes {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->types();
                },
                ResourceByProjectKeyTypes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/types'
            ],
            'ResourceByProjectKeyDiscountCodes' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyDiscountCodes {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->discountCodes();
                },
                ResourceByProjectKeyDiscountCodes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/discount-codes'
            ],
            'ResourceByProjectKeyProductSelections' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyProductSelections {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->productSelections();
                },
                ResourceByProjectKeyProductSelections::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-selections'
            ],
            'ResourceByProjectKeyBusinessUnits' => [
                function (ImportRequestBuilder $builder): ResourceByProjectKeyBusinessUnits {
                    return $builder
                        ->withProjectKeyValue("test_projectKey")
                        ->businessUnits();
                },
                ResourceByProjectKeyBusinessUnits::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/business-units'
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
