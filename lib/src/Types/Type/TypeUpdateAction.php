<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Type;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface TypeUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addEnumValue' => Types\Type\TypeAddEnumValueAction::class,
        'addFieldDefinition' => Types\Type\TypeAddFieldDefinitionAction::class,
        'addLocalizedEnumValue' => Types\Type\TypeAddLocalizedEnumValueAction::class,
        'changeEnumValueOrder' => Types\Type\TypeChangeEnumValueOrderAction::class,
        'changeFieldDefinitionLabel' => Types\Type\TypeChangeFieldDefinitionLabelAction::class,
        'changeFieldDefinitionOrder' => Types\Type\TypeChangeFieldDefinitionOrderAction::class,
        'changeKey' => Types\Type\TypeChangeKeyAction::class,
        'changeLabel' => Types\Type\TypeChangeLabelAction::class,
        'changeLocalizedEnumValueOrder' => Types\Type\TypeChangeLocalizedEnumValueOrderAction::class,
        'changeName' => Types\Type\TypeChangeNameAction::class,
        'removeFieldDefinition' => Types\Type\TypeRemoveFieldDefinitionAction::class,
        'setDescription' => Types\Type\TypeSetDescriptionAction::class,

    ];

}
