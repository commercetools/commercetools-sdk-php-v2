<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\ProductUpdateBuilder;
use Commercetools\Exception\InvalidArgumentException;
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

    public function testAddAssetInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addAsset(function($action) { static::assertInstanceOf(ProductAddAssetAction::class, $action); return []; });
    }

    public function testAddAssetInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addAsset(new ProductAddAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddAssetAction::class, $update->getActions()->current());
    }

    public function testAddAssetInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addAsset([]);
    }

    public function testAddExternalImageCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addExternalImage(function($action) { static::assertInstanceOf(ProductAddExternalImageAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddExternalImageAction::class, $update->getActions()->current());
    }

    public function testAddExternalImageInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addExternalImage(function($action) { static::assertInstanceOf(ProductAddExternalImageAction::class, $action); return []; });
    }

    public function testAddExternalImageInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addExternalImage(new ProductAddExternalImageActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddExternalImageAction::class, $update->getActions()->current());
    }

    public function testAddExternalImageInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addExternalImage([]);
    }

    public function testAddPriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addPrice(function($action) { static::assertInstanceOf(ProductAddPriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddPriceAction::class, $update->getActions()->current());
    }

    public function testAddPriceInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addPrice(function($action) { static::assertInstanceOf(ProductAddPriceAction::class, $action); return []; });
    }

    public function testAddPriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addPrice(new ProductAddPriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddPriceAction::class, $update->getActions()->current());
    }

    public function testAddPriceInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addPrice([]);
    }

    public function testAddToCategoryCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addToCategory(function($action) { static::assertInstanceOf(ProductAddToCategoryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddToCategoryAction::class, $update->getActions()->current());
    }

    public function testAddToCategoryInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addToCategory(function($action) { static::assertInstanceOf(ProductAddToCategoryAction::class, $action); return []; });
    }

    public function testAddToCategoryInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addToCategory(new ProductAddToCategoryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddToCategoryAction::class, $update->getActions()->current());
    }

    public function testAddToCategoryInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addToCategory([]);
    }

    public function testAddVariantCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->addVariant(function($action) { static::assertInstanceOf(ProductAddVariantAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddVariantAction::class, $update->getActions()->current());
    }

    public function testAddVariantInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addVariant(function($action) { static::assertInstanceOf(ProductAddVariantAction::class, $action); return []; });
    }

    public function testAddVariantInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->addVariant(new ProductAddVariantActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductAddVariantAction::class, $update->getActions()->current());
    }

    public function testAddVariantInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->addVariant([]);
    }

    public function testChangeAssetNameCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetName(function($action) { static::assertInstanceOf(ProductChangeAssetNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetName(function($action) { static::assertInstanceOf(ProductChangeAssetNameAction::class, $action); return []; });
    }

    public function testChangeAssetNameInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetName(new ProductChangeAssetNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetName([]);
    }

    public function testChangeAssetOrderCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetOrder(function($action) { static::assertInstanceOf(ProductChangeAssetOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetOrder(function($action) { static::assertInstanceOf(ProductChangeAssetOrderAction::class, $action); return []; });
    }

    public function testChangeAssetOrderInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetOrder(new ProductChangeAssetOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeAssetOrder([]);
    }

    public function testChangeMasterVariantCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeMasterVariant(function($action) { static::assertInstanceOf(ProductChangeMasterVariantAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeMasterVariantAction::class, $update->getActions()->current());
    }

    public function testChangeMasterVariantInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeMasterVariant(function($action) { static::assertInstanceOf(ProductChangeMasterVariantAction::class, $action); return []; });
    }

    public function testChangeMasterVariantInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeMasterVariant(new ProductChangeMasterVariantActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeMasterVariantAction::class, $update->getActions()->current());
    }

    public function testChangeMasterVariantInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeMasterVariant([]);
    }

    public function testChangeNameCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ProductChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(ProductChangeNameAction::class, $action); return []; });
    }

    public function testChangeNameInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeName(new ProductChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeName([]);
    }

    public function testChangePriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changePrice(function($action) { static::assertInstanceOf(ProductChangePriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangePriceAction::class, $update->getActions()->current());
    }

    public function testChangePriceInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changePrice(function($action) { static::assertInstanceOf(ProductChangePriceAction::class, $action); return []; });
    }

    public function testChangePriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changePrice(new ProductChangePriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangePriceAction::class, $update->getActions()->current());
    }

    public function testChangePriceInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changePrice([]);
    }

    public function testChangeSlugCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->changeSlug(function($action) { static::assertInstanceOf(ProductChangeSlugAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeSlugAction::class, $update->getActions()->current());
    }

    public function testChangeSlugInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeSlug(function($action) { static::assertInstanceOf(ProductChangeSlugAction::class, $action); return []; });
    }

    public function testChangeSlugInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->changeSlug(new ProductChangeSlugActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductChangeSlugAction::class, $update->getActions()->current());
    }

    public function testChangeSlugInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->changeSlug([]);
    }

    public function testLegacySetSkuCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->legacySetSku(function($action) { static::assertInstanceOf(ProductLegacySetSkuAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductLegacySetSkuAction::class, $update->getActions()->current());
    }

    public function testLegacySetSkuInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->legacySetSku(function($action) { static::assertInstanceOf(ProductLegacySetSkuAction::class, $action); return []; });
    }

    public function testLegacySetSkuInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->legacySetSku(new ProductLegacySetSkuActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductLegacySetSkuAction::class, $update->getActions()->current());
    }

    public function testLegacySetSkuInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->legacySetSku([]);
    }

    public function testMoveImageToPositionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->moveImageToPosition(function($action) { static::assertInstanceOf(ProductMoveImageToPositionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductMoveImageToPositionAction::class, $update->getActions()->current());
    }

    public function testMoveImageToPositionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->moveImageToPosition(function($action) { static::assertInstanceOf(ProductMoveImageToPositionAction::class, $action); return []; });
    }

    public function testMoveImageToPositionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->moveImageToPosition(new ProductMoveImageToPositionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductMoveImageToPositionAction::class, $update->getActions()->current());
    }

    public function testMoveImageToPositionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->moveImageToPosition([]);
    }

    public function testPublishCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->publish(function($action) { static::assertInstanceOf(ProductPublishAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductPublishAction::class, $update->getActions()->current());
    }

    public function testPublishInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->publish(function($action) { static::assertInstanceOf(ProductPublishAction::class, $action); return []; });
    }

    public function testPublishInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->publish(new ProductPublishActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductPublishAction::class, $update->getActions()->current());
    }

    public function testPublishInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->publish([]);
    }

    public function testRemoveAssetCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeAsset(function($action) { static::assertInstanceOf(ProductRemoveAssetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeAsset(function($action) { static::assertInstanceOf(ProductRemoveAssetAction::class, $action); return []; });
    }

    public function testRemoveAssetInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeAsset(new ProductRemoveAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeAsset([]);
    }

    public function testRemoveFromCategoryCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeFromCategory(function($action) { static::assertInstanceOf(ProductRemoveFromCategoryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveFromCategoryAction::class, $update->getActions()->current());
    }

    public function testRemoveFromCategoryInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeFromCategory(function($action) { static::assertInstanceOf(ProductRemoveFromCategoryAction::class, $action); return []; });
    }

    public function testRemoveFromCategoryInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeFromCategory(new ProductRemoveFromCategoryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveFromCategoryAction::class, $update->getActions()->current());
    }

    public function testRemoveFromCategoryInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeFromCategory([]);
    }

    public function testRemoveImageCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeImage(function($action) { static::assertInstanceOf(ProductRemoveImageAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveImageAction::class, $update->getActions()->current());
    }

    public function testRemoveImageInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeImage(function($action) { static::assertInstanceOf(ProductRemoveImageAction::class, $action); return []; });
    }

    public function testRemoveImageInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeImage(new ProductRemoveImageActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveImageAction::class, $update->getActions()->current());
    }

    public function testRemoveImageInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeImage([]);
    }

    public function testRemovePriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removePrice(function($action) { static::assertInstanceOf(ProductRemovePriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemovePriceAction::class, $update->getActions()->current());
    }

    public function testRemovePriceInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removePrice(function($action) { static::assertInstanceOf(ProductRemovePriceAction::class, $action); return []; });
    }

    public function testRemovePriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removePrice(new ProductRemovePriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemovePriceAction::class, $update->getActions()->current());
    }

    public function testRemovePriceInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removePrice([]);
    }

    public function testRemoveVariantCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->removeVariant(function($action) { static::assertInstanceOf(ProductRemoveVariantAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveVariantAction::class, $update->getActions()->current());
    }

    public function testRemoveVariantInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeVariant(function($action) { static::assertInstanceOf(ProductRemoveVariantAction::class, $action); return []; });
    }

    public function testRemoveVariantInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->removeVariant(new ProductRemoveVariantActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRemoveVariantAction::class, $update->getActions()->current());
    }

    public function testRemoveVariantInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->removeVariant([]);
    }

    public function testRevertStagedChangesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedChanges(function($action) { static::assertInstanceOf(ProductRevertStagedChangesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedChangesAction::class, $update->getActions()->current());
    }

    public function testRevertStagedChangesInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedChanges(function($action) { static::assertInstanceOf(ProductRevertStagedChangesAction::class, $action); return []; });
    }

    public function testRevertStagedChangesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedChanges(new ProductRevertStagedChangesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedChangesAction::class, $update->getActions()->current());
    }

    public function testRevertStagedChangesInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedChanges([]);
    }

    public function testRevertStagedVariantChangesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedVariantChanges(function($action) { static::assertInstanceOf(ProductRevertStagedVariantChangesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedVariantChangesAction::class, $update->getActions()->current());
    }

    public function testRevertStagedVariantChangesInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedVariantChanges(function($action) { static::assertInstanceOf(ProductRevertStagedVariantChangesAction::class, $action); return []; });
    }

    public function testRevertStagedVariantChangesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedVariantChanges(new ProductRevertStagedVariantChangesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductRevertStagedVariantChangesAction::class, $update->getActions()->current());
    }

    public function testRevertStagedVariantChangesInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->revertStagedVariantChanges([]);
    }

    public function testSetAssetCustomFieldCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomField(function($action) { static::assertInstanceOf(ProductSetAssetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomField(function($action) { static::assertInstanceOf(ProductSetAssetCustomFieldAction::class, $action); return []; });
    }

    public function testSetAssetCustomFieldInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomField(new ProductSetAssetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomField([]);
    }

    public function testSetAssetCustomTypeCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomType(function($action) { static::assertInstanceOf(ProductSetAssetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomType(function($action) { static::assertInstanceOf(ProductSetAssetCustomTypeAction::class, $action); return []; });
    }

    public function testSetAssetCustomTypeInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomType(new ProductSetAssetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetCustomType([]);
    }

    public function testSetAssetDescriptionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetDescription(function($action) { static::assertInstanceOf(ProductSetAssetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetDescription(function($action) { static::assertInstanceOf(ProductSetAssetDescriptionAction::class, $action); return []; });
    }

    public function testSetAssetDescriptionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetDescription(new ProductSetAssetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetDescription([]);
    }

    public function testSetAssetKeyCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetKey(function($action) { static::assertInstanceOf(ProductSetAssetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetKey(function($action) { static::assertInstanceOf(ProductSetAssetKeyAction::class, $action); return []; });
    }

    public function testSetAssetKeyInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetKey(new ProductSetAssetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetKey([]);
    }

    public function testSetAssetSourcesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetSources(function($action) { static::assertInstanceOf(ProductSetAssetSourcesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetSources(function($action) { static::assertInstanceOf(ProductSetAssetSourcesAction::class, $action); return []; });
    }

    public function testSetAssetSourcesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetSources(new ProductSetAssetSourcesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetSources([]);
    }

    public function testSetAssetTagsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetTags(function($action) { static::assertInstanceOf(ProductSetAssetTagsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetTags(function($action) { static::assertInstanceOf(ProductSetAssetTagsAction::class, $action); return []; });
    }

    public function testSetAssetTagsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAssetTags(new ProductSetAssetTagsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAssetTags([]);
    }

    public function testSetAttributeCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttribute(function($action) { static::assertInstanceOf(ProductSetAttributeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeAction::class, $update->getActions()->current());
    }

    public function testSetAttributeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAttribute(function($action) { static::assertInstanceOf(ProductSetAttributeAction::class, $action); return []; });
    }

    public function testSetAttributeInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttribute(new ProductSetAttributeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeAction::class, $update->getActions()->current());
    }

    public function testSetAttributeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAttribute([]);
    }

    public function testSetAttributeInAllVariantsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttributeInAllVariants(function($action) { static::assertInstanceOf(ProductSetAttributeInAllVariantsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeInAllVariantsAction::class, $update->getActions()->current());
    }

    public function testSetAttributeInAllVariantsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAttributeInAllVariants(function($action) { static::assertInstanceOf(ProductSetAttributeInAllVariantsAction::class, $action); return []; });
    }

    public function testSetAttributeInAllVariantsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setAttributeInAllVariants(new ProductSetAttributeInAllVariantsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetAttributeInAllVariantsAction::class, $update->getActions()->current());
    }

    public function testSetAttributeInAllVariantsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setAttributeInAllVariants([]);
    }

    public function testSetCategoryOrderHintCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setCategoryOrderHint(function($action) { static::assertInstanceOf(ProductSetCategoryOrderHintAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetCategoryOrderHintAction::class, $update->getActions()->current());
    }

    public function testSetCategoryOrderHintInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setCategoryOrderHint(function($action) { static::assertInstanceOf(ProductSetCategoryOrderHintAction::class, $action); return []; });
    }

    public function testSetCategoryOrderHintInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setCategoryOrderHint(new ProductSetCategoryOrderHintActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetCategoryOrderHintAction::class, $update->getActions()->current());
    }

    public function testSetCategoryOrderHintInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setCategoryOrderHint([]);
    }

    public function testSetDescriptionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ProductSetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(ProductSetDescriptionAction::class, $action); return []; });
    }

    public function testSetDescriptionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setDescription(new ProductSetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setDescription([]);
    }

    public function testSetDiscountedPriceCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setDiscountedPrice(function($action) { static::assertInstanceOf(ProductSetDiscountedPriceAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDiscountedPriceAction::class, $update->getActions()->current());
    }

    public function testSetDiscountedPriceInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setDiscountedPrice(function($action) { static::assertInstanceOf(ProductSetDiscountedPriceAction::class, $action); return []; });
    }

    public function testSetDiscountedPriceInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setDiscountedPrice(new ProductSetDiscountedPriceActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetDiscountedPriceAction::class, $update->getActions()->current());
    }

    public function testSetDiscountedPriceInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setDiscountedPrice([]);
    }

    public function testSetKeyCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ProductSetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(ProductSetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setKey(new ProductSetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setKey([]);
    }

    public function testSetMetaDescriptionCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaDescription(function($action) { static::assertInstanceOf(ProductSetMetaDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setMetaDescription(function($action) { static::assertInstanceOf(ProductSetMetaDescriptionAction::class, $action); return []; });
    }

    public function testSetMetaDescriptionInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaDescription(new ProductSetMetaDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setMetaDescription([]);
    }

    public function testSetMetaKeywordsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaKeywords(function($action) { static::assertInstanceOf(ProductSetMetaKeywordsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setMetaKeywords(function($action) { static::assertInstanceOf(ProductSetMetaKeywordsAction::class, $action); return []; });
    }

    public function testSetMetaKeywordsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaKeywords(new ProductSetMetaKeywordsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setMetaKeywords([]);
    }

    public function testSetMetaTitleCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaTitle(function($action) { static::assertInstanceOf(ProductSetMetaTitleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaTitleAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setMetaTitle(function($action) { static::assertInstanceOf(ProductSetMetaTitleAction::class, $action); return []; });
    }

    public function testSetMetaTitleInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setMetaTitle(new ProductSetMetaTitleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetMetaTitleAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setMetaTitle([]);
    }

    public function testSetPricesCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setPrices(function($action) { static::assertInstanceOf(ProductSetPricesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetPricesAction::class, $update->getActions()->current());
    }

    public function testSetPricesInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setPrices(function($action) { static::assertInstanceOf(ProductSetPricesAction::class, $action); return []; });
    }

    public function testSetPricesInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setPrices(new ProductSetPricesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetPricesAction::class, $update->getActions()->current());
    }

    public function testSetPricesInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setPrices([]);
    }

    public function testSetProductPriceCustomFieldCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomField(function($action) { static::assertInstanceOf(ProductSetProductPriceCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomFieldInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomField(function($action) { static::assertInstanceOf(ProductSetProductPriceCustomFieldAction::class, $action); return []; });
    }

    public function testSetProductPriceCustomFieldInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomField(new ProductSetProductPriceCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomFieldInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomField([]);
    }

    public function testSetProductPriceCustomTypeCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomType(function($action) { static::assertInstanceOf(ProductSetProductPriceCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomTypeInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomType(function($action) { static::assertInstanceOf(ProductSetProductPriceCustomTypeAction::class, $action); return []; });
    }

    public function testSetProductPriceCustomTypeInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomType(new ProductSetProductPriceCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductPriceCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetProductPriceCustomTypeInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setProductPriceCustomType([]);
    }

    public function testSetProductVariantKeyCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductVariantKey(function($action) { static::assertInstanceOf(ProductSetProductVariantKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductVariantKeyAction::class, $update->getActions()->current());
    }

    public function testSetProductVariantKeyInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setProductVariantKey(function($action) { static::assertInstanceOf(ProductSetProductVariantKeyAction::class, $action); return []; });
    }

    public function testSetProductVariantKeyInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setProductVariantKey(new ProductSetProductVariantKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetProductVariantKeyAction::class, $update->getActions()->current());
    }

    public function testSetProductVariantKeyInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setProductVariantKey([]);
    }

    public function testSetSearchKeywordsCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setSearchKeywords(function($action) { static::assertInstanceOf(ProductSetSearchKeywordsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSearchKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetSearchKeywordsInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setSearchKeywords(function($action) { static::assertInstanceOf(ProductSetSearchKeywordsAction::class, $action); return []; });
    }

    public function testSetSearchKeywordsInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setSearchKeywords(new ProductSetSearchKeywordsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSearchKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetSearchKeywordsInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setSearchKeywords([]);
    }

    public function testSetSkuCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setSku(function($action) { static::assertInstanceOf(ProductSetSkuAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSkuAction::class, $update->getActions()->current());
    }

    public function testSetSkuInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setSku(function($action) { static::assertInstanceOf(ProductSetSkuAction::class, $action); return []; });
    }

    public function testSetSkuInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setSku(new ProductSetSkuActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetSkuAction::class, $update->getActions()->current());
    }

    public function testSetSkuInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setSku([]);
    }

    public function testSetTaxCategoryCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->setTaxCategory(function($action) { static::assertInstanceOf(ProductSetTaxCategoryAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetTaxCategoryAction::class, $update->getActions()->current());
    }

    public function testSetTaxCategoryInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setTaxCategory(function($action) { static::assertInstanceOf(ProductSetTaxCategoryAction::class, $action); return []; });
    }

    public function testSetTaxCategoryInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->setTaxCategory(new ProductSetTaxCategoryActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductSetTaxCategoryAction::class, $update->getActions()->current());
    }

    public function testSetTaxCategoryInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->setTaxCategory([]);
    }

    public function testTransitionStateCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(ProductTransitionStateAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->transitionState(function($action) { static::assertInstanceOf(ProductTransitionStateAction::class, $action); return []; });
    }

    public function testTransitionStateInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->transitionState(new ProductTransitionStateActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductTransitionStateAction::class, $update->getActions()->current());
    }

    public function testTransitionStateInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->transitionState([]);
    }

    public function testUnpublishCallback() {
        $builder = new ProductUpdateBuilder();
        $builder->unpublish(function($action) { static::assertInstanceOf(ProductUnpublishAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductUnpublishAction::class, $update->getActions()->current());
    }

    public function testUnpublishInvalidCallback() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->unpublish(function($action) { static::assertInstanceOf(ProductUnpublishAction::class, $action); return []; });
    }

    public function testUnpublishInstance() {
        $builder = new ProductUpdateBuilder();
        $builder->unpublish(new ProductUnpublishActionModel());
        $update = $builder->build();
        static::assertInstanceOf(ProductUpdate::class, $update);
        static::assertInstanceOf(ProductUnpublishAction::class, $update->getActions()->current());
    }

    public function testUnpublishInvalidInstance() {
        $this->expectException(InvalidArgumentException::class);
        $builder = new ProductUpdateBuilder();
        $builder->unpublish([]);
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
