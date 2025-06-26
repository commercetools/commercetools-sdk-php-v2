<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductTailoringUpdateActionModel extends JsonObjectModel implements ProductTailoringUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<ProductTailoringUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addAsset' => ProductTailoringAddAssetActionModel::class,
       'addExternalImage' => ProductTailoringAddExternalImageActionModel::class,
       'addVariant' => ProductTailoringAddVariantActionModel::class,
       'changeAssetName' => ProductTailoringChangeAssetNameActionModel::class,
       'changeAssetOrder' => ProductTailoringChangeAssetOrderActionModel::class,
       'moveImageToPosition' => ProductTailoringMoveImageToPositionActionModel::class,
       'publish' => ProductTailoringPublishActionModel::class,
       'removeAsset' => ProductTailoringRemoveAssetActionModel::class,
       'removeImage' => ProductTailoringRemoveImageActionModel::class,
       'removeVariant' => ProductTailoringRemoveVariantActionModel::class,
       'setAssetCustomField' => ProductTailoringSetAssetCustomFieldActionModel::class,
       'setAssetCustomType' => ProductTailoringSetAssetCustomTypeActionModel::class,
       'setAssetDescription' => ProductTailoringSetAssetDescriptionActionModel::class,
       'setAssetKey' => ProductTailoringSetAssetKeyActionModel::class,
       'setAssetSources' => ProductTailoringSetAssetSourcesActionModel::class,
       'setAssetTags' => ProductTailoringSetAssetTagsActionModel::class,
       'setAttribute' => ProductTailoringSetAttributeActionModel::class,
       'setAttributeInAllVariants' => ProductTailoringSetAttributeInAllVariantsActionModel::class,
       'setDescription' => ProductTailoringSetDescriptionActionModel::class,
       'setImageLabel' => ProductTailoringSetImageLabelActionModel::class,
       'setImages' => ProductTailoringSetExternalImagesActionModel::class,
       'setMetaAttributes' => ProductTailoringSetMetaAttributesActionModel::class,
       'setMetaDescription' => ProductTailoringSetMetaDescriptionActionModel::class,
       'setMetaKeywords' => ProductTailoringSetMetaKeywordsActionModel::class,
       'setMetaTitle' => ProductTailoringSetMetaTitleActionModel::class,
       'setName' => ProductTailoringSetNameActionModel::class,
       'setProductAttribute' => ProductTailoringSetProductAttributeActionModel::class,
       'setSlug' => ProductTailoringSetSlugActionModel::class,
       'unpublish' => ProductTailoringUnpublishActionModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $action = null
    ) {
        $this->action = $action;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }





    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<ProductTailoringUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = ProductTailoringUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<ProductTailoringUpdateAction> */
        $type = ProductTailoringUpdateActionModel::class;
        return $type;
    }
}
