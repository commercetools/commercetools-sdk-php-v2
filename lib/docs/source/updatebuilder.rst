.. _updatebuilder:

=============
UpdateBuilder
=============

.. _updatebuilder.projectupdatebuilder:

ProjectUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.projectupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ProjectUpdateBuilder;

    $builder = new ProjectUpdateBuilder();


changeCountries
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.projectupdatebuilder.examples.changeCountries.php

    <?php
    use Commercetools\Builder\ProjectUpdateBuilder;

    $builder = new ProjectUpdateBuilder();
    $projectUpdate = $builder->changeCountries(new ProjectChangeCountriesAction())->build()
    //or
    $projectUpdate = $builder->changeCountries(
        function (ProjectChangeCountriesAction $action): ProjectChangeCountriesAction {
            // modify action as needed
            return $action;
        })->build();

changeCurrencies
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.projectupdatebuilder.examples.changeCurrencies.php

    <?php
    use Commercetools\Builder\ProjectUpdateBuilder;

    $builder = new ProjectUpdateBuilder();
    $projectUpdate = $builder->changeCurrencies(new ProjectChangeCurrenciesAction())->build()
    //or
    $projectUpdate = $builder->changeCurrencies(
        function (ProjectChangeCurrenciesAction $action): ProjectChangeCurrenciesAction {
            // modify action as needed
            return $action;
        })->build();

changeLanguages
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.projectupdatebuilder.examples.changeLanguages.php

    <?php
    use Commercetools\Builder\ProjectUpdateBuilder;

    $builder = new ProjectUpdateBuilder();
    $projectUpdate = $builder->changeLanguages(new ProjectChangeLanguagesAction())->build()
    //or
    $projectUpdate = $builder->changeLanguages(
        function (ProjectChangeLanguagesAction $action): ProjectChangeLanguagesAction {
            // modify action as needed
            return $action;
        })->build();

