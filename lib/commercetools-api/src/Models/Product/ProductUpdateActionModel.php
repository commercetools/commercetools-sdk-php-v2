<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProductUpdateActionModel extends JsonObjectModel implements ProductUpdateAction
{
    const DISCRIMINATOR_VALUE = '';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ProductUpdateAction> >
     */
    private static $discriminatorClasses = [
        'addAsset' => ProductAddAssetActionModel::class,
        'addExternalImage' => ProductAddExternalImageActionModel::class,
        'addPrice' => ProductAddPriceActionModel::class,
        'addToCategory' => ProductAddToCategoryActionModel::class,
        'addVariant' => ProductAddVariantActionModel::class,
        'changeAssetName' => ProductChangeAssetNameActionModel::class,
        'changeAssetOrder' => ProductChangeAssetOrderActionModel::class,
        'changeMasterVariant' => ProductChangeMasterVariantActionModel::class,
        'changeName' => ProductChangeNameActionModel::class,
        'changePrice' => ProductChangePriceActionModel::class,
        'changeSlug' => ProductChangeSlugActionModel::class,
        'legacySetSku' => ProductLegacySetSkuActionModel::class,
        'moveImageToPosition' => ProductMoveImageToPositionActionModel::class,
        'publish' => ProductPublishActionModel::class,
        'removeAsset' => ProductRemoveAssetActionModel::class,
        'removeFromCategory' => ProductRemoveFromCategoryActionModel::class,
        'removeImage' => ProductRemoveImageActionModel::class,
        'removePrice' => ProductRemovePriceActionModel::class,
        'removeVariant' => ProductRemoveVariantActionModel::class,
        'revertStagedChanges' => ProductRevertStagedChangesActionModel::class,
        'revertStagedVariantChanges' => ProductRevertStagedVariantChangesActionModel::class,
        'setAssetCustomField' => ProductSetAssetCustomFieldActionModel::class,
        'setAssetCustomType' => ProductSetAssetCustomTypeActionModel::class,
        'setAssetDescription' => ProductSetAssetDescriptionActionModel::class,
        'setAssetKey' => ProductSetAssetKeyActionModel::class,
        'setAssetSources' => ProductSetAssetSourcesActionModel::class,
        'setAssetTags' => ProductSetAssetTagsActionModel::class,
        'setAttribute' => ProductSetAttributeActionModel::class,
        'setAttributeInAllVariants' => ProductSetAttributeInAllVariantsActionModel::class,
        'setCategoryOrderHint' => ProductSetCategoryOrderHintActionModel::class,
        'setDescription' => ProductSetDescriptionActionModel::class,
        'setDiscountedPrice' => ProductSetDiscountedPriceActionModel::class,
        'setImageLabel' => ProductSetImageLabelActionModel::class,
        'setKey' => ProductSetKeyActionModel::class,
        'setMetaDescription' => ProductSetMetaDescriptionActionModel::class,
        'setMetaKeywords' => ProductSetMetaKeywordsActionModel::class,
        'setMetaTitle' => ProductSetMetaTitleActionModel::class,
        'setPrices' => ProductSetPricesActionModel::class,
        'setProductPriceCustomField' => ProductSetProductPriceCustomFieldActionModel::class,
        'setProductPriceCustomType' => ProductSetProductPriceCustomTypeActionModel::class,
        'setProductVariantKey' => ProductSetProductVariantKeyActionModel::class,
        'setSearchKeywords' => ProductSetSearchKeywordsActionModel::class,
        'setSku' => ProductSetSkuActionModel::class,
        'setTaxCategory' => ProductSetTaxCategoryActionModel::class,
        'transitionState' => ProductTransitionStateActionModel::class,
        'unpublish' => ProductUnpublishActionModel::class,
    ];

    public function __construct(
    ) {
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProductUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ProductUpdateAction>
     *
     * @param mixed $value
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProductUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->{$fieldName})) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->{$fieldName};
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<ProductUpdateAction> */
        $type = ProductUpdateActionModel::class;

        return $type;
    }
}
