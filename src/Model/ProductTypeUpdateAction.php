<?php
declare(strict_types=1);

namespace Commercetools\Raml\Model;

class ProductTypeUpdateAction extends UpdateAction {

    const DISCRIMINATOR_VALUE = null;
    const DISCRIMINATOR_FIELD = 'action';
    public function __construct(array $data = []) {
        $this->action = static::DISCRIMINATOR_VALUE;
        parent::__construct($data);
    }

    private static $discriminatorClasses = [
        'setKey' => ProductTypeSetKeyAction::class,
        'changeName' => ProductTypeChangeNameAction::class,
        'changeDescription' => ProductTypeChangeDescriptionAction::class,
        'addAttributeDefinition' => ProductTypeAddAttributeDefinitionAction::class,
        'removeAttributeDefinition' => ProductTypeRemoveAttributeDefinitionAction::class,
        'changeLabel' => ProductTypeChangeLabelAction::class,
        'setInputTip' => ProductTypeSetInputTipAction::class,
        'addPlainEnumValue' => ProductTypeAddPlainEnumValueAction::class,
        'addLocalizedEnumValue' => ProductTypeAddLocalizedEnumValueAction::class,
        'changeAttributeOrder' => ProductTypeChangeAttributeOrderAction::class,
        'changePlainEnumValueOrder' => ProductTypeChangePlainEnumValueOrderAction::class,
        'changeLocalizedEnumValueOrder' => ProductTypeChangeLocalizedEnumValueOrderAction::class,
        'changePlainEnumValueLabel' => ProductTypeChangePlainEnumValueLabelAction::class,
        'changeLocalizedEnumValueLabel' => ProductTypeChangeLocalizedEnumValueLabelAction::class,
        'changeIsSearchable' => ProductTypeChangeIsSearchableAction::class,
    ];
    
    public static function resolveDiscriminatorClass($value)
    {
        if (isset($value[static::DISCRIMINATOR_FIELD])) {
            $discriminatorValue = $value[static::DISCRIMINATOR_FIELD];
            if (isset(static::$discriminatorClasses[$discriminatorValue])) {
                return static::$discriminatorClasses[$discriminatorValue];
            }
        }
        return ProductTypeUpdateAction::class;
    }
}
