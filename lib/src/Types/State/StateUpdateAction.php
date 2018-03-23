<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\State;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface StateUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'changeInitial' => Types\State\StateChangeInitialAction::class,
        'changeType' => Types\State\StateChangeTypeAction::class,
        'setRoles' => Types\State\StateSetRolesAction::class,
        'setTransitions' => Types\State\StateSetTransitionsAction::class,
        'removeRoles' => Types\State\StateRemoveRolesAction::class,
        'setDescription' => Types\State\StateSetDescriptionAction::class,
        'changeKey' => Types\State\StateChangeKeyAction::class,
        'addRoles' => Types\State\StateAddRolesAction::class,
        'setName' => Types\State\StateSetNameAction::class,

    ];

}
