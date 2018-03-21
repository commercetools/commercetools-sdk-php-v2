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
        'setRoles' => Types\Channel\ChannelSetRolesAction::class,
        'changeDescription' => Types\Channel\ChannelChangeDescriptionAction::class,
        'removeRoles' => Types\Channel\ChannelRemoveRolesAction::class,
        'setCustomField' => Types\Channel\ChannelSetCustomFieldAction::class,
        'setCustomType' => Types\Channel\ChannelSetCustomTypeAction::class,
        'addRoles' => Types\Channel\ChannelAddRolesAction::class,
        'setAddress' => Types\Channel\ChannelSetAddressAction::class,
        'setGeoLocation' => Types\Channel\ChannelSetGeolocationAction::class,
        'changeName' => Types\Channel\ChannelChangeNameAction::class,
        'changeKey' => Types\Channel\ChannelChangeKeyAction::class,

    ];

}