changeMessagesEnabled
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.projectupdatebuilder.examples.changeMessagesEnabled.php

    <?php
    use Commercetools\Builder\ProjectUpdateBuilder;

    $builder = new ProjectUpdateBuilder();
    $projectUpdate = $builder->changeMessagesEnabled(new ProjectChangeMessagesEnabledAction())->build()
    //or
    $projectUpdate = $builder->changeMessagesEnabled(
        function (ProjectChangeMessagesEnabledAction $action): ProjectChangeMessagesEnabledAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.projectupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ProjectUpdateBuilder;

    $builder = new ProjectUpdateBuilder();
    $projectUpdate = $builder->changeName(new ProjectChangeNameAction())->build()
    //or
    $projectUpdate = $builder->changeName(
        function (ProjectChangeNameAction $action): ProjectChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

setShippingRateInputType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.projectupdatebuilder.examples.setShippingRateInputType.php

    <?php
    use Commercetools\Builder\ProjectUpdateBuilder;

    $builder = new ProjectUpdateBuilder();
    $projectUpdate = $builder->setShippingRateInputType(new ProjectSetShippingRateInputTypeAction())->build()
    //or
    $projectUpdate = $builder->setShippingRateInputType(
        function (ProjectSetShippingRateInputTypeAction $action): ProjectSetShippingRateInputTypeAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.categoryupdatebuilder:

CategoryUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();


addAsset
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.addAsset.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->addAsset(new CategoryAddAssetAction())->build()
    //or
    $categoryUpdate = $builder->addAsset(
        function (CategoryAddAssetAction $action): CategoryAddAssetAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeAssetName.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeAssetName(new CategoryChangeAssetNameAction())->build()
    //or
    $categoryUpdate = $builder->changeAssetName(
        function (CategoryChangeAssetNameAction $action): CategoryChangeAssetNameAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeAssetOrder.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeAssetOrder(new CategoryChangeAssetOrderAction())->build()
    //or
    $categoryUpdate = $builder->changeAssetOrder(
        function (CategoryChangeAssetOrderAction $action): CategoryChangeAssetOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeName(new CategoryChangeNameAction())->build()
    //or
    $categoryUpdate = $builder->changeName(
        function (CategoryChangeNameAction $action): CategoryChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changeOrderHint
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeOrderHint.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeOrderHint(new CategoryChangeOrderHintAction())->build()
    //or
    $categoryUpdate = $builder->changeOrderHint(
        function (CategoryChangeOrderHintAction $action): CategoryChangeOrderHintAction {
            // modify action as needed
            return $action;
        })->build();

changeParent
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeParent.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeParent(new CategoryChangeParentAction())->build()
    //or
    $categoryUpdate = $builder->changeParent(
        function (CategoryChangeParentAction $action): CategoryChangeParentAction {
            // modify action as needed
            return $action;
        })->build();

changeSlug
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeSlug.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeSlug(new CategoryChangeSlugAction())->build()
    //or
    $categoryUpdate = $builder->changeSlug(
        function (CategoryChangeSlugAction $action): CategoryChangeSlugAction {
            // modify action as needed
            return $action;
        })->build();

removeAsset
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.removeAsset.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->removeAsset(new CategoryRemoveAssetAction())->build()
    //or
    $categoryUpdate = $builder->removeAsset(
        function (CategoryRemoveAssetAction $action): CategoryRemoveAssetAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetCustomField.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetCustomField(new CategorySetAssetCustomFieldAction())->build()
    //or
    $categoryUpdate = $builder->setAssetCustomField(
        function (CategorySetAssetCustomFieldAction $action): CategorySetAssetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetCustomType.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetCustomType(new CategorySetAssetCustomTypeAction())->build()
    //or
    $categoryUpdate = $builder->setAssetCustomType(
        function (CategorySetAssetCustomTypeAction $action): CategorySetAssetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setAssetDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetDescription.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetDescription(new CategorySetAssetDescriptionAction())->build()
    //or
    $categoryUpdate = $builder->setAssetDescription(
        function (CategorySetAssetDescriptionAction $action): CategorySetAssetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setAssetKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetKey.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetKey(new CategorySetAssetKeyAction())->build()
    //or
    $categoryUpdate = $builder->setAssetKey(
        function (CategorySetAssetKeyAction $action): CategorySetAssetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setAssetSources
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetSources.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetSources(new CategorySetAssetSourcesAction())->build()
    //or
    $categoryUpdate = $builder->setAssetSources(
        function (CategorySetAssetSourcesAction $action): CategorySetAssetSourcesAction {
            // modify action as needed
            return $action;
        })->build();

setAssetTags
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetTags.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetTags(new CategorySetAssetTagsAction())->build()
    //or
    $categoryUpdate = $builder->setAssetTags(
        function (CategorySetAssetTagsAction $action): CategorySetAssetTagsAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setCustomField(new CategorySetCustomFieldAction())->build()
    //or
    $categoryUpdate = $builder->setCustomField(
        function (CategorySetCustomFieldAction $action): CategorySetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setCustomType(new CategorySetCustomTypeAction())->build()
    //or
    $categoryUpdate = $builder->setCustomType(
        function (CategorySetCustomTypeAction $action): CategorySetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setDescription(new CategorySetDescriptionAction())->build()
    //or
    $categoryUpdate = $builder->setDescription(
        function (CategorySetDescriptionAction $action): CategorySetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setExternalId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setExternalId.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setExternalId(new CategorySetExternalIdAction())->build()
    //or
    $categoryUpdate = $builder->setExternalId(
        function (CategorySetExternalIdAction $action): CategorySetExternalIdAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setKey(new CategorySetKeyAction())->build()
    //or
    $categoryUpdate = $builder->setKey(
        function (CategorySetKeyAction $action): CategorySetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setMetaDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setMetaDescription.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setMetaDescription(new CategorySetMetaDescriptionAction())->build()
    //or
    $categoryUpdate = $builder->setMetaDescription(
        function (CategorySetMetaDescriptionAction $action): CategorySetMetaDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setMetaKeywords
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setMetaKeywords.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setMetaKeywords(new CategorySetMetaKeywordsAction())->build()
    //or
    $categoryUpdate = $builder->setMetaKeywords(
        function (CategorySetMetaKeywordsAction $action): CategorySetMetaKeywordsAction {
            // modify action as needed
            return $action;
        })->build();

setMetaTitle
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setMetaTitle.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setMetaTitle(new CategorySetMetaTitleAction())->build()
    //or
    $categoryUpdate = $builder->setMetaTitle(
        function (CategorySetMetaTitleAction $action): CategorySetMetaTitleAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.cartupdatebuilder:

CartUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();


addCustomLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.addCustomLineItem.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->addCustomLineItem(new CartAddCustomLineItemAction())->build()
    //or
    $cartUpdate = $builder->addCustomLineItem(
        function (CartAddCustomLineItemAction $action): CartAddCustomLineItemAction {
            // modify action as needed
            return $action;
        })->build();

addDiscountCode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.addDiscountCode.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->addDiscountCode(new CartAddDiscountCodeAction())->build()
    //or
    $cartUpdate = $builder->addDiscountCode(
        function (CartAddDiscountCodeAction $action): CartAddDiscountCodeAction {
            // modify action as needed
            return $action;
        })->build();

addLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.addLineItem.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->addLineItem(new CartAddLineItemAction())->build()
    //or
    $cartUpdate = $builder->addLineItem(
        function (CartAddLineItemAction $action): CartAddLineItemAction {
            // modify action as needed
            return $action;
        })->build();

addPayment
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.addPayment.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->addPayment(new CartAddPaymentAction())->build()
    //or
    $cartUpdate = $builder->addPayment(
        function (CartAddPaymentAction $action): CartAddPaymentAction {
            // modify action as needed
            return $action;
        })->build();

addShoppingList
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.addShoppingList.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->addShoppingList(new CartAddShoppingListAction())->build()
    //or
    $cartUpdate = $builder->addShoppingList(
        function (CartAddShoppingListAction $action): CartAddShoppingListAction {
            // modify action as needed
            return $action;
        })->build();

changeCustomLineItemMoney
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.changeCustomLineItemMoney.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->changeCustomLineItemMoney(new CartChangeCustomLineItemMoneyAction())->build()
    //or
    $cartUpdate = $builder->changeCustomLineItemMoney(
        function (CartChangeCustomLineItemMoneyAction $action): CartChangeCustomLineItemMoneyAction {
            // modify action as needed
            return $action;
        })->build();

changeCustomLineItemQuantity
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.changeCustomLineItemQuantity.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->changeCustomLineItemQuantity(new CartChangeCustomLineItemQuantityAction())->build()
    //or
    $cartUpdate = $builder->changeCustomLineItemQuantity(
        function (CartChangeCustomLineItemQuantityAction $action): CartChangeCustomLineItemQuantityAction {
            // modify action as needed
            return $action;
        })->build();

changeLineItemQuantity
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.changeLineItemQuantity.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->changeLineItemQuantity(new CartChangeLineItemQuantityAction())->build()
    //or
    $cartUpdate = $builder->changeLineItemQuantity(
        function (CartChangeLineItemQuantityAction $action): CartChangeLineItemQuantityAction {
            // modify action as needed
            return $action;
        })->build();

changeTaxCalculationMode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.changeTaxCalculationMode.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->changeTaxCalculationMode(new CartChangeTaxCalculationModeAction())->build()
    //or
    $cartUpdate = $builder->changeTaxCalculationMode(
        function (CartChangeTaxCalculationModeAction $action): CartChangeTaxCalculationModeAction {
            // modify action as needed
            return $action;
        })->build();

changeTaxMode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.changeTaxMode.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->changeTaxMode(new CartChangeTaxModeAction())->build()
    //or
    $cartUpdate = $builder->changeTaxMode(
        function (CartChangeTaxModeAction $action): CartChangeTaxModeAction {
            // modify action as needed
            return $action;
        })->build();

changeTaxRoundingMode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.changeTaxRoundingMode.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->changeTaxRoundingMode(new CartChangeTaxRoundingModeAction())->build()
    //or
    $cartUpdate = $builder->changeTaxRoundingMode(
        function (CartChangeTaxRoundingModeAction $action): CartChangeTaxRoundingModeAction {
            // modify action as needed
            return $action;
        })->build();

recalculate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.recalculate.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->recalculate(new CartRecalculateAction())->build()
    //or
    $cartUpdate = $builder->recalculate(
        function (CartRecalculateAction $action): CartRecalculateAction {
            // modify action as needed
            return $action;
        })->build();

removeCustomLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.removeCustomLineItem.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->removeCustomLineItem(new CartRemoveCustomLineItemAction())->build()
    //or
    $cartUpdate = $builder->removeCustomLineItem(
        function (CartRemoveCustomLineItemAction $action): CartRemoveCustomLineItemAction {
            // modify action as needed
            return $action;
        })->build();

removeDiscountCode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.removeDiscountCode.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->removeDiscountCode(new CartRemoveDiscountCodeAction())->build()
    //or
    $cartUpdate = $builder->removeDiscountCode(
        function (CartRemoveDiscountCodeAction $action): CartRemoveDiscountCodeAction {
            // modify action as needed
            return $action;
        })->build();

removeLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.removeLineItem.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->removeLineItem(new CartRemoveLineItemAction())->build()
    //or
    $cartUpdate = $builder->removeLineItem(
        function (CartRemoveLineItemAction $action): CartRemoveLineItemAction {
            // modify action as needed
            return $action;
        })->build();

removePayment
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.removePayment.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->removePayment(new CartRemovePaymentAction())->build()
    //or
    $cartUpdate = $builder->removePayment(
        function (CartRemovePaymentAction $action): CartRemovePaymentAction {
            // modify action as needed
            return $action;
        })->build();

setAnonymousId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setAnonymousId.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setAnonymousId(new CartSetAnonymousIdAction())->build()
    //or
    $cartUpdate = $builder->setAnonymousId(
        function (CartSetAnonymousIdAction $action): CartSetAnonymousIdAction {
            // modify action as needed
            return $action;
        })->build();

setBillingAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setBillingAddress.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setBillingAddress(new CartSetBillingAddressAction())->build()
    //or
    $cartUpdate = $builder->setBillingAddress(
        function (CartSetBillingAddressAction $action): CartSetBillingAddressAction {
            // modify action as needed
            return $action;
        })->build();

setCartTotalTax
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCartTotalTax.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCartTotalTax(new CartSetCartTotalTaxAction())->build()
    //or
    $cartUpdate = $builder->setCartTotalTax(
        function (CartSetCartTotalTaxAction $action): CartSetCartTotalTaxAction {
            // modify action as needed
            return $action;
        })->build();

setCountry
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCountry.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCountry(new CartSetCountryAction())->build()
    //or
    $cartUpdate = $builder->setCountry(
        function (CartSetCountryAction $action): CartSetCountryAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomField(new CartSetCustomFieldAction())->build()
    //or
    $cartUpdate = $builder->setCustomField(
        function (CartSetCustomFieldAction $action): CartSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomLineItemCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomLineItemCustomField.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomLineItemCustomField(new CartSetCustomLineItemCustomFieldAction())->build()
    //or
    $cartUpdate = $builder->setCustomLineItemCustomField(
        function (CartSetCustomLineItemCustomFieldAction $action): CartSetCustomLineItemCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomLineItemCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomLineItemCustomType.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomLineItemCustomType(new CartSetCustomLineItemCustomTypeAction())->build()
    //or
    $cartUpdate = $builder->setCustomLineItemCustomType(
        function (CartSetCustomLineItemCustomTypeAction $action): CartSetCustomLineItemCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomLineItemTaxAmount
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomLineItemTaxAmount.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomLineItemTaxAmount(new CartSetCustomLineItemTaxAmountAction())->build()
    //or
    $cartUpdate = $builder->setCustomLineItemTaxAmount(
        function (CartSetCustomLineItemTaxAmountAction $action): CartSetCustomLineItemTaxAmountAction {
            // modify action as needed
            return $action;
        })->build();

setCustomLineItemTaxRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomLineItemTaxRate.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomLineItemTaxRate(new CartSetCustomLineItemTaxRateAction())->build()
    //or
    $cartUpdate = $builder->setCustomLineItemTaxRate(
        function (CartSetCustomLineItemTaxRateAction $action): CartSetCustomLineItemTaxRateAction {
            // modify action as needed
            return $action;
        })->build();

setCustomShippingMethod
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomShippingMethod.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomShippingMethod(new CartSetCustomShippingMethodAction())->build()
    //or
    $cartUpdate = $builder->setCustomShippingMethod(
        function (CartSetCustomShippingMethodAction $action): CartSetCustomShippingMethodAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomType(new CartSetCustomTypeAction())->build()
    //or
    $cartUpdate = $builder->setCustomType(
        function (CartSetCustomTypeAction $action): CartSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomerEmail
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomerEmail.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomerEmail(new CartSetCustomerEmailAction())->build()
    //or
    $cartUpdate = $builder->setCustomerEmail(
        function (CartSetCustomerEmailAction $action): CartSetCustomerEmailAction {
            // modify action as needed
            return $action;
        })->build();

setCustomerGroup
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomerGroup.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomerGroup(new CartSetCustomerGroupAction())->build()
    //or
    $cartUpdate = $builder->setCustomerGroup(
        function (CartSetCustomerGroupAction $action): CartSetCustomerGroupAction {
            // modify action as needed
            return $action;
        })->build();

setCustomerId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setCustomerId.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setCustomerId(new CartSetCustomerIdAction())->build()
    //or
    $cartUpdate = $builder->setCustomerId(
        function (CartSetCustomerIdAction $action): CartSetCustomerIdAction {
            // modify action as needed
            return $action;
        })->build();

setDeleteDaysAfterLastModification
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setDeleteDaysAfterLastModification.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setDeleteDaysAfterLastModification(new CartSetDeleteDaysAfterLastModificationAction())->build()
    //or
    $cartUpdate = $builder->setDeleteDaysAfterLastModification(
        function (CartSetDeleteDaysAfterLastModificationAction $action): CartSetDeleteDaysAfterLastModificationAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setLineItemCustomField.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setLineItemCustomField(new CartSetLineItemCustomFieldAction())->build()
    //or
    $cartUpdate = $builder->setLineItemCustomField(
        function (CartSetLineItemCustomFieldAction $action): CartSetLineItemCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setLineItemCustomType.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setLineItemCustomType(new CartSetLineItemCustomTypeAction())->build()
    //or
    $cartUpdate = $builder->setLineItemCustomType(
        function (CartSetLineItemCustomTypeAction $action): CartSetLineItemCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemPrice
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setLineItemPrice.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setLineItemPrice(new CartSetLineItemPriceAction())->build()
    //or
    $cartUpdate = $builder->setLineItemPrice(
        function (CartSetLineItemPriceAction $action): CartSetLineItemPriceAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemTaxAmount
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setLineItemTaxAmount.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setLineItemTaxAmount(new CartSetLineItemTaxAmountAction())->build()
    //or
    $cartUpdate = $builder->setLineItemTaxAmount(
        function (CartSetLineItemTaxAmountAction $action): CartSetLineItemTaxAmountAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemTaxRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setLineItemTaxRate.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setLineItemTaxRate(new CartSetLineItemTaxRateAction())->build()
    //or
    $cartUpdate = $builder->setLineItemTaxRate(
        function (CartSetLineItemTaxRateAction $action): CartSetLineItemTaxRateAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemTotalPrice
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setLineItemTotalPrice.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setLineItemTotalPrice(new CartSetLineItemTotalPriceAction())->build()
    //or
    $cartUpdate = $builder->setLineItemTotalPrice(
        function (CartSetLineItemTotalPriceAction $action): CartSetLineItemTotalPriceAction {
            // modify action as needed
            return $action;
        })->build();

setLocale
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setLocale.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setLocale(new CartSetLocaleAction())->build()
    //or
    $cartUpdate = $builder->setLocale(
        function (CartSetLocaleAction $action): CartSetLocaleAction {
            // modify action as needed
            return $action;
        })->build();

setShippingAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setShippingAddress.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setShippingAddress(new CartSetShippingAddressAction())->build()
    //or
    $cartUpdate = $builder->setShippingAddress(
        function (CartSetShippingAddressAction $action): CartSetShippingAddressAction {
            // modify action as needed
            return $action;
        })->build();

setShippingMethod
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setShippingMethod.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setShippingMethod(new CartSetShippingMethodAction())->build()
    //or
    $cartUpdate = $builder->setShippingMethod(
        function (CartSetShippingMethodAction $action): CartSetShippingMethodAction {
            // modify action as needed
            return $action;
        })->build();

setShippingMethodTaxAmount
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setShippingMethodTaxAmount.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setShippingMethodTaxAmount(new CartSetShippingMethodTaxAmountAction())->build()
    //or
    $cartUpdate = $builder->setShippingMethodTaxAmount(
        function (CartSetShippingMethodTaxAmountAction $action): CartSetShippingMethodTaxAmountAction {
            // modify action as needed
            return $action;
        })->build();

setShippingMethodTaxRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setShippingMethodTaxRate.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setShippingMethodTaxRate(new CartSetShippingMethodTaxRateAction())->build()
    //or
    $cartUpdate = $builder->setShippingMethodTaxRate(
        function (CartSetShippingMethodTaxRateAction $action): CartSetShippingMethodTaxRateAction {
            // modify action as needed
            return $action;
        })->build();

setShippingRateInput
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.setShippingRateInput.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();
    $cartUpdate = $builder->setShippingRateInput(new CartSetShippingRateInputAction())->build()
    //or
    $cartUpdate = $builder->setShippingRateInput(
        function (CartSetShippingRateInputAction $action): CartSetShippingRateInputAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.cartdiscountupdatebuilder:

CartDiscountUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();


changeCartPredicate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeCartPredicate.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeCartPredicate(new CartDiscountChangeCartPredicateAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeCartPredicate(
        function (CartDiscountChangeCartPredicateAction $action): CartDiscountChangeCartPredicateAction {
            // modify action as needed
            return $action;
        })->build();

changeIsActive
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeIsActive.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeIsActive(new CartDiscountChangeIsActiveAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeIsActive(
        function (CartDiscountChangeIsActiveAction $action): CartDiscountChangeIsActiveAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeName(new CartDiscountChangeNameAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeName(
        function (CartDiscountChangeNameAction $action): CartDiscountChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changeRequiresDiscountCode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeRequiresDiscountCode.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeRequiresDiscountCode(new CartDiscountChangeRequiresDiscountCodeAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeRequiresDiscountCode(
        function (CartDiscountChangeRequiresDiscountCodeAction $action): CartDiscountChangeRequiresDiscountCodeAction {
            // modify action as needed
            return $action;
        })->build();

changeSortOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeSortOrder.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeSortOrder(new CartDiscountChangeSortOrderAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeSortOrder(
        function (CartDiscountChangeSortOrderAction $action): CartDiscountChangeSortOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeStackingMode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeStackingMode.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeStackingMode(new CartDiscountChangeStackingModeAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeStackingMode(
        function (CartDiscountChangeStackingModeAction $action): CartDiscountChangeStackingModeAction {
            // modify action as needed
            return $action;
        })->build();

changeTarget
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeTarget.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeTarget(new CartDiscountChangeTargetAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeTarget(
        function (CartDiscountChangeTargetAction $action): CartDiscountChangeTargetAction {
            // modify action as needed
            return $action;
        })->build();

changeValue
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.changeValue.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->changeValue(new CartDiscountChangeValueAction())->build()
    //or
    $cartDiscountUpdate = $builder->changeValue(
        function (CartDiscountChangeValueAction $action): CartDiscountChangeValueAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->setCustomField(new CartDiscountSetCustomFieldAction())->build()
    //or
    $cartDiscountUpdate = $builder->setCustomField(
        function (CartDiscountSetCustomFieldAction $action): CartDiscountSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->setCustomType(new CartDiscountSetCustomTypeAction())->build()
    //or
    $cartDiscountUpdate = $builder->setCustomType(
        function (CartDiscountSetCustomTypeAction $action): CartDiscountSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->setDescription(new CartDiscountSetDescriptionAction())->build()
    //or
    $cartDiscountUpdate = $builder->setDescription(
        function (CartDiscountSetDescriptionAction $action): CartDiscountSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setValidFrom
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.setValidFrom.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->setValidFrom(new CartDiscountSetValidFromAction())->build()
    //or
    $cartDiscountUpdate = $builder->setValidFrom(
        function (CartDiscountSetValidFromAction $action): CartDiscountSetValidFromAction {
            // modify action as needed
            return $action;
        })->build();

setValidUntil
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.setValidUntil.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();
    $cartDiscountUpdate = $builder->setValidUntil(new CartDiscountSetValidUntilAction())->build()
    //or
    $cartDiscountUpdate = $builder->setValidUntil(
        function (CartDiscountSetValidUntilAction $action): CartDiscountSetValidUntilAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.channelupdatebuilder:

ChannelUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();


addRoles
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.addRoles.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->addRoles(new ChannelAddRolesAction())->build()
    //or
    $channelUpdate = $builder->addRoles(
        function (ChannelAddRolesAction $action): ChannelAddRolesAction {
            // modify action as needed
            return $action;
        })->build();

changeDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.changeDescription.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->changeDescription(new ChannelChangeDescriptionAction())->build()
    //or
    $channelUpdate = $builder->changeDescription(
        function (ChannelChangeDescriptionAction $action): ChannelChangeDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

changeKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.changeKey.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->changeKey(new ChannelChangeKeyAction())->build()
    //or
    $channelUpdate = $builder->changeKey(
        function (ChannelChangeKeyAction $action): ChannelChangeKeyAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->changeName(new ChannelChangeNameAction())->build()
    //or
    $channelUpdate = $builder->changeName(
        function (ChannelChangeNameAction $action): ChannelChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

removeRoles
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.removeRoles.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->removeRoles(new ChannelRemoveRolesAction())->build()
    //or
    $channelUpdate = $builder->removeRoles(
        function (ChannelRemoveRolesAction $action): ChannelRemoveRolesAction {
            // modify action as needed
            return $action;
        })->build();

setAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setAddress.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setAddress(new ChannelSetAddressAction())->build()
    //or
    $channelUpdate = $builder->setAddress(
        function (ChannelSetAddressAction $action): ChannelSetAddressAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setCustomField(new ChannelSetCustomFieldAction())->build()
    //or
    $channelUpdate = $builder->setCustomField(
        function (ChannelSetCustomFieldAction $action): ChannelSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setCustomType(new ChannelSetCustomTypeAction())->build()
    //or
    $channelUpdate = $builder->setCustomType(
        function (ChannelSetCustomTypeAction $action): ChannelSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setGeoLocation
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setGeoLocation.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setGeoLocation(new ChannelSetGeolocationAction())->build()
    //or
    $channelUpdate = $builder->setGeoLocation(
        function (ChannelSetGeolocationAction $action): ChannelSetGeolocationAction {
            // modify action as needed
            return $action;
        })->build();

setRoles
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setRoles.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setRoles(new ChannelSetRolesAction())->build()
    //or
    $channelUpdate = $builder->setRoles(
        function (ChannelSetRolesAction $action): ChannelSetRolesAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.customerupdatebuilder:

CustomerUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();


addAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.addAddress.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->addAddress(new CustomerAddAddressAction())->build()
    //or
    $customerUpdate = $builder->addAddress(
        function (CustomerAddAddressAction $action): CustomerAddAddressAction {
            // modify action as needed
            return $action;
        })->build();

addBillingAddressId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.addBillingAddressId.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->addBillingAddressId(new CustomerAddBillingAddressIdAction())->build()
    //or
    $customerUpdate = $builder->addBillingAddressId(
        function (CustomerAddBillingAddressIdAction $action): CustomerAddBillingAddressIdAction {
            // modify action as needed
            return $action;
        })->build();

addShippingAddressId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.addShippingAddressId.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->addShippingAddressId(new CustomerAddShippingAddressIdAction())->build()
    //or
    $customerUpdate = $builder->addShippingAddressId(
        function (CustomerAddShippingAddressIdAction $action): CustomerAddShippingAddressIdAction {
            // modify action as needed
            return $action;
        })->build();

changeAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.changeAddress.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->changeAddress(new CustomerChangeAddressAction())->build()
    //or
    $customerUpdate = $builder->changeAddress(
        function (CustomerChangeAddressAction $action): CustomerChangeAddressAction {
            // modify action as needed
            return $action;
        })->build();

changeEmail
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.changeEmail.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->changeEmail(new CustomerChangeEmailAction())->build()
    //or
    $customerUpdate = $builder->changeEmail(
        function (CustomerChangeEmailAction $action): CustomerChangeEmailAction {
            // modify action as needed
            return $action;
        })->build();

removeAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.removeAddress.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->removeAddress(new CustomerRemoveAddressAction())->build()
    //or
    $customerUpdate = $builder->removeAddress(
        function (CustomerRemoveAddressAction $action): CustomerRemoveAddressAction {
            // modify action as needed
            return $action;
        })->build();

removeBillingAddressId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.removeBillingAddressId.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->removeBillingAddressId(new CustomerRemoveBillingAddressIdAction())->build()
    //or
    $customerUpdate = $builder->removeBillingAddressId(
        function (CustomerRemoveBillingAddressIdAction $action): CustomerRemoveBillingAddressIdAction {
            // modify action as needed
            return $action;
        })->build();

removeShippingAddressId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.removeShippingAddressId.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->removeShippingAddressId(new CustomerRemoveShippingAddressIdAction())->build()
    //or
    $customerUpdate = $builder->removeShippingAddressId(
        function (CustomerRemoveShippingAddressIdAction $action): CustomerRemoveShippingAddressIdAction {
            // modify action as needed
            return $action;
        })->build();

setCompanyName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setCompanyName.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setCompanyName(new CustomerSetCompanyNameAction())->build()
    //or
    $customerUpdate = $builder->setCompanyName(
        function (CustomerSetCompanyNameAction $action): CustomerSetCompanyNameAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setCustomField(new CustomerSetCustomFieldAction())->build()
    //or
    $customerUpdate = $builder->setCustomField(
        function (CustomerSetCustomFieldAction $action): CustomerSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setCustomType(new CustomerSetCustomTypeAction())->build()
    //or
    $customerUpdate = $builder->setCustomType(
        function (CustomerSetCustomTypeAction $action): CustomerSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomerGroup
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setCustomerGroup.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setCustomerGroup(new CustomerSetCustomerGroupAction())->build()
    //or
    $customerUpdate = $builder->setCustomerGroup(
        function (CustomerSetCustomerGroupAction $action): CustomerSetCustomerGroupAction {
            // modify action as needed
            return $action;
        })->build();

setCustomerNumber
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setCustomerNumber.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setCustomerNumber(new CustomerSetCustomerNumberAction())->build()
    //or
    $customerUpdate = $builder->setCustomerNumber(
        function (CustomerSetCustomerNumberAction $action): CustomerSetCustomerNumberAction {
            // modify action as needed
            return $action;
        })->build();

setDateOfBirth
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setDateOfBirth.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setDateOfBirth(new CustomerSetDateOfBirthAction())->build()
    //or
    $customerUpdate = $builder->setDateOfBirth(
        function (CustomerSetDateOfBirthAction $action): CustomerSetDateOfBirthAction {
            // modify action as needed
            return $action;
        })->build();

setDefaultBillingAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setDefaultBillingAddress.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setDefaultBillingAddress(new CustomerSetDefaultBillingAddressAction())->build()
    //or
    $customerUpdate = $builder->setDefaultBillingAddress(
        function (CustomerSetDefaultBillingAddressAction $action): CustomerSetDefaultBillingAddressAction {
            // modify action as needed
            return $action;
        })->build();

setDefaultShippingAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setDefaultShippingAddress.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setDefaultShippingAddress(new CustomerSetDefaultShippingAddressAction())->build()
    //or
    $customerUpdate = $builder->setDefaultShippingAddress(
        function (CustomerSetDefaultShippingAddressAction $action): CustomerSetDefaultShippingAddressAction {
            // modify action as needed
            return $action;
        })->build();

setExternalId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setExternalId.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setExternalId(new CustomerSetExternalIdAction())->build()
    //or
    $customerUpdate = $builder->setExternalId(
        function (CustomerSetExternalIdAction $action): CustomerSetExternalIdAction {
            // modify action as needed
            return $action;
        })->build();

setFirstName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setFirstName.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setFirstName(new CustomerSetFirstNameAction())->build()
    //or
    $customerUpdate = $builder->setFirstName(
        function (CustomerSetFirstNameAction $action): CustomerSetFirstNameAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setKey(new CustomerSetKeyAction())->build()
    //or
    $customerUpdate = $builder->setKey(
        function (CustomerSetKeyAction $action): CustomerSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setLastName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setLastName.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setLastName(new CustomerSetLastNameAction())->build()
    //or
    $customerUpdate = $builder->setLastName(
        function (CustomerSetLastNameAction $action): CustomerSetLastNameAction {
            // modify action as needed
            return $action;
        })->build();

setLocale
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setLocale.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setLocale(new CustomerSetLocaleAction())->build()
    //or
    $customerUpdate = $builder->setLocale(
        function (CustomerSetLocaleAction $action): CustomerSetLocaleAction {
            // modify action as needed
            return $action;
        })->build();

setMiddleName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setMiddleName.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setMiddleName(new CustomerSetMiddleNameAction())->build()
    //or
    $customerUpdate = $builder->setMiddleName(
        function (CustomerSetMiddleNameAction $action): CustomerSetMiddleNameAction {
            // modify action as needed
            return $action;
        })->build();

setSalutation
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setSalutation.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setSalutation(new CustomerSetSalutationAction())->build()
    //or
    $customerUpdate = $builder->setSalutation(
        function (CustomerSetSalutationAction $action): CustomerSetSalutationAction {
            // modify action as needed
            return $action;
        })->build();

setTitle
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setTitle.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setTitle(new CustomerSetTitleAction())->build()
    //or
    $customerUpdate = $builder->setTitle(
        function (CustomerSetTitleAction $action): CustomerSetTitleAction {
            // modify action as needed
            return $action;
        })->build();

setVatId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customerupdatebuilder.examples.setVatId.php

    <?php
    use Commercetools\Builder\CustomerUpdateBuilder;

    $builder = new CustomerUpdateBuilder();
    $customerUpdate = $builder->setVatId(new CustomerSetVatIdAction())->build()
    //or
    $customerUpdate = $builder->setVatId(
        function (CustomerSetVatIdAction $action): CustomerSetVatIdAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.customergroupupdatebuilder:

CustomerGroupUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.customergroupupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CustomerGroupUpdateBuilder;

    $builder = new CustomerGroupUpdateBuilder();


changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customergroupupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\CustomerGroupUpdateBuilder;

    $builder = new CustomerGroupUpdateBuilder();
    $customerGroupUpdate = $builder->changeName(new CustomerGroupChangeNameAction())->build()
    //or
    $customerGroupUpdate = $builder->changeName(
        function (CustomerGroupChangeNameAction $action): CustomerGroupChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.customergroupupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\CustomerGroupUpdateBuilder;

    $builder = new CustomerGroupUpdateBuilder();
    $customerGroupUpdate = $builder->setKey(new CustomerGroupSetKeyAction())->build()
    //or
    $customerGroupUpdate = $builder->setKey(
        function (CustomerGroupSetKeyAction $action): CustomerGroupSetKeyAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.discountcodeupdatebuilder:

DiscountCodeUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();


changeCartDiscounts
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.changeCartDiscounts.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->changeCartDiscounts(new DiscountCodeChangeCartDiscountsAction())->build()
    //or
    $discountCodeUpdate = $builder->changeCartDiscounts(
        function (DiscountCodeChangeCartDiscountsAction $action): DiscountCodeChangeCartDiscountsAction {
            // modify action as needed
            return $action;
        })->build();

changeGroups
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.changeGroups.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->changeGroups(new DiscountCodeChangeGroupsAction())->build()
    //or
    $discountCodeUpdate = $builder->changeGroups(
        function (DiscountCodeChangeGroupsAction $action): DiscountCodeChangeGroupsAction {
            // modify action as needed
            return $action;
        })->build();

changeIsActive
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.changeIsActive.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->changeIsActive(new DiscountCodeChangeIsActiveAction())->build()
    //or
    $discountCodeUpdate = $builder->changeIsActive(
        function (DiscountCodeChangeIsActiveAction $action): DiscountCodeChangeIsActiveAction {
            // modify action as needed
            return $action;
        })->build();

setCartPredicate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.setCartPredicate.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->setCartPredicate(new DiscountCodeSetCartPredicateAction())->build()
    //or
    $discountCodeUpdate = $builder->setCartPredicate(
        function (DiscountCodeSetCartPredicateAction $action): DiscountCodeSetCartPredicateAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->setDescription(new DiscountCodeSetDescriptionAction())->build()
    //or
    $discountCodeUpdate = $builder->setDescription(
        function (DiscountCodeSetDescriptionAction $action): DiscountCodeSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setMaxApplications
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.setMaxApplications.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->setMaxApplications(new DiscountCodeSetMaxApplicationsAction())->build()
    //or
    $discountCodeUpdate = $builder->setMaxApplications(
        function (DiscountCodeSetMaxApplicationsAction $action): DiscountCodeSetMaxApplicationsAction {
            // modify action as needed
            return $action;
        })->build();

setMaxApplicationsPerCustomer
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.setMaxApplicationsPerCustomer.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->setMaxApplicationsPerCustomer(new DiscountCodeSetMaxApplicationsPerCustomerAction())->build()
    //or
    $discountCodeUpdate = $builder->setMaxApplicationsPerCustomer(
        function (DiscountCodeSetMaxApplicationsPerCustomerAction $action): DiscountCodeSetMaxApplicationsPerCustomerAction {
            // modify action as needed
            return $action;
        })->build();

setName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.setName.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->setName(new DiscountCodeSetNameAction())->build()
    //or
    $discountCodeUpdate = $builder->setName(
        function (DiscountCodeSetNameAction $action): DiscountCodeSetNameAction {
            // modify action as needed
            return $action;
        })->build();

setValidFrom
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.setValidFrom.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->setValidFrom(new DiscountCodeSetValidFromAction())->build()
    //or
    $discountCodeUpdate = $builder->setValidFrom(
        function (DiscountCodeSetValidFromAction $action): DiscountCodeSetValidFromAction {
            // modify action as needed
            return $action;
        })->build();

setValidUntil
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.setValidUntil.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();
    $discountCodeUpdate = $builder->setValidUntil(new DiscountCodeSetValidUntilAction())->build()
    //or
    $discountCodeUpdate = $builder->setValidUntil(
        function (DiscountCodeSetValidUntilAction $action): DiscountCodeSetValidUntilAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.inventoryentryupdatebuilder:

InventoryEntryUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();


addQuantity
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.addQuantity.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->addQuantity(new InventoryAddQuantityAction())->build()
    //or
    $inventoryEntryUpdate = $builder->addQuantity(
        function (InventoryAddQuantityAction $action): InventoryAddQuantityAction {
            // modify action as needed
            return $action;
        })->build();

changeQuantity
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.changeQuantity.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->changeQuantity(new InventoryChangeQuantityAction())->build()
    //or
    $inventoryEntryUpdate = $builder->changeQuantity(
        function (InventoryChangeQuantityAction $action): InventoryChangeQuantityAction {
            // modify action as needed
            return $action;
        })->build();

removeQuantity
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.removeQuantity.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->removeQuantity(new InventoryRemoveQuantityAction())->build()
    //or
    $inventoryEntryUpdate = $builder->removeQuantity(
        function (InventoryRemoveQuantityAction $action): InventoryRemoveQuantityAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->setCustomField(new InventorySetCustomFieldAction())->build()
    //or
    $inventoryEntryUpdate = $builder->setCustomField(
        function (InventorySetCustomFieldAction $action): InventorySetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->setCustomType(new InventorySetCustomTypeAction())->build()
    //or
    $inventoryEntryUpdate = $builder->setCustomType(
        function (InventorySetCustomTypeAction $action): InventorySetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setExpectedDelivery
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.setExpectedDelivery.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->setExpectedDelivery(new InventorySetExpectedDeliveryAction())->build()
    //or
    $inventoryEntryUpdate = $builder->setExpectedDelivery(
        function (InventorySetExpectedDeliveryAction $action): InventorySetExpectedDeliveryAction {
            // modify action as needed
            return $action;
        })->build();

setRestockableInDays
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.setRestockableInDays.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->setRestockableInDays(new InventorySetRestockableInDaysAction())->build()
    //or
    $inventoryEntryUpdate = $builder->setRestockableInDays(
        function (InventorySetRestockableInDaysAction $action): InventorySetRestockableInDaysAction {
            // modify action as needed
            return $action;
        })->build();

setSupplyChannel
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.inventoryentryupdatebuilder.examples.setSupplyChannel.php

    <?php
    use Commercetools\Builder\InventoryEntryUpdateBuilder;

    $builder = new InventoryEntryUpdateBuilder();
    $inventoryEntryUpdate = $builder->setSupplyChannel(new InventorySetSupplyChannelAction())->build()
    //or
    $inventoryEntryUpdate = $builder->setSupplyChannel(
        function (InventorySetSupplyChannelAction $action): InventorySetSupplyChannelAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.orderupdatebuilder:

OrderUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();


addDelivery
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.addDelivery.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->addDelivery(new OrderAddDeliveryAction())->build()
    //or
    $orderUpdate = $builder->addDelivery(
        function (OrderAddDeliveryAction $action): OrderAddDeliveryAction {
            // modify action as needed
            return $action;
        })->build();

addParcelToDelivery
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.addParcelToDelivery.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->addParcelToDelivery(new OrderAddParcelToDeliveryAction())->build()
    //or
    $orderUpdate = $builder->addParcelToDelivery(
        function (OrderAddParcelToDeliveryAction $action): OrderAddParcelToDeliveryAction {
            // modify action as needed
            return $action;
        })->build();

addPayment
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.addPayment.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->addPayment(new OrderAddPaymentAction())->build()
    //or
    $orderUpdate = $builder->addPayment(
        function (OrderAddPaymentAction $action): OrderAddPaymentAction {
            // modify action as needed
            return $action;
        })->build();

addReturnInfo
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.addReturnInfo.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->addReturnInfo(new OrderAddReturnInfoAction())->build()
    //or
    $orderUpdate = $builder->addReturnInfo(
        function (OrderAddReturnInfoAction $action): OrderAddReturnInfoAction {
            // modify action as needed
            return $action;
        })->build();

changeOrderState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.changeOrderState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->changeOrderState(new OrderChangeOrderStateAction())->build()
    //or
    $orderUpdate = $builder->changeOrderState(
        function (OrderChangeOrderStateAction $action): OrderChangeOrderStateAction {
            // modify action as needed
            return $action;
        })->build();

changePaymentState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.changePaymentState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->changePaymentState(new OrderChangePaymentStateAction())->build()
    //or
    $orderUpdate = $builder->changePaymentState(
        function (OrderChangePaymentStateAction $action): OrderChangePaymentStateAction {
            // modify action as needed
            return $action;
        })->build();

changeShipmentState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.changeShipmentState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->changeShipmentState(new OrderChangeShipmentStateAction())->build()
    //or
    $orderUpdate = $builder->changeShipmentState(
        function (OrderChangeShipmentStateAction $action): OrderChangeShipmentStateAction {
            // modify action as needed
            return $action;
        })->build();

importCustomLineItemState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.importCustomLineItemState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->importCustomLineItemState(new OrderImportCustomLineItemStateAction())->build()
    //or
    $orderUpdate = $builder->importCustomLineItemState(
        function (OrderImportCustomLineItemStateAction $action): OrderImportCustomLineItemStateAction {
            // modify action as needed
            return $action;
        })->build();

importLineItemState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.importLineItemState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->importLineItemState(new OrderImportLineItemStateAction())->build()
    //or
    $orderUpdate = $builder->importLineItemState(
        function (OrderImportLineItemStateAction $action): OrderImportLineItemStateAction {
            // modify action as needed
            return $action;
        })->build();

removeDelivery
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.removeDelivery.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->removeDelivery(new OrderRemoveDeliveryAction())->build()
    //or
    $orderUpdate = $builder->removeDelivery(
        function (OrderRemoveDeliveryAction $action): OrderRemoveDeliveryAction {
            // modify action as needed
            return $action;
        })->build();

removeParcelFromDelivery
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.removeParcelFromDelivery.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->removeParcelFromDelivery(new OrderRemoveParcelFromDeliveryAction())->build()
    //or
    $orderUpdate = $builder->removeParcelFromDelivery(
        function (OrderRemoveParcelFromDeliveryAction $action): OrderRemoveParcelFromDeliveryAction {
            // modify action as needed
            return $action;
        })->build();

removePayment
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.removePayment.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->removePayment(new OrderRemovePaymentAction())->build()
    //or
    $orderUpdate = $builder->removePayment(
        function (OrderRemovePaymentAction $action): OrderRemovePaymentAction {
            // modify action as needed
            return $action;
        })->build();

setBillingAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setBillingAddress.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setBillingAddress(new OrderSetBillingAddressAction())->build()
    //or
    $orderUpdate = $builder->setBillingAddress(
        function (OrderSetBillingAddressAction $action): OrderSetBillingAddressAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setCustomField(new OrderSetCustomFieldAction())->build()
    //or
    $orderUpdate = $builder->setCustomField(
        function (OrderSetCustomFieldAction $action): OrderSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomLineItemCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setCustomLineItemCustomField.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setCustomLineItemCustomField(new OrderSetCustomLineItemCustomFieldAction())->build()
    //or
    $orderUpdate = $builder->setCustomLineItemCustomField(
        function (OrderSetCustomLineItemCustomFieldAction $action): OrderSetCustomLineItemCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomLineItemCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setCustomLineItemCustomType.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setCustomLineItemCustomType(new OrderSetCustomLineItemCustomTypeAction())->build()
    //or
    $orderUpdate = $builder->setCustomLineItemCustomType(
        function (OrderSetCustomLineItemCustomTypeAction $action): OrderSetCustomLineItemCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setCustomType(new OrderSetCustomTypeAction())->build()
    //or
    $orderUpdate = $builder->setCustomType(
        function (OrderSetCustomTypeAction $action): OrderSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomerEmail
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setCustomerEmail.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setCustomerEmail(new OrderSetCustomerEmailAction())->build()
    //or
    $orderUpdate = $builder->setCustomerEmail(
        function (OrderSetCustomerEmailAction $action): OrderSetCustomerEmailAction {
            // modify action as needed
            return $action;
        })->build();

setDeliveryAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setDeliveryAddress.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setDeliveryAddress(new OrderSetDeliveryAddressAction())->build()
    //or
    $orderUpdate = $builder->setDeliveryAddress(
        function (OrderSetDeliveryAddressAction $action): OrderSetDeliveryAddressAction {
            // modify action as needed
            return $action;
        })->build();

setDeliveryItems
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setDeliveryItems.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setDeliveryItems(new OrderSetDeliveryItemsAction())->build()
    //or
    $orderUpdate = $builder->setDeliveryItems(
        function (OrderSetDeliveryItemsAction $action): OrderSetDeliveryItemsAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setLineItemCustomField.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setLineItemCustomField(new OrderSetLineItemCustomFieldAction())->build()
    //or
    $orderUpdate = $builder->setLineItemCustomField(
        function (OrderSetLineItemCustomFieldAction $action): OrderSetLineItemCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setLineItemCustomType.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setLineItemCustomType(new OrderSetLineItemCustomTypeAction())->build()
    //or
    $orderUpdate = $builder->setLineItemCustomType(
        function (OrderSetLineItemCustomTypeAction $action): OrderSetLineItemCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setLocale
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setLocale.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setLocale(new OrderSetLocaleAction())->build()
    //or
    $orderUpdate = $builder->setLocale(
        function (OrderSetLocaleAction $action): OrderSetLocaleAction {
            // modify action as needed
            return $action;
        })->build();

setOrderNumber
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setOrderNumber.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setOrderNumber(new OrderSetOrderNumberAction())->build()
    //or
    $orderUpdate = $builder->setOrderNumber(
        function (OrderSetOrderNumberAction $action): OrderSetOrderNumberAction {
            // modify action as needed
            return $action;
        })->build();

setParcelItems
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setParcelItems.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setParcelItems(new OrderSetParcelItemsAction())->build()
    //or
    $orderUpdate = $builder->setParcelItems(
        function (OrderSetParcelItemsAction $action): OrderSetParcelItemsAction {
            // modify action as needed
            return $action;
        })->build();

setParcelMeasurements
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setParcelMeasurements.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setParcelMeasurements(new OrderSetParcelMeasurementsAction())->build()
    //or
    $orderUpdate = $builder->setParcelMeasurements(
        function (OrderSetParcelMeasurementsAction $action): OrderSetParcelMeasurementsAction {
            // modify action as needed
            return $action;
        })->build();

setParcelTrackingData
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setParcelTrackingData.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setParcelTrackingData(new OrderSetParcelTrackingDataAction())->build()
    //or
    $orderUpdate = $builder->setParcelTrackingData(
        function (OrderSetParcelTrackingDataAction $action): OrderSetParcelTrackingDataAction {
            // modify action as needed
            return $action;
        })->build();

setReturnPaymentState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setReturnPaymentState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setReturnPaymentState(new OrderSetReturnPaymentStateAction())->build()
    //or
    $orderUpdate = $builder->setReturnPaymentState(
        function (OrderSetReturnPaymentStateAction $action): OrderSetReturnPaymentStateAction {
            // modify action as needed
            return $action;
        })->build();

setReturnShipmentState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setReturnShipmentState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setReturnShipmentState(new OrderSetReturnShipmentStateAction())->build()
    //or
    $orderUpdate = $builder->setReturnShipmentState(
        function (OrderSetReturnShipmentStateAction $action): OrderSetReturnShipmentStateAction {
            // modify action as needed
            return $action;
        })->build();

setShippingAddress
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.setShippingAddress.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->setShippingAddress(new OrderSetShippingAddressAction())->build()
    //or
    $orderUpdate = $builder->setShippingAddress(
        function (OrderSetShippingAddressAction $action): OrderSetShippingAddressAction {
            // modify action as needed
            return $action;
        })->build();

transitionCustomLineItemState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.transitionCustomLineItemState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->transitionCustomLineItemState(new OrderTransitionCustomLineItemStateAction())->build()
    //or
    $orderUpdate = $builder->transitionCustomLineItemState(
        function (OrderTransitionCustomLineItemStateAction $action): OrderTransitionCustomLineItemStateAction {
            // modify action as needed
            return $action;
        })->build();

transitionLineItemState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.transitionLineItemState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->transitionLineItemState(new OrderTransitionLineItemStateAction())->build()
    //or
    $orderUpdate = $builder->transitionLineItemState(
        function (OrderTransitionLineItemStateAction $action): OrderTransitionLineItemStateAction {
            // modify action as needed
            return $action;
        })->build();

transitionState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.transitionState.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->transitionState(new OrderTransitionStateAction())->build()
    //or
    $orderUpdate = $builder->transitionState(
        function (OrderTransitionStateAction $action): OrderTransitionStateAction {
            // modify action as needed
            return $action;
        })->build();

updateSyncInfo
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.updateSyncInfo.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();
    $orderUpdate = $builder->updateSyncInfo(new OrderUpdateSyncInfoAction())->build()
    //or
    $orderUpdate = $builder->updateSyncInfo(
        function (OrderUpdateSyncInfoAction $action): OrderUpdateSyncInfoAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.paymentupdatebuilder:

PaymentUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();


addInterfaceInteraction
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.addInterfaceInteraction.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->addInterfaceInteraction(new PaymentAddInterfaceInteractionAction())->build()
    //or
    $paymentUpdate = $builder->addInterfaceInteraction(
        function (PaymentAddInterfaceInteractionAction $action): PaymentAddInterfaceInteractionAction {
            // modify action as needed
            return $action;
        })->build();

addTransaction
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.addTransaction.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->addTransaction(new PaymentAddTransactionAction())->build()
    //or
    $paymentUpdate = $builder->addTransaction(
        function (PaymentAddTransactionAction $action): PaymentAddTransactionAction {
            // modify action as needed
            return $action;
        })->build();

changeAmountPlanned
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.changeAmountPlanned.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->changeAmountPlanned(new PaymentChangeAmountPlannedAction())->build()
    //or
    $paymentUpdate = $builder->changeAmountPlanned(
        function (PaymentChangeAmountPlannedAction $action): PaymentChangeAmountPlannedAction {
            // modify action as needed
            return $action;
        })->build();

changeTransactionInteractionId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.changeTransactionInteractionId.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->changeTransactionInteractionId(new PaymentChangeTransactionInteractionIdAction())->build()
    //or
    $paymentUpdate = $builder->changeTransactionInteractionId(
        function (PaymentChangeTransactionInteractionIdAction $action): PaymentChangeTransactionInteractionIdAction {
            // modify action as needed
            return $action;
        })->build();

changeTransactionState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.changeTransactionState.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->changeTransactionState(new PaymentChangeTransactionStateAction())->build()
    //or
    $paymentUpdate = $builder->changeTransactionState(
        function (PaymentChangeTransactionStateAction $action): PaymentChangeTransactionStateAction {
            // modify action as needed
            return $action;
        })->build();

changeTransactionTimestamp
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.changeTransactionTimestamp.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->changeTransactionTimestamp(new PaymentChangeTransactionTimestampAction())->build()
    //or
    $paymentUpdate = $builder->changeTransactionTimestamp(
        function (PaymentChangeTransactionTimestampAction $action): PaymentChangeTransactionTimestampAction {
            // modify action as needed
            return $action;
        })->build();

setAmountPaid
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setAmountPaid.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setAmountPaid(new PaymentSetAmountPaidAction())->build()
    //or
    $paymentUpdate = $builder->setAmountPaid(
        function (PaymentSetAmountPaidAction $action): PaymentSetAmountPaidAction {
            // modify action as needed
            return $action;
        })->build();

setAmountRefunded
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setAmountRefunded.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setAmountRefunded(new PaymentSetAmountRefundedAction())->build()
    //or
    $paymentUpdate = $builder->setAmountRefunded(
        function (PaymentSetAmountRefundedAction $action): PaymentSetAmountRefundedAction {
            // modify action as needed
            return $action;
        })->build();

setAuthorization
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setAuthorization.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setAuthorization(new PaymentSetAuthorizationAction())->build()
    //or
    $paymentUpdate = $builder->setAuthorization(
        function (PaymentSetAuthorizationAction $action): PaymentSetAuthorizationAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setCustomField(new PaymentSetCustomFieldAction())->build()
    //or
    $paymentUpdate = $builder->setCustomField(
        function (PaymentSetCustomFieldAction $action): PaymentSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setCustomType(new PaymentSetCustomTypeAction())->build()
    //or
    $paymentUpdate = $builder->setCustomType(
        function (PaymentSetCustomTypeAction $action): PaymentSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomer
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setCustomer.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setCustomer(new PaymentSetCustomerAction())->build()
    //or
    $paymentUpdate = $builder->setCustomer(
        function (PaymentSetCustomerAction $action): PaymentSetCustomerAction {
            // modify action as needed
            return $action;
        })->build();

setExternalId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setExternalId.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setExternalId(new PaymentSetExternalIdAction())->build()
    //or
    $paymentUpdate = $builder->setExternalId(
        function (PaymentSetExternalIdAction $action): PaymentSetExternalIdAction {
            // modify action as needed
            return $action;
        })->build();

setInterfaceId
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setInterfaceId.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setInterfaceId(new PaymentSetInterfaceIdAction())->build()
    //or
    $paymentUpdate = $builder->setInterfaceId(
        function (PaymentSetInterfaceIdAction $action): PaymentSetInterfaceIdAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setKey(new PaymentSetKeyAction())->build()
    //or
    $paymentUpdate = $builder->setKey(
        function (PaymentSetKeyAction $action): PaymentSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setMethodInfoInterface
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setMethodInfoInterface.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setMethodInfoInterface(new PaymentSetMethodInfoInterfaceAction())->build()
    //or
    $paymentUpdate = $builder->setMethodInfoInterface(
        function (PaymentSetMethodInfoInterfaceAction $action): PaymentSetMethodInfoInterfaceAction {
            // modify action as needed
            return $action;
        })->build();

setMethodInfoMethod
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setMethodInfoMethod.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setMethodInfoMethod(new PaymentSetMethodInfoMethodAction())->build()
    //or
    $paymentUpdate = $builder->setMethodInfoMethod(
        function (PaymentSetMethodInfoMethodAction $action): PaymentSetMethodInfoMethodAction {
            // modify action as needed
            return $action;
        })->build();

setMethodInfoName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setMethodInfoName.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setMethodInfoName(new PaymentSetMethodInfoNameAction())->build()
    //or
    $paymentUpdate = $builder->setMethodInfoName(
        function (PaymentSetMethodInfoNameAction $action): PaymentSetMethodInfoNameAction {
            // modify action as needed
            return $action;
        })->build();

setStatusInterfaceCode
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setStatusInterfaceCode.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setStatusInterfaceCode(new PaymentSetStatusInterfaceCodeAction())->build()
    //or
    $paymentUpdate = $builder->setStatusInterfaceCode(
        function (PaymentSetStatusInterfaceCodeAction $action): PaymentSetStatusInterfaceCodeAction {
            // modify action as needed
            return $action;
        })->build();

setStatusInterfaceText
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.setStatusInterfaceText.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->setStatusInterfaceText(new PaymentSetStatusInterfaceTextAction())->build()
    //or
    $paymentUpdate = $builder->setStatusInterfaceText(
        function (PaymentSetStatusInterfaceTextAction $action): PaymentSetStatusInterfaceTextAction {
            // modify action as needed
            return $action;
        })->build();

transitionState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.transitionState.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();
    $paymentUpdate = $builder->transitionState(new PaymentTransitionStateAction())->build()
    //or
    $paymentUpdate = $builder->transitionState(
        function (PaymentTransitionStateAction $action): PaymentTransitionStateAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.productupdatebuilder:

ProductUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();


addAsset
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addAsset.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addAsset(new ProductAddAssetAction())->build()
    //or
    $productUpdate = $builder->addAsset(
        function (ProductAddAssetAction $action): ProductAddAssetAction {
            // modify action as needed
            return $action;
        })->build();

addExternalImage
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addExternalImage.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addExternalImage(new ProductAddExternalImageAction())->build()
    //or
    $productUpdate = $builder->addExternalImage(
        function (ProductAddExternalImageAction $action): ProductAddExternalImageAction {
            // modify action as needed
            return $action;
        })->build();

addPrice
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addPrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addPrice(new ProductAddPriceAction())->build()
    //or
    $productUpdate = $builder->addPrice(
        function (ProductAddPriceAction $action): ProductAddPriceAction {
            // modify action as needed
            return $action;
        })->build();

addToCategory
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addToCategory.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addToCategory(new ProductAddToCategoryAction())->build()
    //or
    $productUpdate = $builder->addToCategory(
        function (ProductAddToCategoryAction $action): ProductAddToCategoryAction {
            // modify action as needed
            return $action;
        })->build();

addVariant
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addVariant.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addVariant(new ProductAddVariantAction())->build()
    //or
    $productUpdate = $builder->addVariant(
        function (ProductAddVariantAction $action): ProductAddVariantAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeAssetName.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeAssetName(new ProductChangeAssetNameAction())->build()
    //or
    $productUpdate = $builder->changeAssetName(
        function (ProductChangeAssetNameAction $action): ProductChangeAssetNameAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeAssetOrder.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeAssetOrder(new ProductChangeAssetOrderAction())->build()
    //or
    $productUpdate = $builder->changeAssetOrder(
        function (ProductChangeAssetOrderAction $action): ProductChangeAssetOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeMasterVariant
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeMasterVariant.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeMasterVariant(new ProductChangeMasterVariantAction())->build()
    //or
    $productUpdate = $builder->changeMasterVariant(
        function (ProductChangeMasterVariantAction $action): ProductChangeMasterVariantAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeName(new ProductChangeNameAction())->build()
    //or
    $productUpdate = $builder->changeName(
        function (ProductChangeNameAction $action): ProductChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changePrice
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changePrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changePrice(new ProductChangePriceAction())->build()
    //or
    $productUpdate = $builder->changePrice(
        function (ProductChangePriceAction $action): ProductChangePriceAction {
            // modify action as needed
            return $action;
        })->build();

changeSlug
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeSlug.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeSlug(new ProductChangeSlugAction())->build()
    //or
    $productUpdate = $builder->changeSlug(
        function (ProductChangeSlugAction $action): ProductChangeSlugAction {
            // modify action as needed
            return $action;
        })->build();

legacySetSku
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.legacySetSku.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->legacySetSku(new ProductLegacySetSkuAction())->build()
    //or
    $productUpdate = $builder->legacySetSku(
        function (ProductLegacySetSkuAction $action): ProductLegacySetSkuAction {
            // modify action as needed
            return $action;
        })->build();

moveImageToPosition
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.moveImageToPosition.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->moveImageToPosition(new ProductMoveImageToPositionAction())->build()
    //or
    $productUpdate = $builder->moveImageToPosition(
        function (ProductMoveImageToPositionAction $action): ProductMoveImageToPositionAction {
            // modify action as needed
            return $action;
        })->build();

publish
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.publish.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->publish(new ProductPublishAction())->build()
    //or
    $productUpdate = $builder->publish(
        function (ProductPublishAction $action): ProductPublishAction {
            // modify action as needed
            return $action;
        })->build();

removeAsset
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeAsset.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeAsset(new ProductRemoveAssetAction())->build()
    //or
    $productUpdate = $builder->removeAsset(
        function (ProductRemoveAssetAction $action): ProductRemoveAssetAction {
            // modify action as needed
            return $action;
        })->build();

removeFromCategory
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeFromCategory.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeFromCategory(new ProductRemoveFromCategoryAction())->build()
    //or
    $productUpdate = $builder->removeFromCategory(
        function (ProductRemoveFromCategoryAction $action): ProductRemoveFromCategoryAction {
            // modify action as needed
            return $action;
        })->build();

removeImage
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeImage.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeImage(new ProductRemoveImageAction())->build()
    //or
    $productUpdate = $builder->removeImage(
        function (ProductRemoveImageAction $action): ProductRemoveImageAction {
            // modify action as needed
            return $action;
        })->build();

removePrice
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removePrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removePrice(new ProductRemovePriceAction())->build()
    //or
    $productUpdate = $builder->removePrice(
        function (ProductRemovePriceAction $action): ProductRemovePriceAction {
            // modify action as needed
            return $action;
        })->build();

removeVariant
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeVariant.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeVariant(new ProductRemoveVariantAction())->build()
    //or
    $productUpdate = $builder->removeVariant(
        function (ProductRemoveVariantAction $action): ProductRemoveVariantAction {
            // modify action as needed
            return $action;
        })->build();

revertStagedChanges
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.revertStagedChanges.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->revertStagedChanges(new ProductRevertStagedChangesAction())->build()
    //or
    $productUpdate = $builder->revertStagedChanges(
        function (ProductRevertStagedChangesAction $action): ProductRevertStagedChangesAction {
            // modify action as needed
            return $action;
        })->build();

revertStagedVariantChanges
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.revertStagedVariantChanges.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->revertStagedVariantChanges(new ProductRevertStagedVariantChangesAction())->build()
    //or
    $productUpdate = $builder->revertStagedVariantChanges(
        function (ProductRevertStagedVariantChangesAction $action): ProductRevertStagedVariantChangesAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetCustomField.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetCustomField(new ProductSetAssetCustomFieldAction())->build()
    //or
    $productUpdate = $builder->setAssetCustomField(
        function (ProductSetAssetCustomFieldAction $action): ProductSetAssetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetCustomType.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetCustomType(new ProductSetAssetCustomTypeAction())->build()
    //or
    $productUpdate = $builder->setAssetCustomType(
        function (ProductSetAssetCustomTypeAction $action): ProductSetAssetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setAssetDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetDescription.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetDescription(new ProductSetAssetDescriptionAction())->build()
    //or
    $productUpdate = $builder->setAssetDescription(
        function (ProductSetAssetDescriptionAction $action): ProductSetAssetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setAssetKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetKey.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetKey(new ProductSetAssetKeyAction())->build()
    //or
    $productUpdate = $builder->setAssetKey(
        function (ProductSetAssetKeyAction $action): ProductSetAssetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setAssetSources
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetSources.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetSources(new ProductSetAssetSourcesAction())->build()
    //or
    $productUpdate = $builder->setAssetSources(
        function (ProductSetAssetSourcesAction $action): ProductSetAssetSourcesAction {
            // modify action as needed
            return $action;
        })->build();

setAssetTags
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetTags.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetTags(new ProductSetAssetTagsAction())->build()
    //or
    $productUpdate = $builder->setAssetTags(
        function (ProductSetAssetTagsAction $action): ProductSetAssetTagsAction {
            // modify action as needed
            return $action;
        })->build();

setAttribute
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAttribute.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAttribute(new ProductSetAttributeAction())->build()
    //or
    $productUpdate = $builder->setAttribute(
        function (ProductSetAttributeAction $action): ProductSetAttributeAction {
            // modify action as needed
            return $action;
        })->build();

setAttributeInAllVariants
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAttributeInAllVariants.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAttributeInAllVariants(new ProductSetAttributeInAllVariantsAction())->build()
    //or
    $productUpdate = $builder->setAttributeInAllVariants(
        function (ProductSetAttributeInAllVariantsAction $action): ProductSetAttributeInAllVariantsAction {
            // modify action as needed
            return $action;
        })->build();

setCategoryOrderHint
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setCategoryOrderHint.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setCategoryOrderHint(new ProductSetCategoryOrderHintAction())->build()
    //or
    $productUpdate = $builder->setCategoryOrderHint(
        function (ProductSetCategoryOrderHintAction $action): ProductSetCategoryOrderHintAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setDescription(new ProductSetDescriptionAction())->build()
    //or
    $productUpdate = $builder->setDescription(
        function (ProductSetDescriptionAction $action): ProductSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setDiscountedPrice
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setDiscountedPrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setDiscountedPrice(new ProductSetDiscountedPriceAction())->build()
    //or
    $productUpdate = $builder->setDiscountedPrice(
        function (ProductSetDiscountedPriceAction $action): ProductSetDiscountedPriceAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setKey(new ProductSetKeyAction())->build()
    //or
    $productUpdate = $builder->setKey(
        function (ProductSetKeyAction $action): ProductSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setMetaDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setMetaDescription.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setMetaDescription(new ProductSetMetaDescriptionAction())->build()
    //or
    $productUpdate = $builder->setMetaDescription(
        function (ProductSetMetaDescriptionAction $action): ProductSetMetaDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setMetaKeywords
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setMetaKeywords.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setMetaKeywords(new ProductSetMetaKeywordsAction())->build()
    //or
    $productUpdate = $builder->setMetaKeywords(
        function (ProductSetMetaKeywordsAction $action): ProductSetMetaKeywordsAction {
            // modify action as needed
            return $action;
        })->build();

setMetaTitle
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setMetaTitle.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setMetaTitle(new ProductSetMetaTitleAction())->build()
    //or
    $productUpdate = $builder->setMetaTitle(
        function (ProductSetMetaTitleAction $action): ProductSetMetaTitleAction {
            // modify action as needed
            return $action;
        })->build();

setPrices
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setPrices.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setPrices(new ProductSetPricesAction())->build()
    //or
    $productUpdate = $builder->setPrices(
        function (ProductSetPricesAction $action): ProductSetPricesAction {
            // modify action as needed
            return $action;
        })->build();

setProductPriceCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setProductPriceCustomField.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setProductPriceCustomField(new ProductSetProductPriceCustomFieldAction())->build()
    //or
    $productUpdate = $builder->setProductPriceCustomField(
        function (ProductSetProductPriceCustomFieldAction $action): ProductSetProductPriceCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setProductPriceCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setProductPriceCustomType.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setProductPriceCustomType(new ProductSetProductPriceCustomTypeAction())->build()
    //or
    $productUpdate = $builder->setProductPriceCustomType(
        function (ProductSetProductPriceCustomTypeAction $action): ProductSetProductPriceCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setProductVariantKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setProductVariantKey.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setProductVariantKey(new ProductSetProductVariantKeyAction())->build()
    //or
    $productUpdate = $builder->setProductVariantKey(
        function (ProductSetProductVariantKeyAction $action): ProductSetProductVariantKeyAction {
            // modify action as needed
            return $action;
        })->build();

setSearchKeywords
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setSearchKeywords.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setSearchKeywords(new ProductSetSearchKeywordsAction())->build()
    //or
    $productUpdate = $builder->setSearchKeywords(
        function (ProductSetSearchKeywordsAction $action): ProductSetSearchKeywordsAction {
            // modify action as needed
            return $action;
        })->build();

setSku
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setSku.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setSku(new ProductSetSkuAction())->build()
    //or
    $productUpdate = $builder->setSku(
        function (ProductSetSkuAction $action): ProductSetSkuAction {
            // modify action as needed
            return $action;
        })->build();

setTaxCategory
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setTaxCategory.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setTaxCategory(new ProductSetTaxCategoryAction())->build()
    //or
    $productUpdate = $builder->setTaxCategory(
        function (ProductSetTaxCategoryAction $action): ProductSetTaxCategoryAction {
            // modify action as needed
            return $action;
        })->build();

transitionState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.transitionState.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->transitionState(new ProductTransitionStateAction())->build()
    //or
    $productUpdate = $builder->transitionState(
        function (ProductTransitionStateAction $action): ProductTransitionStateAction {
            // modify action as needed
            return $action;
        })->build();

unpublish
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.unpublish.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->unpublish(new ProductUnpublishAction())->build()
    //or
    $productUpdate = $builder->unpublish(
        function (ProductUnpublishAction $action): ProductUnpublishAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.productdiscountupdatebuilder:

ProductDiscountUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();


changeIsActive
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.changeIsActive.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->changeIsActive(new ProductDiscountChangeIsActiveAction())->build()
    //or
    $productDiscountUpdate = $builder->changeIsActive(
        function (ProductDiscountChangeIsActiveAction $action): ProductDiscountChangeIsActiveAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->changeName(new ProductDiscountChangeNameAction())->build()
    //or
    $productDiscountUpdate = $builder->changeName(
        function (ProductDiscountChangeNameAction $action): ProductDiscountChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changePredicate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.changePredicate.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->changePredicate(new ProductDiscountChangePredicateAction())->build()
    //or
    $productDiscountUpdate = $builder->changePredicate(
        function (ProductDiscountChangePredicateAction $action): ProductDiscountChangePredicateAction {
            // modify action as needed
            return $action;
        })->build();

changeSortOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.changeSortOrder.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->changeSortOrder(new ProductDiscountChangeSortOrderAction())->build()
    //or
    $productDiscountUpdate = $builder->changeSortOrder(
        function (ProductDiscountChangeSortOrderAction $action): ProductDiscountChangeSortOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeValue
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.changeValue.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->changeValue(new ProductDiscountChangeValueAction())->build()
    //or
    $productDiscountUpdate = $builder->changeValue(
        function (ProductDiscountChangeValueAction $action): ProductDiscountChangeValueAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->setDescription(new ProductDiscountSetDescriptionAction())->build()
    //or
    $productDiscountUpdate = $builder->setDescription(
        function (ProductDiscountSetDescriptionAction $action): ProductDiscountSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setValidFrom
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.setValidFrom.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->setValidFrom(new ProductDiscountSetValidFromAction())->build()
    //or
    $productDiscountUpdate = $builder->setValidFrom(
        function (ProductDiscountSetValidFromAction $action): ProductDiscountSetValidFromAction {
            // modify action as needed
            return $action;
        })->build();

setValidUntil
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.productdiscountupdatebuilder.examples.setValidUntil.php

    <?php
    use Commercetools\Builder\ProductDiscountUpdateBuilder;

    $builder = new ProductDiscountUpdateBuilder();
    $productDiscountUpdate = $builder->setValidUntil(new ProductDiscountSetValidUntilAction())->build()
    //or
    $productDiscountUpdate = $builder->setValidUntil(
        function (ProductDiscountSetValidUntilAction $action): ProductDiscountSetValidUntilAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.producttypeupdatebuilder:

ProductTypeUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();


addAttributeDefinition
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.addAttributeDefinition.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->addAttributeDefinition(new ProductTypeAddAttributeDefinitionAction())->build()
    //or
    $productTypeUpdate = $builder->addAttributeDefinition(
        function (ProductTypeAddAttributeDefinitionAction $action): ProductTypeAddAttributeDefinitionAction {
            // modify action as needed
            return $action;
        })->build();

addLocalizedEnumValue
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.addLocalizedEnumValue.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->addLocalizedEnumValue(new ProductTypeAddLocalizedEnumValueAction())->build()
    //or
    $productTypeUpdate = $builder->addLocalizedEnumValue(
        function (ProductTypeAddLocalizedEnumValueAction $action): ProductTypeAddLocalizedEnumValueAction {
            // modify action as needed
            return $action;
        })->build();

addPlainEnumValue
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.addPlainEnumValue.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->addPlainEnumValue(new ProductTypeAddPlainEnumValueAction())->build()
    //or
    $productTypeUpdate = $builder->addPlainEnumValue(
        function (ProductTypeAddPlainEnumValueAction $action): ProductTypeAddPlainEnumValueAction {
            // modify action as needed
            return $action;
        })->build();

changeAttributeConstraint
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeAttributeConstraint.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeAttributeConstraint(new ProductTypeChangeAttributeConstraintAction())->build()
    //or
    $productTypeUpdate = $builder->changeAttributeConstraint(
        function (ProductTypeChangeAttributeConstraintAction $action): ProductTypeChangeAttributeConstraintAction {
            // modify action as needed
            return $action;
        })->build();

changeAttributeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeAttributeName.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeAttributeName(new ProductTypeChangeAttributeNameAction())->build()
    //or
    $productTypeUpdate = $builder->changeAttributeName(
        function (ProductTypeChangeAttributeNameAction $action): ProductTypeChangeAttributeNameAction {
            // modify action as needed
            return $action;
        })->build();

changeAttributeOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeAttributeOrder.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeAttributeOrder(new ProductTypeChangeAttributeOrderAction())->build()
    //or
    $productTypeUpdate = $builder->changeAttributeOrder(
        function (ProductTypeChangeAttributeOrderAction $action): ProductTypeChangeAttributeOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeDescription.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeDescription(new ProductTypeChangeDescriptionAction())->build()
    //or
    $productTypeUpdate = $builder->changeDescription(
        function (ProductTypeChangeDescriptionAction $action): ProductTypeChangeDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

changeEnumKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeEnumKey.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeEnumKey(new ProductTypeChangeEnumKeyAction())->build()
    //or
    $productTypeUpdate = $builder->changeEnumKey(
        function (ProductTypeChangeEnumKeyAction $action): ProductTypeChangeEnumKeyAction {
            // modify action as needed
            return $action;
        })->build();

changeInputHint
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeInputHint.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeInputHint(new ProductTypeChangeInputHintAction())->build()
    //or
    $productTypeUpdate = $builder->changeInputHint(
        function (ProductTypeChangeInputHintAction $action): ProductTypeChangeInputHintAction {
            // modify action as needed
            return $action;
        })->build();

changeIsSearchable
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeIsSearchable.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeIsSearchable(new ProductTypeChangeIsSearchableAction())->build()
    //or
    $productTypeUpdate = $builder->changeIsSearchable(
        function (ProductTypeChangeIsSearchableAction $action): ProductTypeChangeIsSearchableAction {
            // modify action as needed
            return $action;
        })->build();

changeLabel
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeLabel.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeLabel(new ProductTypeChangeLabelAction())->build()
    //or
    $productTypeUpdate = $builder->changeLabel(
        function (ProductTypeChangeLabelAction $action): ProductTypeChangeLabelAction {
            // modify action as needed
            return $action;
        })->build();

changeLocalizedEnumValueLabel
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeLocalizedEnumValueLabel.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeLocalizedEnumValueLabel(new ProductTypeChangeLocalizedEnumValueLabelAction())->build()
    //or
    $productTypeUpdate = $builder->changeLocalizedEnumValueLabel(
        function (ProductTypeChangeLocalizedEnumValueLabelAction $action): ProductTypeChangeLocalizedEnumValueLabelAction {
            // modify action as needed
            return $action;
        })->build();

changeLocalizedEnumValueOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeLocalizedEnumValueOrder.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeLocalizedEnumValueOrder(new ProductTypeChangeLocalizedEnumValueOrderAction())->build()
    //or
    $productTypeUpdate = $builder->changeLocalizedEnumValueOrder(
        function (ProductTypeChangeLocalizedEnumValueOrderAction $action): ProductTypeChangeLocalizedEnumValueOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changeName(new ProductTypeChangeNameAction())->build()
    //or
    $productTypeUpdate = $builder->changeName(
        function (ProductTypeChangeNameAction $action): ProductTypeChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changePlainEnumValueLabel
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changePlainEnumValueLabel.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changePlainEnumValueLabel(new ProductTypeChangePlainEnumValueLabelAction())->build()
    //or
    $productTypeUpdate = $builder->changePlainEnumValueLabel(
        function (ProductTypeChangePlainEnumValueLabelAction $action): ProductTypeChangePlainEnumValueLabelAction {
            // modify action as needed
            return $action;
        })->build();

changePlainEnumValueOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.changePlainEnumValueOrder.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->changePlainEnumValueOrder(new ProductTypeChangePlainEnumValueOrderAction())->build()
    //or
    $productTypeUpdate = $builder->changePlainEnumValueOrder(
        function (ProductTypeChangePlainEnumValueOrderAction $action): ProductTypeChangePlainEnumValueOrderAction {
            // modify action as needed
            return $action;
        })->build();

removeAttributeDefinition
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.removeAttributeDefinition.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->removeAttributeDefinition(new ProductTypeRemoveAttributeDefinitionAction())->build()
    //or
    $productTypeUpdate = $builder->removeAttributeDefinition(
        function (ProductTypeRemoveAttributeDefinitionAction $action): ProductTypeRemoveAttributeDefinitionAction {
            // modify action as needed
            return $action;
        })->build();

removeEnumValues
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.removeEnumValues.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->removeEnumValues(new ProductTypeRemoveEnumValuesAction())->build()
    //or
    $productTypeUpdate = $builder->removeEnumValues(
        function (ProductTypeRemoveEnumValuesAction $action): ProductTypeRemoveEnumValuesAction {
            // modify action as needed
            return $action;
        })->build();

setInputTip
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.setInputTip.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->setInputTip(new ProductTypeSetInputTipAction())->build()
    //or
    $productTypeUpdate = $builder->setInputTip(
        function (ProductTypeSetInputTipAction $action): ProductTypeSetInputTipAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();
    $productTypeUpdate = $builder->setKey(new ProductTypeSetKeyAction())->build()
    //or
    $productTypeUpdate = $builder->setKey(
        function (ProductTypeSetKeyAction $action): ProductTypeSetKeyAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.reviewupdatebuilder:

ReviewUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();


setAuthorName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setAuthorName.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setAuthorName(new ReviewSetAuthorNameAction())->build()
    //or
    $reviewUpdate = $builder->setAuthorName(
        function (ReviewSetAuthorNameAction $action): ReviewSetAuthorNameAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setCustomField(new ReviewSetCustomFieldAction())->build()
    //or
    $reviewUpdate = $builder->setCustomField(
        function (ReviewSetCustomFieldAction $action): ReviewSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setCustomType(new ReviewSetCustomTypeAction())->build()
    //or
    $reviewUpdate = $builder->setCustomType(
        function (ReviewSetCustomTypeAction $action): ReviewSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomer
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setCustomer.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setCustomer(new ReviewSetCustomerAction())->build()
    //or
    $reviewUpdate = $builder->setCustomer(
        function (ReviewSetCustomerAction $action): ReviewSetCustomerAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setKey(new ReviewSetKeyAction())->build()
    //or
    $reviewUpdate = $builder->setKey(
        function (ReviewSetKeyAction $action): ReviewSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setLocale
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setLocale.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setLocale(new ReviewSetLocaleAction())->build()
    //or
    $reviewUpdate = $builder->setLocale(
        function (ReviewSetLocaleAction $action): ReviewSetLocaleAction {
            // modify action as needed
            return $action;
        })->build();

setRating
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setRating.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setRating(new ReviewSetRatingAction())->build()
    //or
    $reviewUpdate = $builder->setRating(
        function (ReviewSetRatingAction $action): ReviewSetRatingAction {
            // modify action as needed
            return $action;
        })->build();

setTarget
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setTarget.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setTarget(new ReviewSetTargetAction())->build()
    //or
    $reviewUpdate = $builder->setTarget(
        function (ReviewSetTargetAction $action): ReviewSetTargetAction {
            // modify action as needed
            return $action;
        })->build();

setText
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setText.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setText(new ReviewSetTextAction())->build()
    //or
    $reviewUpdate = $builder->setText(
        function (ReviewSetTextAction $action): ReviewSetTextAction {
            // modify action as needed
            return $action;
        })->build();

setTitle
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.setTitle.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->setTitle(new ReviewSetTitleAction())->build()
    //or
    $reviewUpdate = $builder->setTitle(
        function (ReviewSetTitleAction $action): ReviewSetTitleAction {
            // modify action as needed
            return $action;
        })->build();

transitionState
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.transitionState.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();
    $reviewUpdate = $builder->transitionState(new ReviewTransitionStateAction())->build()
    //or
    $reviewUpdate = $builder->transitionState(
        function (ReviewTransitionStateAction $action): ReviewTransitionStateAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.shippingmethodupdatebuilder:

ShippingMethodUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();


addShippingRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.addShippingRate.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->addShippingRate(new ShippingMethodAddShippingRateAction())->build()
    //or
    $shippingMethodUpdate = $builder->addShippingRate(
        function (ShippingMethodAddShippingRateAction $action): ShippingMethodAddShippingRateAction {
            // modify action as needed
            return $action;
        })->build();

addZone
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.addZone.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->addZone(new ShippingMethodAddZoneAction())->build()
    //or
    $shippingMethodUpdate = $builder->addZone(
        function (ShippingMethodAddZoneAction $action): ShippingMethodAddZoneAction {
            // modify action as needed
            return $action;
        })->build();

changeIsDefault
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.changeIsDefault.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->changeIsDefault(new ShippingMethodChangeIsDefaultAction())->build()
    //or
    $shippingMethodUpdate = $builder->changeIsDefault(
        function (ShippingMethodChangeIsDefaultAction $action): ShippingMethodChangeIsDefaultAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->changeName(new ShippingMethodChangeNameAction())->build()
    //or
    $shippingMethodUpdate = $builder->changeName(
        function (ShippingMethodChangeNameAction $action): ShippingMethodChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changeTaxCategory
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.changeTaxCategory.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->changeTaxCategory(new ShippingMethodChangeTaxCategoryAction())->build()
    //or
    $shippingMethodUpdate = $builder->changeTaxCategory(
        function (ShippingMethodChangeTaxCategoryAction $action): ShippingMethodChangeTaxCategoryAction {
            // modify action as needed
            return $action;
        })->build();

removeShippingRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.removeShippingRate.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->removeShippingRate(new ShippingMethodRemoveShippingRateAction())->build()
    //or
    $shippingMethodUpdate = $builder->removeShippingRate(
        function (ShippingMethodRemoveShippingRateAction $action): ShippingMethodRemoveShippingRateAction {
            // modify action as needed
            return $action;
        })->build();

removeZone
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.removeZone.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->removeZone(new ShippingMethodRemoveZoneAction())->build()
    //or
    $shippingMethodUpdate = $builder->removeZone(
        function (ShippingMethodRemoveZoneAction $action): ShippingMethodRemoveZoneAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->setDescription(new ShippingMethodSetDescriptionAction())->build()
    //or
    $shippingMethodUpdate = $builder->setDescription(
        function (ShippingMethodSetDescriptionAction $action): ShippingMethodSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->setKey(new ShippingMethodSetKeyAction())->build()
    //or
    $shippingMethodUpdate = $builder->setKey(
        function (ShippingMethodSetKeyAction $action): ShippingMethodSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setPredicate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.setPredicate.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();
    $shippingMethodUpdate = $builder->setPredicate(new ShippingMethodSetPredicateAction())->build()
    //or
    $shippingMethodUpdate = $builder->setPredicate(
        function (ShippingMethodSetPredicateAction $action): ShippingMethodSetPredicateAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.shoppinglistupdatebuilder:

ShoppingListUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();


addLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.addLineItem.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->addLineItem(new ShoppingListAddLineItemAction())->build()
    //or
    $shoppingListUpdate = $builder->addLineItem(
        function (ShoppingListAddLineItemAction $action): ShoppingListAddLineItemAction {
            // modify action as needed
            return $action;
        })->build();

addTextLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.addTextLineItem.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->addTextLineItem(new ShoppingListAddTextLineItemAction())->build()
    //or
    $shoppingListUpdate = $builder->addTextLineItem(
        function (ShoppingListAddTextLineItemAction $action): ShoppingListAddTextLineItemAction {
            // modify action as needed
            return $action;
        })->build();

changeLineItemQuantity
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.changeLineItemQuantity.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->changeLineItemQuantity(new ShoppingListChangeLineItemQuantityAction())->build()
    //or
    $shoppingListUpdate = $builder->changeLineItemQuantity(
        function (ShoppingListChangeLineItemQuantityAction $action): ShoppingListChangeLineItemQuantityAction {
            // modify action as needed
            return $action;
        })->build();

changeLineItemsOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.changeLineItemsOrder.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->changeLineItemsOrder(new ShoppingListChangeLineItemsOrderAction())->build()
    //or
    $shoppingListUpdate = $builder->changeLineItemsOrder(
        function (ShoppingListChangeLineItemsOrderAction $action): ShoppingListChangeLineItemsOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->changeName(new ShoppingListChangeNameAction())->build()
    //or
    $shoppingListUpdate = $builder->changeName(
        function (ShoppingListChangeNameAction $action): ShoppingListChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changeTextLineItemName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.changeTextLineItemName.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->changeTextLineItemName(new ShoppingListChangeTextLineItemNameAction())->build()
    //or
    $shoppingListUpdate = $builder->changeTextLineItemName(
        function (ShoppingListChangeTextLineItemNameAction $action): ShoppingListChangeTextLineItemNameAction {
            // modify action as needed
            return $action;
        })->build();

changeTextLineItemQuantity
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.changeTextLineItemQuantity.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->changeTextLineItemQuantity(new ShoppingListChangeTextLineItemQuantityAction())->build()
    //or
    $shoppingListUpdate = $builder->changeTextLineItemQuantity(
        function (ShoppingListChangeTextLineItemQuantityAction $action): ShoppingListChangeTextLineItemQuantityAction {
            // modify action as needed
            return $action;
        })->build();

changeTextLineItemsOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.changeTextLineItemsOrder.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->changeTextLineItemsOrder(new ShoppingListChangeTextLineItemsOrderAction())->build()
    //or
    $shoppingListUpdate = $builder->changeTextLineItemsOrder(
        function (ShoppingListChangeTextLineItemsOrderAction $action): ShoppingListChangeTextLineItemsOrderAction {
            // modify action as needed
            return $action;
        })->build();

removeLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.removeLineItem.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->removeLineItem(new ShoppingListRemoveLineItemAction())->build()
    //or
    $shoppingListUpdate = $builder->removeLineItem(
        function (ShoppingListRemoveLineItemAction $action): ShoppingListRemoveLineItemAction {
            // modify action as needed
            return $action;
        })->build();

removeTextLineItem
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.removeTextLineItem.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->removeTextLineItem(new ShoppingListRemoveTextLineItemAction())->build()
    //or
    $shoppingListUpdate = $builder->removeTextLineItem(
        function (ShoppingListRemoveTextLineItemAction $action): ShoppingListRemoveTextLineItemAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setCustomField(new ShoppingListSetCustomFieldAction())->build()
    //or
    $shoppingListUpdate = $builder->setCustomField(
        function (ShoppingListSetCustomFieldAction $action): ShoppingListSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setCustomType(new ShoppingListSetCustomTypeAction())->build()
    //or
    $shoppingListUpdate = $builder->setCustomType(
        function (ShoppingListSetCustomTypeAction $action): ShoppingListSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setCustomer
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setCustomer.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setCustomer(new ShoppingListSetCustomerAction())->build()
    //or
    $shoppingListUpdate = $builder->setCustomer(
        function (ShoppingListSetCustomerAction $action): ShoppingListSetCustomerAction {
            // modify action as needed
            return $action;
        })->build();

setDeleteDaysAfterLastModification
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setDeleteDaysAfterLastModification.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setDeleteDaysAfterLastModification(new ShoppingListSetDeleteDaysAfterLastModificationAction())->build()
    //or
    $shoppingListUpdate = $builder->setDeleteDaysAfterLastModification(
        function (ShoppingListSetDeleteDaysAfterLastModificationAction $action): ShoppingListSetDeleteDaysAfterLastModificationAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setDescription(new ShoppingListSetDescriptionAction())->build()
    //or
    $shoppingListUpdate = $builder->setDescription(
        function (ShoppingListSetDescriptionAction $action): ShoppingListSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setKey(new ShoppingListSetKeyAction())->build()
    //or
    $shoppingListUpdate = $builder->setKey(
        function (ShoppingListSetKeyAction $action): ShoppingListSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setLineItemCustomField.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setLineItemCustomField(new ShoppingListSetLineItemCustomFieldAction())->build()
    //or
    $shoppingListUpdate = $builder->setLineItemCustomField(
        function (ShoppingListSetLineItemCustomFieldAction $action): ShoppingListSetLineItemCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setLineItemCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setLineItemCustomType.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setLineItemCustomType(new ShoppingListSetLineItemCustomTypeAction())->build()
    //or
    $shoppingListUpdate = $builder->setLineItemCustomType(
        function (ShoppingListSetLineItemCustomTypeAction $action): ShoppingListSetLineItemCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setSlug
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setSlug.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setSlug(new ShoppingListSetSlugAction())->build()
    //or
    $shoppingListUpdate = $builder->setSlug(
        function (ShoppingListSetSlugAction $action): ShoppingListSetSlugAction {
            // modify action as needed
            return $action;
        })->build();

setTextLineItemCustomField
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setTextLineItemCustomField.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setTextLineItemCustomField(new ShoppingListSetTextLineItemCustomFieldAction())->build()
    //or
    $shoppingListUpdate = $builder->setTextLineItemCustomField(
        function (ShoppingListSetTextLineItemCustomFieldAction $action): ShoppingListSetTextLineItemCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setTextLineItemCustomType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setTextLineItemCustomType.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setTextLineItemCustomType(new ShoppingListSetTextLineItemCustomTypeAction())->build()
    //or
    $shoppingListUpdate = $builder->setTextLineItemCustomType(
        function (ShoppingListSetTextLineItemCustomTypeAction $action): ShoppingListSetTextLineItemCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setTextLineItemDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.setTextLineItemDescription.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();
    $shoppingListUpdate = $builder->setTextLineItemDescription(new ShoppingListSetTextLineItemDescriptionAction())->build()
    //or
    $shoppingListUpdate = $builder->setTextLineItemDescription(
        function (ShoppingListSetTextLineItemDescriptionAction $action): ShoppingListSetTextLineItemDescriptionAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.stateupdatebuilder:

StateUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();


addRoles
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.addRoles.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->addRoles(new StateAddRolesAction())->build()
    //or
    $stateUpdate = $builder->addRoles(
        function (StateAddRolesAction $action): StateAddRolesAction {
            // modify action as needed
            return $action;
        })->build();

changeInitial
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.changeInitial.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->changeInitial(new StateChangeInitialAction())->build()
    //or
    $stateUpdate = $builder->changeInitial(
        function (StateChangeInitialAction $action): StateChangeInitialAction {
            // modify action as needed
            return $action;
        })->build();

changeKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.changeKey.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->changeKey(new StateChangeKeyAction())->build()
    //or
    $stateUpdate = $builder->changeKey(
        function (StateChangeKeyAction $action): StateChangeKeyAction {
            // modify action as needed
            return $action;
        })->build();

changeType
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.changeType.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->changeType(new StateChangeTypeAction())->build()
    //or
    $stateUpdate = $builder->changeType(
        function (StateChangeTypeAction $action): StateChangeTypeAction {
            // modify action as needed
            return $action;
        })->build();

removeRoles
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.removeRoles.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->removeRoles(new StateRemoveRolesAction())->build()
    //or
    $stateUpdate = $builder->removeRoles(
        function (StateRemoveRolesAction $action): StateRemoveRolesAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setDescription(new StateSetDescriptionAction())->build()
    //or
    $stateUpdate = $builder->setDescription(
        function (StateSetDescriptionAction $action): StateSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setName.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setName(new StateSetNameAction())->build()
    //or
    $stateUpdate = $builder->setName(
        function (StateSetNameAction $action): StateSetNameAction {
            // modify action as needed
            return $action;
        })->build();

setRoles
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setRoles.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setRoles(new StateSetRolesAction())->build()
    //or
    $stateUpdate = $builder->setRoles(
        function (StateSetRolesAction $action): StateSetRolesAction {
            // modify action as needed
            return $action;
        })->build();

setTransitions
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setTransitions.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setTransitions(new StateSetTransitionsAction())->build()
    //or
    $stateUpdate = $builder->setTransitions(
        function (StateSetTransitionsAction $action): StateSetTransitionsAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.subscriptionupdatebuilder:

SubscriptionUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.subscriptionupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\SubscriptionUpdateBuilder;

    $builder = new SubscriptionUpdateBuilder();


setChanges
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.subscriptionupdatebuilder.examples.setChanges.php

    <?php
    use Commercetools\Builder\SubscriptionUpdateBuilder;

    $builder = new SubscriptionUpdateBuilder();
    $subscriptionUpdate = $builder->setChanges(new SubscriptionSetChangesAction())->build()
    //or
    $subscriptionUpdate = $builder->setChanges(
        function (SubscriptionSetChangesAction $action): SubscriptionSetChangesAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.subscriptionupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\SubscriptionUpdateBuilder;

    $builder = new SubscriptionUpdateBuilder();
    $subscriptionUpdate = $builder->setKey(new SubscriptionSetKeyAction())->build()
    //or
    $subscriptionUpdate = $builder->setKey(
        function (SubscriptionSetKeyAction $action): SubscriptionSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setMessages
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.subscriptionupdatebuilder.examples.setMessages.php

    <?php
    use Commercetools\Builder\SubscriptionUpdateBuilder;

    $builder = new SubscriptionUpdateBuilder();
    $subscriptionUpdate = $builder->setMessages(new SubscriptionSetMessagesAction())->build()
    //or
    $subscriptionUpdate = $builder->setMessages(
        function (SubscriptionSetMessagesAction $action): SubscriptionSetMessagesAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.taxcategoryupdatebuilder:

TaxCategoryUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();


addTaxRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.addTaxRate.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();
    $taxCategoryUpdate = $builder->addTaxRate(new TaxCategoryAddTaxRateAction())->build()
    //or
    $taxCategoryUpdate = $builder->addTaxRate(
        function (TaxCategoryAddTaxRateAction $action): TaxCategoryAddTaxRateAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();
    $taxCategoryUpdate = $builder->changeName(new TaxCategoryChangeNameAction())->build()
    //or
    $taxCategoryUpdate = $builder->changeName(
        function (TaxCategoryChangeNameAction $action): TaxCategoryChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

removeTaxRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.removeTaxRate.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();
    $taxCategoryUpdate = $builder->removeTaxRate(new TaxCategoryRemoveTaxRateAction())->build()
    //or
    $taxCategoryUpdate = $builder->removeTaxRate(
        function (TaxCategoryRemoveTaxRateAction $action): TaxCategoryRemoveTaxRateAction {
            // modify action as needed
            return $action;
        })->build();

replaceTaxRate
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.replaceTaxRate.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();
    $taxCategoryUpdate = $builder->replaceTaxRate(new TaxCategoryReplaceTaxRateAction())->build()
    //or
    $taxCategoryUpdate = $builder->replaceTaxRate(
        function (TaxCategoryReplaceTaxRateAction $action): TaxCategoryReplaceTaxRateAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();
    $taxCategoryUpdate = $builder->setDescription(new TaxCategorySetDescriptionAction())->build()
    //or
    $taxCategoryUpdate = $builder->setDescription(
        function (TaxCategorySetDescriptionAction $action): TaxCategorySetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();
    $taxCategoryUpdate = $builder->setKey(new TaxCategorySetKeyAction())->build()
    //or
    $taxCategoryUpdate = $builder->setKey(
        function (TaxCategorySetKeyAction $action): TaxCategorySetKeyAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.typeupdatebuilder:

TypeUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();


addEnumValue
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.addEnumValue.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->addEnumValue(new TypeAddEnumValueAction())->build()
    //or
    $typeUpdate = $builder->addEnumValue(
        function (TypeAddEnumValueAction $action): TypeAddEnumValueAction {
            // modify action as needed
            return $action;
        })->build();

addFieldDefinition
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.addFieldDefinition.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->addFieldDefinition(new TypeAddFieldDefinitionAction())->build()
    //or
    $typeUpdate = $builder->addFieldDefinition(
        function (TypeAddFieldDefinitionAction $action): TypeAddFieldDefinitionAction {
            // modify action as needed
            return $action;
        })->build();

addLocalizedEnumValue
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.addLocalizedEnumValue.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->addLocalizedEnumValue(new TypeAddLocalizedEnumValueAction())->build()
    //or
    $typeUpdate = $builder->addLocalizedEnumValue(
        function (TypeAddLocalizedEnumValueAction $action): TypeAddLocalizedEnumValueAction {
            // modify action as needed
            return $action;
        })->build();

changeEnumValueOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.changeEnumValueOrder.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->changeEnumValueOrder(new TypeChangeEnumValueOrderAction())->build()
    //or
    $typeUpdate = $builder->changeEnumValueOrder(
        function (TypeChangeEnumValueOrderAction $action): TypeChangeEnumValueOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeFieldDefinitionLabel
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.changeFieldDefinitionLabel.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->changeFieldDefinitionLabel(new TypeChangeFieldDefinitionLabelAction())->build()
    //or
    $typeUpdate = $builder->changeFieldDefinitionLabel(
        function (TypeChangeFieldDefinitionLabelAction $action): TypeChangeFieldDefinitionLabelAction {
            // modify action as needed
            return $action;
        })->build();

changeFieldDefinitionOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.changeFieldDefinitionOrder.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->changeFieldDefinitionOrder(new TypeChangeFieldDefinitionOrderAction())->build()
    //or
    $typeUpdate = $builder->changeFieldDefinitionOrder(
        function (TypeChangeFieldDefinitionOrderAction $action): TypeChangeFieldDefinitionOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.changeKey.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->changeKey(new TypeChangeKeyAction())->build()
    //or
    $typeUpdate = $builder->changeKey(
        function (TypeChangeKeyAction $action): TypeChangeKeyAction {
            // modify action as needed
            return $action;
        })->build();

changeLabel
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.changeLabel.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->changeLabel(new TypeChangeLabelAction())->build()
    //or
    $typeUpdate = $builder->changeLabel(
        function (TypeChangeLabelAction $action): TypeChangeLabelAction {
            // modify action as needed
            return $action;
        })->build();

changeLocalizedEnumValueOrder
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.changeLocalizedEnumValueOrder.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->changeLocalizedEnumValueOrder(new TypeChangeLocalizedEnumValueOrderAction())->build()
    //or
    $typeUpdate = $builder->changeLocalizedEnumValueOrder(
        function (TypeChangeLocalizedEnumValueOrderAction $action): TypeChangeLocalizedEnumValueOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->changeName(new TypeChangeNameAction())->build()
    //or
    $typeUpdate = $builder->changeName(
        function (TypeChangeNameAction $action): TypeChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

removeFieldDefinition
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.removeFieldDefinition.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->removeFieldDefinition(new TypeRemoveFieldDefinitionAction())->build()
    //or
    $typeUpdate = $builder->removeFieldDefinition(
        function (TypeRemoveFieldDefinitionAction $action): TypeRemoveFieldDefinitionAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.typeupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\TypeUpdateBuilder;

    $builder = new TypeUpdateBuilder();
    $typeUpdate = $builder->setDescription(new TypeSetDescriptionAction())->build()
    //or
    $typeUpdate = $builder->setDescription(
        function (TypeSetDescriptionAction $action): TypeSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.zoneupdatebuilder:

ZoneUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.zoneupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ZoneUpdateBuilder;

    $builder = new ZoneUpdateBuilder();


addLocation
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.zoneupdatebuilder.examples.addLocation.php

    <?php
    use Commercetools\Builder\ZoneUpdateBuilder;

    $builder = new ZoneUpdateBuilder();
    $zoneUpdate = $builder->addLocation(new ZoneAddLocationAction())->build()
    //or
    $zoneUpdate = $builder->addLocation(
        function (ZoneAddLocationAction $action): ZoneAddLocationAction {
            // modify action as needed
            return $action;
        })->build();

changeName
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.zoneupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ZoneUpdateBuilder;

    $builder = new ZoneUpdateBuilder();
    $zoneUpdate = $builder->changeName(new ZoneChangeNameAction())->build()
    //or
    $zoneUpdate = $builder->changeName(
        function (ZoneChangeNameAction $action): ZoneChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

removeLocation
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.zoneupdatebuilder.examples.removeLocation.php

    <?php
    use Commercetools\Builder\ZoneUpdateBuilder;

    $builder = new ZoneUpdateBuilder();
    $zoneUpdate = $builder->removeLocation(new ZoneRemoveLocationAction())->build()
    //or
    $zoneUpdate = $builder->removeLocation(
        function (ZoneRemoveLocationAction $action): ZoneRemoveLocationAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.zoneupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\ZoneUpdateBuilder;

    $builder = new ZoneUpdateBuilder();
    $zoneUpdate = $builder->setDescription(new ZoneSetDescriptionAction())->build()
    //or
    $zoneUpdate = $builder->setDescription(
        function (ZoneSetDescriptionAction $action): ZoneSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();


.. _updatebuilder.extensionupdatebuilder:

ExtensionUpdateBuilder
#########################################################

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();


changeDestination
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.changeDestination.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();
    $extensionUpdate = $builder->changeDestination(new ExtensionChangeDestinationAction())->build()
    //or
    $extensionUpdate = $builder->changeDestination(
        function (ExtensionChangeDestinationAction $action): ExtensionChangeDestinationAction {
            // modify action as needed
            return $action;
        })->build();

changeTriggers
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.changeTriggers.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();
    $extensionUpdate = $builder->changeTriggers(new ExtensionChangeTriggersAction())->build()
    //or
    $extensionUpdate = $builder->changeTriggers(
        function (ExtensionChangeTriggersAction $action): ExtensionChangeTriggersAction {
            // modify action as needed
            return $action;
        })->build();

setKey
---------------------------------------------------------

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();
    $extensionUpdate = $builder->setKey(new ExtensionSetKeyAction())->build()
    //or
    $extensionUpdate = $builder->setKey(
        function (ExtensionSetKeyAction $action): ExtensionSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

