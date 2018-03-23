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
        'setPrices' => Types\Product\ProductSetPricesAction::class,
        'setProductVariantKey' => Types\Product\ProductSetProductVariantKeyAction::class,
        'setAttributeInAllVariants' => Types\Product\ProductSetAttributeInAllVariantsAction::class,
        'setSearchKeywords' => Types\Product\ProductSetSearchKeywordsAction::class,
        'setAssetTags' => Types\Product\ProductSetAssetTagsAction::class,
        'changeName' => Types\Product\ProductChangeNameAction::class,
        'removePrice' => Types\Product\ProductRemovePriceAction::class,
        'setAssetSources' => Types\Product\ProductSetAssetSourcesAction::class,
        'setDescription' => Types\Product\ProductSetDescriptionAction::class,
        'transitionState' => Types\Product\ProductTransitionStateAction::class,
        'setDiscountedPrice' => Types\Product\ProductSetDiscountedPriceAction::class,
        'changeAssetName' => Types\Product\ProductChangeAssetNameAction::class,
        'setAssetCustomField' => Types\Product\ProductSetAssetCustomFieldAction::class,
        'revertStagedVariantChanges' => Types\Product\ProductRevertStagedVariantChangesAction::class,
        'moveImageToPosition' => Types\Product\ProductMoveImageToPositionAction::class,
        'changeAssetOrder' => Types\Product\ProductChangeAssetOrderAction::class,
        'changePrice' => Types\Product\ProductChangePriceAction::class,
        'setMetaTitle' => Types\Product\ProductSetMetaTitleAction::class,
        'revertStagedChanges' => Types\Product\ProductRevertStagedChangesAction::class,
        'setSku' => Types\Product\ProductSetSkuAction::class,
        'legacySetSku' => Types\Product\ProductLegacySetSkuAction::class,
        'addToCategory' => Types\Product\ProductAddToCategoryAction::class,
        'removeImage' => Types\Product\ProductRemoveImageAction::class,
        'addAsset' => Types\Product\ProductAddAssetAction::class,
        'publish' => Types\Product\ProductPublishAction::class,
        'setProductPriceCustomType' => Types\Product\ProductSetProductPriceCustomTypeAction::class,
        'setMetaDescription' => Types\Product\ProductSetMetaDescriptionAction::class,
        'setAssetKey' => Types\Product\ProductSetAssetKeyAction::class,
        'addVariant' => Types\Product\ProductAddVariantAction::class,
        'setMetaKeywords' => Types\Product\ProductSetMetaKeywordsAction::class,
        'setCategoryOrderHint' => Types\Product\ProductSetCategoryOrderHintAction::class,
        'setAssetCustomType' => Types\Product\ProductSetAssetCustomTypeAction::class,
        'removeAsset' => Types\Product\ProductRemoveAssetAction::class,
        'setKey' => Types\Product\ProductSetKeyAction::class,
        'removeVariant' => Types\Product\ProductRemoveVariantAction::class,
        'setAssetDescription' => Types\Product\ProductSetAssetDescriptionAction::class,
        'setTaxCategory' => Types\Product\ProductSetTaxCategoryAction::class,
        'addPrice' => Types\Product\ProductAddPriceAction::class,
        'changeSlug' => Types\Product\ProductChangeSlugAction::class,
        'setProductPriceCustomField' => Types\Product\ProductSetProductPriceCustomFieldAction::class,
        'removeFromCategory' => Types\Product\ProductRemoveFromCategoryAction::class,
        'setAttribute' => Types\Product\ProductSetAttributeAction::class,
        'unpublish' => Types\Product\ProductUnpublishAction::class,
        'addExternalImage' => Types\Product\ProductAddExternalImageAction::class,
        'changeMasterVariant' => Types\Product\ProductChangeMasterVariantAction::class,

    ];

}
