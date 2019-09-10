<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Base\JsonObject;

interface ChannelSetGeoLocationAction extends ChannelUpdateAction
{
    const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return null|JsonObject
     */
    public function getGeoLocation();

    public function setGeoLocation(?JsonObject $geoLocation): void;
}
