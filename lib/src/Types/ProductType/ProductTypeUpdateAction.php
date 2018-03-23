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
        'changeInputHint' => Types\ProductType\ProductTypeChangeInputHintAction::class,
        'changeAttributeConstraint' => Types\ProductType\ProductTypeChangeAttributeConstraintAction::class,
        'changePlainEnumValueOrder' => Types\ProductType\ProductTypeChangePlainEnumValueOrderAction::class,
        'changeLabel' => Types\ProductType\ProductTypeChangeLabelAction::class,
        'changeAttributeOrder' => Types\ProductType\ProductTypeChangeAttributeOrderAction::class,
        'changeLocalizedEnumValueLabel' => Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelAction::class,
        'setInputTip' => Types\ProductType\ProductTypeSetInputTipAction::class,
        'changeName' => Types\ProductType\ProductTypeChangeNameAction::class,
        'changeIsSearchable' => Types\ProductType\ProductTypeChangeIsSearchableAction::class,
        'removeAttributeDefinition' => Types\ProductType\ProductTypeRemoveAttributeDefinitionAction::class,
        'addPlainEnumValue' => Types\ProductType\ProductTypeAddPlainEnumValueAction::class,
        'addAttributeDefinition' => Types\ProductType\ProductTypeAddAttributeDefinitionAction::class,
        'addLocalizedEnumValue' => Types\ProductType\ProductTypeAddLocalizedEnumValueAction::class,
        'changeLocalizedEnumValueOrder' => Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderAction::class,
        'changePlainEnumValueLabel' => Types\ProductType\ProductTypeChangePlainEnumValueLabelAction::class,
        'setKey' => Types\ProductType\ProductTypeSetKeyAction::class,
        'changeDescription' => Types\ProductType\ProductTypeChangeDescriptionAction::class,

    ];

}
