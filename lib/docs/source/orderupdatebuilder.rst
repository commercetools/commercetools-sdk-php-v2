.. _orderupdatebuilder:

========================================================
OrderUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.orderupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\OrderUpdateBuilder;

    $builder = new OrderUpdateBuilder();


addDelivery
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

