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
        'changeName' => CategoryChangeName::class,
        'changeSlug' => CategoryChangeSlug::class,
        'setDescription' => CategorySetDescription::class,
        'changeParent' => CategoryChangeParent::class,
        'changeOrderHint' => CategoryChangeOrderHint::class,
        'setExternalId' => CategorySetExternalId::class,
        'setMetaTitle' => CategorySetMetaTitle::class,
        'setMetaKeywords' => CategorySetMetaKeywords::class,
        'setMetaDescription' => CategorySetMetaDescription::class,
        'setCustomType' => CategorySetCustomType::class,
        'setCustomField' => CategorySetCustomField::class,
        'addAsset' => CategoryAddAsset::class,
        'removeAsset' => CategoryRemoveAsset::class,
        'changeAssetOrder' => CategoryChangeAssetOrder::class,
        'changeAssetName' => CategoryChangeAssetName::class,
        'setAssetDescription' => CategorySetAssetDescription::class,
        'setAssetTags' => CategorySetAssetTags::class,
        'setAssetSources' => CategorySetAssetSources::class,
        'setAssetCustomType' => CategorySetAssetCustomType::class,
        'setAssetCustomField' => CategorySetAssetCustomField::class,
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
