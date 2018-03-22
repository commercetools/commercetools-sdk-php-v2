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
        'addEnumValue' => Types\Type\TypeAddEnumValueAction::class,
        'changeLabel' => Types\Type\TypeChangeLabelAction::class,
        'changeFieldDefinitionLabel' => Types\Type\TypeChangeFieldDefinitionLabelAction::class,
        'changeLocalizedEnumValueOrder' => Types\Type\TypeChangeLocalizedEnumValueOrderAction::class,
        'addLocalizedEnumValue' => Types\Type\TypeAddLocalizedEnumValueAction::class,
        'changeFieldDefinitionOrder' => Types\Type\TypeChangeFieldDefinitionOrderAction::class,
        'removeFieldDefinition' => Types\Type\TypeRemoveFieldDefinitionAction::class,
        'changeKey' => Types\Type\TypeChangeKeyAction::class,
        'changeEnumValueOrder' => Types\Type\TypeChangeEnumValueOrderAction::class,
        'addFieldDefinition' => Types\Type\TypeAddFieldDefinitionAction::class,
        'setDescription' => Types\Type\TypeSetDescriptionAction::class,
        'changeName' => Types\Type\TypeChangeNameAction::class,

    ];

}
