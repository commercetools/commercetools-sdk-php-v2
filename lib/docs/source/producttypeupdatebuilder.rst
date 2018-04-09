.. _producttypeupdatebuilder:

========================================================
ProductTypeUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.producttypeupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ProductTypeUpdateBuilder;

    $builder = new ProductTypeUpdateBuilder();


addAttributeDefinition
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

changeAttributeOrder
#########################################################

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
#########################################################

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

changeInputHint
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

