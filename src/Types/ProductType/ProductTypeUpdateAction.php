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
        'addLocalizedEnumValue' => Types\ProductType\ProductTypeAddLocalizedEnumValueAction::class,
        'changeLabel' => Types\ProductType\ProductTypeChangeLabelAction::class,
        'changeDescription' => Types\ProductType\ProductTypeChangeDescriptionAction::class,
        'removeAttributeDefinition' => Types\ProductType\ProductTypeRemoveAttributeDefinitionAction::class,
        'changeLocalizedEnumValueOrder' => Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderAction::class,
        'changeInputHint' => Types\ProductType\ProductTypeChangeInputHintAction::class,
        'changeName' => Types\ProductType\ProductTypeChangeNameAction::class,
        'changePlainEnumValueOrder' => Types\ProductType\ProductTypeChangePlainEnumValueOrderAction::class,
        'addAttributeDefinition' => Types\ProductType\ProductTypeAddAttributeDefinitionAction::class,
        'changeLocalizedEnumValueLabel' => Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelAction::class,
        'setKey' => Types\ProductType\ProductTypeSetKeyAction::class,
        'setInputTip' => Types\ProductType\ProductTypeSetInputTipAction::class,
        'changeAttributeOrder' => Types\ProductType\ProductTypeChangeAttributeOrderAction::class,
        'addPlainEnumValue' => Types\ProductType\ProductTypeAddPlainEnumValueAction::class,
        'changeAttributeConstraint' => Types\ProductType\ProductTypeChangeAttributeConstraintAction::class,
        'changePlainEnumValueLabel' => Types\ProductType\ProductTypeChangePlainEnumValueLabelAction::class,
        'changeIsSearchable' => Types\ProductType\ProductTypeChangeIsSearchableAction::class,

    ];

}
