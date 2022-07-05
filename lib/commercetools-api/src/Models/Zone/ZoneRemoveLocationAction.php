<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ZoneRemoveLocationAction extends ZoneUpdateAction
{
    public const FIELD_LOCATION = 'location';

    /**
     * <p>Location to be removed from the Zone.</p>
     *

     * @return null|Location
     */
    public function getLocation();

    /**
     * @param ?Location $location
     */
    public function setLocation(?Location $location): void;
}
