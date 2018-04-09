.. _extensionupdatebuilder:

========================================================
ExtensionUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();


changeDestination
#########################################################

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.changeDestination.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();
    $extensionUpdate = $builder->changeDestination(new ExtensionChangeDestinationAction())->build()
    //or
    $extensionUpdate = $builder->changeDestination(
        function (ExtensionChangeDestinationAction $action): ExtensionChangeDestinationAction {
            // modify action as needed
            return $action;
        })->build();

changeTriggers
#########################################################

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.changeTriggers.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();
    $extensionUpdate = $builder->changeTriggers(new ExtensionChangeTriggersAction())->build()
    //or
    $extensionUpdate = $builder->changeTriggers(
        function (ExtensionChangeTriggersAction $action): ExtensionChangeTriggersAction {
            // modify action as needed
            return $action;
        })->build();

setKey
#########################################################

.. code-block:: php
    :name: updatebuilder.extensionupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ExtensionUpdateBuilder;

    $builder = new ExtensionUpdateBuilder();
    $extensionUpdate = $builder->setKey(new ExtensionSetKeyAction())->build()
    //or
    $extensionUpdate = $builder->setKey(
        function (ExtensionSetKeyAction $action): ExtensionSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

