<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ChannelUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setCustomField' => Types\Channel\ChannelSetCustomFieldAction::class,
        'setRoles' => Types\Channel\ChannelSetRolesAction::class,
        'setGeoLocation' => Types\Channel\ChannelSetGeolocationAction::class,
        'setCustomType' => Types\Channel\ChannelSetCustomTypeAction::class,
        'changeDescription' => Types\Channel\ChannelChangeDescriptionAction::class,
        'removeRoles' => Types\Channel\ChannelRemoveRolesAction::class,
        'changeKey' => Types\Channel\ChannelChangeKeyAction::class,
        'changeName' => Types\Channel\ChannelChangeNameAction::class,
        'setAddress' => Types\Channel\ChannelSetAddressAction::class,
        'addRoles' => Types\Channel\ChannelAddRolesAction::class,

    ];

}
