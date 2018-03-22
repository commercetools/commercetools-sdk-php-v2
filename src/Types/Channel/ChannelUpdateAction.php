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
        'setGeoLocation' => Types\Channel\ChannelSetGeolocationAction::class,
        'removeRoles' => Types\Channel\ChannelRemoveRolesAction::class,
        'addRoles' => Types\Channel\ChannelAddRolesAction::class,
        'setRoles' => Types\Channel\ChannelSetRolesAction::class,
        'changeName' => Types\Channel\ChannelChangeNameAction::class,
        'setAddress' => Types\Channel\ChannelSetAddressAction::class,
        'setCustomField' => Types\Channel\ChannelSetCustomFieldAction::class,
        'setCustomType' => Types\Channel\ChannelSetCustomTypeAction::class,
        'changeKey' => Types\Channel\ChannelChangeKeyAction::class,
        'changeDescription' => Types\Channel\ChannelChangeDescriptionAction::class,

    ];

}
