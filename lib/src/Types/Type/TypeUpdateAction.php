<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface TypeUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeName' => Types\Type\TypeChangeNameAction::class,
        'removeFieldDefinition' => Types\Type\TypeRemoveFieldDefinitionAction::class,
        'changeFieldDefinitionOrder' => Types\Type\TypeChangeFieldDefinitionOrderAction::class,
        'addLocalizedEnumValue' => Types\Type\TypeAddLocalizedEnumValueAction::class,
        'setDescription' => Types\Type\TypeSetDescriptionAction::class,
        'changeLocalizedEnumValueOrder' => Types\Type\TypeChangeLocalizedEnumValueOrderAction::class,
        'changeKey' => Types\Type\TypeChangeKeyAction::class,
        'addEnumValue' => Types\Type\TypeAddEnumValueAction::class,
        'changeEnumValueOrder' => Types\Type\TypeChangeEnumValueOrderAction::class,
        'changeFieldDefinitionLabel' => Types\Type\TypeChangeFieldDefinitionLabelAction::class,
        'addFieldDefinition' => Types\Type\TypeAddFieldDefinitionAction::class,
        'changeLabel' => Types\Type\TypeChangeLabelAction::class,

    ];

}
