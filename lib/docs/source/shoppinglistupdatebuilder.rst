.. _shoppinglistupdatebuilder:

========================================================
ShoppingListUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.shoppinglistupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ShoppingListUpdateBuilder;

    $builder = new ShoppingListUpdateBuilder();


addLineItem
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

