<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Zone;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ZoneUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setDescription' => Types\Zone\ZoneSetDescriptionAction::class,
        'removeLocation' => Types\Zone\ZoneRemoveLocationAction::class,
        'changeName' => Types\Zone\ZoneChangeNameAction::class,
        'addLocation' => Types\Zone\ZoneAddLocationAction::class,

    ];

}
