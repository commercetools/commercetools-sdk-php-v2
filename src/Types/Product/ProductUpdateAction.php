<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Product;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ProductUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setProductPriceCustomType' => Types\Product\ProductSetProductPriceCustomTypeAction::class,
        'setSku' => Types\Product\ProductSetSkuAction::class,
        'setDescription' => Types\Product\ProductSetDescriptionAction::class,
        'setTaxCategory' => Types\Product\ProductSetTaxCategoryAction::class,
        'setAttributeInAllVariants' => Types\Product\ProductSetAttributeInAllVariantsAction::class,
        'changeSlug' => Types\Product\ProductChangeSlugAction::class,
        'revertStagedChanges' => Types\Product\ProductRevertStagedChangesAction::class,
        'removeFromCategory' => Types\Product\ProductRemoveFromCategoryAction::class,
        'setAttribute' => Types\Product\ProductSetAttributeAction::class,
        'changeAssetOrder' => Types\Product\ProductChangeAssetOrderAction::class,
        'setKey' => Types\Product\ProductSetKeyAction::class,
        'setMetaDescription' => Types\Product\ProductSetMetaDescriptionAction::class,
        'changeMasterVariant' => Types\Product\ProductChangeMasterVariantAction::class,
        'setAssetDescription' => Types\Product\ProductSetAssetDescriptionAction::class,
        'setAssetCustomType' => Types\Product\ProductSetAssetCustomTypeAction::class,
        'legacySetSku' => Types\Product\ProductLegacySetSkuAction::class,
        'publish' => Types\Product\ProductPublishAction::class,
        'changeName' => Types\Product\ProductChangeNameAction::class,
        'setProductPriceCustomField' => Types\Product\ProductSetProductPriceCustomFieldAction::class,
        'setAssetCustomField' => Types\Product\ProductSetAssetCustomFieldAction::class,
        'transitionState' => Types\Product\ProductTransitionStateAction::class,
        'removeVariant' => Types\Product\ProductRemoveVariantAction::class,
        'addPrice' => Types\Product\ProductAddPriceAction::class,
        'setSearchKeywords' => Types\Product\ProductSetSearchKeywordsAction::class,
        'setMetaTitle' => Types\Product\ProductSetMetaTitleAction::class,
        'setAssetTags' => Types\Product\ProductSetAssetTagsAction::class,
        'changeAssetName' => Types\Product\ProductChangeAssetNameAction::class,
        'setPrices' => Types\Product\ProductSetPricesAction::class,
        'setDiscountedPrice' => Types\Product\ProductSetDiscountedPriceAction::class,
        'setAssetKey' => Types\Product\ProductSetAssetKeyAction::class,
        'removeImage' => Types\Product\ProductRemoveImageAction::class,
        'setMetaKeywords' => Types\Product\ProductSetMetaKeywordsAction::class,
        'addAsset' => Types\Product\ProductAddAssetAction::class,
        'revertStagedVariantChanges' => Types\Product\ProductRevertStagedVariantChangesAction::class,
        'setAssetSources' => Types\Product\ProductSetAssetSourcesAction::class,
        'unpublish' => Types\Product\ProductUnpublishAction::class,
        'addVariant' => Types\Product\ProductAddVariantAction::class,
        'setProductVariantKey' => Types\Product\ProductSetProductVariantKeyAction::class,
        'addExternalImage' => Types\Product\ProductAddExternalImageAction::class,
        'removePrice' => Types\Product\ProductRemovePriceAction::class,
        'removeAsset' => Types\Product\ProductRemoveAssetAction::class,
        'setCategoryOrderHint' => Types\Product\ProductSetCategoryOrderHintAction::class,
        'moveImageToPosition' => Types\Product\ProductMoveImageToPositionAction::class,
        'addToCategory' => Types\Product\ProductAddToCategoryAction::class,
        'changePrice' => Types\Product\ProductChangePriceAction::class,

    ];

}
