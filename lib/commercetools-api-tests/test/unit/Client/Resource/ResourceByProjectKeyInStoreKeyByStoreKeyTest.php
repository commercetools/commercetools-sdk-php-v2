<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnits;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscounts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCarts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyCustomers;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyLogin;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyMe;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyOrders;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductProjections;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProducts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductSelectionAssignments;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyProductTailoring;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequests;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyQuotes;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyShoppingLists;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotes;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKey
 */
class ResourceByProjectKeyInStoreKeyByStoreKeyTest extends TestCase
{
    /**
     * @dataProvider getResources()
     */
    public function testResources(callable $builderFunction, string $class, array $expectedArgs)
    {
        $builder = new ApiRequestBuilder();
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
            'ResourceByProjectKeyInStoreKeyByStoreKeyCarts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCarts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->carts();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCarts::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/carts'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyOrders' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyOrders {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->orders();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyOrders::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/orders'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyMe' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyMe {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->me();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyMe::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/me'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCustomers' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCustomers {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->customers();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCustomers::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/customers'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyLogin' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyLogin {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->login();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyLogin::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/login'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->shippingMethods();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyShippingMethods::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/shipping-methods'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyShoppingLists' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyShoppingLists {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->shoppingLists();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyShoppingLists::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/shopping-lists'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyProductProjections' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyProductProjections {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->productProjections();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyProductProjections::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/product-projections'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyProductSelectionAssignments' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyProductSelectionAssignments {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->productSelectionAssignments();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyProductSelectionAssignments::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/product-selection-assignments'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscounts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscounts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->cartDiscounts();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyCartDiscounts::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/cart-discounts'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyProductTailoring' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyProductTailoring {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->productTailoring();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyProductTailoring::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/product-tailoring'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyProducts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyProducts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->products();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyProducts::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/products'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequests' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequests {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->quoteRequests();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyQuoteRequests::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/quote-requests'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->stagedQuotes();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyStagedQuotes::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/staged-quotes'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyQuotes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyQuotes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->quotes();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyQuotes::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/quotes'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnits' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnits {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey")
                        ->businessUnits();
                },
                ResourceByProjectKeyInStoreKeyByStoreKeyBusinessUnits::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}/business-units'
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
