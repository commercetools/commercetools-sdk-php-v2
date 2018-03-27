<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use  Commercetools\Builder\ProductUpdateBuilder;
use Commercetools\Types\Product\ProductAddAssetAction;
use Commercetools\Types\Product\ProductAddExternalImageAction;
use Commercetools\Types\Product\ProductAddPriceAction;
use Commercetools\Types\Product\ProductAddToCategoryAction;
use Commercetools\Types\Product\ProductAddVariantAction;
use Commercetools\Types\Product\ProductChangeAssetNameAction;
use Commercetools\Types\Product\ProductChangeAssetOrderAction;
use Commercetools\Types\Product\ProductChangeMasterVariantAction;
use Commercetools\Types\Product\ProductChangeNameAction;
use Commercetools\Types\Product\ProductChangePriceAction;
use Commercetools\Types\Product\ProductChangeSlugAction;
use Commercetools\Types\Product\ProductLegacySetSkuAction;
use Commercetools\Types\Product\ProductMoveImageToPositionAction;
use Commercetools\Types\Product\ProductPublishAction;
use Commercetools\Types\Product\ProductRemoveAssetAction;
use Commercetools\Types\Product\ProductRemoveFromCategoryAction;
use Commercetools\Types\Product\ProductRemoveImageAction;
use Commercetools\Types\Product\ProductRemovePriceAction;
use Commercetools\Types\Product\ProductRemoveVariantAction;
use Commercetools\Types\Product\ProductRevertStagedChangesAction;
use Commercetools\Types\Product\ProductRevertStagedVariantChangesAction;
use Commercetools\Types\Product\ProductSetAssetCustomFieldAction;
use Commercetools\Types\Product\ProductSetAssetCustomTypeAction;
use Commercetools\Types\Product\ProductSetAssetDescriptionAction;
use Commercetools\Types\Product\ProductSetAssetKeyAction;
use Commercetools\Types\Product\ProductSetAssetSourcesAction;
use Commercetools\Types\Product\ProductSetAssetTagsAction;
use Commercetools\Types\Product\ProductSetAttributeAction;
use Commercetools\Types\Product\ProductSetAttributeInAllVariantsAction;
use Commercetools\Types\Product\ProductSetCategoryOrderHintAction;
use Commercetools\Types\Product\ProductSetDescriptionAction;
use Commercetools\Types\Product\ProductSetDiscountedPriceAction;
use Commercetools\Types\Product\ProductSetKeyAction;
use Commercetools\Types\Product\ProductSetMetaDescriptionAction;
use Commercetools\Types\Product\ProductSetMetaKeywordsAction;
use Commercetools\Types\Product\ProductSetMetaTitleAction;
use Commercetools\Types\Product\ProductSetPricesAction;
use Commercetools\Types\Product\ProductSetProductPriceCustomFieldAction;
use Commercetools\Types\Product\ProductSetProductPriceCustomTypeAction;
use Commercetools\Types\Product\ProductSetProductVariantKeyAction;
use Commercetools\Types\Product\ProductSetSearchKeywordsAction;
use Commercetools\Types\Product\ProductSetSkuAction;
use Commercetools\Types\Product\ProductSetTaxCategoryAction;
use Commercetools\Types\Product\ProductTransitionStateAction;
use Commercetools\Types\Product\ProductUnpublishAction;
use Commercetools\Types\Product\Product;
use Commercetools\Types\Product\ProductUpdate;
use Commercetools\Request\ByProjectKeyProductsByIDPost;

