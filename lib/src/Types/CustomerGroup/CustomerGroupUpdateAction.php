<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\CustomerGroup;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface CustomerGroupUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeName' => Types\CustomerGroup\CustomerGroupChangeNameAction::class,
        'setKey' => Types\CustomerGroup\CustomerGroupSetKeyAction::class,

    ];

}
