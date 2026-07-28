<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class VariantUpdateActionModel extends JsonObjectModel implements VariantUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<VariantUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addAsset' => VariantAddAssetActionModel::class,
       'addExternalImage' => VariantAddExternalImageActionModel::class,
       'changeAssetName' => VariantChangeAssetNameActionModel::class,
       'changeAssetOrder' => VariantChangeAssetOrderActionModel::class,
       'moveImageToPosition' => VariantMoveImageToPositionActionModel::class,
       'publish' => VariantPublishActionModel::class,
       'removeAsset' => VariantRemoveAssetActionModel::class,
       'removeImage' => VariantRemoveImageActionModel::class,
       'removeStagedChanges' => VariantRemoveStagedChangesActionModel::class,
       'setAssetCustomField' => VariantSetAssetCustomFieldActionModel::class,
       'setAssetCustomType' => VariantSetAssetCustomTypeActionModel::class,
       'setAssetDescription' => VariantSetAssetDescriptionActionModel::class,
       'setAssetKey' => VariantSetAssetKeyActionModel::class,
       'setAssetSources' => VariantSetAssetSourcesActionModel::class,
       'setAssetTags' => VariantSetAssetTagsActionModel::class,
       'setAssets' => VariantSetAssetsActionModel::class,
       'setAttribute' => VariantSetAttributeActionModel::class,
       'setAttributes' => VariantSetAttributesActionModel::class,
       'setImageLabel' => VariantSetImageLabelActionModel::class,
       'setImages' => VariantSetImagesActionModel::class,
       'setKey' => VariantSetKeyActionModel::class,
       'setSku' => VariantSetSkuActionModel::class,
       'unpublish' => VariantUnpublishActionModel::class,
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
     * @psalm-return class-string<VariantUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = VariantUpdateAction::DISCRIMINATOR_FIELD;
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

        /** @psalm-var class-string<VariantUpdateAction> */
        $type = VariantUpdateActionModel::class;
        return $type;
    }
}
