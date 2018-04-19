<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Channel;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ChannelUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addRoles' => Types\Channel\ChannelAddRolesAction::class,
        'changeDescription' => Types\Channel\ChannelChangeDescriptionAction::class,
        'changeKey' => Types\Channel\ChannelChangeKeyAction::class,
        'changeName' => Types\Channel\ChannelChangeNameAction::class,
        'removeRoles' => Types\Channel\ChannelRemoveRolesAction::class,
        'setAddress' => Types\Channel\ChannelSetAddressAction::class,
        'setCustomField' => Types\Channel\ChannelSetCustomFieldAction::class,
        'setCustomType' => Types\Channel\ChannelSetCustomTypeAction::class,
        'setGeoLocation' => Types\Channel\ChannelSetGeolocationAction::class,
        'setRoles' => Types\Channel\ChannelSetRolesAction::class,

    ];

}
