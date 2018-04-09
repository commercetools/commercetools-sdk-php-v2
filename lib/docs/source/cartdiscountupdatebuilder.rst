.. _cartdiscountupdatebuilder:

========================================================
CartDiscountUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.cartdiscountupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CartDiscountUpdateBuilder;

    $builder = new CartDiscountUpdateBuilder();


changeCartPredicate
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

