# RequestBuilder

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle [PSR-7](https://github.com/guzzle/psr7).

```php
use Commercetools\Request\RequestBuilder;

$builder = new RequestBuilder();
```


## Update Project

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->update($project)
    ->changeCountries(new ProjectChangeCountriesAction())
    // or
    ->changeCountries(function (ProjectChangeCountriesAction $action): ProjectChangeCountriesAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```


## Create CategoryDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->create($categoryDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->categories()->create(
    function (CategoryDraft $categoryDraft): CategoryDraft {
        // modify $draft as needed
        return $categoryDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Category

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->update($category)
    ->addAsset(new CategoryAddAssetAction())
    // or
    ->addAsset(function (CategoryAddAssetAction $action): CategoryAddAssetAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Category

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->delete($category);
$response = $client->send($request);
```


## Create CartDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->create($cartDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->carts()->create(
    function (CartDraft $cartDraft): CartDraft {
        // modify $draft as needed
        return $cartDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Cart

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->update($cart)
    ->addCustomLineItem(new CartAddCustomLineItemAction())
    // or
    ->addCustomLineItem(function (CartAddCustomLineItemAction $action): CartAddCustomLineItemAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Cart

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->delete($cart);
$response = $client->send($request);
```


## Create CartDiscountDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->create($cartDiscountDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->create(
    function (CartDiscountDraft $cartDiscountDraft): CartDiscountDraft {
        // modify $draft as needed
        return $cartDiscountDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update CartDiscount

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->update($cartDiscount)
    ->changeCartPredicate(new CartDiscountChangeCartPredicateAction())
    // or
    ->changeCartPredicate(function (CartDiscountChangeCartPredicateAction $action): CartDiscountChangeCartPredicateAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete CartDiscount

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->delete($cartDiscount);
$response = $client->send($request);
```


## Create ChannelDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->create($channelDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->channels()->create(
    function (ChannelDraft $channelDraft): ChannelDraft {
        // modify $draft as needed
        return $channelDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Channel

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->update($channel)
    ->addRoles(new ChannelAddRolesAction())
    // or
    ->addRoles(function (ChannelAddRolesAction $action): ChannelAddRolesAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Channel

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->delete($channel);
$response = $client->send($request);
```


## Create CustomerDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->create($customerDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->customers()->create(
    function (CustomerDraft $customerDraft): CustomerDraft {
        // modify $draft as needed
        return $customerDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Customer

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->update($customer)
    ->addAddress(new CustomerAddAddressAction())
    // or
    ->addAddress(function (CustomerAddAddressAction $action): CustomerAddAddressAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Customer

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->delete($customer);
$response = $client->send($request);
```


## Create CustomerGroupDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->create($customerGroupDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->create(
    function (CustomerGroupDraft $customerGroupDraft): CustomerGroupDraft {
        // modify $draft as needed
        return $customerGroupDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update CustomerGroup

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->update($customerGroup)
    ->changeName(new CustomerGroupChangeNameAction())
    // or
    ->changeName(function (CustomerGroupChangeNameAction $action): CustomerGroupChangeNameAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete CustomerGroup

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->delete($customerGroup);
$response = $client->send($request);
```


## Create DiscountCodeDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->create($discountCodeDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->create(
    function (DiscountCodeDraft $discountCodeDraft): DiscountCodeDraft {
        // modify $draft as needed
        return $discountCodeDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update DiscountCode

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->update($discountCode)
    ->changeCartDiscounts(new DiscountCodeChangeCartDiscountsAction())
    // or
    ->changeCartDiscounts(function (DiscountCodeChangeCartDiscountsAction $action): DiscountCodeChangeCartDiscountsAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete DiscountCode

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->delete($discountCode);
$response = $client->send($request);
```


## Create InventoryEntryDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->create($inventoryEntryDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->inventory()->create(
    function (InventoryEntryDraft $inventoryEntryDraft): InventoryEntryDraft {
        // modify $draft as needed
        return $inventoryEntryDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update InventoryEntry

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->update($inventoryEntry)
    ->addQuantity(new InventoryAddQuantityAction())
    // or
    ->addQuantity(function (InventoryAddQuantityAction $action): InventoryAddQuantityAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete InventoryEntry

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->delete($inventoryEntry);
$response = $client->send($request);
```


## Create OrderFromCartDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->create($orderFromCartDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->orders()->create(
    function (OrderFromCartDraft $orderFromCartDraft): OrderFromCartDraft {
        // modify $draft as needed
        return $orderFromCartDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Order

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->update($order)
    ->addDelivery(new OrderAddDeliveryAction())
    // or
    ->addDelivery(function (OrderAddDeliveryAction $action): OrderAddDeliveryAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Order

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->delete($order);
$response = $client->send($request);
```


## Create PaymentDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->create($paymentDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->payments()->create(
    function (PaymentDraft $paymentDraft): PaymentDraft {
        // modify $draft as needed
        return $paymentDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Payment

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->update($payment)
    ->addInterfaceInteraction(new PaymentAddInterfaceInteractionAction())
    // or
    ->addInterfaceInteraction(function (PaymentAddInterfaceInteractionAction $action): PaymentAddInterfaceInteractionAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Payment

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->delete($payment);
$response = $client->send($request);
```


## Create ProductDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->create($productDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->products()->create(
    function (ProductDraft $productDraft): ProductDraft {
        // modify $draft as needed
        return $productDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Product

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->update($product)
    ->addAsset(new ProductAddAssetAction())
    // or
    ->addAsset(function (ProductAddAssetAction $action): ProductAddAssetAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Product

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->delete($product);
$response = $client->send($request);
```


## Create ProductDiscountDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->create($productDiscountDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->create(
    function (ProductDiscountDraft $productDiscountDraft): ProductDiscountDraft {
        // modify $draft as needed
        return $productDiscountDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update ProductDiscount

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->update($productDiscount)
    ->changeIsActive(new ProductDiscountChangeIsActiveAction())
    // or
    ->changeIsActive(function (ProductDiscountChangeIsActiveAction $action): ProductDiscountChangeIsActiveAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete ProductDiscount

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->delete($productDiscount);
$response = $client->send($request);
```


## Create ProductTypeDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->create($productTypeDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->create(
    function (ProductTypeDraft $productTypeDraft): ProductTypeDraft {
        // modify $draft as needed
        return $productTypeDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update ProductType

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->update($productType)
    ->addAttributeDefinition(new ProductTypeAddAttributeDefinitionAction())
    // or
    ->addAttributeDefinition(function (ProductTypeAddAttributeDefinitionAction $action): ProductTypeAddAttributeDefinitionAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete ProductType

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->delete($productType);
$response = $client->send($request);
```


## Create ReviewDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->create($reviewDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->reviews()->create(
    function (ReviewDraft $reviewDraft): ReviewDraft {
        // modify $draft as needed
        return $reviewDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Review

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->update($review)
    ->setAuthorName(new ReviewSetAuthorNameAction())
    // or
    ->setAuthorName(function (ReviewSetAuthorNameAction $action): ReviewSetAuthorNameAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Review

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->delete($review);
$response = $client->send($request);
```


## Create ShippingMethodDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->create($shippingMethodDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->create(
    function (ShippingMethodDraft $shippingMethodDraft): ShippingMethodDraft {
        // modify $draft as needed
        return $shippingMethodDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update ShippingMethod

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->update($shippingMethod)
    ->addShippingRate(new ShippingMethodAddShippingRateAction())
    // or
    ->addShippingRate(function (ShippingMethodAddShippingRateAction $action): ShippingMethodAddShippingRateAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete ShippingMethod

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->delete($shippingMethod);
$response = $client->send($request);
```


## Create ShoppingListDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->create($shoppingListDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->create(
    function (ShoppingListDraft $shoppingListDraft): ShoppingListDraft {
        // modify $draft as needed
        return $shoppingListDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update ShoppingList

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->update($shoppingList)
    ->addLineItem(new ShoppingListAddLineItemAction())
    // or
    ->addLineItem(function (ShoppingListAddLineItemAction $action): ShoppingListAddLineItemAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete ShoppingList

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->delete($shoppingList);
$response = $client->send($request);
```


## Create StateDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->create($stateDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->states()->create(
    function (StateDraft $stateDraft): StateDraft {
        // modify $draft as needed
        return $stateDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update State

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->update($state)
    ->addRoles(new StateAddRolesAction())
    // or
    ->addRoles(function (StateAddRolesAction $action): StateAddRolesAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete State

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->delete($state);
$response = $client->send($request);
```


## Create SubscriptionDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->create($subscriptionDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->create(
    function (SubscriptionDraft $subscriptionDraft): SubscriptionDraft {
        // modify $draft as needed
        return $subscriptionDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Subscription

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->update($subscription)
    ->setChanges(new SubscriptionSetChangesAction())
    // or
    ->setChanges(function (SubscriptionSetChangesAction $action): SubscriptionSetChangesAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Subscription

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->delete($subscription);
$response = $client->send($request);
```


## Create TaxCategoryDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->create($taxCategoryDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->create(
    function (TaxCategoryDraft $taxCategoryDraft): TaxCategoryDraft {
        // modify $draft as needed
        return $taxCategoryDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update TaxCategory

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->update($taxCategory)
    ->addTaxRate(new TaxCategoryAddTaxRateAction())
    // or
    ->addTaxRate(function (TaxCategoryAddTaxRateAction $action): TaxCategoryAddTaxRateAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete TaxCategory

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->delete($taxCategory);
$response = $client->send($request);
```


## Create TypeDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->create($typeDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->types()->create(
    function (TypeDraft $typeDraft): TypeDraft {
        // modify $draft as needed
        return $typeDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Type

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->update($type)
    ->addEnumValue(new TypeAddEnumValueAction())
    // or
    ->addEnumValue(function (TypeAddEnumValueAction $action): TypeAddEnumValueAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Type

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->delete($type);
$response = $client->send($request);
```


## Create ZoneDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->create($zoneDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->zones()->create(
    function (ZoneDraft $zoneDraft): ZoneDraft {
        // modify $draft as needed
        return $zoneDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Zone

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->update($zone)
    ->addLocation(new ZoneAddLocationAction())
    // or
    ->addLocation(function (ZoneAddLocationAction $action): ZoneAddLocationAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Zone

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->delete($zone);
$response = $client->send($request);
```


## Create ExtensionDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->create($extensionDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue($projectKey)->extensions()->create(
    function (ExtensionDraft $extensionDraft): ExtensionDraft {
        // modify $draft as needed
        return $extensionDraft;
    })->buildRequest();
$response = $client->send($request);
```

## Update Extension

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->update($extension)
    ->changeDestination(new ExtensionChangeDestinationAction())
    // or
    ->changeDestination(function (ExtensionChangeDestinationAction $action): ExtensionChangeDestinationAction {
        // modify action as needed
        return $action;
    })
    ->buildRequest();
$response = $client->send($request);
```

## Delete Extension

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->delete($extension);
$response = $client->send($request);
```

## `withProjectKeyValue($projectKey)->get()`

The Endpoint is responding a limited set of information about settings and configuration of the project.


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->post()`

Update project

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->get()`

Query categories

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->post()`

Create Category

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->keyWithKeyValue($key)->get()`

Get Category by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->keyWithKeyValue($key)->post()`

Update Category by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->keyWithKeyValue($key)->delete()`

Delete Category by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->withIDValue($ID)->get()`

Get Category by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->withIDValue($ID)->post()`

Update Category by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->categories()->withIDValue($ID)->delete()`

Delete Category by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->categories()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->carts()->get()`

Query carts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->carts()->post()`

Create Cart

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->carts()->withIDValue($ID)->get()`

Get Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->carts()->withIDValue($ID)->post()`

Update Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->carts()->withIDValue($ID)->delete()`

Delete Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->carts()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->cartDiscounts()->get()`

Query cart-discounts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->cartDiscounts()->post()`

Create CartDiscount

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->cartDiscounts()->withIDValue($ID)->get()`

Get CartDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->cartDiscounts()->withIDValue($ID)->post()`

Update CartDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->cartDiscounts()->withIDValue($ID)->delete()`

Delete CartDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->channels()->get()`

Query channels

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->channels()->post()`

Create Channel

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->channels()->withIDValue($ID)->get()`

Get Channel by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->channels()->withIDValue($ID)->post()`

Update Channel by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->channels()->withIDValue($ID)->delete()`

Delete Channel by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->channels()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->get()`

Query customers

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->post()`

Create Customer

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->passwordTokenWithPasswordTokenValue($passwordToken)->get()`

Get Customer by passwordToken

### Parameters
* **projectKey** (type: `string`)
* **passwordToken** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->passwordTokenWithPasswordTokenValue($passwordToken)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->emailTokenWithEmailTokenValue($emailToken)->get()`

Get Customer by emailToken

### Parameters
* **projectKey** (type: `string`)
* **emailToken** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->emailTokenWithEmailTokenValue($emailToken)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->emailToken()->post()`

Create a Token for verifying the Customer's Email

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->emailToken()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->email()->confirm()->post()`

Verifies customer's email using a token.

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->email()->confirm()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->password()->post()`

Change a customers password

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->password()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->password()->reset()->post()`

Set a new password using a token.

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->password()->reset()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->passwordToken()->post()`

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->passwordToken()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->withIDValue($ID)->get()`

Get Customer by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->withIDValue($ID)->post()`

Update Customer by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customers()->withIDValue($ID)->delete()`

Delete Customer by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customers()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->get()`

Query customer-groups

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->post()`

Create CustomerGroup

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->keyWithKeyValue($key)->get()`

Get CustomerGroup by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->keyWithKeyValue($key)->post()`

Update CustomerGroup by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->keyWithKeyValue($key)->delete()`

Delete CustomerGroup by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->withIDValue($ID)->get()`

Get CustomerGroup by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->withIDValue($ID)->post()`

Update CustomerGroup by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customerGroups()->withIDValue($ID)->delete()`

Delete CustomerGroup by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customObjects()->get()`

Query custom-objects

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customObjects()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customObjects()->post()`

Create CustomObject

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customObjects()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->get()`

Get CustomObject by container

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->delete()`

Delete CustomObject by container

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->withKeyValue($key)->get()`

Get CustomObject by key

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->withKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->withKeyValue($key)->delete()`

Delete CustomObject by key

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->customObjects()->withContainerValue($container)->withKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->discountCodes()->get()`

Query discount-codes

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->discountCodes()->post()`

Create DiscountCode

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->discountCodes()->withIDValue($ID)->get()`

Get DiscountCode by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->discountCodes()->withIDValue($ID)->post()`

Update DiscountCode by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->discountCodes()->withIDValue($ID)->delete()`

Delete DiscountCode by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->discountCodes()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->graphql()->post()`

Execute a GraphQL query

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->graphql()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->inventory()->get()`

Query inventory

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->inventory()->post()`

Create InventoryEntry

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->inventory()->withIDValue($ID)->get()`

Get InventoryEntry by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->inventory()->withIDValue($ID)->post()`

Update InventoryEntry by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->inventory()->withIDValue($ID)->delete()`

Delete InventoryEntry by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->inventory()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->login()->post()`

Authenticate Customer (Sign In)

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->login()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->messages()->get()`

Query messages

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->messages()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->messages()->withIDValue($ID)->get()`

Get Message by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->messages()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->get()`

Query orders

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->post()`

Create Order

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->import()->post()`

Create an Order by Import

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->import()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->orderNumberWithOrderNumberValue($orderNumber)->get()`

Get Order by orderNumber

### Parameters
* **projectKey** (type: `string`)
* **orderNumber** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->orderNumberWithOrderNumberValue($orderNumber)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->orderNumberWithOrderNumberValue($orderNumber)->post()`

Update Order by orderNumber

### Parameters
* **projectKey** (type: `string`)
* **orderNumber** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->orderNumberWithOrderNumberValue($orderNumber)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->orderNumberWithOrderNumberValue($orderNumber)->delete()`

Delete Order by orderNumber

### Parameters
* **projectKey** (type: `string`)
* **orderNumber** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->orderNumberWithOrderNumberValue($orderNumber)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->withIDValue($ID)->get()`

Get Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->withIDValue($ID)->post()`

Update Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->orders()->withIDValue($ID)->delete()`

Delete Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->orders()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->get()`

Query payments

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->post()`

Create Payment

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->keyWithKeyValue($key)->get()`

Get Payment by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->keyWithKeyValue($key)->post()`

Update Payment by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->keyWithKeyValue($key)->delete()`

Delete Payment by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->withIDValue($ID)->get()`

Get Payment by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->withIDValue($ID)->post()`

Update Payment by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->payments()->withIDValue($ID)->delete()`

Delete Payment by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->payments()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->get()`

Query products

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->post()`

Create Product

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->keyWithKeyValue($key)->get()`

Get Product by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->keyWithKeyValue($key)->post()`

Update Product by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->keyWithKeyValue($key)->delete()`

Delete Product by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->withIDValue($ID)->get()`

Get Product by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->withIDValue($ID)->post()`

Update Product by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->withIDValue($ID)->delete()`

Delete Product by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->products()->withIDValue($ID)->images()->post()`

Uploads a binary image file to a given product variant. The supported image formats are JPEG, PNG and GIF.


### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->products()->withIDValue($ID)->images()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productDiscounts()->get()`

Query product-discounts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productDiscounts()->post()`

Create ProductDiscount

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productDiscounts()->withIDValue($ID)->get()`

Get ProductDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productDiscounts()->withIDValue($ID)->post()`

Update ProductDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productDiscounts()->withIDValue($ID)->delete()`

Delete ProductDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productProjections()->get()`

Query product-projections

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productProjections()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productProjections()->search()->post()`

Search Product Projection

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productProjections()->search()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productProjections()->search()->get()`

Search Product Projection

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productProjections()->search()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productProjections()->suggest()->get()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productProjections()->suggest()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productProjections()->keyWithKeyValue($key)->get()`

Get ProductProjection by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productProjections()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productProjections()->withIDValue($ID)->get()`

Get ProductProjection by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productProjections()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->get()`

Query product-types

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->post()`

Create ProductType

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->keyWithKeyValue($key)->get()`

Get ProductType by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->keyWithKeyValue($key)->post()`

Update ProductType by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->keyWithKeyValue($key)->delete()`

Delete ProductType by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->withIDValue($ID)->get()`

Get ProductType by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->withIDValue($ID)->post()`

Update ProductType by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->productTypes()->withIDValue($ID)->delete()`

Delete ProductType by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->productTypes()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->get()`

Query reviews

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->post()`

Create Review

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->keyWithKeyValue($key)->get()`

Get Review by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->keyWithKeyValue($key)->post()`

Update Review by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->keyWithKeyValue($key)->delete()`

Delete Review by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->withIDValue($ID)->get()`

Get Review by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->withIDValue($ID)->post()`

Update Review by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->reviews()->withIDValue($ID)->delete()`

Delete Review by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->reviews()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->get()`

Query shipping-methods

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->post()`

Create ShippingMethod

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->keyWithKeyValue($key)->get()`

Get ShippingMethod by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->keyWithKeyValue($key)->post()`

Update ShippingMethod by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->keyWithKeyValue($key)->delete()`

Delete ShippingMethod by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->withIDValue($ID)->get()`

Get ShippingMethod by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->withIDValue($ID)->post()`

Update ShippingMethod by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shippingMethods()->withIDValue($ID)->delete()`

Delete ShippingMethod by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->get()`

Query shopping-lists

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->post()`

Create ShoppingList

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->keyWithKeyValue($key)->get()`

Get ShoppingList by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->keyWithKeyValue($key)->post()`

Update ShoppingList by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->keyWithKeyValue($key)->delete()`

Delete ShoppingList by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->withIDValue($ID)->get()`

Get ShoppingList by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->withIDValue($ID)->post()`

Update ShoppingList by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->shoppingLists()->withIDValue($ID)->delete()`

Delete ShoppingList by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->states()->get()`

Query states

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->states()->post()`

Create State

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->states()->withIDValue($ID)->get()`

Get State by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->states()->withIDValue($ID)->post()`

Update State by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->states()->withIDValue($ID)->delete()`

Delete State by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->states()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->get()`

Query subscriptions

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->post()`

Create Subscription

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->keyWithKeyValue($key)->get()`

Get Subscription by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->keyWithKeyValue($key)->post()`

Update Subscription by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->keyWithKeyValue($key)->delete()`

Delete Subscription by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->withIDValue($ID)->get()`

Get Subscription by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->withIDValue($ID)->post()`

Update Subscription by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->subscriptions()->withIDValue($ID)->delete()`

Delete Subscription by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->taxCategories()->get()`

Query tax-categories

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->taxCategories()->post()`

Create TaxCategory

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->taxCategories()->withIDValue($ID)->get()`

Get TaxCategory by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->taxCategories()->withIDValue($ID)->post()`

Update TaxCategory by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->taxCategories()->withIDValue($ID)->delete()`

Delete TaxCategory by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->taxCategories()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->get()`

Query types

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->post()`

Create Type

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->keyWithKeyValue($key)->get()`

Get Type by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->keyWithKeyValue($key)->post()`

Update Type by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->keyWithKeyValue($key)->delete()`

Delete Type by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->withIDValue($ID)->get()`

Get Type by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->withIDValue($ID)->post()`

Update Type by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->types()->withIDValue($ID)->delete()`

Delete Type by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->types()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->zones()->get()`

Query zones

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->zones()->post()`

Create Zone

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->zones()->withIDValue($ID)->get()`

Get Zone by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->zones()->withIDValue($ID)->post()`

Update Zone by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->zones()->withIDValue($ID)->delete()`

Delete Zone by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->zones()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->get()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->post()`

Create a customer

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->delete()`

Delete a Customer

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->email()->confirm()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->email()->confirm()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->password()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->password()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->password()->reset()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->password()->reset()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->signup()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->signup()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->login()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->login()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->activeCart()->get()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->activeCart()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->carts()->get()`

Query carts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->carts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->carts()->post()`

Create Cart

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->carts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->carts()->withIDValue($ID)->get()`

Get Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->carts()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->carts()->withIDValue($ID)->post()`

Update Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->carts()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->carts()->withIDValue($ID)->delete()`

Delete Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->carts()->withIDValue($ID)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->orders()->get()`

Query orders

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->orders()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->orders()->post()`

Create Order

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->orders()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->orders()->withIDValue($ID)->get()`

Get Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->orders()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->me()->orders()->withIDValue($ID)->post()`

Update Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->me()->orders()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->get()`

Query extensions

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->post()`

Create Extension

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->keyWithKeyValue($key)->get()`

Get Extension by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->keyWithKeyValue($key)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->keyWithKeyValue($key)->post()`

Update Extension by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->keyWithKeyValue($key)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->keyWithKeyValue($key)->delete()`

Delete Extension by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->keyWithKeyValue($key)->delete();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->withIDValue($ID)->get()`

Get Extension by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->withIDValue($ID)->get();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->withIDValue($ID)->post()`

Update Extension by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->withIDValue($ID)->post();
$response = $client->send($request);
```
## `withProjectKeyValue($projectKey)->extensions()->withIDValue($ID)->delete()`

Delete Extension by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue($projectKey)->extensions()->withIDValue($ID)->delete();
$response = $client->send($request);
```
