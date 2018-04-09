<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ProductType;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ProductTypeUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addAttributeDefinition' => Types\ProductType\ProductTypeAddAttributeDefinitionAction::class,
        'addLocalizedEnumValue' => Types\ProductType\ProductTypeAddLocalizedEnumValueAction::class,
        'addPlainEnumValue' => Types\ProductType\ProductTypeAddPlainEnumValueAction::class,
        'changeAttributeConstraint' => Types\ProductType\ProductTypeChangeAttributeConstraintAction::class,
        'changeAttributeOrder' => Types\ProductType\ProductTypeChangeAttributeOrderAction::class,
        'changeDescription' => Types\ProductType\ProductTypeChangeDescriptionAction::class,
        'changeInputHint' => Types\ProductType\ProductTypeChangeInputHintAction::class,
        'changeIsSearchable' => Types\ProductType\ProductTypeChangeIsSearchableAction::class,
        'changeLabel' => Types\ProductType\ProductTypeChangeLabelAction::class,
        'changeLocalizedEnumValueLabel' => Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelAction::class,
        'changeLocalizedEnumValueOrder' => Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderAction::class,
        'changeName' => Types\ProductType\ProductTypeChangeNameAction::class,
        'changePlainEnumValueLabel' => Types\ProductType\ProductTypeChangePlainEnumValueLabelAction::class,
        'changePlainEnumValueOrder' => Types\ProductType\ProductTypeChangePlainEnumValueOrderAction::class,
        'removeAttributeDefinition' => Types\ProductType\ProductTypeRemoveAttributeDefinitionAction::class,
        'removeEnumValues' => Types\ProductType\ProductTypeRemoveEnumValuesAction::class,
        'setInputTip' => Types\ProductType\ProductTypeSetInputTipAction::class,
        'setKey' => Types\ProductType\ProductTypeSetKeyAction::class,

    ];

}
