# Commercetools

Client and Request Builder for making API requests against [Commercetools](https://api.sphere.io).

## Installation

```sh
composer require  commercetools/raml-php-sdk
```

## Usage

```php
namespace Commercetools;

require_once __DIR__ . '/vendor/autoload.php';

$client = ClientFactory::create();
```

### Authentication

#### OAuth 2.0

This API supports authentication with OAuth 2.0. Initialize the `OAuth2` instance with the application client id and client secret.

```php
$config = new Config();
$config->getCredentials()->setClientId(<client_id>)->setClientSecret(<client_secret>);

$client = ClientFactory::create($config);
```

#### Base URI

You can override the base URI by setting the `baseUri` property, or initializing a request builder with a base URI. For example:

```php
$config = new Config();
$config->setApiUrl('http://google.com/search']);
```

### RequestBuilder

In order to be able to build request objects you can use the RequestBuilder

```php
$builder = new RequestBuilder();
```

### Mapper

To map the result data you can use the ResultMapper

```php

$mapper = new ResultMapper(new ModelClassMap());
$request = $builder->withProjectKeyValue()->get();

$response = $client->send($request);

// use one of the following possibilities
$result = $request->map($response, $mapper);
$result = $mapper->map($request, $response);
$result = $mapper->mapData(Project::class, json_decode((string)$response->getBody(), true));
```


### Methods

All methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

#### `withProjectKeyValue()->ByProjectKeyGet`
#### `withProjectKeyValue()->ByProjectKeyPost`
#### `withProjectKeyValue()->categories()->ByProjectKeyCategoriesGet`
#### `withProjectKeyValue()->categories()->ByProjectKeyCategoriesPost`
#### `withProjectKeyValue()->categories()->keyWithKeyValue()->ByProjectKeyCategoriesKeyByKeyGet`
#### `withProjectKeyValue()->categories()->keyWithKeyValue()->ByProjectKeyCategoriesKeyByKeyPost`
#### `withProjectKeyValue()->categories()->keyWithKeyValue()->ByProjectKeyCategoriesKeyByKeyDelete`
#### `withProjectKeyValue()->categories()->withIDValue()->ByProjectKeyCategoriesByIDGet`
#### `withProjectKeyValue()->categories()->withIDValue()->ByProjectKeyCategoriesByIDPost`
#### `withProjectKeyValue()->categories()->withIDValue()->ByProjectKeyCategoriesByIDDelete`
#### `withProjectKeyValue()->carts()->ByProjectKeyCartsGet`
#### `withProjectKeyValue()->carts()->ByProjectKeyCartsPost`
#### `withProjectKeyValue()->carts()->withIDValue()->ByProjectKeyCartsByIDGet`
#### `withProjectKeyValue()->carts()->withIDValue()->ByProjectKeyCartsByIDPost`
#### `withProjectKeyValue()->carts()->withIDValue()->ByProjectKeyCartsByIDDelete`
#### `withProjectKeyValue()->cartDiscounts()->ByProjectKeyCartDiscountsGet`
#### `withProjectKeyValue()->cartDiscounts()->ByProjectKeyCartDiscountsPost`
#### `withProjectKeyValue()->cartDiscounts()->withIDValue()->ByProjectKeyCartDiscountsByIDGet`
#### `withProjectKeyValue()->cartDiscounts()->withIDValue()->ByProjectKeyCartDiscountsByIDPost`
#### `withProjectKeyValue()->cartDiscounts()->withIDValue()->ByProjectKeyCartDiscountsByIDDelete`
#### `withProjectKeyValue()->channels()->ByProjectKeyChannelsGet`
#### `withProjectKeyValue()->channels()->ByProjectKeyChannelsPost`
#### `withProjectKeyValue()->channels()->withIDValue()->ByProjectKeyChannelsByIDGet`
#### `withProjectKeyValue()->channels()->withIDValue()->ByProjectKeyChannelsByIDPost`
#### `withProjectKeyValue()->channels()->withIDValue()->ByProjectKeyChannelsByIDDelete`
#### `withProjectKeyValue()->customers()->ByProjectKeyCustomersGet`
#### `withProjectKeyValue()->customers()->ByProjectKeyCustomersPost`
#### `withProjectKeyValue()->customers()->passwordTokenWithPasswordTokenValue()->ByProjectKeyCustomersPasswordTokenByPasswordTokenGet`
#### `withProjectKeyValue()->customers()->emailTokenWithEmailTokenValue()->ByProjectKeyCustomersEmailTokenByEmailTokenGet`
#### `withProjectKeyValue()->customers()->emailToken()->ByProjectKeyCustomersEmailTokenPost`
#### `withProjectKeyValue()->customers()->email()->confirm()->ByProjectKeyCustomersEmailConfirmPost`
#### `withProjectKeyValue()->customers()->password()->ByProjectKeyCustomersPasswordPost`
#### `withProjectKeyValue()->customers()->password()->reset()->ByProjectKeyCustomersPasswordResetPost`
#### `withProjectKeyValue()->customers()->passwordToken()->ByProjectKeyCustomersPasswordTokenPost`
#### `withProjectKeyValue()->customers()->withIDValue()->ByProjectKeyCustomersByIDGet`
#### `withProjectKeyValue()->customers()->withIDValue()->ByProjectKeyCustomersByIDPost`
#### `withProjectKeyValue()->customers()->withIDValue()->ByProjectKeyCustomersByIDDelete`
#### `withProjectKeyValue()->customerGroups()->ByProjectKeyCustomerGroupsGet`
#### `withProjectKeyValue()->customerGroups()->ByProjectKeyCustomerGroupsPost`
#### `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->ByProjectKeyCustomerGroupsKeyByKeyGet`
#### `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->ByProjectKeyCustomerGroupsKeyByKeyPost`
#### `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->ByProjectKeyCustomerGroupsKeyByKeyDelete`
#### `withProjectKeyValue()->customerGroups()->withIDValue()->ByProjectKeyCustomerGroupsByIDGet`
#### `withProjectKeyValue()->customerGroups()->withIDValue()->ByProjectKeyCustomerGroupsByIDPost`
#### `withProjectKeyValue()->customerGroups()->withIDValue()->ByProjectKeyCustomerGroupsByIDDelete`
#### `withProjectKeyValue()->customObjects()->ByProjectKeyCustomObjectsGet`
#### `withProjectKeyValue()->customObjects()->ByProjectKeyCustomObjectsPost`
#### `withProjectKeyValue()->customObjects()->withContainerValue()->ByProjectKeyCustomObjectsByContainerGet`
#### `withProjectKeyValue()->customObjects()->withContainerValue()->ByProjectKeyCustomObjectsByContainerDelete`
#### `withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->ByProjectKeyCustomObjectsByContainerByKeyGet`
#### `withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->ByProjectKeyCustomObjectsByContainerByKeyDelete`
#### `withProjectKeyValue()->discountCodes()->ByProjectKeyDiscountCodesGet`
#### `withProjectKeyValue()->discountCodes()->ByProjectKeyDiscountCodesPost`
#### `withProjectKeyValue()->discountCodes()->withIDValue()->ByProjectKeyDiscountCodesByIDGet`
#### `withProjectKeyValue()->discountCodes()->withIDValue()->ByProjectKeyDiscountCodesByIDPost`
#### `withProjectKeyValue()->discountCodes()->withIDValue()->ByProjectKeyDiscountCodesByIDDelete`
#### `withProjectKeyValue()->graphql()->ByProjectKeyGraphqlPost`
#### `withProjectKeyValue()->inventory()->ByProjectKeyInventoryGet`
#### `withProjectKeyValue()->inventory()->ByProjectKeyInventoryPost`
#### `withProjectKeyValue()->inventory()->withIDValue()->ByProjectKeyInventoryByIDGet`
#### `withProjectKeyValue()->inventory()->withIDValue()->ByProjectKeyInventoryByIDPost`
#### `withProjectKeyValue()->inventory()->withIDValue()->ByProjectKeyInventoryByIDDelete`
#### `withProjectKeyValue()->login()->ByProjectKeyLoginPost`
#### `withProjectKeyValue()->messages()->ByProjectKeyMessagesGet`
#### `withProjectKeyValue()->messages()->withIDValue()->ByProjectKeyMessagesByIDGet`
#### `withProjectKeyValue()->orders()->ByProjectKeyOrdersGet`
#### `withProjectKeyValue()->orders()->ByProjectKeyOrdersPost`
#### `withProjectKeyValue()->orders()->import()->ByProjectKeyOrdersImportPost`
#### `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->ByProjectKeyOrdersOrderNumberByOrderNumberGet`
#### `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->ByProjectKeyOrdersOrderNumberByOrderNumberPost`
#### `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->ByProjectKeyOrdersOrderNumberByOrderNumberDelete`
#### `withProjectKeyValue()->orders()->withIDValue()->ByProjectKeyOrdersByIDGet`
#### `withProjectKeyValue()->orders()->withIDValue()->ByProjectKeyOrdersByIDPost`
#### `withProjectKeyValue()->orders()->withIDValue()->ByProjectKeyOrdersByIDDelete`
#### `withProjectKeyValue()->payments()->ByProjectKeyPaymentsGet`
#### `withProjectKeyValue()->payments()->ByProjectKeyPaymentsPost`
#### `withProjectKeyValue()->payments()->keyWithKeyValue()->ByProjectKeyPaymentsKeyByKeyGet`
#### `withProjectKeyValue()->payments()->keyWithKeyValue()->ByProjectKeyPaymentsKeyByKeyPost`
#### `withProjectKeyValue()->payments()->keyWithKeyValue()->ByProjectKeyPaymentsKeyByKeyDelete`
#### `withProjectKeyValue()->payments()->withIDValue()->ByProjectKeyPaymentsByIDGet`
#### `withProjectKeyValue()->payments()->withIDValue()->ByProjectKeyPaymentsByIDPost`
#### `withProjectKeyValue()->payments()->withIDValue()->ByProjectKeyPaymentsByIDDelete`
#### `withProjectKeyValue()->products()->ByProjectKeyProductsGet`
#### `withProjectKeyValue()->products()->ByProjectKeyProductsPost`
#### `withProjectKeyValue()->products()->keyWithKeyValue()->ByProjectKeyProductsKeyByKeyGet`
#### `withProjectKeyValue()->products()->keyWithKeyValue()->ByProjectKeyProductsKeyByKeyPost`
#### `withProjectKeyValue()->products()->keyWithKeyValue()->ByProjectKeyProductsKeyByKeyDelete`
#### `withProjectKeyValue()->products()->withIDValue()->ByProjectKeyProductsByIDGet`
#### `withProjectKeyValue()->products()->withIDValue()->ByProjectKeyProductsByIDPost`
#### `withProjectKeyValue()->products()->withIDValue()->ByProjectKeyProductsByIDDelete`
#### `withProjectKeyValue()->products()->withIDValue()->images()->ByProjectKeyProductsByIDImagesPost`
#### `withProjectKeyValue()->productDiscounts()->ByProjectKeyProductDiscountsGet`
#### `withProjectKeyValue()->productDiscounts()->ByProjectKeyProductDiscountsPost`
#### `withProjectKeyValue()->productDiscounts()->withIDValue()->ByProjectKeyProductDiscountsByIDGet`
#### `withProjectKeyValue()->productDiscounts()->withIDValue()->ByProjectKeyProductDiscountsByIDPost`
#### `withProjectKeyValue()->productDiscounts()->withIDValue()->ByProjectKeyProductDiscountsByIDDelete`
#### `withProjectKeyValue()->productProjections()->ByProjectKeyProductProjectionsGet`
#### `withProjectKeyValue()->productProjections()->search()->ByProjectKeyProductProjectionsSearchPost`
#### `withProjectKeyValue()->productProjections()->search()->ByProjectKeyProductProjectionsSearchGet`
#### `withProjectKeyValue()->productProjections()->suggest()->ByProjectKeyProductProjectionsSuggestGet`
#### `withProjectKeyValue()->productProjections()->keyWithKeyValue()->ByProjectKeyProductProjectionsKeyByKeyGet`
#### `withProjectKeyValue()->productProjections()->withIDValue()->ByProjectKeyProductProjectionsByIDGet`
#### `withProjectKeyValue()->productTypes()->ByProjectKeyProductTypesGet`
#### `withProjectKeyValue()->productTypes()->ByProjectKeyProductTypesPost`
#### `withProjectKeyValue()->productTypes()->keyWithKeyValue()->ByProjectKeyProductTypesKeyByKeyGet`
#### `withProjectKeyValue()->productTypes()->keyWithKeyValue()->ByProjectKeyProductTypesKeyByKeyPost`
#### `withProjectKeyValue()->productTypes()->keyWithKeyValue()->ByProjectKeyProductTypesKeyByKeyDelete`
#### `withProjectKeyValue()->productTypes()->withIDValue()->ByProjectKeyProductTypesByIDGet`
#### `withProjectKeyValue()->productTypes()->withIDValue()->ByProjectKeyProductTypesByIDPost`
#### `withProjectKeyValue()->productTypes()->withIDValue()->ByProjectKeyProductTypesByIDDelete`
#### `withProjectKeyValue()->reviews()->ByProjectKeyReviewsGet`
#### `withProjectKeyValue()->reviews()->ByProjectKeyReviewsPost`
#### `withProjectKeyValue()->reviews()->keyWithKeyValue()->ByProjectKeyReviewsKeyByKeyGet`
#### `withProjectKeyValue()->reviews()->keyWithKeyValue()->ByProjectKeyReviewsKeyByKeyPost`
#### `withProjectKeyValue()->reviews()->keyWithKeyValue()->ByProjectKeyReviewsKeyByKeyDelete`
#### `withProjectKeyValue()->reviews()->withIDValue()->ByProjectKeyReviewsByIDGet`
#### `withProjectKeyValue()->reviews()->withIDValue()->ByProjectKeyReviewsByIDPost`
#### `withProjectKeyValue()->reviews()->withIDValue()->ByProjectKeyReviewsByIDDelete`
#### `withProjectKeyValue()->shippingMethods()->ByProjectKeyShippingMethodsGet`
#### `withProjectKeyValue()->shippingMethods()->ByProjectKeyShippingMethodsPost`
#### `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->ByProjectKeyShippingMethodsKeyByKeyGet`
#### `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->ByProjectKeyShippingMethodsKeyByKeyPost`
#### `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->ByProjectKeyShippingMethodsKeyByKeyDelete`
#### `withProjectKeyValue()->shippingMethods()->withIDValue()->ByProjectKeyShippingMethodsByIDGet`
#### `withProjectKeyValue()->shippingMethods()->withIDValue()->ByProjectKeyShippingMethodsByIDPost`
#### `withProjectKeyValue()->shippingMethods()->withIDValue()->ByProjectKeyShippingMethodsByIDDelete`
#### `withProjectKeyValue()->shoppingLists()->ByProjectKeyShoppingListsGet`
#### `withProjectKeyValue()->shoppingLists()->ByProjectKeyShoppingListsPost`
#### `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->ByProjectKeyShoppingListsKeyByKeyGet`
#### `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->ByProjectKeyShoppingListsKeyByKeyPost`
#### `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->ByProjectKeyShoppingListsKeyByKeyDelete`
#### `withProjectKeyValue()->shoppingLists()->withIDValue()->ByProjectKeyShoppingListsByIDGet`
#### `withProjectKeyValue()->shoppingLists()->withIDValue()->ByProjectKeyShoppingListsByIDPost`
#### `withProjectKeyValue()->shoppingLists()->withIDValue()->ByProjectKeyShoppingListsByIDDelete`
#### `withProjectKeyValue()->states()->ByProjectKeyStatesGet`
#### `withProjectKeyValue()->states()->ByProjectKeyStatesPost`
#### `withProjectKeyValue()->states()->withIDValue()->ByProjectKeyStatesByIDGet`
#### `withProjectKeyValue()->states()->withIDValue()->ByProjectKeyStatesByIDPost`
#### `withProjectKeyValue()->states()->withIDValue()->ByProjectKeyStatesByIDDelete`
#### `withProjectKeyValue()->subscriptions()->ByProjectKeySubscriptionsGet`
#### `withProjectKeyValue()->subscriptions()->ByProjectKeySubscriptionsPost`
#### `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->ByProjectKeySubscriptionsKeyByKeyGet`
#### `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->ByProjectKeySubscriptionsKeyByKeyPost`
#### `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->ByProjectKeySubscriptionsKeyByKeyDelete`
#### `withProjectKeyValue()->subscriptions()->withIDValue()->ByProjectKeySubscriptionsByIDGet`
#### `withProjectKeyValue()->subscriptions()->withIDValue()->ByProjectKeySubscriptionsByIDPost`
#### `withProjectKeyValue()->subscriptions()->withIDValue()->ByProjectKeySubscriptionsByIDDelete`
#### `withProjectKeyValue()->taxCategories()->ByProjectKeyTaxCategoriesGet`
#### `withProjectKeyValue()->taxCategories()->ByProjectKeyTaxCategoriesPost`
#### `withProjectKeyValue()->taxCategories()->withIDValue()->ByProjectKeyTaxCategoriesByIDGet`
#### `withProjectKeyValue()->taxCategories()->withIDValue()->ByProjectKeyTaxCategoriesByIDPost`
#### `withProjectKeyValue()->taxCategories()->withIDValue()->ByProjectKeyTaxCategoriesByIDDelete`
#### `withProjectKeyValue()->types()->ByProjectKeyTypesGet`
#### `withProjectKeyValue()->types()->ByProjectKeyTypesPost`
#### `withProjectKeyValue()->types()->keyWithKeyValue()->ByProjectKeyTypesKeyByKeyGet`
#### `withProjectKeyValue()->types()->keyWithKeyValue()->ByProjectKeyTypesKeyByKeyPost`
#### `withProjectKeyValue()->types()->keyWithKeyValue()->ByProjectKeyTypesKeyByKeyDelete`
#### `withProjectKeyValue()->types()->withIDValue()->ByProjectKeyTypesByIDGet`
#### `withProjectKeyValue()->types()->withIDValue()->ByProjectKeyTypesByIDPost`
#### `withProjectKeyValue()->types()->withIDValue()->ByProjectKeyTypesByIDDelete`
#### `withProjectKeyValue()->zones()->ByProjectKeyZonesGet`
#### `withProjectKeyValue()->zones()->ByProjectKeyZonesPost`
#### `withProjectKeyValue()->zones()->withIDValue()->ByProjectKeyZonesByIDGet`
#### `withProjectKeyValue()->zones()->withIDValue()->ByProjectKeyZonesByIDPost`
#### `withProjectKeyValue()->zones()->withIDValue()->ByProjectKeyZonesByIDDelete`
#### `withProjectKeyValue()->me()->ByProjectKeyMeGet`
#### `withProjectKeyValue()->me()->ByProjectKeyMePost`
#### `withProjectKeyValue()->me()->ByProjectKeyMeDelete`
#### `withProjectKeyValue()->me()->email()->confirm()->ByProjectKeyMeEmailConfirmPost`
#### `withProjectKeyValue()->me()->password()->ByProjectKeyMePasswordPost`
#### `withProjectKeyValue()->me()->password()->reset()->ByProjectKeyMePasswordResetPost`
#### `withProjectKeyValue()->me()->signup()->ByProjectKeyMeSignupPost`
#### `withProjectKeyValue()->me()->login()->ByProjectKeyMeLoginPost`
#### `withProjectKeyValue()->me()->activeCart()->ByProjectKeyMeActiveCartGet`
#### `withProjectKeyValue()->me()->carts()->ByProjectKeyMeCartsGet`
#### `withProjectKeyValue()->me()->carts()->ByProjectKeyMeCartsPost`
#### `withProjectKeyValue()->me()->carts()->withIDValue()->ByProjectKeyMeCartsByIDGet`
#### `withProjectKeyValue()->me()->carts()->withIDValue()->ByProjectKeyMeCartsByIDPost`
#### `withProjectKeyValue()->me()->carts()->withIDValue()->ByProjectKeyMeCartsByIDDelete`
#### `withProjectKeyValue()->me()->orders()->ByProjectKeyMeOrdersGet`
#### `withProjectKeyValue()->me()->orders()->ByProjectKeyMeOrdersPost`
#### `withProjectKeyValue()->me()->orders()->withIDValue()->ByProjectKeyMeOrdersByIDGet`
#### `withProjectKeyValue()->me()->orders()->withIDValue()->ByProjectKeyMeOrdersByIDPost`
#### `withProjectKeyValue()->extensions()->ByProjectKeyExtensionsGet`
#### `withProjectKeyValue()->extensions()->ByProjectKeyExtensionsPost`
#### `withProjectKeyValue()->extensions()->keyWithKeyValue()->ByProjectKeyExtensionsKeyByKeyGet`
#### `withProjectKeyValue()->extensions()->keyWithKeyValue()->ByProjectKeyExtensionsKeyByKeyPost`
#### `withProjectKeyValue()->extensions()->keyWithKeyValue()->ByProjectKeyExtensionsKeyByKeyDelete`
#### `withProjectKeyValue()->extensions()->withIDValue()->ByProjectKeyExtensionsByIDGet`
#### `withProjectKeyValue()->extensions()->withIDValue()->ByProjectKeyExtensionsByIDPost`
#### `withProjectKeyValue()->extensions()->withIDValue()->ByProjectKeyExtensionsByIDDelete`
## License

MIT
