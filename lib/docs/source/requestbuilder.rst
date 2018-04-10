.. _requestbuilder:

=================
RequestBuilder
=================

In order to be able to build request objects you can use the RequestBuilder. The following methods return a HTTP request instance of Guzzle `PSR-7 <https://github.com/guzzle/psr7>`_.

.. code-block:: php
    :name: requestbuilder.examples.builder.php

    <?php
    use Commercetools\Request\RequestBuilder;

    $builder = new RequestBuilder();


.. _requestbuilder.update.:

Update Project
################################################################################

All Project update methods can be found :ref:`here <updatebuilder.projectupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Project.php

    <?php
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



.. _requestbuilder.create.CategoryDraft:

Create CategoryDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-CategoryDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->create($categoryDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->categories()->create(
        function (CategoryDraft $categoryDraft): CategoryDraft {
            // modify $draft as needed
            return $categoryDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.CategoryDraft:

Update Category
################################################################################

All Category update methods can be found :ref:`here <updatebuilder.categoryupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Category.php

    <?php
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


.. _requestbuilder.delete.Category:

Delete Category
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Category.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->delete($category);
    $response = $client->send($request);



.. _requestbuilder.create.CartDraft:

Create CartDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-CartDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->create($cartDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->carts()->create(
        function (CartDraft $cartDraft): CartDraft {
            // modify $draft as needed
            return $cartDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.CartDraft:

Update Cart
################################################################################

All Cart update methods can be found :ref:`here <updatebuilder.cartupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Cart.php

    <?php
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


.. _requestbuilder.delete.Cart:

Delete Cart
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Cart.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->delete($cart);
    $response = $client->send($request);



.. _requestbuilder.create.CartDiscountDraft:

Create CartDiscountDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-CartDiscountDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->create($cartDiscountDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->create(
        function (CartDiscountDraft $cartDiscountDraft): CartDiscountDraft {
            // modify $draft as needed
            return $cartDiscountDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.CartDiscountDraft:

Update CartDiscount
################################################################################

All CartDiscount update methods can be found :ref:`here <updatebuilder.cartdiscountupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-CartDiscount.php

    <?php
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


.. _requestbuilder.delete.CartDiscount:

Delete CartDiscount
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-CartDiscount.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->delete($cartDiscount);
    $response = $client->send($request);



.. _requestbuilder.create.ChannelDraft:

Create ChannelDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ChannelDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->channels()->create($channelDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->channels()->create(
        function (ChannelDraft $channelDraft): ChannelDraft {
            // modify $draft as needed
            return $channelDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ChannelDraft:

Update Channel
################################################################################

All Channel update methods can be found :ref:`here <updatebuilder.channelupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Channel.php

    <?php
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


.. _requestbuilder.delete.Channel:

Delete Channel
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Channel.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->channels()->delete($channel);
    $response = $client->send($request);



.. _requestbuilder.create.CustomerDraft:

Create CustomerDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-CustomerDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->create($customerDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->customers()->create(
        function (CustomerDraft $customerDraft): CustomerDraft {
            // modify $draft as needed
            return $customerDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.CustomerDraft:

Update Customer
################################################################################

All Customer update methods can be found :ref:`here <updatebuilder.customerupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Customer.php

    <?php
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


.. _requestbuilder.delete.Customer:

Delete Customer
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Customer.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->delete($customer);
    $response = $client->send($request);



.. _requestbuilder.create.CustomerGroupDraft:

Create CustomerGroupDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-CustomerGroupDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->create($customerGroupDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->create(
        function (CustomerGroupDraft $customerGroupDraft): CustomerGroupDraft {
            // modify $draft as needed
            return $customerGroupDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.CustomerGroupDraft:

Update CustomerGroup
################################################################################

All CustomerGroup update methods can be found :ref:`here <updatebuilder.customergroupupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-CustomerGroup.php

    <?php
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


.. _requestbuilder.delete.CustomerGroup:

Delete CustomerGroup
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-CustomerGroup.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->delete($customerGroup);
    $response = $client->send($request);



.. _requestbuilder.create.DiscountCodeDraft:

Create DiscountCodeDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-DiscountCodeDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->create($discountCodeDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->create(
        function (DiscountCodeDraft $discountCodeDraft): DiscountCodeDraft {
            // modify $draft as needed
            return $discountCodeDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.DiscountCodeDraft:

Update DiscountCode
################################################################################

All DiscountCode update methods can be found :ref:`here <updatebuilder.discountcodeupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-DiscountCode.php

    <?php
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


.. _requestbuilder.delete.DiscountCode:

Delete DiscountCode
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-DiscountCode.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->delete($discountCode);
    $response = $client->send($request);



.. _requestbuilder.create.InventoryEntryDraft:

Create InventoryEntryDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-InventoryEntryDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->create($inventoryEntryDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->create(
        function (InventoryEntryDraft $inventoryEntryDraft): InventoryEntryDraft {
            // modify $draft as needed
            return $inventoryEntryDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.InventoryEntryDraft:

Update InventoryEntry
################################################################################

All InventoryEntry update methods can be found :ref:`here <updatebuilder.inventoryentryupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-InventoryEntry.php

    <?php
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


.. _requestbuilder.delete.InventoryEntry:

Delete InventoryEntry
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-InventoryEntry.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->delete($inventoryEntry);
    $response = $client->send($request);



.. _requestbuilder.create.OrderFromCartDraft:

Create OrderFromCartDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-OrderFromCartDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->create($orderFromCartDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->orders()->create(
        function (OrderFromCartDraft $orderFromCartDraft): OrderFromCartDraft {
            // modify $draft as needed
            return $orderFromCartDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.OrderFromCartDraft:

Update Order
################################################################################

All Order update methods can be found :ref:`here <updatebuilder.orderupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Order.php

    <?php
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


.. _requestbuilder.delete.Order:

Delete Order
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Order.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->delete($order);
    $response = $client->send($request);



.. _requestbuilder.create.PaymentDraft:

Create PaymentDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-PaymentDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->create($paymentDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->payments()->create(
        function (PaymentDraft $paymentDraft): PaymentDraft {
            // modify $draft as needed
            return $paymentDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.PaymentDraft:

Update Payment
################################################################################

All Payment update methods can be found :ref:`here <updatebuilder.paymentupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Payment.php

    <?php
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


.. _requestbuilder.delete.Payment:

Delete Payment
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Payment.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->delete($payment);
    $response = $client->send($request);



.. _requestbuilder.create.ProductDraft:

Create ProductDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ProductDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->create($productDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->products()->create(
        function (ProductDraft $productDraft): ProductDraft {
            // modify $draft as needed
            return $productDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ProductDraft:

Update Product
################################################################################

All Product update methods can be found :ref:`here <updatebuilder.productupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Product.php

    <?php
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


.. _requestbuilder.delete.Product:

Delete Product
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Product.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->delete($product);
    $response = $client->send($request);



.. _requestbuilder.create.ProductDiscountDraft:

Create ProductDiscountDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ProductDiscountDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->create($productDiscountDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->create(
        function (ProductDiscountDraft $productDiscountDraft): ProductDiscountDraft {
            // modify $draft as needed
            return $productDiscountDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ProductDiscountDraft:

Update ProductDiscount
################################################################################

All ProductDiscount update methods can be found :ref:`here <updatebuilder.productdiscountupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-ProductDiscount.php

    <?php
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


.. _requestbuilder.delete.ProductDiscount:

Delete ProductDiscount
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-ProductDiscount.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->delete($productDiscount);
    $response = $client->send($request);



.. _requestbuilder.create.ProductTypeDraft:

Create ProductTypeDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ProductTypeDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->create($productTypeDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->create(
        function (ProductTypeDraft $productTypeDraft): ProductTypeDraft {
            // modify $draft as needed
            return $productTypeDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ProductTypeDraft:

Update ProductType
################################################################################

All ProductType update methods can be found :ref:`here <updatebuilder.producttypeupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-ProductType.php

    <?php
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


.. _requestbuilder.delete.ProductType:

Delete ProductType
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-ProductType.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->delete($productType);
    $response = $client->send($request);



.. _requestbuilder.create.ReviewDraft:

Create ReviewDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ReviewDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->create($reviewDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->create(
        function (ReviewDraft $reviewDraft): ReviewDraft {
            // modify $draft as needed
            return $reviewDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ReviewDraft:

Update Review
################################################################################

All Review update methods can be found :ref:`here <updatebuilder.reviewupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Review.php

    <?php
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


.. _requestbuilder.delete.Review:

Delete Review
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Review.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->delete($review);
    $response = $client->send($request);



.. _requestbuilder.create.ShippingMethodDraft:

Create ShippingMethodDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ShippingMethodDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->create($shippingMethodDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->create(
        function (ShippingMethodDraft $shippingMethodDraft): ShippingMethodDraft {
            // modify $draft as needed
            return $shippingMethodDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ShippingMethodDraft:

Update ShippingMethod
################################################################################

All ShippingMethod update methods can be found :ref:`here <updatebuilder.shippingmethodupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-ShippingMethod.php

    <?php
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


.. _requestbuilder.delete.ShippingMethod:

Delete ShippingMethod
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-ShippingMethod.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->delete($shippingMethod);
    $response = $client->send($request);



.. _requestbuilder.create.ShoppingListDraft:

Create ShoppingListDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ShoppingListDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->create($shoppingListDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->create(
        function (ShoppingListDraft $shoppingListDraft): ShoppingListDraft {
            // modify $draft as needed
            return $shoppingListDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ShoppingListDraft:

Update ShoppingList
################################################################################

All ShoppingList update methods can be found :ref:`here <updatebuilder.shoppinglistupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-ShoppingList.php

    <?php
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


.. _requestbuilder.delete.ShoppingList:

Delete ShoppingList
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-ShoppingList.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->delete($shoppingList);
    $response = $client->send($request);



.. _requestbuilder.create.StateDraft:

Create StateDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-StateDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->states()->create($stateDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->states()->create(
        function (StateDraft $stateDraft): StateDraft {
            // modify $draft as needed
            return $stateDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.StateDraft:

Update State
################################################################################

All State update methods can be found :ref:`here <updatebuilder.stateupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-State.php

    <?php
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


.. _requestbuilder.delete.State:

Delete State
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-State.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->states()->delete($state);
    $response = $client->send($request);



.. _requestbuilder.create.SubscriptionDraft:

Create SubscriptionDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-SubscriptionDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->create($subscriptionDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->create(
        function (SubscriptionDraft $subscriptionDraft): SubscriptionDraft {
            // modify $draft as needed
            return $subscriptionDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.SubscriptionDraft:

Update Subscription
################################################################################

All Subscription update methods can be found :ref:`here <updatebuilder.subscriptionupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Subscription.php

    <?php
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


.. _requestbuilder.delete.Subscription:

Delete Subscription
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Subscription.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->delete($subscription);
    $response = $client->send($request);



.. _requestbuilder.create.TaxCategoryDraft:

Create TaxCategoryDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-TaxCategoryDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->create($taxCategoryDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->create(
        function (TaxCategoryDraft $taxCategoryDraft): TaxCategoryDraft {
            // modify $draft as needed
            return $taxCategoryDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.TaxCategoryDraft:

Update TaxCategory
################################################################################

All TaxCategory update methods can be found :ref:`here <updatebuilder.taxcategoryupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-TaxCategory.php

    <?php
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


.. _requestbuilder.delete.TaxCategory:

Delete TaxCategory
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-TaxCategory.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->delete($taxCategory);
    $response = $client->send($request);



.. _requestbuilder.create.TypeDraft:

Create TypeDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-TypeDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->create($typeDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->types()->create(
        function (TypeDraft $typeDraft): TypeDraft {
            // modify $draft as needed
            return $typeDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.TypeDraft:

Update Type
################################################################################

All Type update methods can be found :ref:`here <updatebuilder.typeupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Type.php

    <?php
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


.. _requestbuilder.delete.Type:

Delete Type
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Type.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->delete($type);
    $response = $client->send($request);



.. _requestbuilder.create.ZoneDraft:

Create ZoneDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ZoneDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->zones()->create($zoneDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->zones()->create(
        function (ZoneDraft $zoneDraft): ZoneDraft {
            // modify $draft as needed
            return $zoneDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ZoneDraft:

Update Zone
################################################################################

All Zone update methods can be found :ref:`here <updatebuilder.zoneupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Zone.php

    <?php
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


.. _requestbuilder.delete.Zone:

Delete Zone
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Zone.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->zones()->delete($zone);
    $response = $client->send($request);



.. _requestbuilder.create.ExtensionDraft:

Create ExtensionDraft
################################################################################

.. code-block:: php
    :name: requestbuilder.examples.create-ExtensionDraft.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->create($extensionDraft)->buildRequest();
    // or
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->create(
        function (ExtensionDraft $extensionDraft): ExtensionDraft {
            // modify $draft as needed
            return $extensionDraft;
        })->buildRequest();
    $response = $client->send($request);


.. _requestbuilder.update.ExtensionDraft:

Update Extension
################################################################################

All Extension update methods can be found :ref:`here <updatebuilder.extensionupdatebuilder>`

.. code-block:: php
    :name: requestbuilder.examples.update-Extension.php

    <?php
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


.. _requestbuilder.delete.Extension:

Delete Extension
################################################################################


.. code-block:: php
    :name: requestbuilder.examples.delete-Extension.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->delete($extension);
    $response = $client->send($request);


ByProjectKeyGet
###################################################################

`withProjectKeyValue($projectKey)->get()`

The Endpoint is responding a limited set of information about settings and configuration of the project.


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->get();
    $response = $client->send($request);

ByProjectKeyPost
###################################################################

`withProjectKeyValue($projectKey)->post()`

Update project

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->post();
    $response = $client->send($request);

ByProjectKeyCategoriesGet
###################################################################

`withProjectKeyValue($projectKey)->categories()->get()`

Query categories

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->get();
    $response = $client->send($request);

ByProjectKeyCategoriesPost
###################################################################

`withProjectKeyValue($projectKey)->categories()->post()`

Create Category

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->post();
    $response = $client->send($request);

ByProjectKeyCategoriesKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->categories()->withKey($key)->get()`

Get Category by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyCategoriesKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->categories()->withKey($key)->post()`

Update Category by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyCategoriesKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->categories()->withKey($key)->delete()`

Delete Category by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyCategoriesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->categories()->withId($ID)->get()`

Get Category by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyCategoriesByIDPost
###################################################################

`withProjectKeyValue($projectKey)->categories()->withId($ID)->post()`

Update Category by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyCategoriesByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->categories()->withId($ID)->delete()`

Delete Category by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCategoriesByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCategoriesByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->categories()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyCartsGet
###################################################################

`withProjectKeyValue($projectKey)->carts()->get()`

Query carts

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->get();
    $response = $client->send($request);

ByProjectKeyCartsPost
###################################################################

`withProjectKeyValue($projectKey)->carts()->post()`

Create Cart

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->post();
    $response = $client->send($request);

ByProjectKeyCartsReplicatePost
###################################################################

`withProjectKeyValue($projectKey)->carts()->replicate()->post()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartsReplicatePost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartsReplicatePost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->replicate()->post();
    $response = $client->send($request);

ByProjectKeyCartsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->carts()->withId($ID)->get()`

Get Cart by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyCartsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->carts()->withId($ID)->post()`

Update Cart by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyCartsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->carts()->withId($ID)->delete()`

Delete Cart by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->carts()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyCartDiscountsGet
###################################################################

`withProjectKeyValue($projectKey)->cartDiscounts()->get()`

Query cart-discounts

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartDiscountsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartDiscountsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->get();
    $response = $client->send($request);

ByProjectKeyCartDiscountsPost
###################################################################

`withProjectKeyValue($projectKey)->cartDiscounts()->post()`

Create CartDiscount

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartDiscountsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartDiscountsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->post();
    $response = $client->send($request);

ByProjectKeyCartDiscountsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->cartDiscounts()->withId($ID)->get()`

Get CartDiscount by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartDiscountsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartDiscountsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyCartDiscountsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->cartDiscounts()->withId($ID)->post()`

Update CartDiscount by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartDiscountsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartDiscountsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyCartDiscountsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->cartDiscounts()->withId($ID)->delete()`

Delete CartDiscount by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCartDiscountsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCartDiscountsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->cartDiscounts()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyChannelsGet
###################################################################

`withProjectKeyValue($projectKey)->channels()->get()`

Query channels

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyChannelsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyChannelsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->channels()->get();
    $response = $client->send($request);

ByProjectKeyChannelsPost
###################################################################

`withProjectKeyValue($projectKey)->channels()->post()`

Create Channel

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyChannelsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyChannelsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->channels()->post();
    $response = $client->send($request);

ByProjectKeyChannelsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->channels()->withId($ID)->get()`

Get Channel by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyChannelsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyChannelsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->channels()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyChannelsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->channels()->withId($ID)->post()`

Update Channel by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyChannelsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyChannelsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->channels()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyChannelsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->channels()->withId($ID)->delete()`

Delete Channel by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyChannelsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyChannelsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->channels()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyCustomersGet
###################################################################

`withProjectKeyValue($projectKey)->customers()->get()`

Query customers

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->get();
    $response = $client->send($request);

ByProjectKeyCustomersPost
###################################################################

`withProjectKeyValue($projectKey)->customers()->post()`

Create Customer

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->post();
    $response = $client->send($request);

ByProjectKeyCustomersPasswordTokenByPasswordTokenGet
###################################################################

`withProjectKeyValue($projectKey)->customers()->withPasswordToken($passwordToken)->get()`

Get Customer by passwordToken

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersPasswordTokenByPasswordTokenGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - passwordToken
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersPasswordTokenByPasswordTokenGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->withPasswordToken($passwordToken)->get();
    $response = $client->send($request);

ByProjectKeyCustomersEmailTokenByEmailTokenGet
###################################################################

`withProjectKeyValue($projectKey)->customers()->withEmailToken($emailToken)->get()`

Get Customer by emailToken

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersEmailTokenByEmailTokenGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - emailToken
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersEmailTokenByEmailTokenGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->withEmailToken($emailToken)->get();
    $response = $client->send($request);

ByProjectKeyCustomersEmailTokenPost
###################################################################

`withProjectKeyValue($projectKey)->customers()->emailToken()->post()`

Create a Token for verifying the Customer's Email

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersEmailTokenPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersEmailTokenPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->emailToken()->post();
    $response = $client->send($request);

ByProjectKeyCustomersEmailConfirmPost
###################################################################

`withProjectKeyValue($projectKey)->customers()->email()->confirm()->post()`

Verifies customer's email using a token.

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersEmailConfirmPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersEmailConfirmPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->email()->confirm()->post();
    $response = $client->send($request);

ByProjectKeyCustomersPasswordPost
###################################################################

`withProjectKeyValue($projectKey)->customers()->password()->post()`

Change a customers password

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersPasswordPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersPasswordPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->password()->post();
    $response = $client->send($request);

ByProjectKeyCustomersPasswordResetPost
###################################################################

`withProjectKeyValue($projectKey)->customers()->password()->reset()->post()`

Set a new password using a token.

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersPasswordResetPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersPasswordResetPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->password()->reset()->post();
    $response = $client->send($request);

ByProjectKeyCustomersPasswordTokenPost
###################################################################

`withProjectKeyValue($projectKey)->customers()->passwordToken()->post()`

The token value is used to reset the password of the customer with the given email. The token is
valid only for 10 minutes.


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersPasswordTokenPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersPasswordTokenPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->passwordToken()->post();
    $response = $client->send($request);

ByProjectKeyCustomersByIDGet
###################################################################

`withProjectKeyValue($projectKey)->customers()->withId($ID)->get()`

Get Customer by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyCustomersByIDPost
###################################################################

`withProjectKeyValue($projectKey)->customers()->withId($ID)->post()`

Update Customer by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyCustomersByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->customers()->withId($ID)->delete()`

Delete Customer by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomersByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomersByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customers()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsGet
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->get()`

Query customer-groups

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->get();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsPost
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->post()`

Create CustomerGroup

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->post();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->withKey($key)->get()`

Get CustomerGroup by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->withKey($key)->post()`

Update CustomerGroup by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->withKey($key)->delete()`

Delete CustomerGroup by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->withId($ID)->get()`

Get CustomerGroup by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->withId($ID)->post()`

Update CustomerGroup by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyCustomerGroupsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->customerGroups()->withId($ID)->delete()`

Delete CustomerGroup by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomerGroupsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomerGroupsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customerGroups()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyCustomObjectsGet
###################################################################

`withProjectKeyValue($projectKey)->customObjects()->get()`

Query custom-objects

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomObjectsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomObjectsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customObjects()->get();
    $response = $client->send($request);

ByProjectKeyCustomObjectsPost
###################################################################

`withProjectKeyValue($projectKey)->customObjects()->post()`

Create CustomObject

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomObjectsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomObjectsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customObjects()->post();
    $response = $client->send($request);

ByProjectKeyCustomObjectsByContainerByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->customObjects()->withContainerAndKey($container, $key)->get()`

Get CustomObject by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomObjectsByContainerByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomObjectsByContainerByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customObjects()->withContainerAndKey($container, $key)->get();
    $response = $client->send($request);

ByProjectKeyCustomObjectsByContainerByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->customObjects()->withContainerAndKey($container, $key)->delete()`

Delete CustomObject by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomObjectsByContainerByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomObjectsByContainerByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customObjects()->withContainerAndKey($container, $key)->delete();
    $response = $client->send($request);

ByProjectKeyCustomObjectsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->customObjects()->withId($ID)->get()`

Get CustomObject by container

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomObjectsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - container
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomObjectsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customObjects()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyCustomObjectsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->customObjects()->withId($ID)->delete()`

Delete CustomObject by container

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyCustomObjectsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - container
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyCustomObjectsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->customObjects()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyDiscountCodesGet
###################################################################

`withProjectKeyValue($projectKey)->discountCodes()->get()`

Query discount-codes

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyDiscountCodesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyDiscountCodesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->get();
    $response = $client->send($request);

ByProjectKeyDiscountCodesPost
###################################################################

`withProjectKeyValue($projectKey)->discountCodes()->post()`

Create DiscountCode

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyDiscountCodesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyDiscountCodesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->post();
    $response = $client->send($request);

ByProjectKeyDiscountCodesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->discountCodes()->withId($ID)->get()`

Get DiscountCode by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyDiscountCodesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyDiscountCodesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyDiscountCodesByIDPost
###################################################################

`withProjectKeyValue($projectKey)->discountCodes()->withId($ID)->post()`

Update DiscountCode by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyDiscountCodesByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyDiscountCodesByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyDiscountCodesByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->discountCodes()->withId($ID)->delete()`

Delete DiscountCode by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyDiscountCodesByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyDiscountCodesByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->discountCodes()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyGraphqlPost
###################################################################

`withProjectKeyValue($projectKey)->graphql()->post()`

Execute a GraphQL query

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyGraphqlPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyGraphqlPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->graphql()->post();
    $response = $client->send($request);

ByProjectKeyInventoryGet
###################################################################

`withProjectKeyValue($projectKey)->inventory()->get()`

Query inventory

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyInventoryGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyInventoryGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->get();
    $response = $client->send($request);

ByProjectKeyInventoryPost
###################################################################

`withProjectKeyValue($projectKey)->inventory()->post()`

Create InventoryEntry

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyInventoryPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyInventoryPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->post();
    $response = $client->send($request);

ByProjectKeyInventoryByIDGet
###################################################################

`withProjectKeyValue($projectKey)->inventory()->withId($ID)->get()`

Get InventoryEntry by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyInventoryByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyInventoryByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyInventoryByIDPost
###################################################################

`withProjectKeyValue($projectKey)->inventory()->withId($ID)->post()`

Update InventoryEntry by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyInventoryByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyInventoryByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyInventoryByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->inventory()->withId($ID)->delete()`

Delete InventoryEntry by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyInventoryByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyInventoryByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->inventory()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyLoginPost
###################################################################

`withProjectKeyValue($projectKey)->login()->post()`

Authenticate Customer (Sign In)

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyLoginPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyLoginPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->login()->post();
    $response = $client->send($request);

ByProjectKeyMessagesGet
###################################################################

`withProjectKeyValue($projectKey)->messages()->get()`

Query messages

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMessagesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMessagesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->messages()->get();
    $response = $client->send($request);

ByProjectKeyMessagesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->messages()->withId($ID)->get()`

Get Message by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMessagesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMessagesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->messages()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyOrdersGet
###################################################################

`withProjectKeyValue($projectKey)->orders()->get()`

Query orders

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->get();
    $response = $client->send($request);

ByProjectKeyOrdersPost
###################################################################

`withProjectKeyValue($projectKey)->orders()->post()`

Create Order

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->post();
    $response = $client->send($request);

ByProjectKeyOrdersImportPost
###################################################################

`withProjectKeyValue($projectKey)->orders()->import()->post()`

Create an Order by Import

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersImportPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersImportPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->import()->post();
    $response = $client->send($request);

ByProjectKeyOrdersOrderNumberByOrderNumberGet
###################################################################

`withProjectKeyValue($projectKey)->orders()->withOrderNumber($orderNumber)->get()`

Get Order by orderNumber

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersOrderNumberByOrderNumberGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - orderNumber
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersOrderNumberByOrderNumberGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->withOrderNumber($orderNumber)->get();
    $response = $client->send($request);

ByProjectKeyOrdersOrderNumberByOrderNumberPost
###################################################################

`withProjectKeyValue($projectKey)->orders()->withOrderNumber($orderNumber)->post()`

Update Order by orderNumber

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersOrderNumberByOrderNumberPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - orderNumber
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersOrderNumberByOrderNumberPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->withOrderNumber($orderNumber)->post();
    $response = $client->send($request);

ByProjectKeyOrdersOrderNumberByOrderNumberDelete
###################################################################

`withProjectKeyValue($projectKey)->orders()->withOrderNumber($orderNumber)->delete()`

Delete Order by orderNumber

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersOrderNumberByOrderNumberDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - orderNumber
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersOrderNumberByOrderNumberDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->withOrderNumber($orderNumber)->delete();
    $response = $client->send($request);

ByProjectKeyOrdersByIDGet
###################################################################

`withProjectKeyValue($projectKey)->orders()->withId($ID)->get()`

Get Order by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyOrdersByIDPost
###################################################################

`withProjectKeyValue($projectKey)->orders()->withId($ID)->post()`

Update Order by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyOrdersByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->orders()->withId($ID)->delete()`

Delete Order by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyOrdersByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyOrdersByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->orders()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyPaymentsGet
###################################################################

`withProjectKeyValue($projectKey)->payments()->get()`

Query payments

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->get();
    $response = $client->send($request);

ByProjectKeyPaymentsPost
###################################################################

`withProjectKeyValue($projectKey)->payments()->post()`

Create Payment

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->post();
    $response = $client->send($request);

ByProjectKeyPaymentsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->payments()->withKey($key)->get()`

Get Payment by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyPaymentsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->payments()->withKey($key)->post()`

Update Payment by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyPaymentsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->payments()->withKey($key)->delete()`

Delete Payment by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyPaymentsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->payments()->withId($ID)->get()`

Get Payment by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyPaymentsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->payments()->withId($ID)->post()`

Update Payment by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyPaymentsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->payments()->withId($ID)->delete()`

Delete Payment by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyPaymentsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyPaymentsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->payments()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyProductsGet
###################################################################

`withProjectKeyValue($projectKey)->products()->get()`

Query products

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->get();
    $response = $client->send($request);

ByProjectKeyProductsPost
###################################################################

`withProjectKeyValue($projectKey)->products()->post()`

Create Product

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->post();
    $response = $client->send($request);

ByProjectKeyProductsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->products()->withKey($key)->get()`

Get Product by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyProductsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->products()->withKey($key)->post()`

Update Product by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyProductsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->products()->withKey($key)->delete()`

Delete Product by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyProductsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->products()->withId($ID)->get()`

Get Product by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyProductsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->products()->withId($ID)->post()`

Update Product by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyProductsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->products()->withId($ID)->delete()`

Delete Product by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyProductsByIDImagesPost
###################################################################

`withProjectKeyValue($projectKey)->products()->withId($ID)->images()->post()`

Uploads a binary image file to a given product variant. The supported image formats are JPEG, PNG and GIF.


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductsByIDImagesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductsByIDImagesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->products()->withId($ID)->images()->post();
    $response = $client->send($request);

ByProjectKeyProductDiscountsGet
###################################################################

`withProjectKeyValue($projectKey)->productDiscounts()->get()`

Query product-discounts

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductDiscountsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductDiscountsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->get();
    $response = $client->send($request);

ByProjectKeyProductDiscountsPost
###################################################################

`withProjectKeyValue($projectKey)->productDiscounts()->post()`

Create ProductDiscount

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductDiscountsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductDiscountsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->post();
    $response = $client->send($request);

ByProjectKeyProductDiscountsMatchingPost
###################################################################

`withProjectKeyValue($projectKey)->productDiscounts()->matching()->post()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductDiscountsMatchingPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductDiscountsMatchingPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->matching()->post();
    $response = $client->send($request);

ByProjectKeyProductDiscountsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->productDiscounts()->withId($ID)->get()`

Get ProductDiscount by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductDiscountsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductDiscountsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyProductDiscountsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->productDiscounts()->withId($ID)->post()`

Update ProductDiscount by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductDiscountsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductDiscountsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyProductDiscountsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->productDiscounts()->withId($ID)->delete()`

Delete ProductDiscount by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductDiscountsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductDiscountsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productDiscounts()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyProductProjectionsGet
###################################################################

`withProjectKeyValue($projectKey)->productProjections()->get()`

Query product-projections

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductProjectionsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductProjectionsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productProjections()->get();
    $response = $client->send($request);

ByProjectKeyProductProjectionsSearchPost
###################################################################

`withProjectKeyValue($projectKey)->productProjections()->search()->post()`

Search Product Projection

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductProjectionsSearchPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductProjectionsSearchPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productProjections()->search()->post();
    $response = $client->send($request);

ByProjectKeyProductProjectionsSearchGet
###################################################################

`withProjectKeyValue($projectKey)->productProjections()->search()->get()`

Search Product Projection

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductProjectionsSearchGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductProjectionsSearchGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productProjections()->search()->get();
    $response = $client->send($request);

ByProjectKeyProductProjectionsSuggestGet
###################################################################

`withProjectKeyValue($projectKey)->productProjections()->suggest()->get()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductProjectionsSuggestGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductProjectionsSuggestGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productProjections()->suggest()->get();
    $response = $client->send($request);

ByProjectKeyProductProjectionsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->productProjections()->withKey($key)->get()`

Get ProductProjection by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductProjectionsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductProjectionsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productProjections()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyProductProjectionsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->productProjections()->withId($ID)->get()`

Get ProductProjection by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductProjectionsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductProjectionsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productProjections()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyProductTypesGet
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->get()`

Query product-types

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->get();
    $response = $client->send($request);

ByProjectKeyProductTypesPost
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->post()`

Create ProductType

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->post();
    $response = $client->send($request);

ByProjectKeyProductTypesKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->withKey($key)->get()`

Get ProductType by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyProductTypesKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->withKey($key)->post()`

Update ProductType by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyProductTypesKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->withKey($key)->delete()`

Delete ProductType by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyProductTypesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->withId($ID)->get()`

Get ProductType by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyProductTypesByIDPost
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->withId($ID)->post()`

Update ProductType by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyProductTypesByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->productTypes()->withId($ID)->delete()`

Delete ProductType by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyProductTypesByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyProductTypesByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->productTypes()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyReviewsGet
###################################################################

`withProjectKeyValue($projectKey)->reviews()->get()`

Query reviews

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->get();
    $response = $client->send($request);

ByProjectKeyReviewsPost
###################################################################

`withProjectKeyValue($projectKey)->reviews()->post()`

Create Review

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->post();
    $response = $client->send($request);

ByProjectKeyReviewsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->reviews()->withKey($key)->get()`

Get Review by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyReviewsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->reviews()->withKey($key)->post()`

Update Review by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyReviewsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->reviews()->withKey($key)->delete()`

Delete Review by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyReviewsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->reviews()->withId($ID)->get()`

Get Review by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyReviewsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->reviews()->withId($ID)->post()`

Update Review by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyReviewsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->reviews()->withId($ID)->delete()`

Delete Review by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyReviewsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyReviewsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->reviews()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyShippingMethodsGet
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->get()`

Query shipping-methods

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->get();
    $response = $client->send($request);

ByProjectKeyShippingMethodsPost
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->post()`

Create ShippingMethod

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->post();
    $response = $client->send($request);

ByProjectKeyShippingMethodsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->withKey($key)->get()`

Get ShippingMethod by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyShippingMethodsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->withKey($key)->post()`

Update ShippingMethod by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyShippingMethodsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->withKey($key)->delete()`

Delete ShippingMethod by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyShippingMethodsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->withId($ID)->get()`

Get ShippingMethod by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyShippingMethodsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->withId($ID)->post()`

Update ShippingMethod by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyShippingMethodsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->shippingMethods()->withId($ID)->delete()`

Delete ShippingMethod by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShippingMethodsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShippingMethodsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shippingMethods()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyShoppingListsGet
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->get()`

Query shopping-lists

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->get();
    $response = $client->send($request);

ByProjectKeyShoppingListsPost
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->post()`

Create ShoppingList

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->post();
    $response = $client->send($request);

ByProjectKeyShoppingListsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->withKey($key)->get()`

Get ShoppingList by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyShoppingListsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->withKey($key)->post()`

Update ShoppingList by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyShoppingListsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->withKey($key)->delete()`

Delete ShoppingList by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyShoppingListsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->withId($ID)->get()`

Get ShoppingList by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyShoppingListsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->withId($ID)->post()`

Update ShoppingList by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyShoppingListsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->shoppingLists()->withId($ID)->delete()`

Delete ShoppingList by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyShoppingListsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyShoppingListsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->shoppingLists()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyStatesGet
###################################################################

`withProjectKeyValue($projectKey)->states()->get()`

Query states

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyStatesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyStatesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->states()->get();
    $response = $client->send($request);

ByProjectKeyStatesPost
###################################################################

`withProjectKeyValue($projectKey)->states()->post()`

Create State

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyStatesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyStatesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->states()->post();
    $response = $client->send($request);

ByProjectKeyStatesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->states()->withId($ID)->get()`

Get State by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyStatesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyStatesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->states()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyStatesByIDPost
###################################################################

`withProjectKeyValue($projectKey)->states()->withId($ID)->post()`

Update State by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyStatesByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyStatesByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->states()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyStatesByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->states()->withId($ID)->delete()`

Delete State by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyStatesByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyStatesByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->states()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeySubscriptionsGet
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->get()`

Query subscriptions

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->get();
    $response = $client->send($request);

ByProjectKeySubscriptionsPost
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->post()`

Create Subscription

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->post();
    $response = $client->send($request);

ByProjectKeySubscriptionsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->withKey($key)->get()`

Get Subscription by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeySubscriptionsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->withKey($key)->post()`

Update Subscription by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeySubscriptionsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->withKey($key)->delete()`

Delete Subscription by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeySubscriptionsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->withId($ID)->get()`

Get Subscription by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeySubscriptionsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->withId($ID)->post()`

Update Subscription by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeySubscriptionsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->subscriptions()->withId($ID)->delete()`

Delete Subscription by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeySubscriptionsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeySubscriptionsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->subscriptions()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyTaxCategoriesGet
###################################################################

`withProjectKeyValue($projectKey)->taxCategories()->get()`

Query tax-categories

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTaxCategoriesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTaxCategoriesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->get();
    $response = $client->send($request);

ByProjectKeyTaxCategoriesPost
###################################################################

`withProjectKeyValue($projectKey)->taxCategories()->post()`

Create TaxCategory

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTaxCategoriesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTaxCategoriesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->post();
    $response = $client->send($request);

ByProjectKeyTaxCategoriesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->taxCategories()->withId($ID)->get()`

Get TaxCategory by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTaxCategoriesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTaxCategoriesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyTaxCategoriesByIDPost
###################################################################

`withProjectKeyValue($projectKey)->taxCategories()->withId($ID)->post()`

Update TaxCategory by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTaxCategoriesByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTaxCategoriesByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyTaxCategoriesByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->taxCategories()->withId($ID)->delete()`

Delete TaxCategory by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTaxCategoriesByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTaxCategoriesByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->taxCategories()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyTypesGet
###################################################################

`withProjectKeyValue($projectKey)->types()->get()`

Query types

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->get();
    $response = $client->send($request);

ByProjectKeyTypesPost
###################################################################

`withProjectKeyValue($projectKey)->types()->post()`

Create Type

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->post();
    $response = $client->send($request);

ByProjectKeyTypesKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->types()->withKey($key)->get()`

Get Type by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyTypesKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->types()->withKey($key)->post()`

Update Type by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyTypesKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->types()->withKey($key)->delete()`

Delete Type by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyTypesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->types()->withId($ID)->get()`

Get Type by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyTypesByIDPost
###################################################################

`withProjectKeyValue($projectKey)->types()->withId($ID)->post()`

Update Type by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyTypesByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->types()->withId($ID)->delete()`

Delete Type by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyTypesByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyTypesByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->types()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyZonesGet
###################################################################

`withProjectKeyValue($projectKey)->zones()->get()`

Query zones

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyZonesGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyZonesGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->zones()->get();
    $response = $client->send($request);

ByProjectKeyZonesPost
###################################################################

`withProjectKeyValue($projectKey)->zones()->post()`

Create Zone

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyZonesPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyZonesPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->zones()->post();
    $response = $client->send($request);

ByProjectKeyZonesByIDGet
###################################################################

`withProjectKeyValue($projectKey)->zones()->withId($ID)->get()`

Get Zone by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyZonesByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyZonesByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->zones()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyZonesByIDPost
###################################################################

`withProjectKeyValue($projectKey)->zones()->withId($ID)->post()`

Update Zone by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyZonesByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyZonesByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->zones()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyZonesByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->zones()->withId($ID)->delete()`

Delete Zone by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyZonesByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyZonesByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->zones()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyMeGet
###################################################################

`withProjectKeyValue($projectKey)->me()->get()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->get();
    $response = $client->send($request);

ByProjectKeyMePost
###################################################################

`withProjectKeyValue($projectKey)->me()->post()`

Create a customer

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMePost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMePost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->post();
    $response = $client->send($request);

ByProjectKeyMeDelete
###################################################################

`withProjectKeyValue($projectKey)->me()->delete()`

Delete a Customer

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->delete();
    $response = $client->send($request);

ByProjectKeyMeEmailConfirmPost
###################################################################

`withProjectKeyValue($projectKey)->me()->email()->confirm()->post()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeEmailConfirmPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeEmailConfirmPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->email()->confirm()->post();
    $response = $client->send($request);

ByProjectKeyMePasswordPost
###################################################################

`withProjectKeyValue($projectKey)->me()->password()->post()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMePasswordPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMePasswordPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->password()->post();
    $response = $client->send($request);

ByProjectKeyMePasswordResetPost
###################################################################

`withProjectKeyValue($projectKey)->me()->password()->reset()->post()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMePasswordResetPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMePasswordResetPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->password()->reset()->post();
    $response = $client->send($request);

ByProjectKeyMeSignupPost
###################################################################

`withProjectKeyValue($projectKey)->me()->signup()->post()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeSignupPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeSignupPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->signup()->post();
    $response = $client->send($request);

ByProjectKeyMeLoginPost
###################################################################

`withProjectKeyValue($projectKey)->me()->login()->post()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeLoginPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeLoginPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->login()->post();
    $response = $client->send($request);

ByProjectKeyMeActiveCartGet
###################################################################

`withProjectKeyValue($projectKey)->me()->activeCart()->get()`


.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeActiveCartGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeActiveCartGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->activeCart()->get();
    $response = $client->send($request);

ByProjectKeyMeCartsGet
###################################################################

`withProjectKeyValue($projectKey)->me()->carts()->get()`

Query carts

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeCartsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeCartsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->carts()->get();
    $response = $client->send($request);

ByProjectKeyMeCartsPost
###################################################################

`withProjectKeyValue($projectKey)->me()->carts()->post()`

Create Cart

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeCartsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeCartsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->carts()->post();
    $response = $client->send($request);

ByProjectKeyMeCartsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->me()->carts()->withId($ID)->get()`

Get Cart by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeCartsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeCartsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->carts()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyMeCartsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->me()->carts()->withId($ID)->post()`

Update Cart by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeCartsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeCartsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->carts()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyMeCartsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->me()->carts()->withId($ID)->delete()`

Delete Cart by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeCartsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeCartsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->carts()->withId($ID)->delete();
    $response = $client->send($request);

ByProjectKeyMeOrdersGet
###################################################################

`withProjectKeyValue($projectKey)->me()->orders()->get()`

Query orders

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeOrdersGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeOrdersGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->orders()->get();
    $response = $client->send($request);

ByProjectKeyMeOrdersPost
###################################################################

`withProjectKeyValue($projectKey)->me()->orders()->post()`

Create Order

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeOrdersPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeOrdersPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->orders()->post();
    $response = $client->send($request);

ByProjectKeyMeOrdersByIDGet
###################################################################

`withProjectKeyValue($projectKey)->me()->orders()->withId($ID)->get()`

Get Order by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeOrdersByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeOrdersByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->orders()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyMeOrdersByIDPost
###################################################################

`withProjectKeyValue($projectKey)->me()->orders()->withId($ID)->post()`

Update Order by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyMeOrdersByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyMeOrdersByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->me()->orders()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyExtensionsGet
###################################################################

`withProjectKeyValue($projectKey)->extensions()->get()`

Query extensions

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->get();
    $response = $client->send($request);

ByProjectKeyExtensionsPost
###################################################################

`withProjectKeyValue($projectKey)->extensions()->post()`

Create Extension

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->post();
    $response = $client->send($request);

ByProjectKeyExtensionsKeyByKeyGet
###################################################################

`withProjectKeyValue($projectKey)->extensions()->withKey($key)->get()`

Get Extension by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsKeyByKeyGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsKeyByKeyGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->withKey($key)->get();
    $response = $client->send($request);

ByProjectKeyExtensionsKeyByKeyPost
###################################################################

`withProjectKeyValue($projectKey)->extensions()->withKey($key)->post()`

Update Extension by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsKeyByKeyPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsKeyByKeyPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->withKey($key)->post();
    $response = $client->send($request);

ByProjectKeyExtensionsKeyByKeyDelete
###################################################################

`withProjectKeyValue($projectKey)->extensions()->withKey($key)->delete()`

Delete Extension by key

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsKeyByKeyDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - key
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsKeyByKeyDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->withKey($key)->delete();
    $response = $client->send($request);

ByProjectKeyExtensionsByIDGet
###################################################################

`withProjectKeyValue($projectKey)->extensions()->withId($ID)->get()`

Get Extension by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsByIDGet
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsByIDGet.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->withId($ID)->get();
    $response = $client->send($request);

ByProjectKeyExtensionsByIDPost
###################################################################

`withProjectKeyValue($projectKey)->extensions()->withId($ID)->post()`

Update Extension by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsByIDPost
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsByIDPost.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->withId($ID)->post();
    $response = $client->send($request);

ByProjectKeyExtensionsByIDDelete
###################################################################

`withProjectKeyValue($projectKey)->extensions()->withId($ID)->delete()`

Delete Extension by ID

.. rst-class:: table
.. list-table:: Parameters
    :name: requestbuilder.output.tables.ByProjectKeyExtensionsByIDDelete
    :header-rows: 1

    * - Parameter
      - Type
    * - projectKey
      - `string`
    * - ID
      - `string`

.. code-block:: php
    :name: requestbuilder.examples.ByProjectKeyExtensionsByIDDelete.php

    <?php
    $builder =  new RequestBuilder();
    $request = $builder->withProjectKeyValue($projectKey)->extensions()->withId($ID)->delete();
    $response = $client->send($request);

