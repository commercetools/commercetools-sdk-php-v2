<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class CategoryUpdateAction extends UpdateAction {

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'action';
    public function __construct(array $data = []) {
        $this->action = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'changeName' => CategoryChangeNameAction::class,
        'changeSlug' => CategoryChangeSlugAction::class,
        'setDescription' => CategorySetDescriptionAction::class,
        'changeParent' => CategoryChangeParentAction::class,
        'changeOrderHint' => CategoryChangeOrderHintAction::class,
        'setExternalId' => CategorySetExternalIdAction::class,
        'setMetaTitle' => CategorySetMetaTitleAction::class,
        'setMetaKeywords' => CategorySetMetaKeywordsAction::class,
        'setMetaDescription' => CategorySetMetaDescriptionAction::class,
        'setCustomType' => CategorySetCustomTypeAction::class,
        'setCustomField' => CategorySetCustomFieldAction::class,
        'addAsset' => CategoryAddAssetAction::class,
        'removeAsset' => CategoryRemoveAssetAction::class,
        'changeAssetOrder' => CategoryChangeAssetOrderAction::class,
        'changeAssetName' => CategoryChangeAssetNameAction::class,
        'setAssetDescription' => CategorySetAssetDescriptionAction::class,
        'setAssetTags' => CategorySetAssetTagsAction::class,
        'setAssetSources' => CategorySetAssetSourcesAction::class,
        'setAssetCustomType' => CategorySetAssetCustomTypeAction::class,
        'setAssetCustomField' => CategorySetAssetCustomFieldAction::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return CategoryUpdateAction::class;
    }
}
