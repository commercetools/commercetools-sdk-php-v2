<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyApiClients;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCartDiscounts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCarts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCategories;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyChannels;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomerGroups;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomers;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyCustomObjects;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyDiscountCodes;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyExtensions;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyGraphql;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInStoreKeyByStoreKey;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInventory;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyLogin;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMe;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyMessages;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyOrders;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyPayments;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductDiscounts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductProjections;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProducts;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypes;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyReviews;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethods;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShoppingLists;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStates;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStores;
use Commercetools\Api\Client\Resource\ResourceByProjectKeySubscriptions;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTaxCategories;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyTypes;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyZones;
use Commercetools\Base\JsonObject;
use Commercetools\Client\ApiRequest;
use Commercetools\Exception\ApiClientException;
use Commercetools\Exception\ApiServerException;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyPost
 * @covers \Commercetools\Api\Client\Resource\ResourceByProjectKey
 */
class ResourceByProjectKeyTest extends TestCase
{
    /**
     * @dataProvider getRequests()
     */
    public function testBuilder(callable $builderFunction, string $method, string $relativeUri, string $body = null)
    {
        $builder = new ApiRequestBuilder();
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
        $builder = new ApiRequestBuilder();
        $resource = $builderFunction($builder);
        $this->assertInstanceOf($class, $resource);
        $this->assertEquals($expectedArgs, $resource->getArgs());
    }

    /**
     * @dataProvider getRequestBuilderResponses()
     */
    public function testMapFromResponse(callable $builderFunction, $statusCode)
    {
        $builder = new ApiRequestBuilder();
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

        $builder = new ApiRequestBuilder($client->reveal());
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

        $builder = new ApiRequestBuilder($client->reveal());
        $request = $builderFunction($builder);
        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                'get',
                '{projectKey}',
            ],
            'ByProjectKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->post(null);
                },
                'post',
                '{projectKey}',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyCategories' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCategories {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->categories();
                },
                ResourceByProjectKeyCategories::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/categories'
            ],
            'ResourceByProjectKeyCarts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCarts {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->carts();
                },
                ResourceByProjectKeyCarts::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/carts'
            ],
            'ResourceByProjectKeyCartDiscounts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCartDiscounts {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->cartDiscounts();
                },
                ResourceByProjectKeyCartDiscounts::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/cart-discounts'
            ],
            'ResourceByProjectKeyChannels' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyChannels {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->channels();
                },
                ResourceByProjectKeyChannels::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/channels'
            ],
            'ResourceByProjectKeyCustomers' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomers {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customers();
                },
                ResourceByProjectKeyCustomers::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/customers'
            ],
            'ResourceByProjectKeyCustomerGroups' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomerGroups {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customerGroups();
                },
                ResourceByProjectKeyCustomerGroups::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/customer-groups'
            ],
            'ResourceByProjectKeyCustomObjects' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomObjects {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->customObjects();
                },
                ResourceByProjectKeyCustomObjects::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/custom-objects'
            ],
            'ResourceByProjectKeyDiscountCodes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyDiscountCodes {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->discountCodes();
                },
                ResourceByProjectKeyDiscountCodes::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/discount-codes'
            ],
            'ResourceByProjectKeyGraphql' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyGraphql {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->graphql();
                },
                ResourceByProjectKeyGraphql::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/graphql'
            ],
            'ResourceByProjectKeyInventory' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInventory {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inventory();
                },
                ResourceByProjectKeyInventory::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/inventory'
            ],
            'ResourceByProjectKeyLogin' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyLogin {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->login();
                },
                ResourceByProjectKeyLogin::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/login'
            ],
            'ResourceByProjectKeyMessages' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMessages {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->messages();
                },
                ResourceByProjectKeyMessages::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/messages'
            ],
            'ResourceByProjectKeyOrders' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrders {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->orders();
                },
                ResourceByProjectKeyOrders::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/orders'
            ],
            'ResourceByProjectKeyPayments' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPayments {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->payments();
                },
                ResourceByProjectKeyPayments::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/payments'
            ],
            'ResourceByProjectKeyProducts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProducts {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->products();
                },
                ResourceByProjectKeyProducts::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/products'
            ],
            'ResourceByProjectKeyProductDiscounts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductDiscounts {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productDiscounts();
                },
                ResourceByProjectKeyProductDiscounts::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/product-discounts'
            ],
            'ResourceByProjectKeyProductProjections' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjections {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productProjections();
                },
                ResourceByProjectKeyProductProjections::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/product-projections'
            ],
            'ResourceByProjectKeyProductTypes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductTypes {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->productTypes();
                },
                ResourceByProjectKeyProductTypes::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/product-types'
            ],
            'ResourceByProjectKeyReviews' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyReviews {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->reviews();
                },
                ResourceByProjectKeyReviews::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/reviews'
            ],
            'ResourceByProjectKeyShippingMethods' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethods {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shippingMethods();
                },
                ResourceByProjectKeyShippingMethods::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/shipping-methods'
            ],
            'ResourceByProjectKeyShoppingLists' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShoppingLists {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->shoppingLists();
                },
                ResourceByProjectKeyShoppingLists::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/shopping-lists'
            ],
            'ResourceByProjectKeyStates' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStates {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->states();
                },
                ResourceByProjectKeyStates::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/states'
            ],
            'ResourceByProjectKeySubscriptions' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeySubscriptions {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->subscriptions();
                },
                ResourceByProjectKeySubscriptions::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/subscriptions'
            ],
            'ResourceByProjectKeyTaxCategories' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTaxCategories {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->taxCategories();
                },
                ResourceByProjectKeyTaxCategories::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/tax-categories'
            ],
            'ResourceByProjectKeyTypes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTypes {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->types();
                },
                ResourceByProjectKeyTypes::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/types'
            ],
            'ResourceByProjectKeyZones' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyZones {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->zones();
                },
                ResourceByProjectKeyZones::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/zones'
            ],
            'ResourceByProjectKeyMe' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMe {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->me();
                },
                ResourceByProjectKeyMe::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/me'
            ],
            'ResourceByProjectKeyExtensions' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyExtensions {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->extensions();
                },
                ResourceByProjectKeyExtensions::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/extensions'
            ],
            'ResourceByProjectKeyApiClients' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyApiClients {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->apiClients();
                },
                ResourceByProjectKeyApiClients::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/api-clients'
            ],
            'ResourceByProjectKeyStores' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStores {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->stores();
                },
                ResourceByProjectKeyStores::class,
                ['projectKey' => 'projectKey'],
                '/{projectKey}/stores'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKey {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->inStoreKeyWithStoreKeyValue("storeKey");
                },
                ResourceByProjectKeyInStoreKeyByStoreKey::class,
                ['projectKey' => 'projectKey', 'storeKey' => 'storeKey'],
                '/{projectKey}/in-store/key={storeKey}'
            ]
        ];
    }

    public function getRequestBuilders()
    {
        return [
            'ByProjectKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                }
            ],
            'ByProjectKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->post(null);
                }
            ]
        ];
    }

    public function getRequestBuilderResponses()
    {
        return [
            'ByProjectKeyGet_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                200
            ],
            'ByProjectKeyGet_400' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                400
            ],
            'ByProjectKeyGet_401' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                401
            ],
            'ByProjectKeyGet_403' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                403
            ],
            'ByProjectKeyGet_404' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                404
            ],
            'ByProjectKeyGet_500' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                500
            ],
            'ByProjectKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                503
            ],
            'ByProjectKeyPost_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->post(null);
                },
                200
            ],
            'ByProjectKeyPost_409' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->post(null);
                },
                409
            ]
        ];
    }
}
