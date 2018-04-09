.. _channelupdatebuilder:

========================================================
ChannelUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();


addRoles
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.addRoles.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->addRoles(new ChannelAddRolesAction())->build()
    //or
    $channelUpdate = $builder->addRoles(
        function (ChannelAddRolesAction $action): ChannelAddRolesAction {
            // modify action as needed
            return $action;
        })->build();

changeDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.changeDescription.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->changeDescription(new ChannelChangeDescriptionAction())->build()
    //or
    $channelUpdate = $builder->changeDescription(
        function (ChannelChangeDescriptionAction $action): ChannelChangeDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

changeKey
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.changeKey.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->changeKey(new ChannelChangeKeyAction())->build()
    //or
    $channelUpdate = $builder->changeKey(
        function (ChannelChangeKeyAction $action): ChannelChangeKeyAction {
            // modify action as needed
            return $action;
        })->build();

changeName
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->changeName(new ChannelChangeNameAction())->build()
    //or
    $channelUpdate = $builder->changeName(
        function (ChannelChangeNameAction $action): ChannelChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

removeRoles
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.removeRoles.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->removeRoles(new ChannelRemoveRolesAction())->build()
    //or
    $channelUpdate = $builder->removeRoles(
        function (ChannelRemoveRolesAction $action): ChannelRemoveRolesAction {
            // modify action as needed
            return $action;
        })->build();

setAddress
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setAddress.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setAddress(new ChannelSetAddressAction())->build()
    //or
    $channelUpdate = $builder->setAddress(
        function (ChannelSetAddressAction $action): ChannelSetAddressAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setCustomField(new ChannelSetCustomFieldAction())->build()
    //or
    $channelUpdate = $builder->setCustomField(
        function (ChannelSetCustomFieldAction $action): ChannelSetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setCustomType(new ChannelSetCustomTypeAction())->build()
    //or
    $channelUpdate = $builder->setCustomType(
        function (ChannelSetCustomTypeAction $action): ChannelSetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setGeoLocation
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setGeoLocation.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setGeoLocation(new ChannelSetGeolocationAction())->build()
    //or
    $channelUpdate = $builder->setGeoLocation(
        function (ChannelSetGeolocationAction $action): ChannelSetGeolocationAction {
            // modify action as needed
            return $action;
        })->build();

setRoles
#########################################################

.. code-block:: php
    :name: updatebuilder.channelupdatebuilder.examples.setRoles.php

    <?php
    use Commercetools\Builder\ChannelUpdateBuilder;

    $builder = new ChannelUpdateBuilder();
    $channelUpdate = $builder->setRoles(new ChannelSetRolesAction())->build()
    //or
    $channelUpdate = $builder->setRoles(
        function (ChannelSetRolesAction $action): ChannelSetRolesAction {
            // modify action as needed
            return $action;
        })->build();

