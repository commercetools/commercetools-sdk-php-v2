<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Category;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

final class CategoryUpdateActionModel extends JsonObjectModel implements CategoryUpdateAction
{
    public const DISCRIMINATOR_VALUE = '';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @psalm-var array<string, class-string<CategoryUpdateAction> >
     *
     */
    private static $discriminatorClasses = [
       'addAsset' => CategoryAddAssetActionModel::class,
       'changeAssetName' => CategoryChangeAssetNameActionModel::class,
       'changeAssetOrder' => CategoryChangeAssetOrderActionModel::class,
       'changeName' => CategoryChangeNameActionModel::class,
       'changeOrderHint' => CategoryChangeOrderHintActionModel::class,
       'changeParent' => CategoryChangeParentActionModel::class,
       'changeSlug' => CategoryChangeSlugActionModel::class,
       'removeAsset' => CategoryRemoveAssetActionModel::class,
       'setAssetCustomField' => CategorySetAssetCustomFieldActionModel::class,
       'setAssetCustomType' => CategorySetAssetCustomTypeActionModel::class,
       'setAssetDescription' => CategorySetAssetDescriptionActionModel::class,
       'setAssetKey' => CategorySetAssetKeyActionModel::class,
       'setAssetSources' => CategorySetAssetSourcesActionModel::class,
       'setAssetTags' => CategorySetAssetTagsActionModel::class,
       'setCustomField' => CategorySetCustomFieldActionModel::class,
       'setCustomType' => CategorySetCustomTypeActionModel::class,
       'setDescription' => CategorySetDescriptionActionModel::class,
       'setExternalId' => CategorySetExternalIdActionModel::class,
       'setKey' => CategorySetKeyActionModel::class,
       'setMetaDescription' => CategorySetMetaDescriptionActionModel::class,
       'setMetaKeywords' => CategorySetMetaKeywordsActionModel::class,
       'setMetaTitle' => CategorySetMetaTitleActionModel::class,
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
            $data = $this->raw(CategoryUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }




    /**
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<CategoryUpdateAction>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = CategoryUpdateAction::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
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

        /** @psalm-var class-string<CategoryUpdateAction> */
        $type = CategoryUpdateActionModel::class;
        return $type;
    }
}
