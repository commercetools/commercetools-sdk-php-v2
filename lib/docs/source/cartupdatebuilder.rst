.. _cartupdatebuilder:

========================================================
CartUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.cartupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CartUpdateBuilder;

    $builder = new CartUpdateBuilder();


addCustomLineItem
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

