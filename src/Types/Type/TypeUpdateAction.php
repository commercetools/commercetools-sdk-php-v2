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
        'addFieldDefinition' => Types\Type\TypeAddFieldDefinitionAction::class,
        'removeFieldDefinition' => Types\Type\TypeRemoveFieldDefinitionAction::class,
        'changeLocalizedEnumValueOrder' => Types\Type\TypeChangeLocalizedEnumValueOrderAction::class,
        'changeFieldDefinitionOrder' => Types\Type\TypeChangeFieldDefinitionOrderAction::class,
        'addEnumValue' => Types\Type\TypeAddEnumValueAction::class,
        'changeName' => Types\Type\TypeChangeNameAction::class,
        'changeEnumValueOrder' => Types\Type\TypeChangeEnumValueOrderAction::class,
        'changeKey' => Types\Type\TypeChangeKeyAction::class,
        'setDescription' => Types\Type\TypeSetDescriptionAction::class,
        'changeLabel' => Types\Type\TypeChangeLabelAction::class,
        'changeFieldDefinitionLabel' => Types\Type\TypeChangeFieldDefinitionLabelAction::class,
        'addLocalizedEnumValue' => Types\Type\TypeAddLocalizedEnumValueAction::class,

    ];

}
