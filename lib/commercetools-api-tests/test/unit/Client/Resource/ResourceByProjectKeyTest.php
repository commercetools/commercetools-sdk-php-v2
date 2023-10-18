<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Test\Client\Resource;

use Commercetools\Api\Client\ApiRequestBuilder;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyApiClients;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAsAssociate;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAssociateRoles;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyAttributeGroups;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyBusinessUnits;
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
use Commercetools\Api\Client\Resource\ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKey;
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
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductSelections;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyProductTypes;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyQuoteRequests;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyQuotes;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyReviews;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShippingMethods;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyShoppingLists;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStagedQuotes;
use Commercetools\Api\Client\Resource\ResourceByProjectKeyStandalonePrices;
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
use Psr\Http\Message\RequestInterface;

/**
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyGet
 * @covers \Commercetools\Api\Client\Resource\ByProjectKeyHead
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
        $client = $this->createMock(ClientInterface::class);

        $builder = new ApiRequestBuilder($client);
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

        $builder = new ApiRequestBuilder($client);
        $request = $builderFunction($builder);
        $client->method("send")->willThrowException(new ServerException("Oops!", $request, new Response(500)));

        $this->expectException(ApiServerException::class);
        $request->execute();
    }

    public function getRequests()
    {
        return [
            'ByProjectKeyGet' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->get();
                },
                'get',
                'test_projectKey',
            ],
            'ByProjectKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->head();
                },
                'head',
                'test_projectKey',
            ],
            'ByProjectKeyPost' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->post(null);
                },
                'post',
                'test_projectKey',
            ]
        ];
    }

    public function getResources()
    {
        return [
            'ResourceByProjectKeyAsAssociate' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAsAssociate {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->asAssociate();
                },
                ResourceByProjectKeyAsAssociate::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/as-associate'
            ],
            'ResourceByProjectKeyAssociateRoles' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAssociateRoles {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->associateRoles();
                },
                ResourceByProjectKeyAssociateRoles::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/associate-roles'
            ],
            'ResourceByProjectKeyBusinessUnits' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyBusinessUnits {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->businessUnits();
                },
                ResourceByProjectKeyBusinessUnits::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/business-units'
            ],
            'ResourceByProjectKeyCategories' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCategories {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->categories();
                },
                ResourceByProjectKeyCategories::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/categories'
            ],
            'ResourceByProjectKeyCarts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCarts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->carts();
                },
                ResourceByProjectKeyCarts::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/carts'
            ],
            'ResourceByProjectKeyCartDiscounts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCartDiscounts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->cartDiscounts();
                },
                ResourceByProjectKeyCartDiscounts::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/cart-discounts'
            ],
            'ResourceByProjectKeyChannels' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyChannels {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->channels();
                },
                ResourceByProjectKeyChannels::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/channels'
            ],
            'ResourceByProjectKeyCustomers' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomers {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customers();
                },
                ResourceByProjectKeyCustomers::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customers'
            ],
            'ResourceByProjectKeyCustomerGroups' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomerGroups {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customerGroups();
                },
                ResourceByProjectKeyCustomerGroups::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/customer-groups'
            ],
            'ResourceByProjectKeyCustomObjects' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyCustomObjects {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->customObjects();
                },
                ResourceByProjectKeyCustomObjects::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/custom-objects'
            ],
            'ResourceByProjectKeyDiscountCodes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyDiscountCodes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->discountCodes();
                },
                ResourceByProjectKeyDiscountCodes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/discount-codes'
            ],
            'ResourceByProjectKeyGraphql' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyGraphql {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->graphql();
                },
                ResourceByProjectKeyGraphql::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/graphql'
            ],
            'ResourceByProjectKeyInventory' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInventory {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inventory();
                },
                ResourceByProjectKeyInventory::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/inventory'
            ],
            'ResourceByProjectKeyLogin' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyLogin {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->login();
                },
                ResourceByProjectKeyLogin::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/login'
            ],
            'ResourceByProjectKeyMessages' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMessages {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->messages();
                },
                ResourceByProjectKeyMessages::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/messages'
            ],
            'ResourceByProjectKeyOrders' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyOrders {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->orders();
                },
                ResourceByProjectKeyOrders::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/orders'
            ],
            'ResourceByProjectKeyPayments' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyPayments {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->payments();
                },
                ResourceByProjectKeyPayments::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/payments'
            ],
            'ResourceByProjectKeyProducts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProducts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->products();
                },
                ResourceByProjectKeyProducts::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/products'
            ],
            'ResourceByProjectKeyProductDiscounts' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductDiscounts {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productDiscounts();
                },
                ResourceByProjectKeyProductDiscounts::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-discounts'
            ],
            'ResourceByProjectKeyProductProjections' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductProjections {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productProjections();
                },
                ResourceByProjectKeyProductProjections::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-projections'
            ],
            'ResourceByProjectKeyProductSelections' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductSelections {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productSelections();
                },
                ResourceByProjectKeyProductSelections::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-selections'
            ],
            'ResourceByProjectKeyProductTypes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyProductTypes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->productTypes();
                },
                ResourceByProjectKeyProductTypes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/product-types'
            ],
            'ResourceByProjectKeyQuotes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyQuotes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quotes();
                },
                ResourceByProjectKeyQuotes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/quotes'
            ],
            'ResourceByProjectKeyQuoteRequests' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyQuoteRequests {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->quoteRequests();
                },
                ResourceByProjectKeyQuoteRequests::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/quote-requests'
            ],
            'ResourceByProjectKeyStagedQuotes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStagedQuotes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stagedQuotes();
                },
                ResourceByProjectKeyStagedQuotes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/staged-quotes'
            ],
            'ResourceByProjectKeyReviews' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyReviews {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->reviews();
                },
                ResourceByProjectKeyReviews::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/reviews'
            ],
            'ResourceByProjectKeyShippingMethods' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShippingMethods {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shippingMethods();
                },
                ResourceByProjectKeyShippingMethods::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/shipping-methods'
            ],
            'ResourceByProjectKeyShoppingLists' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyShoppingLists {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->shoppingLists();
                },
                ResourceByProjectKeyShoppingLists::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/shopping-lists'
            ],
            'ResourceByProjectKeyStates' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStates {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->states();
                },
                ResourceByProjectKeyStates::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/states'
            ],
            'ResourceByProjectKeySubscriptions' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeySubscriptions {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->subscriptions();
                },
                ResourceByProjectKeySubscriptions::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/subscriptions'
            ],
            'ResourceByProjectKeyTaxCategories' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTaxCategories {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->taxCategories();
                },
                ResourceByProjectKeyTaxCategories::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/tax-categories'
            ],
            'ResourceByProjectKeyTypes' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyTypes {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->types();
                },
                ResourceByProjectKeyTypes::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/types'
            ],
            'ResourceByProjectKeyZones' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyZones {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->zones();
                },
                ResourceByProjectKeyZones::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/zones'
            ],
            'ResourceByProjectKeyMe' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyMe {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->me();
                },
                ResourceByProjectKeyMe::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/me'
            ],
            'ResourceByProjectKeyExtensions' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyExtensions {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->extensions();
                },
                ResourceByProjectKeyExtensions::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/extensions'
            ],
            'ResourceByProjectKeyApiClients' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyApiClients {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->apiClients();
                },
                ResourceByProjectKeyApiClients::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/api-clients'
            ],
            'ResourceByProjectKeyStores' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStores {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->stores();
                },
                ResourceByProjectKeyStores::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/stores'
            ],
            'ResourceByProjectKeyInStoreKeyByStoreKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInStoreKeyByStoreKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inStoreKeyWithStoreKeyValue("test_storeKey");
                },
                ResourceByProjectKeyInStoreKeyByStoreKey::class,
                ['projectKey' => 'test_projectKey', 'storeKey' => 'test_storeKey'],
                '/{projectKey}/in-store/key={storeKey}'
            ],
            'ResourceByProjectKeyStandalonePrices' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyStandalonePrices {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->standalonePrices();
                },
                ResourceByProjectKeyStandalonePrices::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/standalone-prices'
            ],
            'ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKey' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKey {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->inBusinessUnitKeyWithBusinessUnitKeyValue("test_businessUnitKey");
                },
                ResourceByProjectKeyInBusinessUnitKeyByBusinessUnitKey::class,
                ['projectKey' => 'test_projectKey', 'businessUnitKey' => 'test_businessUnitKey'],
                '/{projectKey}/in-business-unit/key={businessUnitKey}'
            ],
            'ResourceByProjectKeyAttributeGroups' => [
                function (ApiRequestBuilder $builder): ResourceByProjectKeyAttributeGroups {
                    return $builder
                        ->withProjectKey("test_projectKey")
                        ->attributeGroups();
                },
                ResourceByProjectKeyAttributeGroups::class,
                ['projectKey' => 'test_projectKey'],
                '/{projectKey}/attribute-groups'
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
            'ByProjectKeyHead' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->head();
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
            'ByProjectKeyGet_502' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                502
            ],
            'ByProjectKeyGet_503' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                503
            ],
            'ByProjectKeyGet_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->get();
                },
                599
            ],
            'ByProjectKeyHead_200' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->head();
                },
                200
            ],
            'ByProjectKeyHead_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->head();
                },
                599
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
            ],
            'ByProjectKeyPost_599' => [
                function (ApiRequestBuilder $builder): RequestInterface {
                    return $builder
                        ->withProjectKey("projectKey")
                        ->post(null);
                },
                599
            ]
        ];
    }
}
