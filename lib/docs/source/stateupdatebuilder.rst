.. _stateupdatebuilder:

========================================================
StateUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();


addRoles
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.addRoles.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->addRoles(new StateAddRolesAction())->build()
    //or
    $stateUpdate = $builder->addRoles(
        function (StateAddRolesAction $action): StateAddRolesAction {
            // modify action as needed
            return $action;
        })->build();

changeInitial
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.changeInitial.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->changeInitial(new StateChangeInitialAction())->build()
    //or
    $stateUpdate = $builder->changeInitial(
        function (StateChangeInitialAction $action): StateChangeInitialAction {
            // modify action as needed
            return $action;
        })->build();

changeKey
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.changeKey.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->changeKey(new StateChangeKeyAction())->build()
    //or
    $stateUpdate = $builder->changeKey(
        function (StateChangeKeyAction $action): StateChangeKeyAction {
            // modify action as needed
            return $action;
        })->build();

changeType
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.changeType.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->changeType(new StateChangeTypeAction())->build()
    //or
    $stateUpdate = $builder->changeType(
        function (StateChangeTypeAction $action): StateChangeTypeAction {
            // modify action as needed
            return $action;
        })->build();

removeRoles
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.removeRoles.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->removeRoles(new StateRemoveRolesAction())->build()
    //or
    $stateUpdate = $builder->removeRoles(
        function (StateRemoveRolesAction $action): StateRemoveRolesAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setDescription(new StateSetDescriptionAction())->build()
    //or
    $stateUpdate = $builder->setDescription(
        function (StateSetDescriptionAction $action): StateSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setName
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setName.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setName(new StateSetNameAction())->build()
    //or
    $stateUpdate = $builder->setName(
        function (StateSetNameAction $action): StateSetNameAction {
            // modify action as needed
            return $action;
        })->build();

setRoles
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setRoles.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setRoles(new StateSetRolesAction())->build()
    //or
    $stateUpdate = $builder->setRoles(
        function (StateSetRolesAction $action): StateSetRolesAction {
            // modify action as needed
            return $action;
        })->build();

setTransitions
#########################################################

.. code-block:: php
    :name: updatebuilder.stateupdatebuilder.examples.setTransitions.php

    <?php
    use Commercetools\Builder\StateUpdateBuilder;

    $builder = new StateUpdateBuilder();
    $stateUpdate = $builder->setTransitions(new StateSetTransitionsAction())->build()
    //or
    $stateUpdate = $builder->setTransitions(
        function (StateSetTransitionsAction $action): StateSetTransitionsAction {
            // modify action as needed
            return $action;
        })->build();

