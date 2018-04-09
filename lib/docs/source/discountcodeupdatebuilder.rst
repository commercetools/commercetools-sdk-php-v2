.. _discountcodeupdatebuilder:

========================================================
DiscountCodeUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.discountcodeupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\DiscountCodeUpdateBuilder;

    $builder = new DiscountCodeUpdateBuilder();


changeCartDiscounts
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

