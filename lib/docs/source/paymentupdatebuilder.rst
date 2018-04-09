.. _paymentupdatebuilder:

========================================================
PaymentUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.paymentupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\PaymentUpdateBuilder;

    $builder = new PaymentUpdateBuilder();


addInterfaceInteraction
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

