<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

interface ZoneRemoveLocationAction extends ZoneUpdateAction
{
    const FIELD_LOCATION = 'location';

    /**
     * @return null|Location
     */
    public function getLocation();

    public function setLocation(?Location $location): void;
}
