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
        'addPlainEnumValue' => Types\ProductType\ProductTypeAddPlainEnumValueAction::class,
        'changeLocalizedEnumValueLabel' => Types\ProductType\ProductTypeChangeLocalizedEnumValueLabelAction::class,
        'changeInputHint' => Types\ProductType\ProductTypeChangeInputHintAction::class,
        'setInputTip' => Types\ProductType\ProductTypeSetInputTipAction::class,
        'removeAttributeDefinition' => Types\ProductType\ProductTypeRemoveAttributeDefinitionAction::class,
        'changeName' => Types\ProductType\ProductTypeChangeNameAction::class,
        'changeIsSearchable' => Types\ProductType\ProductTypeChangeIsSearchableAction::class,
        'changePlainEnumValueLabel' => Types\ProductType\ProductTypeChangePlainEnumValueLabelAction::class,
        'addAttributeDefinition' => Types\ProductType\ProductTypeAddAttributeDefinitionAction::class,
        'addLocalizedEnumValue' => Types\ProductType\ProductTypeAddLocalizedEnumValueAction::class,
        'changeLocalizedEnumValueOrder' => Types\ProductType\ProductTypeChangeLocalizedEnumValueOrderAction::class,
        'setKey' => Types\ProductType\ProductTypeSetKeyAction::class,
        'changeDescription' => Types\ProductType\ProductTypeChangeDescriptionAction::class,
        'changeAttributeConstraint' => Types\ProductType\ProductTypeChangeAttributeConstraintAction::class,
        'changeAttributeOrder' => Types\ProductType\ProductTypeChangeAttributeOrderAction::class,
        'changePlainEnumValueOrder' => Types\ProductType\ProductTypeChangePlainEnumValueOrderAction::class,
        'changeLabel' => Types\ProductType\ProductTypeChangeLabelAction::class,

    ];

}
