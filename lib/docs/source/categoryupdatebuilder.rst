.. _categoryupdatebuilder:

========================================================
CategoryUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();


addAsset
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.addAsset.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->addAsset(new CategoryAddAssetAction())->build()
    //or
    $categoryUpdate = $builder->addAsset(
        function (CategoryAddAssetAction $action): CategoryAddAssetAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetName
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeAssetName.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeAssetName(new CategoryChangeAssetNameAction())->build()
    //or
    $categoryUpdate = $builder->changeAssetName(
        function (CategoryChangeAssetNameAction $action): CategoryChangeAssetNameAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetOrder
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeAssetOrder.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeAssetOrder(new CategoryChangeAssetOrderAction())->build()
    //or
    $categoryUpdate = $builder->changeAssetOrder(
        function (CategoryChangeAssetOrderAction $action): CategoryChangeAssetOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeName
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeName(new CategoryChangeNameAction())->build()
    //or
    $categoryUpdate = $builder->changeName(
        function (CategoryChangeNameAction $action): CategoryChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changeOrderHint
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeOrderHint.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeOrderHint(new CategoryChangeOrderHintAction())->build()
    //or
    $categoryUpdate = $builder->changeOrderHint(
        function (CategoryChangeOrderHintAction $action): CategoryChangeOrderHintAction {
            // modify action as needed
            return $action;
        })->build();

changeParent
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeParent.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeParent(new CategoryChangeParentAction())->build()
    //or
    $categoryUpdate = $builder->changeParent(
        function (CategoryChangeParentAction $action): CategoryChangeParentAction {
            // modify action as needed
            return $action;
        })->build();

changeSlug
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.changeSlug.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->changeSlug(new CategoryChangeSlugAction())->build()
    //or
    $categoryUpdate = $builder->changeSlug(
        function (CategoryChangeSlugAction $action): CategoryChangeSlugAction {
            // modify action as needed
            return $action;
        })->build();

removeAsset
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.removeAsset.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->removeAsset(new CategoryRemoveAssetAction())->build()
    //or
    $categoryUpdate = $builder->removeAsset(
        function (CategoryRemoveAssetAction $action): CategoryRemoveAssetAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomField
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetCustomField.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetCustomField(new CategorySetAssetCustomFieldAction())->build()
    //or
    $categoryUpdate = $builder->setAssetCustomField(
        function (CategorySetAssetCustomFieldAction $action): CategorySetAssetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomType
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetCustomType.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetCustomType(new CategorySetAssetCustomTypeAction())->build()
    //or
    $categoryUpdate = $builder->setAssetCustomType(
        function (CategorySetAssetCustomTypeAction $action): CategorySetAssetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setAssetDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetDescription.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetDescription(new CategorySetAssetDescriptionAction())->build()
    //or
    $categoryUpdate = $builder->setAssetDescription(
        function (CategorySetAssetDescriptionAction $action): CategorySetAssetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setAssetKey
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetKey.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetKey(new CategorySetAssetKeyAction())->build()
    //or
    $categoryUpdate = $builder->setAssetKey(
        function (CategorySetAssetKeyAction $action): CategorySetAssetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setAssetSources
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetSources.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetSources(new CategorySetAssetSourcesAction())->build()
    //or
    $categoryUpdate = $builder->setAssetSources(
        function (CategorySetAssetSourcesAction $action): CategorySetAssetSourcesAction {
            // modify action as needed
            return $action;
        })->build();

setAssetTags
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setAssetTags.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setAssetTags(new CategorySetAssetTagsAction())->build()
    //or
    $categoryUpdate = $builder->setAssetTags(
        function (CategorySetAssetTagsAction $action): CategorySetAssetTagsAction {
            // modify action as needed
            return $action;
        })->build();

setCustomField
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setCustomField.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setCustomField(new CategorySetCustomFieldAction())->build()
    //or
    $categoryUpdate = $builder->setCustomField(
        function (CategorySetCustomFieldAction $action): CategorySetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setCustomType
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setCustomType.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setCustomType(new CategorySetCustomTypeAction())->build()
    //or
    $categoryUpdate = $builder->setCustomType(
        function (CategorySetCustomTypeAction $action): CategorySetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setDescription(new CategorySetDescriptionAction())->build()
    //or
    $categoryUpdate = $builder->setDescription(
        function (CategorySetDescriptionAction $action): CategorySetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setExternalId
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setExternalId.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setExternalId(new CategorySetExternalIdAction())->build()
    //or
    $categoryUpdate = $builder->setExternalId(
        function (CategorySetExternalIdAction $action): CategorySetExternalIdAction {
            // modify action as needed
            return $action;
        })->build();

setKey
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setKey(new CategorySetKeyAction())->build()
    //or
    $categoryUpdate = $builder->setKey(
        function (CategorySetKeyAction $action): CategorySetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setMetaDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setMetaDescription.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setMetaDescription(new CategorySetMetaDescriptionAction())->build()
    //or
    $categoryUpdate = $builder->setMetaDescription(
        function (CategorySetMetaDescriptionAction $action): CategorySetMetaDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setMetaKeywords
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setMetaKeywords.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setMetaKeywords(new CategorySetMetaKeywordsAction())->build()
    //or
    $categoryUpdate = $builder->setMetaKeywords(
        function (CategorySetMetaKeywordsAction $action): CategorySetMetaKeywordsAction {
            // modify action as needed
            return $action;
        })->build();

setMetaTitle
#########################################################

.. code-block:: php
    :name: updatebuilder.categoryupdatebuilder.examples.setMetaTitle.php

    <?php
    use Commercetools\Builder\CategoryUpdateBuilder;

    $builder = new CategoryUpdateBuilder();
    $categoryUpdate = $builder->setMetaTitle(new CategorySetMetaTitleAction())->build()
    //or
    $categoryUpdate = $builder->setMetaTitle(
        function (CategorySetMetaTitleAction $action): CategorySetMetaTitleAction {
            // modify action as needed
            return $action;
        })->build();

