<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Channel;

use Commercetools\Api\Models\Common\GeoJson;

interface ChannelSetGeoLocationAction extends ChannelUpdateAction
{
    const FIELD_GEO_LOCATION = 'geoLocation';

    /**
     * @return null|GeoJson
     */
    public function getGeoLocation();

    public function setGeoLocation(?GeoJson $geoLocation): void;
}