use Commercetools\Types\Product\ProductAddAssetActionModel;
use Commercetools\Types\Product\ProductAddExternalImageActionModel;
use Commercetools\Types\Product\ProductAddPriceActionModel;
use Commercetools\Types\Product\ProductAddToCategoryActionModel;
use Commercetools\Types\Product\ProductAddVariantActionModel;
use Commercetools\Types\Product\ProductChangeAssetNameActionModel;
use Commercetools\Types\Product\ProductChangeAssetOrderActionModel;
use Commercetools\Types\Product\ProductChangeMasterVariantActionModel;
use Commercetools\Types\Product\ProductChangeNameActionModel;
use Commercetools\Types\Product\ProductChangePriceActionModel;
use Commercetools\Types\Product\ProductChangeSlugActionModel;
use Commercetools\Types\Product\ProductLegacySetSkuActionModel;
use Commercetools\Types\Product\ProductMoveImageToPositionActionModel;
use Commercetools\Types\Product\ProductPublishActionModel;
use Commercetools\Types\Product\ProductRemoveAssetActionModel;
use Commercetools\Types\Product\ProductRemoveFromCategoryActionModel;
use Commercetools\Types\Product\ProductRemoveImageActionModel;
use Commercetools\Types\Product\ProductRemovePriceActionModel;
use Commercetools\Types\Product\ProductRemoveVariantActionModel;
use Commercetools\Types\Product\ProductRevertStagedChangesActionModel;
use Commercetools\Types\Product\ProductRevertStagedVariantChangesActionModel;
use Commercetools\Types\Product\ProductSetAssetCustomFieldActionModel;
use Commercetools\Types\Product\ProductSetAssetCustomTypeActionModel;
use Commercetools\Types\Product\ProductSetAssetDescriptionActionModel;
use Commercetools\Types\Product\ProductSetAssetKeyActionModel;
use Commercetools\Types\Product\ProductSetAssetSourcesActionModel;
use Commercetools\Types\Product\ProductSetAssetTagsActionModel;
use Commercetools\Types\Product\ProductSetAttributeActionModel;
use Commercetools\Types\Product\ProductSetAttributeInAllVariantsActionModel;
use Commercetools\Types\Product\ProductSetCategoryOrderHintActionModel;
use Commercetools\Types\Product\ProductSetDescriptionActionModel;
use Commercetools\Types\Product\ProductSetDiscountedPriceActionModel;
use Commercetools\Types\Product\ProductSetKeyActionModel;
use Commercetools\Types\Product\ProductSetMetaDescriptionActionModel;
use Commercetools\Types\Product\ProductSetMetaKeywordsActionModel;
use Commercetools\Types\Product\ProductSetMetaTitleActionModel;
use Commercetools\Types\Product\ProductSetPricesActionModel;
use Commercetools\Types\Product\ProductSetProductPriceCustomFieldActionModel;
use Commercetools\Types\Product\ProductSetProductPriceCustomTypeActionModel;
use Commercetools\Types\Product\ProductSetProductVariantKeyActionModel;
use Commercetools\Types\Product\ProductSetSearchKeywordsActionModel;
use Commercetools\Types\Product\ProductSetSkuActionModel;
use Commercetools\Types\Product\ProductSetTaxCategoryActionModel;
use Commercetools\Types\Product\ProductTransitionStateActionModel;
use Commercetools\Types\Product\ProductUnpublishActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Product\ProductModel;


class ProductBuilderTest extends TestCase {
    public function testAddAssetCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addAsset(function($action) { static::assertInstanceOf(ProductAddAssetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddAssetAction::class, $update->getActions()->current());
    }

    public function testAddAssetInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addAsset(new ProductAddAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddAssetAction::class, $update->getActions()->current());
    }

    public function testAddExternalImageCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addExternalImage(function($action) { static::assertInstanceOf(ProductAddExternalImageAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddExternalImageAction::class, $update->getActions()->current());
    }

    public function testAddExternalImageInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addExternalImage(new ProductAddExternalImageActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddExternalImageAction::class, $update->getActions()->current());
    }

    public function testAddPriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addPrice(function($action) { static::assertInstanceOf(ProductAddPriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddPriceAction::class, $update->getActions()->current());
    }

    public function testAddPriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addPrice(new ProductAddPriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddPriceAction::class, $update->getActions()->current());
    }

    public function testAddToCategoryCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addToCategory(function($action) { static::assertInstanceOf(ProductAddToCategoryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddToCategoryAction::class, $update->getActions()->current());
    }

    public function testAddToCategoryInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addToCategory(new ProductAddToCategoryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddToCategoryAction::class, $update->getActions()->current());
    }

