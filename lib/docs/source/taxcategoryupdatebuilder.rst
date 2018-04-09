.. _taxcategoryupdatebuilder:

========================================================
TaxCategoryUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.taxcategoryupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\TaxCategoryUpdateBuilder;

    $builder = new TaxCategoryUpdateBuilder();


addTaxRate
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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
#########################################################

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

