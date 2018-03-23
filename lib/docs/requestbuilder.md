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
$request = $builder->withProjectKeyValue()->update($project)
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
$request = $builder->withProjectKeyValue()->categories()->create($categoryDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->categories()->create(
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
$request = $builder->withProjectKeyValue()->categories()->update($category)
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
$request = $builder->withProjectKeyValue()->categories()->delete($category);
$response = $client->send($request);
```


## Create CartDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->create($cartDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->carts()->create(
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
$request = $builder->withProjectKeyValue()->carts()->update($cart)
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
$request = $builder->withProjectKeyValue()->carts()->delete($cart);
$response = $client->send($request);
```


## Create CartDiscountDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->create($cartDiscountDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->cartDiscounts()->create(
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
$request = $builder->withProjectKeyValue()->cartDiscounts()->update($cartDiscount)
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
$request = $builder->withProjectKeyValue()->cartDiscounts()->delete($cartDiscount);
$response = $client->send($request);
```


## Create ChannelDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->create($channelDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->channels()->create(
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
$request = $builder->withProjectKeyValue()->channels()->update($channel)
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
$request = $builder->withProjectKeyValue()->channels()->delete($channel);
$response = $client->send($request);
```


## Create CustomerDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->create($customerDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->customers()->create(
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
$request = $builder->withProjectKeyValue()->customers()->update($customer)
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
$request = $builder->withProjectKeyValue()->customers()->delete($customer);
$response = $client->send($request);
```


## Create CustomerGroupDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->create($customerGroupDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->customerGroups()->create(
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
$request = $builder->withProjectKeyValue()->customerGroups()->update($customerGroup)
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
$request = $builder->withProjectKeyValue()->customerGroups()->delete($customerGroup);
$response = $client->send($request);
```


## Create DiscountCodeDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->create($discountCodeDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->discountCodes()->create(
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
$request = $builder->withProjectKeyValue()->discountCodes()->update($discountCode)
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
$request = $builder->withProjectKeyValue()->discountCodes()->delete($discountCode);
$response = $client->send($request);
```


## Create InventoryEntryDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->create($inventoryEntryDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->inventory()->create(
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
$request = $builder->withProjectKeyValue()->inventory()->update($inventoryEntry)
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
$request = $builder->withProjectKeyValue()->inventory()->delete($inventoryEntry);
$response = $client->send($request);
```


## Create OrderFromCartDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->create($orderFromCartDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->orders()->create(
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
$request = $builder->withProjectKeyValue()->orders()->update($order)
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
$request = $builder->withProjectKeyValue()->orders()->delete($order);
$response = $client->send($request);
```


## Create PaymentDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->create($paymentDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->payments()->create(
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
$request = $builder->withProjectKeyValue()->payments()->update($payment)
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
$request = $builder->withProjectKeyValue()->payments()->delete($payment);
$response = $client->send($request);
```


## Create ProductDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->create($productDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->products()->create(
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
$request = $builder->withProjectKeyValue()->products()->update($product)
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
$request = $builder->withProjectKeyValue()->products()->delete($product);
$response = $client->send($request);
```


## Create ProductDiscountDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->create($productDiscountDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->productDiscounts()->create(
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
$request = $builder->withProjectKeyValue()->productDiscounts()->update($productDiscount)
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
$request = $builder->withProjectKeyValue()->productDiscounts()->delete($productDiscount);
$response = $client->send($request);
```


## Create ProductTypeDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->create($productTypeDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->productTypes()->create(
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
$request = $builder->withProjectKeyValue()->productTypes()->update($productType)
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
$request = $builder->withProjectKeyValue()->productTypes()->delete($productType);
$response = $client->send($request);
```


## Create ReviewDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->create($reviewDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->reviews()->create(
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
$request = $builder->withProjectKeyValue()->reviews()->update($review)
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
$request = $builder->withProjectKeyValue()->reviews()->delete($review);
$response = $client->send($request);
```


## Create ShippingMethodDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->create($shippingMethodDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->shippingMethods()->create(
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
$request = $builder->withProjectKeyValue()->shippingMethods()->update($shippingMethod)
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
$request = $builder->withProjectKeyValue()->shippingMethods()->delete($shippingMethod);
$response = $client->send($request);
```


## Create ShoppingListDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->create($shoppingListDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->shoppingLists()->create(
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
$request = $builder->withProjectKeyValue()->shoppingLists()->update($shoppingList)
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
$request = $builder->withProjectKeyValue()->shoppingLists()->delete($shoppingList);
$response = $client->send($request);
```


## Create StateDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->create($stateDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->states()->create(
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
$request = $builder->withProjectKeyValue()->states()->update($state)
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
$request = $builder->withProjectKeyValue()->states()->delete($state);
$response = $client->send($request);
```


## Create SubscriptionDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->create($subscriptionDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->subscriptions()->create(
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
$request = $builder->withProjectKeyValue()->subscriptions()->update($subscription)
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
$request = $builder->withProjectKeyValue()->subscriptions()->delete($subscription);
$response = $client->send($request);
```


## Create TaxCategoryDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->create($taxCategoryDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->taxCategories()->create(
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
$request = $builder->withProjectKeyValue()->taxCategories()->update($taxCategory)
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
$request = $builder->withProjectKeyValue()->taxCategories()->delete($taxCategory);
$response = $client->send($request);
```


## Create TypeDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->create($typeDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->types()->create(
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
$request = $builder->withProjectKeyValue()->types()->update($type)
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
$request = $builder->withProjectKeyValue()->types()->delete($type);
$response = $client->send($request);
```


## Create ZoneDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->create($zoneDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->zones()->create(
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
$request = $builder->withProjectKeyValue()->zones()->update($zone)
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
$request = $builder->withProjectKeyValue()->zones()->delete($zone);
$response = $client->send($request);
```


## Create ExtensionDraft

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->create($extensionDraft)->buildRequest();
// or
$request = $builder->withProjectKeyValue()->extensions()->create(
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
$request = $builder->withProjectKeyValue()->extensions()->update($extension)
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
$request = $builder->withProjectKeyValue()->extensions()->delete($extension);
$response = $client->send($request);
```

## `withProjectKeyValue()->get()`

The Endpoint is responding a limited set of information about settings and configuration of the project.


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->post()`

Update project

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->get()`

Query categories

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->post()`

Create Category

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->keyWithKeyValue()->get()`

Get Category by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->keyWithKeyValue()->post()`

Update Category by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->keyWithKeyValue()->delete()`

Delete Category by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->withIDValue()->get()`

Get Category by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->withIDValue()->post()`

Update Category by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->categories()->withIDValue()->delete()`

Delete Category by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->categories()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->carts()->get()`

Query carts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->carts()->post()`

Create Cart

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->carts()->withIDValue()->get()`

Get Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->carts()->withIDValue()->post()`

Update Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->carts()->withIDValue()->delete()`

Delete Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->carts()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->cartDiscounts()->get()`

Query cart-discounts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->cartDiscounts()->post()`

Create CartDiscount

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->cartDiscounts()->withIDValue()->get()`

Get CartDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->cartDiscounts()->withIDValue()->post()`

Update CartDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->cartDiscounts()->withIDValue()->delete()`

Delete CartDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->cartDiscounts()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->channels()->get()`

Query channels

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->channels()->post()`

Create Channel

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->channels()->withIDValue()->get()`

Get Channel by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->channels()->withIDValue()->post()`

Update Channel by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->channels()->withIDValue()->delete()`

Delete Channel by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->channels()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->get()`

Query customers

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->post()`

Create Customer

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->passwordTokenWithPasswordTokenValue()->get()`

Get Customer by passwordToken

### Parameters
* **projectKey** (type: `string`)
* **passwordToken** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->passwordTokenWithPasswordTokenValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->emailTokenWithEmailTokenValue()->get()`

Get Customer by emailToken

### Parameters
* **projectKey** (type: `string`)
* **emailToken** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->emailTokenWithEmailTokenValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->emailToken()->post()`

Create a Token for verifying the Customer's Email

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->emailToken()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->email()->confirm()->post()`

Verifies customer's email using a token.

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->email()->confirm()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->password()->post()`

Change a customers password

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->password()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->password()->reset()->post()`

Set a new password using a token.

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->password()->reset()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->passwordToken()->post()`

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->passwordToken()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->withIDValue()->get()`

Get Customer by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->withIDValue()->post()`

Update Customer by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customers()->withIDValue()->delete()`

Delete Customer by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customers()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->get()`

Query customer-groups

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->post()`

Create CustomerGroup

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->get()`

Get CustomerGroup by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->post()`

Update CustomerGroup by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->keyWithKeyValue()->delete()`

Delete CustomerGroup by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->withIDValue()->get()`

Get CustomerGroup by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->withIDValue()->post()`

Update CustomerGroup by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customerGroups()->withIDValue()->delete()`

Delete CustomerGroup by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customerGroups()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->customObjects()->get()`

Query custom-objects

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customObjects()->post()`

Create CustomObject

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->customObjects()->withContainerValue()->get()`

Get CustomObject by container

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customObjects()->withContainerValue()->delete()`

Delete CustomObject by container

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->get()`

Get CustomObject by key

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->delete()`

Delete CustomObject by key

### Parameters
* **projectKey** (type: `string`)
* **container** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->customObjects()->withContainerValue()->withKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->discountCodes()->get()`

Query discount-codes

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->discountCodes()->post()`

Create DiscountCode

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->discountCodes()->withIDValue()->get()`

Get DiscountCode by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->discountCodes()->withIDValue()->post()`

Update DiscountCode by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->discountCodes()->withIDValue()->delete()`

Delete DiscountCode by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->discountCodes()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->graphql()->post()`

Execute a GraphQL query

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->graphql()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->inventory()->get()`

Query inventory

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->inventory()->post()`

Create InventoryEntry

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->inventory()->withIDValue()->get()`

Get InventoryEntry by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->inventory()->withIDValue()->post()`

Update InventoryEntry by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->inventory()->withIDValue()->delete()`

Delete InventoryEntry by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->inventory()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->login()->post()`

Authenticate Customer (Sign In)

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->login()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->messages()->get()`

Query messages

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->messages()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->messages()->withIDValue()->get()`

Get Message by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->messages()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->get()`

Query orders

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->post()`

Create Order

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->import()->post()`

Create an Order by Import

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->import()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->get()`

Get Order by orderNumber

### Parameters
* **projectKey** (type: `string`)
* **orderNumber** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->post()`

Update Order by orderNumber

### Parameters
* **projectKey** (type: `string`)
* **orderNumber** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->delete()`

Delete Order by orderNumber

### Parameters
* **projectKey** (type: `string`)
* **orderNumber** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->orderNumberWithOrderNumberValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->withIDValue()->get()`

Get Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->withIDValue()->post()`

Update Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->orders()->withIDValue()->delete()`

Delete Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->orders()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->get()`

Query payments

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->post()`

Create Payment

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->keyWithKeyValue()->get()`

Get Payment by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->keyWithKeyValue()->post()`

Update Payment by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->keyWithKeyValue()->delete()`

Delete Payment by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->withIDValue()->get()`

Get Payment by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->withIDValue()->post()`

Update Payment by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->payments()->withIDValue()->delete()`

Delete Payment by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->payments()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->get()`

Query products

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->post()`

Create Product

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->keyWithKeyValue()->get()`

Get Product by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->keyWithKeyValue()->post()`

Update Product by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->keyWithKeyValue()->delete()`

Delete Product by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->withIDValue()->get()`

Get Product by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->withIDValue()->post()`

Update Product by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->withIDValue()->delete()`

Delete Product by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->products()->withIDValue()->images()->post()`

Uploads a binary image file to a given product variant. The supported image formats are JPEG, PNG and GIF.


### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->products()->withIDValue()->images()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->productDiscounts()->get()`

Query product-discounts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productDiscounts()->post()`

Create ProductDiscount

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->productDiscounts()->withIDValue()->get()`

Get ProductDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productDiscounts()->withIDValue()->post()`

Update ProductDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->productDiscounts()->withIDValue()->delete()`

Delete ProductDiscount by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productDiscounts()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->productProjections()->get()`

Query product-projections

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productProjections()->search()->post()`

Search Product Projection

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->search()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->productProjections()->search()->get()`

Search Product Projection

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->search()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productProjections()->suggest()->get()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->suggest()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productProjections()->keyWithKeyValue()->get()`

Get ProductProjection by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productProjections()->withIDValue()->get()`

Get ProductProjection by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productProjections()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->get()`

Query product-types

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->post()`

Create ProductType

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->keyWithKeyValue()->get()`

Get ProductType by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->keyWithKeyValue()->post()`

Update ProductType by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->keyWithKeyValue()->delete()`

Delete ProductType by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->withIDValue()->get()`

Get ProductType by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->withIDValue()->post()`

Update ProductType by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->productTypes()->withIDValue()->delete()`

Delete ProductType by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->productTypes()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->get()`

Query reviews

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->post()`

Create Review

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->keyWithKeyValue()->get()`

Get Review by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->keyWithKeyValue()->post()`

Update Review by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->keyWithKeyValue()->delete()`

Delete Review by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->withIDValue()->get()`

Get Review by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->withIDValue()->post()`

Update Review by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->reviews()->withIDValue()->delete()`

Delete Review by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->reviews()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->get()`

Query shipping-methods

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->post()`

Create ShippingMethod

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->get()`

Get ShippingMethod by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->post()`

Update ShippingMethod by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->delete()`

Delete ShippingMethod by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->withIDValue()->get()`

Get ShippingMethod by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->withIDValue()->post()`

Update ShippingMethod by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->shippingMethods()->withIDValue()->delete()`

Delete ShippingMethod by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shippingMethods()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->get()`

Query shopping-lists

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->post()`

Create ShoppingList

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->get()`

Get ShoppingList by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->post()`

Update ShoppingList by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->delete()`

Delete ShoppingList by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->withIDValue()->get()`

Get ShoppingList by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->withIDValue()->post()`

Update ShoppingList by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->shoppingLists()->withIDValue()->delete()`

Delete ShoppingList by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->shoppingLists()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->states()->get()`

Query states

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->states()->post()`

Create State

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->states()->withIDValue()->get()`

Get State by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->states()->withIDValue()->post()`

Update State by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->states()->withIDValue()->delete()`

Delete State by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->states()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->get()`

Query subscriptions

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->post()`

Create Subscription

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->get()`

Get Subscription by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->post()`

Update Subscription by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->keyWithKeyValue()->delete()`

Delete Subscription by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->withIDValue()->get()`

Get Subscription by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->withIDValue()->post()`

Update Subscription by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->subscriptions()->withIDValue()->delete()`

Delete Subscription by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->subscriptions()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->taxCategories()->get()`

Query tax-categories

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->taxCategories()->post()`

Create TaxCategory

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->taxCategories()->withIDValue()->get()`

Get TaxCategory by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->taxCategories()->withIDValue()->post()`

Update TaxCategory by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->taxCategories()->withIDValue()->delete()`

Delete TaxCategory by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->taxCategories()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->get()`

Query types

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->post()`

Create Type

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->keyWithKeyValue()->get()`

Get Type by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->keyWithKeyValue()->post()`

Update Type by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->keyWithKeyValue()->delete()`

Delete Type by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->withIDValue()->get()`

Get Type by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->withIDValue()->post()`

Update Type by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->types()->withIDValue()->delete()`

Delete Type by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->types()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->zones()->get()`

Query zones

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->zones()->post()`

Create Zone

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->zones()->withIDValue()->get()`

Get Zone by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->zones()->withIDValue()->post()`

Update Zone by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->zones()->withIDValue()->delete()`

Delete Zone by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->zones()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->get()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->post()`

Create a customer

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->delete()`

Delete a Customer

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->email()->confirm()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->email()->confirm()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->password()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->password()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->password()->reset()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->password()->reset()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->signup()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->signup()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->login()->post()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->login()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->activeCart()->get()`


### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->activeCart()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->carts()->get()`

Query carts

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->carts()->post()`

Create Cart

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->carts()->withIDValue()->get()`

Get Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->carts()->withIDValue()->post()`

Update Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->carts()->withIDValue()->delete()`

Delete Cart by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->carts()->withIDValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->orders()->get()`

Query orders

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->orders()->post()`

Create Order

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->orders()->withIDValue()->get()`

Get Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->me()->orders()->withIDValue()->post()`

Update Order by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->me()->orders()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->get()`

Query extensions

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->post()`

Create Extension

### Parameters
* **projectKey** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->keyWithKeyValue()->get()`

Get Extension by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->keyWithKeyValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->keyWithKeyValue()->post()`

Update Extension by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->keyWithKeyValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->keyWithKeyValue()->delete()`

Delete Extension by key

### Parameters
* **projectKey** (type: `string`)
* **key** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->keyWithKeyValue()->delete();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->withIDValue()->get()`

Get Extension by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->withIDValue()->get();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->withIDValue()->post()`

Update Extension by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->withIDValue()->post();
$response = $client->send($request);
```
## `withProjectKeyValue()->extensions()->withIDValue()->delete()`

Delete Extension by ID

### Parameters
* **projectKey** (type: `string`)
* **ID** (type: `string`)

### Example
```php
$builder =  new RequestBuilder();
$request = $builder->withProjectKeyValue()->extensions()->withIDValue()->delete();
$response = $client->send($request);
```
