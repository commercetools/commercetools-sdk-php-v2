.. _reviewupdatebuilder:

========================================================
ReviewUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.reviewupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ReviewUpdateBuilder;

    $builder = new ReviewUpdateBuilder();


setAuthorName
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

