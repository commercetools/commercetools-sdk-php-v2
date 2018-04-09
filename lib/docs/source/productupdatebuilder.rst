.. _productupdatebuilder:

========================================================
ProductUpdateBuilder
========================================================

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.builder.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();


addAsset
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addAsset.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addAsset(new ProductAddAssetAction())->build()
    //or
    $productUpdate = $builder->addAsset(
        function (ProductAddAssetAction $action): ProductAddAssetAction {
            // modify action as needed
            return $action;
        })->build();

addExternalImage
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addExternalImage.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addExternalImage(new ProductAddExternalImageAction())->build()
    //or
    $productUpdate = $builder->addExternalImage(
        function (ProductAddExternalImageAction $action): ProductAddExternalImageAction {
            // modify action as needed
            return $action;
        })->build();

addPrice
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addPrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addPrice(new ProductAddPriceAction())->build()
    //or
    $productUpdate = $builder->addPrice(
        function (ProductAddPriceAction $action): ProductAddPriceAction {
            // modify action as needed
            return $action;
        })->build();

addToCategory
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addToCategory.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addToCategory(new ProductAddToCategoryAction())->build()
    //or
    $productUpdate = $builder->addToCategory(
        function (ProductAddToCategoryAction $action): ProductAddToCategoryAction {
            // modify action as needed
            return $action;
        })->build();

