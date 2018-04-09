.. _shippingmethodupdatebuilder:

========================================================
ShippingMethodUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.shippingmethodupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ShippingMethodUpdateBuilder;

    $builder = new ShippingMethodUpdateBuilder();


addShippingRate
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

