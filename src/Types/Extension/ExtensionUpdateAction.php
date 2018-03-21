<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Extension;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ExtensionUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeTriggers' => Types\Extension\ExtensionChangeTriggersAction::class,
        'changeDestination' => Types\Extension\ExtensionChangeDestinationAction::class,
        'setKey' => Types\Extension\ExtensionSetKeyAction::class,

    ];

}
