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
        'setProductVariantKey' => Types\Product\ProductSetProductVariantKeyAction::class,
        'setTaxCategory' => Types\Product\ProductSetTaxCategoryAction::class,
        'setDiscountedPrice' => Types\Product\ProductSetDiscountedPriceAction::class,
        'transitionState' => Types\Product\ProductTransitionStateAction::class,
        'setCategoryOrderHint' => Types\Product\ProductSetCategoryOrderHintAction::class,
        'revertStagedVariantChanges' => Types\Product\ProductRevertStagedVariantChangesAction::class,
        'removeImage' => Types\Product\ProductRemoveImageAction::class,
        'setAttributeInAllVariants' => Types\Product\ProductSetAttributeInAllVariantsAction::class,
        'changeMasterVariant' => Types\Product\ProductChangeMasterVariantAction::class,
        'setMetaDescription' => Types\Product\ProductSetMetaDescriptionAction::class,
        'setMetaKeywords' => Types\Product\ProductSetMetaKeywordsAction::class,
        'changeName' => Types\Product\ProductChangeNameAction::class,
        'setAssetKey' => Types\Product\ProductSetAssetKeyAction::class,
        'setAssetDescription' => Types\Product\ProductSetAssetDescriptionAction::class,
        'moveImageToPosition' => Types\Product\ProductMoveImageToPositionAction::class,
        'changePrice' => Types\Product\ProductChangePriceAction::class,
        'setProductPriceCustomType' => Types\Product\ProductSetProductPriceCustomTypeAction::class,
        'setAssetCustomType' => Types\Product\ProductSetAssetCustomTypeAction::class,
        'unpublish' => Types\Product\ProductUnpublishAction::class,
        'changeAssetName' => Types\Product\ProductChangeAssetNameAction::class,
        'revertStagedChanges' => Types\Product\ProductRevertStagedChangesAction::class,
        'addToCategory' => Types\Product\ProductAddToCategoryAction::class,
        'publish' => Types\Product\ProductPublishAction::class,
        'addAsset' => Types\Product\ProductAddAssetAction::class,
        'removeAsset' => Types\Product\ProductRemoveAssetAction::class,
        'setSku' => Types\Product\ProductSetSkuAction::class,
        'setPrices' => Types\Product\ProductSetPricesAction::class,
        'setAttribute' => Types\Product\ProductSetAttributeAction::class,
        'changeAssetOrder' => Types\Product\ProductChangeAssetOrderAction::class,
        'setProductPriceCustomField' => Types\Product\ProductSetProductPriceCustomFieldAction::class,
        'setKey' => Types\Product\ProductSetKeyAction::class,
        'setAssetSources' => Types\Product\ProductSetAssetSourcesAction::class,
        'removePrice' => Types\Product\ProductRemovePriceAction::class,
        'setMetaTitle' => Types\Product\ProductSetMetaTitleAction::class,
        'addExternalImage' => Types\Product\ProductAddExternalImageAction::class,
        'setAssetCustomField' => Types\Product\ProductSetAssetCustomFieldAction::class,
        'setAssetTags' => Types\Product\ProductSetAssetTagsAction::class,
        'legacySetSku' => Types\Product\ProductLegacySetSkuAction::class,
        'setSearchKeywords' => Types\Product\ProductSetSearchKeywordsAction::class,
        'addPrice' => Types\Product\ProductAddPriceAction::class,
        'removeVariant' => Types\Product\ProductRemoveVariantAction::class,
        'removeFromCategory' => Types\Product\ProductRemoveFromCategoryAction::class,
        'setDescription' => Types\Product\ProductSetDescriptionAction::class,
        'addVariant' => Types\Product\ProductAddVariantAction::class,
        'changeSlug' => Types\Product\ProductChangeSlugAction::class,

    ];

}