    public function testAddVariantCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addVariant(function($action) { static::assertInstanceOf(ProductAddVariantAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddVariantAction::class, $update->getActions()->current());
    }

    public function testAddVariantInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addVariant(new ProductAddVariantActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddVariantAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetName(function($action) { static::assertInstanceOf(ProductChangeAssetNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetName(new ProductChangeAssetNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetOrder(function($action) { static::assertInstanceOf(ProductChangeAssetOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetOrder(new ProductChangeAssetOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeMasterVariantCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeMasterVariant(function($action) { static::assertInstanceOf(ProductChangeMasterVariantAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeMasterVariantAction::class, $update->getActions()->current());
    }

    public function testChangeMasterVariantInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeMasterVariant(new ProductChangeMasterVariantActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeMasterVariantAction::class, $update->getActions()->current());
    }

    public function testChangeNameCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ProductChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeName(new ProductChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangePriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changePrice(function($action) { static::assertInstanceOf(ProductChangePriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangePriceAction::class, $update->getActions()->current());
    }

    public function testChangePriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changePrice(new ProductChangePriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangePriceAction::class, $update->getActions()->current());
    }

    public function testChangeSlugCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeSlug(function($action) { static::assertInstanceOf(ProductChangeSlugAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeSlugAction::class, $update->getActions()->current());
    }

    public function testChangeSlugInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeSlug(new ProductChangeSlugActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeSlugAction::class, $update->getActions()->current());
    }

    public function testLegacySetSkuCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->legacySetSku(function($action) { static::assertInstanceOf(ProductLegacySetSkuAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductLegacySetSkuAction::class, $update->getActions()->current());
    }

    public function testLegacySetSkuInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->legacySetSku(new ProductLegacySetSkuActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductLegacySetSkuAction::class, $update->getActions()->current());
    }

    public function testMoveImageToPositionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->moveImageToPosition(function($action) { static::assertInstanceOf(ProductMoveImageToPositionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductMoveImageToPositionAction::class, $update->getActions()->current());
    }

    public function testMoveImageToPositionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->moveImageToPosition(new ProductMoveImageToPositionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductMoveImageToPositionAction::class, $update->getActions()->current());
    }

    public function testPublishCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->publish(function($action) { static::assertInstanceOf(ProductPublishAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductPublishAction::class, $update->getActions()->current());
    }

    public function testPublishInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->publish(new ProductPublishActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductPublishAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeAsset(function($action) { static::assertInstanceOf(ProductRemoveAssetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeAsset(new ProductRemoveAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testRemoveFromCategoryCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeFromCategory(function($action) { static::assertInstanceOf(ProductRemoveFromCategoryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveFromCategoryAction::class, $update->getActions()->current());
    }

    public function testRemoveFromCategoryInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeFromCategory(new ProductRemoveFromCategoryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveFromCategoryAction::class, $update->getActions()->current());
    }

    public function testRemoveImageCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeImage(function($action) { static::assertInstanceOf(ProductRemoveImageAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveImageAction::class, $update->getActions()->current());
    }

    public function testRemoveImageInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeImage(new ProductRemoveImageActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveImageAction::class, $update->getActions()->current());
    }

    public function testRemovePriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removePrice(function($action) { static::assertInstanceOf(ProductRemovePriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemovePriceAction::class, $update->getActions()->current());
    }

    public function testRemovePriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removePrice(new ProductRemovePriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemovePriceAction::class, $update->getActions()->current());
    }

    public function testRemoveVariantCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeVariant(function($action) { static::assertInstanceOf(ProductRemoveVariantAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveVariantAction::class, $update->getActions()->current());
    }

    public function testRemoveVariantInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeVariant(new ProductRemoveVariantActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveVariantAction::class, $update->getActions()->current());
    }

    public function testRevertStagedChangesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedChanges(function($action) { static::assertInstanceOf(ProductRevertStagedChangesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedChangesAction::class, $update->getActions()->current());
    }

    public function testRevertStagedChangesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedChanges(new ProductRevertStagedChangesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedChangesAction::class, $update->getActions()->current());
    }

    public function testRevertStagedVariantChangesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedVariantChanges(function($action) { static::assertInstanceOf(ProductRevertStagedVariantChangesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedVariantChangesAction::class, $update->getActions()->current());
    }

    public function testRevertStagedVariantChangesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedVariantChanges(new ProductRevertStagedVariantChangesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedVariantChangesAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomField(function($action) { static::assertInstanceOf(ProductSetAssetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomField(new ProductSetAssetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomType(function($action) { static::assertInstanceOf(ProductSetAssetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomType(new ProductSetAssetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetDescription(function($action) { static::assertInstanceOf(ProductSetAssetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetDescription(new ProductSetAssetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetKey(function($action) { static::assertInstanceOf(ProductSetAssetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetKey(new ProductSetAssetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetSources(function($action) { static::assertInstanceOf(ProductSetAssetSourcesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetSources(new ProductSetAssetSourcesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetTags(function($action) { static::assertInstanceOf(ProductSetAssetTagsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetTags(new ProductSetAssetTagsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetAttributeCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttribute(function($action) { static::assertInstanceOf(ProductSetAttributeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeAction::class, $update->getActions()->current());
    }

    public function testSetAttributeInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttribute(new ProductSetAttributeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeAction::class, $update->getActions()->current());
    }

    public function testSetAttributeInAllVariantsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttributeInAllVariants(function($action) { static::assertInstanceOf(ProductSetAttributeInAllVariantsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeInAllVariantsAction::class, $update->getActions()->current());
    }

    public function testSetAttributeInAllVariantsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttributeInAllVariants(new ProductSetAttributeInAllVariantsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeInAllVariantsAction::class, $update->getActions()->current());
    }

    public function testSetCategoryOrderHintCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setCategoryOrderHint(function($action) { static::assertInstanceOf(ProductSetCategoryOrderHintAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetCategoryOrderHintAction::class, $update->getActions()->current());
    }

    public function testSetCategoryOrderHintInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setCategoryOrderHint(new ProductSetCategoryOrderHintActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetCategoryOrderHintAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ProductSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setDescription(new ProductSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDiscountedPriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setDiscountedPrice(function($action) { static::assertInstanceOf(ProductSetDiscountedPriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDiscountedPriceAction::class, $update->getActions()->current());
    }

    public function testSetDiscountedPriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setDiscountedPrice(new ProductSetDiscountedPriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDiscountedPriceAction::class, $update->getActions()->current());
    }

    public function testSetKeyCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ProductSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setKey(new ProductSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaDescription(function($action) { static::assertInstanceOf(ProductSetMetaDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaDescription(new ProductSetMetaDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaKeywords(function($action) { static::assertInstanceOf(ProductSetMetaKeywordsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaKeywords(new ProductSetMetaKeywordsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaTitle(function($action) { static::assertInstanceOf(ProductSetMetaTitleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaTitleAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaTitle(new ProductSetMetaTitleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaTitleAction::class, $update->getActions()->current());
    }

    public function testSetPricesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setPrices(function($action) { static::assertInstanceOf(ProductSetPricesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetPricesAction::class, $update->getActions()->current());
    }

    public function testSetPricesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setPrices(new ProductSetPricesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetPricesAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomFieldCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomField(function($action) { static::assertInstanceOf(ProductSetProductPriceCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomFieldInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomField(new ProductSetProductPriceCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomTypeCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomType(function($action) { static::assertInstanceOf(ProductSetProductPriceCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomTypeInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomType(new ProductSetProductPriceCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetProductVariantKeyCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductVariantKey(function($action) { static::assertInstanceOf(ProductSetProductVariantKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductVariantKeyAction::class, $update->getActions()->current());
    }

    public function testSetProductVariantKeyInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductVariantKey(new ProductSetProductVariantKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductVariantKeyAction::class, $update->getActions()->current());
    }

    public function testSetSearchKeywordsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setSearchKeywords(function($action) { static::assertInstanceOf(ProductSetSearchKeywordsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSearchKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetSearchKeywordsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setSearchKeywords(new ProductSetSearchKeywordsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSearchKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetSkuCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setSku(function($action) { static::assertInstanceOf(ProductSetSkuAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSkuAction::class, $update->getActions()->current());
    }

    public function testSetSkuInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setSku(new ProductSetSkuActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSkuAction::class, $update->getActions()->current());
    }

    public function testSetTaxCategoryCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setTaxCategory(function($action) { static::assertInstanceOf(ProductSetTaxCategoryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetTaxCategoryAction::class, $update->getActions()->current());
    }

    public function testSetTaxCategoryInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setTaxCategory(new ProductSetTaxCategoryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetTaxCategoryAction::class, $update->getActions()->current());
    }

    public function testTransitionStateCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(ProductTransitionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->transitionState(new ProductTransitionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductTransitionStateAction::class, $update->getActions()->current());
    }

    public function testUnpublishCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->unpublish(function($action) { static::assertInstanceOf(ProductUnpublishAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductUnpublishAction::class, $update->getActions()->current());
    }

    public function testUnpublishInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->unpublish(new ProductUnpublishActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductUnpublishAction::class, $update->getActions()->current());
    }


    public function testReset() {
        $builder = new ProductUpdateBuilder();
        $builder->addAsset(new ProductAddAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddAssetAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new ProductUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new ProductModel());
        static::assertInstanceOf(Product::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new ProductUpdateBuilder();
        $builder->with(new ProductModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}
