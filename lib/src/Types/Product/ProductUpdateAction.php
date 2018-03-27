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
        'addAsset' => Types\Product\ProductAddAssetAction::class,
        'addExternalImage' => Types\Product\ProductAddExternalImageAction::class,
        'addPrice' => Types\Product\ProductAddPriceAction::class,
        'addToCategory' => Types\Product\ProductAddToCategoryAction::class,
        'addVariant' => Types\Product\ProductAddVariantAction::class,
        'changeAssetName' => Types\Product\ProductChangeAssetNameAction::class,
        'changeAssetOrder' => Types\Product\ProductChangeAssetOrderAction::class,
        'changeMasterVariant' => Types\Product\ProductChangeMasterVariantAction::class,
        'changeName' => Types\Product\ProductChangeNameAction::class,
        'changePrice' => Types\Product\ProductChangePriceAction::class,
        'changeSlug' => Types\Product\ProductChangeSlugAction::class,
        'legacySetSku' => Types\Product\ProductLegacySetSkuAction::class,
        'moveImageToPosition' => Types\Product\ProductMoveImageToPositionAction::class,
        'publish' => Types\Product\ProductPublishAction::class,
        'removeAsset' => Types\Product\ProductRemoveAssetAction::class,
        'removeFromCategory' => Types\Product\ProductRemoveFromCategoryAction::class,
        'removeImage' => Types\Product\ProductRemoveImageAction::class,
        'removePrice' => Types\Product\ProductRemovePriceAction::class,
        'removeVariant' => Types\Product\ProductRemoveVariantAction::class,
        'revertStagedChanges' => Types\Product\ProductRevertStagedChangesAction::class,
        'revertStagedVariantChanges' => Types\Product\ProductRevertStagedVariantChangesAction::class,
        'setAssetCustomField' => Types\Product\ProductSetAssetCustomFieldAction::class,
        'setAssetCustomType' => Types\Product\ProductSetAssetCustomTypeAction::class,
        'setAssetDescription' => Types\Product\ProductSetAssetDescriptionAction::class,
        'setAssetKey' => Types\Product\ProductSetAssetKeyAction::class,
        'setAssetSources' => Types\Product\ProductSetAssetSourcesAction::class,
        'setAssetTags' => Types\Product\ProductSetAssetTagsAction::class,
        'setAttribute' => Types\Product\ProductSetAttributeAction::class,
        'setAttributeInAllVariants' => Types\Product\ProductSetAttributeInAllVariantsAction::class,
        'setCategoryOrderHint' => Types\Product\ProductSetCategoryOrderHintAction::class,
        'setDescription' => Types\Product\ProductSetDescriptionAction::class,
        'setDiscountedPrice' => Types\Product\ProductSetDiscountedPriceAction::class,
        'setKey' => Types\Product\ProductSetKeyAction::class,
        'setMetaDescription' => Types\Product\ProductSetMetaDescriptionAction::class,
        'setMetaKeywords' => Types\Product\ProductSetMetaKeywordsAction::class,
        'setMetaTitle' => Types\Product\ProductSetMetaTitleAction::class,
        'setPrices' => Types\Product\ProductSetPricesAction::class,
        'setProductPriceCustomField' => Types\Product\ProductSetProductPriceCustomFieldAction::class,
        'setProductPriceCustomType' => Types\Product\ProductSetProductPriceCustomTypeAction::class,
        'setProductVariantKey' => Types\Product\ProductSetProductVariantKeyAction::class,
        'setSearchKeywords' => Types\Product\ProductSetSearchKeywordsAction::class,
        'setSku' => Types\Product\ProductSetSkuAction::class,
        'setTaxCategory' => Types\Product\ProductSetTaxCategoryAction::class,
        'transitionState' => Types\Product\ProductTransitionStateAction::class,
        'unpublish' => Types\Product\ProductUnpublishAction::class,

    ];

}