addVariant
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.addVariant.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->addVariant(new ProductAddVariantAction())->build()
    //or
    $productUpdate = $builder->addVariant(
        function (ProductAddVariantAction $action): ProductAddVariantAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetName
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeAssetName.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeAssetName(new ProductChangeAssetNameAction())->build()
    //or
    $productUpdate = $builder->changeAssetName(
        function (ProductChangeAssetNameAction $action): ProductChangeAssetNameAction {
            // modify action as needed
            return $action;
        })->build();

changeAssetOrder
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeAssetOrder.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeAssetOrder(new ProductChangeAssetOrderAction())->build()
    //or
    $productUpdate = $builder->changeAssetOrder(
        function (ProductChangeAssetOrderAction $action): ProductChangeAssetOrderAction {
            // modify action as needed
            return $action;
        })->build();

changeMasterVariant
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeMasterVariant.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeMasterVariant(new ProductChangeMasterVariantAction())->build()
    //or
    $productUpdate = $builder->changeMasterVariant(
        function (ProductChangeMasterVariantAction $action): ProductChangeMasterVariantAction {
            // modify action as needed
            return $action;
        })->build();

changeName
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeName.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeName(new ProductChangeNameAction())->build()
    //or
    $productUpdate = $builder->changeName(
        function (ProductChangeNameAction $action): ProductChangeNameAction {
            // modify action as needed
            return $action;
        })->build();

changePrice
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changePrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changePrice(new ProductChangePriceAction())->build()
    //or
    $productUpdate = $builder->changePrice(
        function (ProductChangePriceAction $action): ProductChangePriceAction {
            // modify action as needed
            return $action;
        })->build();

changeSlug
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.changeSlug.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->changeSlug(new ProductChangeSlugAction())->build()
    //or
    $productUpdate = $builder->changeSlug(
        function (ProductChangeSlugAction $action): ProductChangeSlugAction {
            // modify action as needed
            return $action;
        })->build();

legacySetSku
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.legacySetSku.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->legacySetSku(new ProductLegacySetSkuAction())->build()
    //or
    $productUpdate = $builder->legacySetSku(
        function (ProductLegacySetSkuAction $action): ProductLegacySetSkuAction {
            // modify action as needed
            return $action;
        })->build();

moveImageToPosition
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.moveImageToPosition.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->moveImageToPosition(new ProductMoveImageToPositionAction())->build()
    //or
    $productUpdate = $builder->moveImageToPosition(
        function (ProductMoveImageToPositionAction $action): ProductMoveImageToPositionAction {
            // modify action as needed
            return $action;
        })->build();

publish
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.publish.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->publish(new ProductPublishAction())->build()
    //or
    $productUpdate = $builder->publish(
        function (ProductPublishAction $action): ProductPublishAction {
            // modify action as needed
            return $action;
        })->build();

removeAsset
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeAsset.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeAsset(new ProductRemoveAssetAction())->build()
    //or
    $productUpdate = $builder->removeAsset(
        function (ProductRemoveAssetAction $action): ProductRemoveAssetAction {
            // modify action as needed
            return $action;
        })->build();

removeFromCategory
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeFromCategory.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeFromCategory(new ProductRemoveFromCategoryAction())->build()
    //or
    $productUpdate = $builder->removeFromCategory(
        function (ProductRemoveFromCategoryAction $action): ProductRemoveFromCategoryAction {
            // modify action as needed
            return $action;
        })->build();

removeImage
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeImage.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeImage(new ProductRemoveImageAction())->build()
    //or
    $productUpdate = $builder->removeImage(
        function (ProductRemoveImageAction $action): ProductRemoveImageAction {
            // modify action as needed
            return $action;
        })->build();

removePrice
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removePrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removePrice(new ProductRemovePriceAction())->build()
    //or
    $productUpdate = $builder->removePrice(
        function (ProductRemovePriceAction $action): ProductRemovePriceAction {
            // modify action as needed
            return $action;
        })->build();

removeVariant
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.removeVariant.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->removeVariant(new ProductRemoveVariantAction())->build()
    //or
    $productUpdate = $builder->removeVariant(
        function (ProductRemoveVariantAction $action): ProductRemoveVariantAction {
            // modify action as needed
            return $action;
        })->build();

revertStagedChanges
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.revertStagedChanges.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->revertStagedChanges(new ProductRevertStagedChangesAction())->build()
    //or
    $productUpdate = $builder->revertStagedChanges(
        function (ProductRevertStagedChangesAction $action): ProductRevertStagedChangesAction {
            // modify action as needed
            return $action;
        })->build();

revertStagedVariantChanges
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.revertStagedVariantChanges.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->revertStagedVariantChanges(new ProductRevertStagedVariantChangesAction())->build()
    //or
    $productUpdate = $builder->revertStagedVariantChanges(
        function (ProductRevertStagedVariantChangesAction $action): ProductRevertStagedVariantChangesAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomField
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetCustomField.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetCustomField(new ProductSetAssetCustomFieldAction())->build()
    //or
    $productUpdate = $builder->setAssetCustomField(
        function (ProductSetAssetCustomFieldAction $action): ProductSetAssetCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setAssetCustomType
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetCustomType.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetCustomType(new ProductSetAssetCustomTypeAction())->build()
    //or
    $productUpdate = $builder->setAssetCustomType(
        function (ProductSetAssetCustomTypeAction $action): ProductSetAssetCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setAssetDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetDescription.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetDescription(new ProductSetAssetDescriptionAction())->build()
    //or
    $productUpdate = $builder->setAssetDescription(
        function (ProductSetAssetDescriptionAction $action): ProductSetAssetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setAssetKey
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetKey.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetKey(new ProductSetAssetKeyAction())->build()
    //or
    $productUpdate = $builder->setAssetKey(
        function (ProductSetAssetKeyAction $action): ProductSetAssetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setAssetSources
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetSources.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetSources(new ProductSetAssetSourcesAction())->build()
    //or
    $productUpdate = $builder->setAssetSources(
        function (ProductSetAssetSourcesAction $action): ProductSetAssetSourcesAction {
            // modify action as needed
            return $action;
        })->build();

setAssetTags
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAssetTags.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAssetTags(new ProductSetAssetTagsAction())->build()
    //or
    $productUpdate = $builder->setAssetTags(
        function (ProductSetAssetTagsAction $action): ProductSetAssetTagsAction {
            // modify action as needed
            return $action;
        })->build();

setAttribute
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAttribute.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAttribute(new ProductSetAttributeAction())->build()
    //or
    $productUpdate = $builder->setAttribute(
        function (ProductSetAttributeAction $action): ProductSetAttributeAction {
            // modify action as needed
            return $action;
        })->build();

setAttributeInAllVariants
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setAttributeInAllVariants.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setAttributeInAllVariants(new ProductSetAttributeInAllVariantsAction())->build()
    //or
    $productUpdate = $builder->setAttributeInAllVariants(
        function (ProductSetAttributeInAllVariantsAction $action): ProductSetAttributeInAllVariantsAction {
            // modify action as needed
            return $action;
        })->build();

setCategoryOrderHint
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setCategoryOrderHint.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setCategoryOrderHint(new ProductSetCategoryOrderHintAction())->build()
    //or
    $productUpdate = $builder->setCategoryOrderHint(
        function (ProductSetCategoryOrderHintAction $action): ProductSetCategoryOrderHintAction {
            // modify action as needed
            return $action;
        })->build();

setDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setDescription.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setDescription(new ProductSetDescriptionAction())->build()
    //or
    $productUpdate = $builder->setDescription(
        function (ProductSetDescriptionAction $action): ProductSetDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setDiscountedPrice
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setDiscountedPrice.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setDiscountedPrice(new ProductSetDiscountedPriceAction())->build()
    //or
    $productUpdate = $builder->setDiscountedPrice(
        function (ProductSetDiscountedPriceAction $action): ProductSetDiscountedPriceAction {
            // modify action as needed
            return $action;
        })->build();

setKey
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setKey.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setKey(new ProductSetKeyAction())->build()
    //or
    $productUpdate = $builder->setKey(
        function (ProductSetKeyAction $action): ProductSetKeyAction {
            // modify action as needed
            return $action;
        })->build();

setMetaDescription
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setMetaDescription.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setMetaDescription(new ProductSetMetaDescriptionAction())->build()
    //or
    $productUpdate = $builder->setMetaDescription(
        function (ProductSetMetaDescriptionAction $action): ProductSetMetaDescriptionAction {
            // modify action as needed
            return $action;
        })->build();

setMetaKeywords
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setMetaKeywords.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setMetaKeywords(new ProductSetMetaKeywordsAction())->build()
    //or
    $productUpdate = $builder->setMetaKeywords(
        function (ProductSetMetaKeywordsAction $action): ProductSetMetaKeywordsAction {
            // modify action as needed
            return $action;
        })->build();

setMetaTitle
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setMetaTitle.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setMetaTitle(new ProductSetMetaTitleAction())->build()
    //or
    $productUpdate = $builder->setMetaTitle(
        function (ProductSetMetaTitleAction $action): ProductSetMetaTitleAction {
            // modify action as needed
            return $action;
        })->build();

setPrices
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setPrices.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setPrices(new ProductSetPricesAction())->build()
    //or
    $productUpdate = $builder->setPrices(
        function (ProductSetPricesAction $action): ProductSetPricesAction {
            // modify action as needed
            return $action;
        })->build();

setProductPriceCustomField
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setProductPriceCustomField.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setProductPriceCustomField(new ProductSetProductPriceCustomFieldAction())->build()
    //or
    $productUpdate = $builder->setProductPriceCustomField(
        function (ProductSetProductPriceCustomFieldAction $action): ProductSetProductPriceCustomFieldAction {
            // modify action as needed
            return $action;
        })->build();

setProductPriceCustomType
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setProductPriceCustomType.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setProductPriceCustomType(new ProductSetProductPriceCustomTypeAction())->build()
    //or
    $productUpdate = $builder->setProductPriceCustomType(
        function (ProductSetProductPriceCustomTypeAction $action): ProductSetProductPriceCustomTypeAction {
            // modify action as needed
            return $action;
        })->build();

setProductVariantKey
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setProductVariantKey.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setProductVariantKey(new ProductSetProductVariantKeyAction())->build()
    //or
    $productUpdate = $builder->setProductVariantKey(
        function (ProductSetProductVariantKeyAction $action): ProductSetProductVariantKeyAction {
            // modify action as needed
            return $action;
        })->build();

setSearchKeywords
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setSearchKeywords.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setSearchKeywords(new ProductSetSearchKeywordsAction())->build()
    //or
    $productUpdate = $builder->setSearchKeywords(
        function (ProductSetSearchKeywordsAction $action): ProductSetSearchKeywordsAction {
            // modify action as needed
            return $action;
        })->build();

setSku
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setSku.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setSku(new ProductSetSkuAction())->build()
    //or
    $productUpdate = $builder->setSku(
        function (ProductSetSkuAction $action): ProductSetSkuAction {
            // modify action as needed
            return $action;
        })->build();

setTaxCategory
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.setTaxCategory.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->setTaxCategory(new ProductSetTaxCategoryAction())->build()
    //or
    $productUpdate = $builder->setTaxCategory(
        function (ProductSetTaxCategoryAction $action): ProductSetTaxCategoryAction {
            // modify action as needed
            return $action;
        })->build();

transitionState
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.transitionState.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->transitionState(new ProductTransitionStateAction())->build()
    //or
    $productUpdate = $builder->transitionState(
        function (ProductTransitionStateAction $action): ProductTransitionStateAction {
            // modify action as needed
            return $action;
        })->build();

unpublish
#########################################################

.. code-block:: php
    :name: updatebuilder.productupdatebuilder.examples.unpublish.php

    <?php
    use Commercetools\Builder\ProductUpdateBuilder;

    $builder = new ProductUpdateBuilder();
    $productUpdate = $builder->unpublish(new ProductUnpublishAction())->build()
    //or
    $productUpdate = $builder->unpublish(
        function (ProductUnpublishAction $action): ProductUnpublishAction {
            // modify action as needed
            return $action;
        })->build();

